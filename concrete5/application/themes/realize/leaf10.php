<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">
      <div class="leaf10">
      <div class="leaf10__in">
        <section class="leaf10__post">
          <h2 class="leaf10__ttl is-ttl03"><span><?php echo $c->getCollectionName(); ?></span></h2>
          <div class="leaf10__post__in">
            <?php
             	$content = new Area('leaf10__sec__in');
             	$content->display($c);
            ?>
          </div><!--leaf10__post__in-->
        </section><!--leaf10__post-->
        <?php
        $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        ?>
        <div class="fb-like" data-href="<?php echo $url; ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>

      </div><!--leaf10__in-->
      </div><!--leaf10-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
