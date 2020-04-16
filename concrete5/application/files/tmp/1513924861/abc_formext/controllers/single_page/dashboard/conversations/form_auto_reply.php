<?php     namespace Concrete\Package\AbcFormext\Controller\SinglePage\Dashboard\Conversations;
/*
Created By mijnwebsitebouwen.be
http://www.mijnwebsitebouwen.be (dutch)
See documentation at concrete5.org add-on page
*/

use Package;
use Config;
use Database;
use Request;
use \Concrete\Core\Page\Controller\DashboardPageController;
class FormAutoReply extends DashboardPageController{
  public function view(){
    //get the forms
    $this->getForms();
  }

  public function getFormAutoReply(){
    $this->post = Request::post();
    //getting the form auto reply
    if(!empty($this->post) && !empty($this->post['formQID'])){
      $db = Database::connection();
      $fData = array();
      $fData[] = $this->post['formQID'];
      $formHtml = $db->fetchAssoc('select * from abcFormAutoReplies where qID=?', $fData);
      $this->set('formHtml', $formHtml);
      $blockID =  $db->fetchAssoc('select b.bID as bID from btForm b where b.questionSetID=? order by b.bID desc', $fData);

      $bData = array();
      $bData[] = $blockID['bID'];
      $formFields = $db->fetchAll('select * from btFormQuestions where bID=?', $bData);
      $this->set('formFields', $formFields);
      $pkg = Package::getByHandle('abc_formext');
      $mailheader = $pkg->getConfig()->get('abc_back_end.mail_header');
      $mailfooter = $pkg->getConfig()->get('abc_back_end.mail_footer');

      $automailfrom = $pkg->getConfig()->get('abc_back_end.mail_from');
      $automailnamefrom = $pkg->getConfig()->get('abc_back_end.mail_name_from');
      $automailsubject = $pkg->getConfig()->get('abc_back_end.auto_mail_subject');

      $automailheadcontent = $pkg->getConfig()->get('abc_back_end.mail_headcontent');
      $automailfootcontent = $pkg->getConfig()->get('abc_back_end.mail_footcontent');
      $this->set('automailfrom', $automailfrom);
      $this->set('automailnamefrom', $automailnamefrom);
      $this->set('automailsubject', $automailsubject);
      $this->set('mailheader', $mailheader);
      $this->set('mailfooter', $mailfooter);
      $this->set('automailheadcontent', $automailheadcontent);
      $this->set('automailfootcontent', $automailfootcontent);
      $this->set('formName', $this->post['formQID']);
    }

    $this->getForms();
  }

  public function saveFormAutoReply(){
    $this->post = Request::post();
    //saving the form auto reply
    if(!empty($this->post)){
      $pkg = Package::getByHandle('abc_formext');
      $db = Database::connection();
      $sData = array();
      $sData[] = $this->post['formQID'];
      if(!isset($this->post['delete'])){
        $arRow = $db->fetchAssoc('select * from abcFormAutoReplies where qID=?', $sData);
        if(!empty($arRow['farID'])){
          //update
          $uData = array();
          $uData[] = $this->post['mailcontent'];
          $uData[] = $this->post['mailSubject'];
          $uData[] = $this->post['fromName'];
          $uData[] = $this->post['fromMail'];
          $uData[] = $this->post['formQID'];
          $db->executeQuery('update abcFormAutoReplies set qHtml=?, qSubject=?, fromName=?, fromMail=? where qID=?', $uData);
        }else{
          //insert
          $uData = array();
          $uData[] = $this->post['mailcontent'];
          $uData[] = $this->post['mailSubject'];
          $uData[] = $this->post['fromName'];
          $uData[] = $this->post['fromMail'];
          $uData[] = $this->post['formQID'];
          $db->executeQuery('insert into abcFormAutoReplies (qHtml, qSubject, fromName, fromMail, qID) values (?,?,?,?,?)', $uData);
        }
        $this->set('success', t('Auto reply saved'));
      }else{
        //delete
        $db->executeQuery('delete from abcFormAutoReplies where qID=?', $sData);
        $this->set('success', t('Auto reply deleted'));
      }

      $this->redirect('dashboard/conversations/form_auto_reply');
      die;
    }
    //set the form settings
    $this->getForms();
  }

  public function getForms(){
    //standard values. getting all forms in the website
    $db = Database::connection();

    //starting form array
    $formArray = array();
    $formArray[0] = '...';

    $forms = $db->fetchAll('SELECT * FROM btForm b GROUP BY b.questionSetId DESC');
    foreach($forms as $form){
      $sData = array();
      $sData[] = $form['bID'];
      $sData[] = 'email';
      $emails = $db->fetchAll('select * from btFormQuestions where bID=? and inputType=?', $sData);
      foreach($emails as $email){
        $mailOptions = unserialize($email['options']);
        if($mailOptions['send_notification_from'] != 0){
          $formArray[$form['questionSetId']] = $form['surveyName'];
        }
      }
    }

    $this->set('formArray', $formArray);

    $siteVersion = Config::get('concrete.version_installed');
    $this->set('siteVersion', $siteVersion);
  }
}
?>
