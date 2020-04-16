<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="mid03">
      <h2 class="mid03__ttl is-ttl00">
        <span class="mid03__ttl__img">
          <?php
           	$content = new Area('mid03_ttl_img01');
           	$content->display($c);
          ?>
        </span>
        <span class="mid03__ttl__txt"><?php echo $c->getCollectionName(); ?></span>
      </h2>

      <?php
      $content = new Area('mid03_txt_ttl01');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03"><?php $content->display($c); ?>​</h3>
        <div class="mid03__txt__lead">
          <?php
           	$content = new Area('mid03_txt_lead01');
           	$content->display($c);
          ?>
        ​</div>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>

      <div class="mid03__img">
      <div class="mid03__img__in">
        <?php
         	$content = new Area('mid03_img01');
         	$content->display($c);
        ?>
      </div><!--mid03__img__in-->
      </div><!--mid03__img-->

      <?php
      $content = new Area('mid03_txt_ttl02');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03"><?php $content->display($c); ?></h3>
        <p class="mid03__txt__lead">
          <?php
           	$content = new Area('mid03_txt_lead02');
           	$content->display($c);
          ?>
        ​</p>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>

      <section class="mid03__li_box">
      <div class="mid03__li_box__in">
        <div class="mid03__li_box__ttl_wr">
          <h3 class="mid03__li_box__ttl is-ttl03">
            <?php
             	$content = new Area('mid03_li_box_ttl01');
             	$content->display($c);
            ?>
          ​</h3>
        </div>

        <ul class="mid03__li_box__li">
          <?php
          $content = new Area('point_ttl01');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="point">
          <div class="point__in">
              <h4 class="point__ttl"><?php $content->display($c); ?></h4>
              <div class="point__lead">
                <?php
                 	$content = new Area('point_lead01');
                 	$content->display($c);
                ?>
              </div>
          </div><!--point__in-->
          </li>
          <?php } ?>
          <?php
          $content = new Area('point_ttl02');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="point">
          <div class="point__in">
              <h4 class="point__ttl"><?php $content->display($c); ?></h4>
              <div class="point__lead">
                <?php
                 	$content = new Area('point_lead02');
                 	$content->display($c);
                ?>
              </div>
          </div><!--point__in-->
          </li>
          <?php } ?>
          <?php
          $content = new Area('point_ttl03');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="point">
          <div class="point__in">
              <h4 class="point__ttl"><?php $content->display($c); ?></h4>
              <div class="point__lead">
                <?php
                 	$content = new Area('point_lead03');
                 	$content->display($c);
                ?>
              </div>
          </div><!--point__in-->
          </li>
          <?php } ?>
          <?php
          $content = new Area('point_ttl04');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="point">
          <div class="point__in">
              <h4 class="point__ttl"><?php $content->display($c); ?></h4>
              <div class="point__lead">
                <?php
                 	$content = new Area('point_lead04');
                 	$content->display($c);
                ?>
              </div>
          </div><!--point__in-->
          </li>
        <?php } ?>
          <?php
          $content = new Area('point_ttl05');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="point">
          <div class="point__in">
              <h4 class="point__ttl"><?php $content->display($c); ?></h4>
              <div class="point__lead">
                <?php
                 	$content = new Area('point_lead05');
                 	$content->display($c);
                ?>
              </div>
          </div><!--point__in-->
          </li>
        <?php } ?>
        </ul>
      </div><!--mid03__li_box__in-->
      </section><!--mid03__li_box-->


      <?php
      $content = new Area('mid03_txt_ttl003');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03"><?php $content->display($c); ?>​</h3>
        <ul class="mid03__column2__wr">
          <li class="mid03__column2">
          <div class="mid03__column2__in">
            <div class="mid03__column2__img">
              <h4 class="mid03__column2__ttl is-ttl05">
                <?php
                 	$content = new Area('mid03_column2_ttl01');
                 	$content->display($c);
                ?>
              ​</h4>
              <figure class="mid03__column2__thumb">
                <?php
                 	$content = new Area('mid03_column2_thumb01');
                 	$content->display($c);
                ?>
              </figure>
              <ul class="mid03__column2__li">
                <?php
                 	$content = new Area('（liとtextを入力01）');
                 	$content->display($c);
                ?>
              </ul>
            </div><!--mid03__column2__img-->
            <div class="mid03__column2__txt">
              <?php
                $content = new Area('mid03_column2_txt01');
                $content->display($c);
              ?>
            </div><!--mid03__column2__txt-->
          </div><!--mid03__column2__in-->
          </li><!--mid03__column2-->

          <li class="mid03__column2">
          <div class="mid03__column2__in">
            <div class="mid03__column2__img">
              <h4 class="mid03__column2__ttl is-ttl05">
                <?php
                 	$content = new Area('mid03_column2_ttl02');
                 	$content->display($c);
                ?>
              ​</h4>
              <figure class="mid03__column2__thumb">
                <?php
                 	$content = new Area('mid03_column2_thumb02');
                 	$content->display($c);
                ?>
              </figure>
              <ul class="mid03__column2__li">
                <?php
                 	$content = new Area('（liとtextを入力02）');
                 	$content->display($c);
                ?>
              </ul>
            </div><!--mid03__column2__img-->
            <div class="mid03__column2__txt">
              <?php
                $content = new Area('mid03_column2_txt02');
                $content->display($c);
              ?>
            </div><!--mid03__column2__txt-->
          </div><!--mid03__column2__in-->
          </li><!--mid03__column2-->

          <li class="mid03__column2">
          <div class="mid03__column2__in">
            <div class="mid03__column2__img">
              <h4 class="mid03__column2__ttl is-ttl05">
                <?php
                 	$content = new Area('mid03_column2_ttl03');
                 	$content->display($c);
                ?>
              ​</h4>
              <figure class="mid03__column2__thumb">
                <?php
                 	$content = new Area('mid03_column2_thumb03');
                 	$content->display($c);
                ?>
              </figure>
              <ul class="mid03__column2__li">
                <?php
                 	$content = new Area('（liとtextを入力03）');
                 	$content->display($c);
                ?>
              </ul>
            </div><!--mid03__column2__img-->
            <div class="mid03__column2__txt">
              <?php
                $content = new Area('mid03_column2_txt03');
                $content->display($c);
              ?>
            </div><!--mid03__column2__txt-->
          </div><!--mid03__column2__in-->
          </li><!--mid03__column2-->


        </ul>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>

      <?php
      $content = new Area('mid03_txt_ttl04');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03"><?php $content->display($c); ?></h3>
        <ul class="mid03__txt__li">
          <?php
          $content = new Area('mid03_def_dt01');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li>
            <dl class="mid03__def">
              <dt><?php $content->display($c); ?></dt>
              <dd>
                <?php
                  $content = new Area('mid03__def__dd01');
                  $content->display($c);
                ?>
              </dd>
            </dl>
          </li>
          <?php } ?>
          <?php
          $content = new Area('mid03_def_dt02');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li>
            <dl class="mid03__def">
              <dt><?php $content->display($c); ?></dt>
              <dd>
                <?php
                  $content = new Area('mid03__def__dd02');
                  $content->display($c);
                ?>
              </dd>
            </dl>
          </li>
          <?php } ?>
          <?php
          $content = new Area('mid03_def_dt03');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li>
            <dl class="mid03__def">
              <dt><?php $content->display($c); ?></dt>
              <dd>
                <?php
                  $content = new Area('mid03__def__dd03');
                  $content->display($c);
                ?>
              </dd>
            </dl>
          </li>
          <?php } ?>
          <?php
          $content = new Area('mid03_def_dt04');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li>
            <dl class="mid03__def">
              <dt><?php $content->display($c); ?></dt>
              <dd>
                <?php
                  $content = new Area('mid03__def__dd04');
                  $content->display($c);
                ?>
              </dd>
            </dl>
          </li>
          <?php } ?>
        </ul>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>

      <?php
      $content = new Area('mid03_img');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <div class="mid03__img">
      <div class="mid03__img__in">
        <?php $content->display($c); ?>
        <p class="mid03__img__a">
          <?php
           	$content = new Area('（aタグをclass=is-btn04で入力）');
           	$content->display($c);
          ?>
        </p>
      </div><!--mid03__img__in-->
      </div><!--mid03__img-->
      <?php } ?>

      <?php
      $content = new Area('mid03_txt_ttl06');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03">
          <?php $content->display($c); ?>
        ​</h3>
        <p class="mid03__txt__lead">
          <?php
           	$content = new Area('mid03_txt_lead06');
           	$content->display($c);
          ?>
        ​</p>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>

      <?php
      $content = new Area('mid03_txt_ttl03');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03"><?php $content->display($c); ?>​</h3>
        <p class="mid03__txt__lead">
          <?php
            $content = new Area('mid03_txt_lead03');
            $content->display($c);
          ?>
        ​</p>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>

      <?php
      $content = new Area('mid03_txt_ttl035');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03"><?php $content->display($c); ?>​</h3>
        <p class="mid03__txt__lead">
          <?php
            $content = new Area('mid03_txt_lead04');
            $content->display($c);
          ?>
        ​</p>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>

      <?php
      $content = new Area('mid03_txt_ttl05');
      if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
      ?>
      <section class="mid03__txt">
      <div class="mid03__txt__in">
        <h3 class="mid03__txt__ttl is-ttl03"><?php $content->display($c); ?>​</h3>
        <p class="mid03__txt__lead">
          <?php
            $content = new Area('mid03_txt_lead05');
            $content->display($c);
          ?>
        ​</p>
      </div><!--mid03__txt__in-->
      </section><!--mid03__txt-->
      <?php } ?>




<?php /*
      <section class="mid03__sec">
      <div class="mid03__sec__in">
        <h3 class="mid03__sec__ttl is-ttl01"><span>
          <?php
           	$content = new Area('mid03_slider_ttl01');
           	$content->display($c);
          ?>
        </span></h3>
        <ul class="mid03__slider">
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
        </ul>
      </div><!--mid03__sec__in-->
      </section><!--mid03__sec-->
*/ ?>

    </section><!--mid03-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
