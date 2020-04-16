<?php     namespace Concrete\Package\AbcFormext\Controller\SinglePage\Dashboard\Conversations;
/*
Created By mijnwebsitebouwen.be
http://www.mijnwebsitebouwen.be (dutch)
See documentation at concrete5.org add-on page
*/

use Package;
use Config;
use Request;
use \Concrete\Core\Page\Controller\DashboardPageController;
class FormSettings extends DashboardPageController{
  public function view(){
    //set the form settings
    $this->setFormSettings();
  }

  public function saveSettings(){
    $this->post = Request::post();
    if(!empty($this->post)){
      $pkg = Package::getByHandle('abc_formext');

      //save the form settings
      if(!empty($this->post['autosendmail'])){
        $pkg->getConfig()->save('abc_back_end.auto_mail', $this->post['autosendmail']);
      }else{
        $pkg->getConfig()->save('abc_back_end.auto_mail', 0);
      }
      $pkg->getConfig()->save('abc_back_end.mail_from', $this->post['automailfrom']);
      $pkg->getConfig()->save('abc_back_end.mail_name_from', $this->post['automailnamefrom']);
      $pkg->getConfig()->save('abc_back_end.auto_mail_subject', $this->post['automailsubject']);
      $pkg->getConfig()->save('abc_back_end.mail_header', $this->post['automailheader']);
      $pkg->getConfig()->save('abc_back_end.mail_footer', $this->post['automailfooter']);
      $pkg->getConfig()->save('abc_back_end.mail_headcontent', $this->post['automailheadcontent']);
      $pkg->getConfig()->save('abc_back_end.mail_footcontent', $this->post['automailfootcontent']);
      $this->set('success', t('Settings saved'));
    }
    //set the form settings
    $this->setFormSettings();
  }

  public function setFormSettings(){
    $pkg = Package::getByHandle('abc_formext');

    $automail = $pkg->getConfig()->get('abc_back_end.auto_mail');
    $automailfrom = $pkg->getConfig()->get('abc_back_end.mail_from');
    $automailnamefrom = $pkg->getConfig()->get('abc_back_end.mail_name_from');
    $automailsubject = $pkg->getConfig()->get('abc_back_end.auto_mail_subject');
    $mailheader = $pkg->getConfig()->get('abc_back_end.mail_header');
    $mailfooter = $pkg->getConfig()->get('abc_back_end.mail_footer');
    $automailheadcontent = $pkg->getConfig()->get('abc_back_end.mail_headcontent');
    $automailfootcontent = $pkg->getConfig()->get('abc_back_end.mail_footcontent');

    $this->set('automail', $automail);
    $this->set('automailfrom', $automailfrom);
    $this->set('automailnamefrom', $automailnamefrom);
    $this->set('automailsubject', $automailsubject);
    $this->set('mailheader', $mailheader);
    $this->set('mailfooter', $mailfooter);
    $this->set('automailheadcontent', $automailheadcontent);
    $this->set('automailfootcontent', $automailfootcontent);

    $siteVersion = Config::get('concrete.version_installed');
    $this->set('siteVersion', $siteVersion);
  }
}
?>
