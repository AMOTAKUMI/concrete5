<?php
defined('C5_EXECUTE') or die("Access Denied.");

$c = Page::getCurrentPage();

/** @var \Concrete\Core\Utility\Service\Text $th */
$th = Core::make('helper/text');
/** @var \Concrete\Core\Localization\Service\Date $dh */
$dh = Core::make('helper/date');

if ($c->isEditMode() && $controller->isBlockEmpty()) {
    ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.') ?></div>
    <?php
} else {
    ?>

    <div class="ccm-block-page-list-wrapper">
        <?php if (isset($pageListTitle) && $pageListTitle) { ?>
            <div class="ccm-block-page-list-header"><h5><?php echo h($pageListTitle) ?></h5></div>
        <?php } ?>

        <?php if (isset($rssUrl) && $rssUrl) { ?>
            <a href="<?php echo $rssUrl ?>" target="_blank" class="ccm-block-page-list-rss-feed">
                <i class="fa fa-rss"></i>
            </a>
        <?php } ?>

        <div class="ccm-block-page-list-pages">
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

                // Prepare data for each page being listed...
                $buttonClasses = 'ccm-block-page-list-read-more';
                $entryClasses = 'ccm-block-page-list-page-entry';
                $title = $page->getCollectionName();
                $topics = $page->getAttribute('blog_category');

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

                <div class="postlist">
                    <?php if ($includeEntryText) { ?>
                        <div class="postlist__info">

                            <?php if (isset($includeDate) && $includeDate) { ?>
                              <div class="postlist__info__date"><?php echo h($date) ?></div>
                            <?php } ?>

                            <?php
                            if (count($topics) && is_array($topics)) {
                                foreach($topics as $topic) {
                            ?>
                            <div class="postlist__info__cat"><?php echo $topic->getTreeNodeDisplayName(); ?></div>
                            <?php
                                }
                            }
                            ?>
                        </div><!--postlist__info-->

                        <?php if (isset($includeName) && $includeName) { ?>
                            <div class="postlist__ttl">
                                <?php if (isset($useButtonForLink) && $useButtonForLink) { ?>
                                    <?php echo h($title); ?>
                                <?php } else { ?>
                                    <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>"><?php echo h($title) ?></a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div><!-- end .ccm-block-page-list-pages -->

        <?php if (count($pages) == 0) { ?>
            <div class="ccm-block-page-list-no-pages"><?php echo h($noResultsMessage) ?></div>
        <?php } ?>

    </div><!-- end .ccm-block-page-list-wrapper -->


    <?php if ($showPagination) { ?>
        <?php echo $pagination; ?>
    <?php } ?>

    <?php

} ?>
