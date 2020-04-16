<?php
namespace Concrete\Package\AbcFormext;

use Concrete\Core\Package\Package;
use Events;
use Database;
use Page;
use Core;
use Config;
use SinglePage;
use Environment;
use Localization;

defined('C5_EXECUTE') or die("Access Denied.");

/* Package created by Concrete5 user Abcitweb and Jozzeh */

class Controller extends Package
{
  protected $pkgHandle = 'abc_formext';
  protected $appVersionRequired = '5.7.5.6';
  protected $pkgVersion = '1.0.4';

  public function getPackageDescription(){
      return t("Makes it possible to have an autoreply on selected forms.");
  }

  public function getPackageName(){
      return t("ABC Auto Reply forms");
  }

  public function install(){
    $pkg = parent::install();

    //SETTING automatic mail config values
    $mailheader = $pkg->getConfig()->get('abc_back_end.mail_header');
    if(empty($mailheader)){
      $pkg->getConfig()->save('abc_back_end.mail_header', '<body style="margin:0"><table width="98%" height="auto" border="0" cellpadding="0" cellspacing="0"><tr><td bgcolor="#f3f3f3" valign="top" style="padding-top: 10px; padding-bottom: 10px;"><table width="600" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td style="padding:5px;font-family: Arial, Helvetica, Verdana;" bgcolor="#ffffff" width="600">');
    }
    $mailfooter = $pkg->getConfig()->get('abc_back_end.mail_footer');
    if(empty($mailfooter)){
      $pkg->getConfig()->save('abc_back_end.mail_footer', '</td></tr></table></td></tr></table></body>');
    }
    $mailheadcontent = $pkg->getConfig()->get('abc_back_end.mail_headcontent');
    if(empty($mailheadcontent)){
      $pkg->getConfig()->save('abc_back_end.mail_headcontent', '<p>Start the reply mail here</p>');
    }
    $mailfootcontent = $pkg->getConfig()->get('abc_back_end.mail_footcontent');
    if(empty($mailfootcontent)){
      $pkg->getConfig()->save('abc_back_end.mail_footcontent', '<p></p>');
    }

    //installing dashboard single pages
    $sp = Page::getByPath('/dashboard/conversations/form_settings');
    if ($sp->isError() || (!is_object($sp))) {
        $sp = SinglePage::add('/dashboard/conversations/form_settings', $pkg);
    }
    if(is_object($sp)){
      $uData = array();
      $uData['cName'] = "Form Reply Settings";
      $sp->update($uData);
    }
    $sp = Page::getByPath('/dashboard/conversations/form_auto_reply');
    if ($sp->isError() || (!is_object($sp))) {
        $sp = SinglePage::add('/dashboard/conversations/form_auto_reply', $pkg);
    }
    if(is_object($sp)){
      $uData = array();
      $uData['cName'] = "Form Reply Mails";
      $sp->update($uData);
    }
  }

