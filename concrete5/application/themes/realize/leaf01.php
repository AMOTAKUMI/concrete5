<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">
    <section class="leaf01">
      <div class="leaf01__ttl_box">
      <div class="leaf01__ttl_box__in">
        <h2 class="leaf01__ttl is-ttl03">
          <?php
            $content = new Area('leaf01_ttl01');
            $content->display($c);
          ?>
        </h2>
        <p class="leaf01__lead">
          <?php
            $content = new Area('leaf01_lead01');
            $content->display($c);
          ?>
        ​</p>
      </div><!--leaf01__ttl_box__in-->
      </div><!--leaf01__ttl_box-->

      <section class="leaf01__txt">
      <div class="leaf01__txt__in">
        <h3 class="leaf01__txt__ttl">
          <?php
            $content = new Area('leaf01_txt_ttl01');
            $content->display($c);
          ?>
        ​</h3>
        <p class="leaf01__txt__lead">
          <?php
            $content = new Area('leaf01_txt_lead01');
            $content->display($c);
          ?>
        </p>

      </div><!--leaf01__txt__in-->
      </section><!--leaf01__txt-->

      <section class="leaf01__sec">
      <div class="leaf01__sec__in">
        <h3 class="leaf01__sec__ttl is-ttl03"><span>
          <?php
            $content = new Area('leaf01_sec_ttl01');
            $content->display($c);
          ?>
        </span></h3>
        <ol class="leaf01__li">
          <li class="data">
            <h4 class="data__ttl">
              <?php
                $content = new Area('data_ttl01');
                $content->display($c);
              ?>
            </h4>
            <div class="data__in">
              <figure class="data__img">
                <?php
                  $content = new Area('data_img01');
                  $content->display($c);
                ?>
              </figure>
              <div class="data__txt">
                <?php
                  $content = new Area('data_txt01');
                  $content->display($c);
                ?>
              ​</div>
            </div><!--data__in-->
          </li>
          <li class="data">
            <h4 class="data__ttl">
              <?php
                $content = new Area('data_ttl02');
                $content->display($c);
              ?>
            </h4>
            <div class="data__in">
              <figure class="data__img">
                <?php
                  $content = new Area('data_img02');
                  $content->display($c);
                ?>
              </figure>
              <div class="data__txt">
                <?php
                  $content = new Area('data_txt02');
                  $content->display($c);
                ?>
              ​</div>
            </div><!--data__in-->
          </li>
          <li class="data">
            <h4 class="data__ttl">
              <?php
                $content = new Area('data_ttl03');
                $content->display($c);
              ?>
            </h4>
            <div class="data__in">
              <figure class="data__img">
                <?php
                  $content = new Area('data_img03');
                  $content->display($c);
                ?>
              </figure>
              <div class="data__txt">
                <?php
                  $content = new Area('data_txt03');
                  $content->display($c);
                ?>
              ​</div>
            </div><!--data__in-->
          </li>
        </ol><!--leaf01__li-->
      </div><!--leaf01__sec__in-->
      </section><!--leaf01__sec-->

      <section class="leaf01__sec">
      <div class="leaf01__sec__in">
        <h3 class="leaf01__sec__ttl is-ttl03"><span>
          <?php
            $content = new Area('leaf01_sec_ttl02');
            $content->display($c);
          ?>
        </span></h3>
        <p class="leaf01__sec__img">
          <?php
            $content = new Area('leaf01_sec_img01');
            $content->display($c);
          ?>
        </p>
      </div><!--leaf01__sec__in-->
      </section><!--leaf01__sec-->

      <section class="leaf01__sec">
      <div class="leaf01__sec__in">
        <h3 class="leaf01__sec__ttl is-ttl03"><span>
          <?php
            $content = new Area('leaf01_sec_ttl03');
            $content->display($c);
          ?>
        </span></h3>
        <dl class="leaf01__def">
          <?php
          $content = new Area('leaf01_def_dt01');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dt><?php $content->display($c); ?></dt>
          <?php } ?>
          <?php
          $content = new Area('leaf01_def_dd01');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dd><?php $content->display($c); ?></dd>
          <?php } ?>
        </dl>
        <dl class="leaf01__def">
          <?php
          $content = new Area('leaf01_def_dt02');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dt><?php $content->display($c); ?></dt>
          <?php } ?>
          <?php
          $content = new Area('leaf01_def_dd02');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dd><?php $content->display($c); ?></dd>
          <?php } ?>
        </dl>
        <dl class="leaf01__def">
          <?php
          $content = new Area('leaf01_def_dt03');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dt><?php $content->display($c); ?></dt>
          <?php } ?>
          <?php
          $content = new Area('leaf01_def_dd03');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dd><?php $content->display($c); ?></dd>
          <?php } ?>
        </dl>
        <dl class="leaf01__def">
          <?php
          $content = new Area('leaf01_def_dt04');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dt><?php $content->display($c); ?></dt>
          <?php } ?>
          <?php
          $content = new Area('leaf01_def_dd04');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dd><?php $content->display($c); ?></dd>
          <?php } ?>
        </dl>
        <dl class="leaf01__def">
          <?php
          $content = new Area('leaf01_def_dt05');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dt><?php $content->display($c); ?></dt>
          <?php } ?>
          <?php
          $content = new Area('leaf01_def_dd05');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <dd><?php $content->display($c); ?></dd>
          <?php } ?>
        </dl>
      </div><!--leaf01__sec__in-->
      </section><!--leaf01__sec-->

      <section class="leaf01__sec">
      <div class="leaf01__sec__in">
        <h3 class="leaf01__sec__ttl is-ttl03"><span>
          <?php
            $content = new Area('leaf01_sec_ttl04');
            $content->display($c);
          ?>
        </span></h3>
        <ul class="leaf01__column02">
          <li>
            <figure class="leaf01__img">
              <?php
                $content = new Area('leaf01_img01');
                $content->display($c);
              ?>
              <figcaption>
                <?php
                  $content = new Area('leaf01_img_figcaption01');
                  $content->display($c);
                ?>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure class="leaf01__img">
              <?php
                $content = new Area('leaf01_img02');
                $content->display($c);
              ?>
              <figcaption>
                <?php
                  $content = new Area('leaf01_img_figcaption02');
                  $content->display($c);
                ?>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div><!--leaf01__sec__in-->
      </section><!--leaf01__sec-->

<?php /*
      <section class="leaf01__sec">
      <div class="leaf01__sec__in">
        <h3 class="leaf01__sec__ttl is-ttl01"><span>
          <?php
            $content = new Area('leaf01_sec_ttl05');
            $content->display($c);
          ?>
        </span></h3>
        <ul class="leaf01__slider">
          <?php
            $content = new Area('（liとaとimgをhtmlで入力）');
            $content->display($c);
          ?>
        </ul>
        </ul>
      </div><!--leaf01__sec__in-->
      </section><!--leaf01__sec-->

      <section class="solution_service">
      <div class="solution_service__in">
        <h3 class="solution_service__ttl is-ttl01"><span>
          <?php
            $content = new Area('solution_service_ttl');
            $content->display($c);
          ?>
        </span></h3>
        <ul class="solution_service__li">
          <?php
            $content = new Area('（liとaとテキストをhtmlで入力）');
            $content->display($c);
          ?>
        </ul>
      </div><!--solution_service__in-->
      </section><!--solution_service-->
*/ ?>

    </section><!--leaf01-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
