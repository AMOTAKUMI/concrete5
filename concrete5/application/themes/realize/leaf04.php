<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="leaf04">
      <div class="leaf04__ttl_box">
      <div class="leaf04__ttl_box__in">
        <h2 class="leaf04__ttl is-ttl04">
          <?php
            $content = new Area('leaf04_ttl');
            $content->display($c);
          ?>
        </h2>
        <p class="leaf04__lead">
          <?php
            $content = new Area('leaf04_lead');
            $content->display($c);
          ?>
        ​</p>
      </div><!--leaf04__ttl_box__in-->
      </div><!--leaf04__ttl_box-->

      <section class="leaf04__sec">
      <div class="leaf04__sec__in">
        <h3 class="leaf04__sec__ttl is-ttl03"><span>
          <?php
            $content = new Area('leaf04_sec_ttl');
            $content->display($c);
          ?>
        </span></h3>
        <ol class="leaf04__li">

          <?php
          $content = new Area('solution_box_problem_dd01');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="solution_box">
          <div class="solution_box__in">
            <div class="solution_box__problem_solution">
              <dl class="solution_box__problem">
                <dt>課題</dt>
                <dd><?php $content->display($c); ?></dd>
              </dl>
              <dl class="solution_box__solution">
                <dt>解決策</dt>
                <dd>
                  <?php
                    $content = new Area('solution_box_solution_dd01');
                    $content->display($c);
                  ?>
                </dd>
              </dl>
            </div><!--problem_solution-->
            <div class="solution_box__summary">
              <div class="solution_box__summary__solution">
                <h4 class="is-ttl05">リアライズのソリューション
                </h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力01）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
              <div class="solution_box__summary__relation">
                <h4 class="is-ttl05">関連する記事</h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力02）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
            </div><!--solution_box__summary-->
          </div><!--solution_box__in-->
          </li>
          <?php } ?>

          <?php
          $content = new Area('solution_box_problem_dd02');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="solution_box">
          <div class="solution_box__in">
            <div class="solution_box__problem_solution">
              <dl class="solution_box__problem">
                <dt>課題</dt>
                <dd><?php $content->display($c); ?></dd>
              </dl>
              <dl class="solution_box__solution">
                <dt>解決策</dt>
                <dd>
                  <?php
                    $content = new Area('solution_box_solution_dd02');
                    $content->display($c);
                  ?>
                </dd>
              </dl>
            </div><!--problem_solution-->
            <div class="solution_box__summary">
              <div class="solution_box__summary__solution">
                <h4 class="is-ttl05">リアライズのソリューション
                </h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力03）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
              <div class="solution_box__summary__relation">
                <h4 class="is-ttl05">関連する記事</h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力04）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
            </div><!--solution_box__summary-->
          </div><!--solution_box__in-->
          </li>
          <?php } ?>

          <?php
          $content = new Area('solution_box_problem_dd03');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="solution_box">
          <div class="solution_box__in">
            <div class="solution_box__problem_solution">
              <dl class="solution_box__problem">
                <dt>課題</dt>
                <dd><?php $content->display($c); ?></dd>
              </dl>
              <dl class="solution_box__solution">
                <dt>解決策</dt>
                <dd>
                  <?php
                    $content = new Area('solution_box_solution_dd03');
                    $content->display($c);
                  ?>
                </dd>
              </dl>
            </div><!--problem_solution-->
            <div class="solution_box__summary">
              <div class="solution_box__summary__solution">
                <h4 class="is-ttl05">リアライズのソリューション
                </h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力05）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
              <div class="solution_box__summary__relation">
                <h4 class="is-ttl05">関連する記事</h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力06）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
            </div><!--solution_box__summary-->
          </div><!--solution_box__in-->
          </li>
          <?php } ?>

          <?php
          $content = new Area('solution_box_problem_dd04');
          if ($c->isEditMode() || $content->getTotalBlocksInArea($c) > 0) {
          ?>
          <li class="solution_box">
          <div class="solution_box__in">
            <div class="solution_box__problem_solution">
              <dl class="solution_box__problem">
                <dt>課題</dt>
                <dd><?php $content->display($c); ?></dd>
              </dl>
              <dl class="solution_box__solution">
                <dt>解決策</dt>
                <dd>
                  <?php
                    $content = new Area('solution_box_solution_dd04');
                    $content->display($c);
                  ?>
                </dd>
              </dl>
            </div><!--problem_solution-->
            <div class="solution_box__summary">
              <div class="solution_box__summary__solution">
                <h4 class="is-ttl05">リアライズのソリューション
                </h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力07）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
              <div class="solution_box__summary__relation">
                <h4 class="is-ttl05">関連する記事</h4>
                <ul>
                  <?php
                    $content = new Area('（liとaとテキストをhtmlで入力08）');
                    $content->display($c);
                  ?>
                </ul>
              </div>
            </div><!--solution_box__summary-->
          </div><!--solution_box__in-->
          </li>
          <?php } ?>

        </ol><!--leaf04__li-->
      </div><!--leaf04__sec__in-->
      </section><!--leaf04__sec-->

    </section><!--leaf04-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
