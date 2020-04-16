<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="leaf13">
      <h2 class="leaf13__ttl is-ttl02"><span><?php echo $c->getCollectionName(); ?></span></h2>

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
      <section class="leaf13__sec">
      <div class="leaf13__sec__in">
        <ul class="company_list">
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/profile">会社概要</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/greeting">社長挨拶</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/philosophy">企業理念</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/access">アクセスマップ</a></li>
          <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/careers">採用情報</a></li>
        </ul>
      </div><!--leaf13__sec__in-->
      </section><!--leaf13__sec-->
      <?php } ?>

      <section class="leaf13__sec">
      <div class="leaf13__sec__in">
          <?php
            $content = new Area('leaf13_sec');
            $content->display($c);
          ?>
      </div><!--leaf13__sec__in-->
      </section><!--leaf13__sec-->

    </section><!--leaf13-->

  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
