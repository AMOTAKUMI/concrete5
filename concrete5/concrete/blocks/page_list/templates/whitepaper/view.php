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
        $date = $dh->formatDate($page->getCollectionDatePublic(), true);
        ?>

        <li class="mid15__column">
        <div class="mid15__column__li">
        <?php if ($includeEntryText) { ?>
          <?php if (isset($includeDate) && $includeDate) { ?>
            <time class="mid15__column__time"><?php echo h($date) ?></time>
          <?php } ?>
          <?php if (is_object($thumbnail)) {
              ?>
              <figure class="mid15__column__img">
                <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>">
                  <?php
                  $img = Core::make('html/image', array($thumbnail));
                  $tag = $img->getTag();
                  $tag->addClass('img-responsive');
                  echo $tag; ?>
                </a>
              </figure>
              <?php
          } ?>
          <?php if (isset($includeName) && $includeName) { ?>

            <h3 class="mid15__column__ttl is-ttl05">
              <?php if (isset($useButtonForLink) && $useButtonForLink) { ?>
                <?php echo h($title); ?>
              <?php } else { ?>
                <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>"><?php echo h($title) ?></a>
              <?php } ?>
            </h3>
            <?php if (isset($includeDescription) && $includeDescription) { ?>
                <p class="mid15__column__lead"><?php echo h($description) ?></p>
            <?php } ?>
          <?php } ?>

          <p class="mid15__column__a"><a href="<?php echo h($url) ?>" class="is-btn01">Download</a></p>
        <?php } ?>
        </div>
        </li>

    <?php } ?>
<?php } ?>
