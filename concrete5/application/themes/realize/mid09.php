<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>

  <main class="mn" role="main">

    <section class="mid09">
      <h2 class="mid09__ttl is-ttl00">
        <span class="mid09__ttl__img"><img src="<?php echo $view->getThemePath()?>/assets/img/example/img_example.png" alt="<?php echo $c->getCollectionName(); ?>"></span>
        <span class="mid09__ttl__txt"><?php echo $c->getCollectionName(); ?></span>
      </h2>

      <div class="mid09__menu">
        <ol class="mid09__menu__li">
          <li><a href="#01">あ行</a></li>
          <li><a href="#02">か行</a></li>
          <li><a href="#03">さ行</a></li>
          <li><a href="#04">た行</a></li>
          <li><a href="#05">な行</a></li>
          <li><a href="#06">は行</a></li>
          <li><a href="#07">ま行</a></li>
          <li><a href="#08">や行</a></li>
          <li><a href="#09">ら・わ行</a></li>
          <li><a href="#10">A-Z</a></li>
        </ol>
      </div>

      <div class="mid09__sec">
      <div class="mid09__sec__in">
        <ol class="mid09__li c-clearfix">
          <li id="01">
            <div class="word">
              <h3 class="word__ttl"><span>あ</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力01）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="02">
            <div class="word">
              <h3 class="word__ttl"><span>か</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力02）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="03">
            <div class="word">
              <h3 class="word__ttl"><span>さ</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力03）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="04">
            <div class="word">
              <h3 class="word__ttl"><span>た</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力04）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="05">
            <div class="word">
              <h3 class="word__ttl"><span>な</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力05）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="06">
            <div class="word">
              <h3 class="word__ttl"><span>は</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力06）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="07">
            <div class="word">
              <h3 class="word__ttl"><span>ま</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力07）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="08">
            <div class="word">
              <h3 class="word__ttl"><span>や</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力08）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="09">
            <div class="word">
              <h3 class="word__ttl"><span>ら・わ</span>行</h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力09）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
          <li id="10">
            <div class="word">
              <h3 class="word__ttl"><span>A-Z</span></h3>
              <ul class="word__li">
                <?php
                  $content = new Area('（liとaとテキストをhtmlで入力10）');
                  $content->display($c);
                ?>
              </ul>
            </div>
          </li>
        </ol>
      </div><!--mid09__sec__in-->
      </div><!--mid09__sec-->

    </section><!--mid09-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
