<?php
defined('C5_EXECUTE') or die("Access Denied.");

$c = Page::getCurrentPage();

/** @var \Concrete\Core\Utility\Service\Text $th */
$th = Core::make('helper/text');
/** @var \Concrete\Core\Localization\Service\Date $dh */
$dh = Core::make('helper/date');

if ($c->isEditMode() && $controller->isBlockEmpty()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.') ?></div>
<?php } else { ?>
    <?php
    $includeEntryText = false;
    if (
        (isset($includeName) && $includeName)
        ||
        (isset($includeDescription) && $includeDescription)
        ||
        (isset($useButtonForLink) && $useButtonForLink)
    ) {
        $includeEntryText = true;
    }

    foreach ($pages as $page) {
        $buttonClasses = 'ccm-block-page-list-read-more';
        $entryClasses = 'ccm-block-page-list-page-entry';
        $title = $page->getCollectionName();

        if ($page->getCollectionPointerExternalLink() != '') {
            $url = $page->getCollectionPointerExternalLink();
            if ($page->openCollectionPointerExternalLinkInNewWindow()) {
                $target = '_blank';
            }
        } else {
            $url = $page->getCollectionLink();
            $target = $page->getAttribute('nav_target');
        }
        $target = empty($target) ? '_self' : $target;
        $description = $page->getCollectionDescription();
        $description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
        $thumbnail = false;
        if ($displayThumbnail) {
            $thumbnail = $page->getAttribute('thumbnail');
        }
        if (is_object($thumbnail) && $includeEntryText) {
            $entryClasses = 'ccm-block-page-list-page-entry-horizontal';
        }
        $date = $dh->formatDateTime($page->getCollectionDatePublic(), true);
        ?>

        <li class="example">
        <?php if ($includeEntryText) { ?>
        <div class="example__in">
        <?php if (isset($includeName) && $includeName) { ?>
          <?php if (is_object($thumbnail)) { ?>
          <figure class="example__img">
            <?php
            $img = Core::make('html/image', array($thumbnail));
            $tag = $img->getTag();
            $tag->addClass('img-responsive');
            echo $tag; ?>
          </figure>
          <?php } ?>
          <div class="example__txt">
            <?php if (isset($includeDescription) && $includeDescription) { ?>
                <h4 class="example__ttl"><?php echo h($description) ?></h4>
            <?php } ?>
            <p class="example__name">
              <?php if (isset($useButtonForLink) && $useButtonForLink) { ?>
                <?php echo h($title); ?>
              <?php } else { ?>
                <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>"><?php echo h($title) ?></a>
              <?php } ?>
            </p>
            <a href="<?php echo h($url) ?>" class="example__btn is-btn01">View More</a>
          </div>
        <?php } ?>
        </div><!--example__in-->
        <?php } ?>
        </li>

    <?php } ?>
<?php } ?>