  public function upgrade(){
    parent::upgrade();
    $pkg = Package::getByHandle('abc_formext');

    //setting automatic mail config values
    $mailheader = $pkg->getConfig()->get('abc_back_end.mail_header');
    if(empty($mailheader)){
      $pkg->getConfig()->save('abc_back_end.mail_header', '<body style="margin:0"><table width="98%" height="auto" border="0" cellpadding="0" cellspacing="0"><tr><td bgcolor="#f3f3f3" valign="top" style="padding-top: 10px; padding-bottom: 10px;"><table width="600" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td style="padding:5px;font-family: Arial, Helvetica, Verdana;" bgcolor="#ffffff" width="600">');
    }
    $mailfooter = $pkg->getConfig()->get('abc_back_end.mail_footer');
    if(empty($mailfooter)){
      $pkg->getConfig()->save('abc_back_end.mail_footer', '</td></tr></table></td></tr></table></body>');
    }
    $mailheadcontent = $pkg->getConfig()->get('abc_back_end.mail_headcontent');
    if(empty($mailheadcontent)){
      $pkg->getConfig()->save('abc_back_end.mail_headcontent', '<p>Start the reply mail here</p>');
    }
    $mailfootcontent = $pkg->getConfig()->get('abc_back_end.mail_footcontent');
    if(empty($mailfootcontent)){
      $pkg->getConfig()->save('abc_back_end.mail_footcontent', '<p></p>');
    }

    //installing dashboard single pages
    $sp = Page::getByPath('/dashboard/conversations/form_settings');
    if ($sp->isError() || (!is_object($sp))) {
        $sp = SinglePage::add('/dashboard/conversations/form_settings', $pkg);
    }
    if(is_object($sp)){
      $uData = array();
      $uData['cName'] = "Form Reply Settings";
      $sp->update($uData);
    }
    $sp = Page::getByPath('/dashboard/conversations/form_auto_reply');
    if ($sp->isError() || (!is_object($sp))) {
        $sp = SinglePage::add('/dashboard/conversations/form_auto_reply', $pkg);
    }
    if(is_object($sp)){
      $uData = array();
      $uData['cName'] = "Form Reply Mails";
      $sp->update($uData);
    }
  }

  public function on_start(){
    $siteVersion = Config::get('concrete.version_installed');
    $siteVersionsArray = array("5.7.5.6", "5.7.5.7", "5.7.5.8", "5.7.5.9", "5.7.5.10", "5.7.5.11", "5.7.5.12", "5.7.5.13");
    if(in_array($siteVersion, $siteVersionsArray)){
      // overriding/extending core package form controller
      $objEnv = Environment::get();
      $objEnv->overrideCoreByPackage('blocks/form/controller.php', $this);
    }

    //custom event listener
    Events::addListener('on_form_submission', function($event) {
      $data = $event->getArguments('formData');
      //$data['arguments'][0] hold all data send with the event
      $evtData = $data['formData'];

      //send auto reply check
      $pkg = Package::getByHandle('abc_formext');
      $db = Database::connection();
      $qData = array();
      $qData[] = $evtData['questionSetID'];
      $qRow = $db->fetchAssoc('select * from abcFormAutoReplies where qID=?', $qData);
      //if qRow is not empty an auto reply should be send
      // this also checks if the reply and from are not the same. if the reply-to-this-mail checkbox is not checked then the reply and from will be the same
      if(!empty($qRow['farID']) && $evtData['formFormEmailAddress'] != $evtData['replyToEmailAddress'] && !filter_var($evtData['replyToEmailAddress'], FILTER_VALIDATE_EMAIL) === false){
        $htmlMail = $qRow['qHtml'];
        $htmlSubject = $qRow['qSubject'];
        //changing % % variables
        if(!empty($evtData['questionAnswerPairs'])){
          foreach($evtData['questionAnswerPairs'] as $qAndA){
            $htmlMail = str_replace('%'.$qAndA['question'].'%', $qAndA['answerDisplay'], $htmlMail);
          }
        }

        //send html mail
        $siteName = Config::get('concrete.site');

        $mailService = Core::make('mail');
        $bodyHTML .= '<!DOCTYPE html>';
        $bodyHTML .= '<html lang="'.Localization::activeLanguage().'">';
        $bodyHTML .= '  <head>';
        $bodyHTML .= '      <meta charset="utf-8">';
        $bodyHTML .= '  </head>';
        $bodyHTML .= $htmlMail;
        $bodyHTML .= '</html>';

        $mailService->setBodyHTML($bodyHTML);
        $mailService->setSubject($qRow['qSubject']);
        $mailService->from($qRow['fromMail'], $qRow['fromName']);
        $mailService->replyto($qRow['fromMail'], $qRow['fromName']);
        $mailService->to($evtData['replyToEmailAddress']);
        $mailService->sendMail();
      }
    });

  }

}

?>
