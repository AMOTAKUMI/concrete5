<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="mid07">
      <h2 class="mid07__ttl is-ttl00">
        <span class="mid07__ttl__img"><img src="<?php echo $view->getThemePath()?>/assets/img/example/img_example.png" alt="支援事例と実績"></span>
        <span class="mid07__ttl__txt"><?php echo $c->getCollectionName(); ?></span>
      </h2>

      <section class="mid07__txt">
      <div class="mid07__txt__in">
        <h3 class="mid07__txt__ttl">データマネジメントご支援事例と実績のご紹介</h3>
        <p class="mid07__txt__lead">創業依頼、リアライズはデータマネジメントの専門集団として、お客様のデータに関するお悩み・課題をご支援してきました。<br />ここではお客様より実績公開についてご承諾いただいた事例の一部をご紹介します。</p>
      </div><!--mid07__txt__in-->
    </section><!--mid07__txt-->

      <section class="mid07__li_box">
      <div class="mid07__li_box__in">
        <h3 class="mid07__li_box__ttl is-ttl01"><span>ご支援事例</span></h3>
        <ul class="mid07__li_box__li">
          <?php
            $content = new Area('example');
            $content->display($c);
          ?>
        </ul>
      </div><!--mid07__li_box__in-->
      </section><!--mid07__li_box-->

      <section class="mid07__client">
      <div class="mid07__client__in">
        <h3 class="mid07__client__ttl is-ttl01"><span>お取引実績</span></h3>
        <ul class="mid07__client__li">
          <?php
            $content = new Area('（liとテキストをhtmlで入力）');
            $content->display($c);
          ?>
        </ul>
        <p class="mid07__client__anote">（※順不問）</p>
      </div><!--mid07__client__in-->
      </section><!--mid07__client-->

      <section class="solution_service">
      <div class="solution_service__in">
        <h3 class="solution_service__ttl is-ttl01"><span>ソリューション・サービスのご紹介</span></h3>
        <ul class="solution_service__li">
          <?php
            $content = new Area('（liとaとテキストをhtmlで入力）');
            $content->display($c);
          ?>
        </ul>
      </div><!--solution_service__in-->
      </section><!--solution_service-->
    </section><!--mid07-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
