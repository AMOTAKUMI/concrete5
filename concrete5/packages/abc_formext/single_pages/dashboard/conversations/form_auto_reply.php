<?php
defined('C5_EXECUTE') or die("Access Denied.");
$form = Core::make('helper/form');

$siteVersionsArray = array("5.7.5.6", "5.7.5.7", "5.7.5.8", "5.7.5.9", "5.7.5.10", "5.7.5.11", "5.7.5.12", "5.7.5.13");
if(!in_array($siteVersion, $siteVersionsArray)){
  echo '<div class="alert alert-danger" role="alert">';
  echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
  echo '<span class="sr-only">Error:</span>';
  echo t('Your current concrete5 version is not supported. Only version 5.7.5.6->13 is currently supported.');
  echo '</div>';
}

?>
  <form class="changeForm" action="<?php     echo $this->action('getFormAutoReply'); ?>" method="post">
    <p class="small"><?php     echo t('Each form with an e-mail input field in your website is available here. If you do not see anything, create a form with an e-mail input field on your website.'); ?></p>
    <p class="small"><?php     echo t('Important: For an automatic mail to send (and listed), the form must have an e-mail field with "Reply to this email address" checked.'); ?></p>

    <div class="form-group">
        <?php     echo $form->label('formQID', t('Form'))?>
        <div class="ccm-select-field-content">
            <?php     echo $form->select('formQID', $formArray, $formname); ?>
        </div>
    </div>
  </form>
<?php
  if(isset($formHtml)){
?>
<form action="<?php     echo $this->action('saveFormAutoReply'); ?>" method="post">
  <?php     echo $form->hidden('formQID',$formName); ?>
  <div class="form-group">
      <?php     echo $form->label('fromName', t('From name'))?>
      <div class="ccm-select-field-content">
          <?php
            $fromName = $automailnamefrom;
            if($formHtml['fromName'] != ''){
              $fromName = $formHtml['fromName'];
            }
            echo $form->text('fromName', $fromName);
          ?>
      </div>
  </div>
  <div class="form-group">
      <?php     echo $form->label('fromMail', t('From e-mail'))?>
      <div class="ccm-select-field-content">
          <?php
            $fromMail = $automailfrom;
            if($formHtml['fromMail'] != ''){
              $fromMail = $formHtml['fromMail'];
            }
            echo $form->text('fromMail', $fromMail);
          ?>
      </div>
  </div>

  <div class="form-group">
      <?php     echo $form->label('mailSubject', t('Mail subject'))?>
      <div class="ccm-select-field-content">
          <?php
            $formSubject = $automailsubject;
            if($formHtml['qSubject'] != ''){
              $formSubject = $formHtml['qSubject'];
            }
            echo $form->text('mailSubject', $formSubject);
          ?>
      </div>
  </div>

  <div class="form-group">
      <?php     echo $form->label('mailcontent', t('Auto reply mail'))?>
      <div class="ccm-select-field-content">
          <?php
          $formContent = $formHtml['qHtml'];
          if(empty($formContent)){
            $formContent = $mailheader.$automailheadcontent.$automailfootcontent.$mailfooter;
          }
          $editor = Core::make('editor');
          echo $editor->outputStandardEditor('mailcontent', $formContent);
          ?>
      </div>
      <p class="small">
        <?php     echo t("You can use fieldnames between percentage signs in the text and this will be changed dynamically. Example: %Name%"); ?>
      </p>
      <p class="showFields small" style="cursor: pointer; color: #428bca; font-weight: bold;">
        <?php     echo t("Click here to see the available fields"); ?>
      </p>
      <div class="formFieldVars well small" style="display: none;">
        <?php
          if(!empty($formFields)){
            foreach($formFields as $field){
              echo $field['question'].' (%'.$field['question'].'%)<br/>';
            }
          }
        ?>
      </div>
  </div>
  <div class="ccm-dashboard-form-actions-wrapper">
    <div class="ccm-dashboard-form-actions">
      <input name="delete" type="submit" class="btn btn-danger pull-left" value="<?php     echo t('Delete')?>"/> <button type="submit" class="btn btn-primary pull-right"><?php     echo t('Submit')?></button>
    </div>
  </div>
</form>

<?php
  }
?>

<script type="text/javascript">
  $(document).ready(function(){
    $('.showFields').click(function(){
      $('.formFieldVars').toggle();
    });

    $('#formQID').change(function(){
      var formq = $(this).val();
      if(formq != 0){
        $('.changeForm').submit();
      }
    });
  });
</script>
