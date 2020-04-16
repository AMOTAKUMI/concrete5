<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="leaf17">
      <div class="leaf17__ttl_box">
      <div class="leaf17__ttl_box__in">
        <h2 class="leaf17__ttl is-ttl04">ホワイトペーパーダウンロード</h2>
      </div><!--leaf17__ttl_box__in-->
      </div><!--leaf17__ttl_box-->

      <section class="leaf17__txt">
      <div class="leaf17__txt__in">
        <p class="leaf17__txt__lead">
          ホワイトペーパーダウンロード誠にありがとうございます。<br />
          対象ファイル名：<?php echo $c->getCollectionName(); ?>の<br />
          ダウンロードは以下より行えます。
        </p>
      </div><!--leaf17__txt__in-->
      </section>

      <section class="leaf17__sec">
      <div class="leaf17__sec__in">
        <?php
          $content = new Area('download');
          $content->display($c);
        ?>
      </div><!--leaf17__sec__in-->
      </section><!--leaf17__sec-->



    </section><!--leaf17-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
