<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">
      <div class="leaf03">
      <div class="leaf03__in">
        <h2 class="leaf03__ttl is-ttl02"><span><?php echo $c->getCollectionName(); ?></span></h2>

        <?php
        $content = new Area('leaf03_sec_ttl01');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
           	$content = new Area('leaf03__sec__in01');
           	$content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl02');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
           	$content = new Area('leaf03__sec__in02');
           	$content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl03');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
           	$content = new Area('leaf03__sec__in03');
           	$content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl04');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
           	$content = new Area('leaf03__sec__in04');
           	$content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl05');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
           	$content = new Area('leaf03__sec__in05');
           	$content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl06');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
            $content = new Area('leaf03__sec__in06');
            $content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl07');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
            $content = new Area('leaf03__sec__in07');
            $content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl08');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
            $content = new Area('leaf03__sec__in08');
            $content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl09');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
            $content = new Area('leaf03__sec__in09');
            $content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>

        <?php
        $content = new Area('leaf03_sec_ttl10');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <section class="leaf03__sec">
        <div class="leaf03__sec__in">
          <h3 class="leaf03__sec__ttl is-ttl03"><span>
            <?php $content->display($c); ?>
          </span></h3>
          <?php
            $content = new Area('leaf03__sec__in10');
            $content->display($c);
          ?>
        </div><!--leaf03__sec__in-->
        </section><!--leaf03__sec-->
        <?php } ?>


      </div><!--leaf03__in-->
      </div><!--leaf03-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
