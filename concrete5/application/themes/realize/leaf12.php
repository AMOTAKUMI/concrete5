<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="leaf12">
      <div class="leaf12__ttl_box">
      <div class="leaf12__ttl_box__in">
        <h2 class="leaf12__ttl is-ttl04"><?php echo $c->getCollectionName(); ?></h2>
        <p class="leaf12__lead">
          <?php
           	$content = new Area('leaf12_lead');
           	$content->display($c);
          ?>​</p>
      </div><!--leaf12__ttl_box__in-->
      </div><!--leaf12__ttl_box-->

      <section class="leaf12__sec">
      <div class="leaf12__sec__in">
        <?php
         	$content = new Area('form');
         	$content->display($c);
        ?>
      </div><!--leaf12__sec__in-->
      </section><!--leaf12__sec-->

    </section><!--leaf12-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
