<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="mid05">
      <h2 class="mid05__ttl is-ttl02"><span><?php echo $c->getCollectionName(); ?></span></h2>

      <section class="mid05__txt">
      <div class="mid05__txt__in">
        <p class="mid05__txt__lead">
          <?php
           	$content = new Area('mid05_txt_lead01');
           	$content->display($c);
          ?>
        ​</p>

        <?php
        $content = new Area('（aタグをclass=is-btn04で入力01）');
        if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
        ?>
        <p class="mid05__txt__a"><?php $content->display($c); ?></p>
        <?php } ?>
      </div><!--mid05__txt__in-->
      </section><!--mid05__txt-->

      <section class="mid05__li_box">
      <div class="mid05__li_box__in">
        <div class="mid05__li_box__ttl_wr">
          <h3 class="mid05__li_box__ttl is-ttl03">
            <?php
             	$content = new Area('mid05_li_box_ttl01');
             	$content->display($c);
            ?>
          ​</h3>
        </div>
        <ul class="mid05__li_box__li">
          <?php
          $content = new Area('flow__ttl01');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="flow">
          <div class="flow__in">
            <h4 class="flow__ttl is-ttl05"><?php $content->display($c); ?></h4>

            <?php
            $content = new Area('flow__img01');
            if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
            ?>
            <div class="flow__column2">
              <figure class="flow__column2__img"><?php	$content->display($c); ?></figure>
              <div class="flow__column2__lead">
                <?php
                 	$content = new Area('flow__column2__lead01');
                 	$content->display($c);
                ?>
              </div>
            </div>
            <?php } ?>

            <p class="flow__lead">
              <?php
               	$content = new Area('flow__lead01');
               	$content->display($c);
              ?>
            </p>
            <p class="flow__summary">
              <?php
               	$content = new Area('flow__summary01');
               	$content->display($c);
              ?>
            </p>
          </div><!--flow__in-->
          </li>
          <?php } ?>

          <?php
          $content = new Area('flow__ttl02');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="flow">
          <div class="flow__in">
            <h4 class="flow__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <?php
            $content = new Area('flow__img02');
            if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
            ?>
            <div class="flow__column2">
              <figure class="flow__column2__img"><?php	$content->display($c); ?></figure>
              <div class="flow__column2__lead">
                <?php
                 	$content = new Area('flow__column2__lead02');
                 	$content->display($c);
                ?>
              </div>
            </div>
            <?php } ?>
            <p class="flow__lead">
              <?php
               	$content = new Area('flow__lead02');
               	$content->display($c);
              ?>
            </p>
            <p class="flow__summary">
              <?php
               	$content = new Area('flow__summary02');
               	$content->display($c);
              ?>
            </p>
          </div><!--flow__in-->
          </li>
          <?php } ?>

          <?php
          $content = new Area('flow__ttl03');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="flow">
          <div class="flow__in">
            <h4 class="flow__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <?php
            $content = new Area('flow__img03');
            if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
            ?>
            <div class="flow__column2">
              <figure class="flow__column2__img"><?php	$content->display($c); ?></figure>
              <div class="flow__column2__lead">
                <?php
                 	$content = new Area('flow__column2__lead03');
                 	$content->display($c);
                ?>
              </div>
            </div>
            <?php } ?>
            <p class="flow__lead">
              <?php
               	$content = new Area('flow__lead03');
               	$content->display($c);
              ?>
            </p>
            <p class="flow__summary">
              <?php
               	$content = new Area('flow__summary03');
               	$content->display($c);
              ?>
            </p>
          </div><!--flow__in-->
          </li>
          <?php } ?>

          <?php
          $content = new Area('flow__ttl04');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="flow">
          <div class="flow__in">
            <h4 class="flow__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <?php
            $content = new Area('flow__img04');
            if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
            ?>
            <div class="flow__column2">
              <figure class="flow__column2__img"><?php	$content->display($c); ?></figure>
              <div class="flow__column2__lead">
                <?php
                 	$content = new Area('flow__column2__lead04');
                 	$content->display($c);
                ?>
              </div>
            </div>
            <?php } ?>
            <p class="flow__lead">
              <?php
               	$content = new Area('flow__lead04');
               	$content->display($c);
              ?>
            </p>
            <p class="flow__summary">
              <?php
               	$content = new Area('flow__summary04');
               	$content->display($c);
              ?>
            </p>
          </div><!--flow__in-->
          </li>
          <?php } ?>

          <?php
          $content = new Area('flow__ttl05');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="flow">
          <div class="flow__in">
            <h4 class="flow__ttl is-ttl05"><?php $content->display($c); ?></h4>
            <?php
            $content = new Area('flow__img05');
            if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
            ?>
            <div class="flow__column2">
              <figure class="flow__column2__img"><?php	$content->display($c); ?></figure>
              <div class="flow__column2__lead">
                <?php
                 	$content = new Area('flow__lead05');
                 	$content->display($c);
                ?>
              </div>
            </div>
            <?php } ?>
            <p class="flow__lead">
              <?php
               	$content = new Area('flow__column2__lead05');
               	$content->display($c);
              ?>
            </p>
            <p class="flow__summary">
              <?php
               	$content = new Area('flow__summary05');
               	$content->display($c);
              ?>
            </p>
          </div><!--flow__in-->
          </li>
          <?php } ?>
        </ul>

        <p class="mid05__li_box__a">
          <?php
           	$content = new Area('（aタグをclass=is-btn04で入力02）');
           	$content->display($c);
          ?>
        </p>
      </div><!--mid05__li_box__in-->
      </section><!--mid05__li_box-->

      <section class="mid05__sec">
      <div class="mid05__sec__in">
        <h3 class="mid05__sec__ttl is-ttl03"><span>
          <?php
            $content = new Area('mid05_sec_ttl');
            $content->display($c);
          ?>
        </span></h3>
        <ul class="mid05__sec__li">
          <?php
            $content = new Area('（liとaとテキストをhtmlで入力）');
            $content->display($c);
          ?>
        </ul>
      </div><!--mid05__sec__in-->
      </section><!--mid05__sec-->

<?php /*
      <section class="mid05__sec">
      <div class="mid05__sec__in">
        <h3 class="mid05__sec__ttl is-ttl01"><span>
          <?php
           	$content = new Area('mid05_slider_ttl01');
           	$content->display($c);
          ?>
        </span></h3>
        <ul class="mid05__slider">
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
          <li><a href=""><img src="//placehold.jp/200x130.png" alt=""></a></li>
        </ul>
      </div><!--mid05__sec__in-->
      </section><!--mid05__sec-->
*/ ?>

    </section><!--mid05-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
