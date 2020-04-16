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

  <form action="<?php     echo $this->action('saveSettings'); ?>" method="post">
    <p class="small"><?php     echo t('These settings are to setup a header, content after header, content before footer and footer.'); ?></p>
    <div class="form-group">
        <?php     echo $form->label('automailheader', t('Standard From Mail'))?>
        <div class="ccm-textarea-field-content">
            <?php     echo $form->email('automailfrom', $automailfrom, array("placeholder" => "my@email.com")) ?>
        </div>
    </div>
    <div class="form-group">
        <?php     echo $form->label('automailheader', t('Standard From Name'))?>
        <div class="ccm-textarea-field-content">
            <?php     echo $form->text('automailnamefrom', $automailnamefrom, array("placeholder" => "My Name")) ?>
        </div>
    </div>
    <div class="form-group">
        <?php     echo $form->label('automailheader', t('Standard Subject'))?>
        <div class="ccm-textarea-field-content">
            <?php     echo $form->text('automailsubject', $automailsubject, array("placeholder" => "Mail Subject")) ?>
        </div>
    </div>
    <div class="form-group">
        <?php     echo $form->label('automailheader', t('Auto reply header'))?>
        <div class="ccm-textarea-field-content">
            <?php     echo $form->textarea('automailheader', $mailheader, array("style" => "height: 150px;")) ?>
        </div>
    </div>
    <div class="form-group">
        <?php     echo $form->label('automailheader', t('Auto reply header'))?>
        <div class="ccm-textarea-field-content">
            <?php     echo $form->textarea('automailheader', $mailheader, array("style" => "height: 150px;")) ?>
        </div>
    </div>
    <div class="form-group">
        <?php     echo $form->label('automailheadcontent', t('Auto reply top content'))?>
        <div class="ccm-textarea-field-content">
            <?php
            $editor = Core::make('editor');
            echo $editor->outputStandardEditor('automailheadcontent', $automailheadcontent);
            ?>
        </div>
    </div>
    <div class="form-group">
        <?php     echo $form->label('automailfootcontent', t('Auto reply bottom content'))?>
        <div class="ccm-textarea-field-content">
            <?php
            $editor = Core::make('editor');
            echo $editor->outputStandardEditor('automailfootcontent', $automailfootcontent);
            ?>
        </div>
    </div>
    <div class="form-group">
        <?php     echo $form->label('automailfooter', t('Auto reply footer'))?>
        <div class="ccm-textarea-field-content">
            <?php     echo $form->textarea('automailfooter', $mailfooter, array("style" => "height: 150px;")) ?>
        </div>
    </div>
    <div class="ccm-dashboard-form-actions-wrapper">
      <div class="ccm-dashboard-form-actions">
        <button type="submit" class="btn btn-primary pull-right"><?php     echo t('Save')?></button>
      </div>
    </div>
  </form>
