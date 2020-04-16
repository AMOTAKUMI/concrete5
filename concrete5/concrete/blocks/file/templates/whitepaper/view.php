<?php  defined('C5_EXECUTE') or die("Access Denied.");
global $FILE;
$f = $controller->getFileObject();
$fp = new Permissions($f);
if ($f && $fp->canViewFile()) {
    $c = Page::getCurrentPage();
    if ($c instanceof Page) {
        $cID = $c->getCollectionID();
    }

    ?>
  <?php if($FILE){ ?>
	<div class="ccm-block-file">
		<a href="<?php echo $forceDownload ? $f->getForceDownloadURL() : $f->getDownloadURL();
    ?>"><?php echo stripslashes($controller->getLinkText()) ?></a>
	</div>
  <?php } ?>


<?php
}

$c = Page::getCurrentPage();
 if (!$f && $c->isEditMode()) {
     ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty File Block.')?></div>
<?php
 }
