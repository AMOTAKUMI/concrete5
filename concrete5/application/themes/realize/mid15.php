<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="mid15">
      <h2 class="mid15__ttl is-ttl02"><span><?php echo $c->getCollectionName(); ?></span></h2>

      <section class="mid15__li_box">
      <div class="mid15__li_box__in">
        <ul class="mid15__li_box__li">
          <?php
            $content = new Area('mid15_li_box_li');
            $content->display($c);
          ?>
        </ul>
      </div><!--mid15__li_box__in-->
      </section><!--mid15__li_box-->

    </section><!--mid15-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
