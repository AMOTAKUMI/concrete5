<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="leaf14">
      <h2 class="leaf14__ttl is-ttl02"><span><?php echo $c->getCollectionName(); ?></span></h2>

      <?php
      $url  = $_SERVER["REQUEST_URI"];
      $keys = parse_url($url);
      $path = explode("/", $keys['path']);
      $last = end($path);

      if($last == 'profile' ||
         $last == 'greeting' ||
         $last == 'philosophy' ||
         $last == 'access' ||
         $last == 'careers'){
      ?>
      <section class="leaf14__sec">
      <div class="leaf14__sec__in">
        <ul class="company_list">
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/index.php/company/profile">会社概要</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/index.php/company/greeting">社長挨拶</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/index.php/company/philosophy">企業理念</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/index.php/company/access">アクセスマップ</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/index.php/company/careers">採用情報</a></li>
        </ul>
      </div><!--leaf14__sec__in-->
      </section><!--leaf14__sec-->
      <?php } ?>

      <section class="leaf14__sec">
      <div class="leaf14__sec__in">


        <dl class="leaf14__def">
          <dt><span>社名</span></dt>
          <dd>
            <?php
              $content = new Area('leaf14_def_dt01');
              $content->display($c);
            ?>
          </dd>
        </dl>
        <dl class="leaf14__def">
          <dt><span>設立</span></dt>
          <dd>
            <?php
              $content = new Area('leaf14_def_dt02');
              $content->display($c);
            ?>
          </dd>
        </dl>
        <dl class="leaf14__def">
          <dt><span>所在地</span></dt>
          <dd>
            <?php
              $content = new Area('leaf14_def_dt03');
              $content->display($c);
            ?>
          </dd>
        </dl>
        <dl class="leaf14__def">
          <dt><span>役員等</span></dt>
          <dd>
            <?php
              $content = new Area('leaf14_def_dt04');
              $content->display($c);
            ?>
          </dd>
        </dl>
        <dl class="leaf14__def">
          <dt><span>資本金</span></dt>
          <dd>
            <?php
              $content = new Area('leaf14_def_dt05');
              $content->display($c);
            ?>
          </dd>
        </dl>
        <dl class="leaf14__def">
          <dt><span>出資比率</span></dt>
          <dd>
            <?php
              $content = new Area('leaf14_def_dt06');
              $content->display($c);
            ?>
          </dd>
        </dl>
        <dl class="leaf14__def">
          <dt><span>従業員数</span></dt>
          <dd>
            <?php
              $content = new Area('leaf14_def_dt07');
              $content->display($c);
            ?>
          </dd>
        </dl>

      </div><!--leaf14__sec__in-->
      </section><!--leaf14__sec-->

      <section class="leaf14__client">
      <div class="leaf14__client__in">
        <h3 class="leaf14__client__ttl is-ttl01"><span>主なお取引先</span></h3>
        <ul class="leaf14__client__li">
          <?php
            $content = new Area('（liとテキストをhtmlで入力）');
            $content->display($c);
          ?>
        </ul>
        <p class="leaf14__client__anote">（※順不問）</p>
      </div><!--leaf14__client__in-->
      </section><!--leaf14__client-->

    </section><!--leaf14-->

  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
