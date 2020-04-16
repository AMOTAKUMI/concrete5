<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="leaf08">
      <div class="leaf08__ttl_box">
      <div class="leaf08__ttl_box__in">
        <h2 class="leaf08__ttl is-ttl04"><?php echo $c->getCollectionName(); ?></h2>
        <p class="leaf08__lead">
          <?php
           	$content = new Area('leaf08_lead');
           	$content->display($c);
          ?>
        ​</p>
      </div><!--leaf08__ttl_box__in-->
      </div><!--leaf08__ttl_box-->

      <section class="leaf08__txt">
      <div class="leaf08__txt__in">
        <p class="leaf08__txt__lead">
          <?php
           	$content = new Area('leaf08_txt_lead');
           	$content->display($c);
          ?>
        </p>
      </div><!--leaf08__txt__in-->
      </section><!--leaf08__txt-->

      <section class="leaf08__sec">
      <div class="leaf08__sec__in">
        <h3 class="leaf08__sec__ttl is-ttl03"><span>関連ソリューション・サービス</span></h3>
        <ul class="leaf08__sec__li">
          <?php
            $content = new Area('（liとaとテキストをhtmlで入力01）');
            $content->display($c);
          ?>
        </ul>
      </div><!--leaf08__sec__in-->
      </section><!--leaf08__sec-->

      <section class="leaf08__sec">
      <div class="leaf08__sec__in">
        <h3 class="leaf08__sec__ttl is-ttl03"><span>関連用語</span></h3>
        <ul class="leaf08__sec__li">
          <?php
            $content = new Area('（liとaとテキストをhtmlで入力02）');
            $content->display($c);
          ?>
        </ul>
      </div><!--leaf08__sec__in-->
      </section><!--leaf08__sec-->

<?php /*
      <section class="leaf08__sec">
      <div class="leaf08__sec__in">
        <h3 class="leaf08__sec__ttl is-ttl01"><span>データマネジメントに関するブログ</span></h3>
        <ul class="leaf08__slider">
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
        </ul>
      </div><!--leaf08__sec__in-->
      </section><!--leaf08__sec-->
*/ ?>

    </section><!--leaf08-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
