<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="leaf06">
      <h2 class="leaf06__ttl is-ttl02"><span>ご支援事例　<?php echo $c->getCollectionName(); ?></span></h2>

      <div class="leaf06__company">
        <figure class="leaf06__company__img">
          <?php
           	$content = new Area('leaf06_company_img01');
           	$content->display($c);
          ?>
          <figcaption>
            <?php
             	$content = new Area('leaf06_company_img_figcaption01');
             	$content->display($c);
            ?>
          </figcaption>
        </figure>
        <div class="leaf06__company__data">
          <figure class="leaf06__company__logo">
            <?php
             	$content = new Area('leaf06_company_logo01');
             	$content->display($c);
            ?>
          </figure>
          <ul class="leaf06__company__txt">
            <li class="leaf06__company__concept">
              <?php
               	$content = new Area('leaf06_company_concept01');
               	$content->display($c);
              ?>
            </li>
            <li class="leaf06__company__money">
              <?php
               	$content = new Area('leaf06_company_money01');
               	$content->display($c);
              ?>
            </li>
            <li class="leaf06__company__people">
              <?php
               	$content = new Area('leaf06_company_people01');
               	$content->display($c);
              ?>
            </li>
          </ul>
        </div>
      </div><!--leaf06__company-->








      <?php
      $content = new Area('leaf06_hoge_ttl01');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="leaf06__sec">
      <div class="leaf06__sec__in">
        <h3 class="leaf06__hoge__ttl is-ttl03"><?php $content->display($c); ?></h3>
        <div class="leaf06__sec__txt">
          <?php
            $content = new Area('leaf06_sec_txt01');
            $content->display($c);
          ?>
        </div>
      </div><!--leaf06__sec__in-->
      </section><!--leaf06__sec-->
      <?php } ?>

      <?php
      $content = new Area('leaf06_hoge_ttl02');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="leaf06__sec">
      <div class="leaf06__sec__in">
        <h3 class="leaf06__hoge__ttl is-ttl03"><?php $content->display($c); ?></h3>
        <div class="leaf06__sec__txt">
          <?php
            $content = new Area('leaf06_sec_txt02');
            $content->display($c);
          ?>
        </div>
      </div><!--leaf06__sec__in-->
      </section><!--leaf06__sec-->
      <?php } ?>

      <?php
      $content = new Area('leaf06_hoge_ttl03');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="leaf06__sec">
      <div class="leaf06__sec__in">
        <h3 class="leaf06__hoge__ttl is-ttl03"><?php $content->display($c); ?></h3>
        <div class="leaf06__sec__txt">
          <?php
            $content = new Area('leaf06_sec_txt03');
            $content->display($c);
          ?>
        </div>
      </div><!--leaf06__sec__in-->
      </section><!--leaf06__sec-->
      <?php } ?>

      <?php
      $content = new Area('leaf06_hoge_ttl04');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="leaf06__sec">
      <div class="leaf06__sec__in">
        <h3 class="leaf06__hoge__ttl is-ttl03"><?php $content->display($c); ?></h3>
        <div class="leaf06__sec__txt">
          <?php
            $content = new Area('leaf06_sec_txt04');
            $content->display($c);
          ?>
        </div>
      </div><!--leaf06__sec__in-->
      </section><!--leaf06__sec-->
      <?php } ?>

      <?php
      $content = new Area('leaf06_hoge_ttl05');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="leaf06__sec">
      <div class="leaf06__sec__in">
        <h3 class="leaf06__hoge__ttl is-ttl03"><?php $content->display($c); ?></h3>
        <div class="leaf06__sec__txt">
          <?php
            $content = new Area('leaf06_sec_txt05');
            $content->display($c);
          ?>
        </div>
      </div><!--leaf06__sec__in-->
      </section><!--leaf06__sec-->
      <?php } ?>

      <?php
      $content = new Area('leaf06_solution_ttl01');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="leaf06__solution">
      <div class="leaf06__solution__in">
        <h3 class="leaf06__solution__ttl is-ttl01"><span><?php $content->display($c); ?></span></h3>
        <ul class="leaf06__solution__li">
          <?php
            $content = new Area('（liとaとテキストをhtmlで入力01）');
            $content->display($c);
          ?>
        </ul>
      </div><!--leaf06__solution__in-->
      </section><!--leaf06__solution-->
      <?php } ?>

      <section class="solution_service">
      <div class="solution_service__in">
        <h3 class="solution_service__ttl is-ttl01"><span>ソリューション・サービスのご案内</span></h3>
        <ul class="solution_service__li">
          <?php
            $content = new Area('（liとaとテキストをhtmlで入力02）');
            $content->display($c);
          ?>
        </ul>
      </div><!--solution_service__in-->
      </section><!--solution_service-->

    </section><!--leaf06-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
