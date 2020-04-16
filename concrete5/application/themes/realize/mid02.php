<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="mid02">
      <h2 class="mid02__ttl is-ttl00">
        <span class="mid02__ttl__img">
          <?php
           	$content = new Area('mid02_ttl_img01');
           	$content->display($c);
          ?>
        </span>
        <span class="mid02__ttl__txt"><?php echo $c->getCollectionName(); ?></span>
      </h2>

      <section class="mid02__txt">
      <div class="mid02__txt__in">
        <h3 class="mid02__txt__ttl">
          <?php
           	$content = new Area('mid02_txt_ttl01');
           	$content->display($c);
          ?>
        </h3>
        <p class="mid02__txt__lead">
          <?php
           	$content = new Area('mid02_txt_lead01');
           	$content->display($c);
          ?>
        </p>
      </div><!--mid02__txt__in-->
    </section><!--mid02__txt-->

      <section class="mid02__li_box">
      <div class="mid02__li_box__in">
        <h3 class="mid02__li_box__ttl is-ttl03"><span>
          <?php
            $content = new Area('mid02_li_box_ttl01');
            $content->display($c);
          ?>
        </span></h3>
        <p class="mid02__li_box__lead">
          <?php
            $content = new Area('mid02_li_box_lead01');
            $content->display($c);
          ?>
        </p>
        <ul class="mid02__li_box__li">

          <?php
          $content = new Area('mid02_column_ttl01');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img01');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead01');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl02');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img02');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead02');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl03');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img03');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead03');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl04');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img04');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead04');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl05');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img05');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead05');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl06');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img06');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead06');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl07');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img07');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead07');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl08');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img08');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead08');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>
        </ul>
        <?php
        $content = new Area('mid02_li_box_ttl02');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <h3 class="mid02__li_box__ttl is-ttl03"><span><?php $content->display($c); ?></span></h3>
        <?php } ?>
        <ul class="mid02__li_box__li">
          <?php
          $content = new Area('mid02_column_ttl09');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img09');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead09');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl10');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img10');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead10');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl11');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img11');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead11');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

          <?php
          $content = new Area('mid02_column_ttl12');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="mid02__column">
          <div class="mid02__column__in">
            <h4 class="mid02__column__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <figure class="mid02__column__img">
              <?php
               	$content = new Area('mid02_column_img12');
               	$content->display($c);
              ?>
            </figure>
            <p class="mid02__column__lead">
              <?php
               	$content = new Area('mid02_column_lead12');
               	$content->display($c);
              ?>
            </p>
          </div>
          </li>
          <?php } ?>

        </ul>
      </div><!--mid02__li_box__in-->
      </section><!--mid02__li_box-->

<?php /*
      <section class="mid02__sec">
      <div class="mid02__sec__in">
        <h3 class="mid02__sec__ttl is-ttl01"><span>
          <?php
            $content = new Area('mid02_sec_ttl01');
            $content->display($c);
          ?>
        </span></h3>
        <ul class="mid02__slider">
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
        </ul>
      </div><!--mid02__sec__in-->
      </section><!--mid02__sec__in-->
*/ ?>

    </section><!--mid02-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
