<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">
    <div class="mid11">
    <div class="mid11__in">
      <h2 class="mid11__ttl is-ttl03"><span><?php echo $c->getCollectionName(); ?></span></h2>
      <div class="mid11__post">
        <section class="mid11__sec">
        <div class="mid11__sec__in">
          <?php
            $content = new Area('mid11__sec__in');
            $content->display($c);
          ?>
        </div><!--mid11__sec__in-->
        </section><!--mid11__sec-->
      </div><!--mid11__post-->
      <div class="mid11__side">

        <?php
        $content = new Area('mid11__side__in01');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <div class="mid11__side__in">
          <?php	$content->display($c); ?>
        </div>
        <?php } ?>

        <?php
        $content = new Area('mid11__side__in02');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <div class="mid11__side__in">
          <?php	$content->display($c); ?>
        </div>
        <?php } ?>

        <?php
        $content = new Area('mid11__side__in03');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <div class="mid11__side__in">
          <?php	$content->display($c); ?>
        </div>
        <?php } ?>

      </div><!--mid11__side-->
    </div><!--mid11__in-->
    </div><!--mid11-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
