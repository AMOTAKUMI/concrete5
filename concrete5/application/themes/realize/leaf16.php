<?php
defined('C5_EXECUTE') or die("Access Denied.");
$view->inc('assets/elements/header.php');
global $TTL;
global $FILE;
$TTL = $c->getCollectionName();
?>

  <main class="mn" role="main">

    <section class="leaf16">
      <div class="leaf16__ttl_box">
      <div class="leaf16__ttl_box__in">
        <h2 class="leaf16__ttl is-ttl04">ホワイトペーパーダウンロード</h2>
      </div><!--leaf16__ttl_box__in-->
      </div><!--leaf16__ttl_box-->

      <section class="leaf16__sec">
      <div class="leaf16__sec__in">
        <?php
          $content = new Area('form01');
          $content->display($c);
        ?>
      </div><!--leaf16__sec__in-->
      </section><!--leaf16__sec-->

      <section class="leaf16__sec">
      <div class="leaf16__sec__in">
        <?php
          $content = new Area('download');
          $content->display($c);
        ?>
      </div><!--leaf16__sec__in-->
      </section><!--leaf16__sec-->




    </section><!--leaf16-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
