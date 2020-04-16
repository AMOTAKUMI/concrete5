<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('assets/elements/header.php'); ?>
  <ul class="slider">
    <li><img src="<?php echo $view->getThemePath()?>/assets/img/top/img_slider01.png" alt=""></li>
    <li class="is-catch c-central">
    <div class="slider__in c-central__item">
      <span class="slider__ttl01">Professional of Data management</span>
      <span class="slider__ttl02">リアライズはデータマネジメントを通じてお客様の情報活用を実現する<br />プロフェッショナル集団です</span>
    </div>
    </li>
  </ul>

  <main class="mn" role="main">

    <section class="features">
      <h2 class="features__ttl is-ttl01"><span>Features</span></h2>
      <div class="features__in">
        <figure class="features__img"><img src="<?php echo $view->getThemePath()?>/assets/img/top/img_features.png" alt="Features"></figure><!--features__img-->
        <div class="features__txt">
          <h3 class="features__txt__ttl">リアライズはデータマネジメント領域の全般に対して、一気通貫のソリューションをご提供します</h3>
          <p class="features__txt__lead">
            <?php
              $content = new Area('features__txt__lead');
              $content->display($c);
            ?>
          </p>
          <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features" class="features__txt__a is-btn01">View More</a>
        </div><!--features__txt-->
      </div><!--features__in-->
    </section><!--features-->

    <section class="solution">
      <h2 class="solution__ttl is-ttl01"><span>Solution</span></h2>
      <div class="solution__in">
        <figure class="solution__img"><img src="<?php echo $view->getThemePath()?>/assets/img/top/img_solution.png" alt="Solution"></figure><!--solution__img-->
        <div class="solution__txt">
          <h3 class="solution__txt__ttl">お客様の目的にそったデータマネジメントをご提供します</h3>
          <p class="solution__txt__lead">
            <?php
              $content = new Area('solution__txt__lead');
              $content->display($c);
            ?>
          </p>
          <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution" class="solution__txt__a is-btn01">View More</a>
        </div><!--solution__txt-->
      </div><!--solution__in-->
    </section><!--solution-->

    <section class="method">
      <div class="method__in">
        <h2 class="method__ttl is-ttl01"><span>Method</span></h2>
        <p class="method__txt">高品質を維持するために、様々なデータマネジメント手法を組み合わせてご提供します</p>
        <ul class="method__li">
          <li>
            <figure class="method__li__img">
              <img src="<?php echo $view->getThemePath()?>/assets/img/top/img_method01.png" alt="名寄せ">
              <figcaption>名寄せ</figcaption>
            </figure>
          </li>
          <li>
            <figure class="method__li__img">
              <img src="<?php echo $view->getThemePath()?>/assets/img/top/img_method02.png" alt="データクレンジング">
              <figcaption>データクレンジング</figcaption>
            </figure>
          </li>
          <li>
            <figure class="method__li__img">
              <img src="<?php echo $view->getThemePath()?>/assets/img/top/img_method03.png" alt="データガバナンス構築">
              <figcaption>データガバナンス構築</figcaption>
            </figure>
          </li>
          <li>
            <figure class="method__li__img">
              <img src="<?php echo $view->getThemePath()?>/assets/img/top/img_method04.png" alt="データマネジメント教育">
              <figcaption>データマネジメント教育</figcaption>
            </figure>
          </li>
        </ul>
        <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method" class="method__a is-btn01">View More</a>
      </div><!--method__in-->
    </section><!--method-->

    <section class="works">
      <h2 class="works__ttl is-ttl01"><span>Works</span></h2>
      <div class="works__in">
        <ul class="works__li">
          <?php
            $content = new Area('（liとaとimg01）');
            $content->display($c);
          ?>
        </ul>
        <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/case" class="contents__li__a is-btn01">View More</a>
      </div><!--works__in-->
    </section><!--works-->

    <section class="contents">
      <h2 class="contents__ttl is-ttl01"><span>Contents</span></h2>
      <div class="contents__in">
        <ul class="contents__li">
          <li>
            <figure class="contents__li__img contents__li--keyword">
              <img src="<?php echo $view->getThemePath()?>/assets/img/top/keyword.jpg" alt="KeyWord">
              <figcaption>KeyWord</figcaption>
            </figure>
            <h3 class="contents__li__ttl">データマネジメントでよく使われる<br>専門用語を解説</h3>
            <p class="contents__li__lead">データマネジメント業界でよく使用される<br>専門用語をわかりやすく解説します</p>
            <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/glossary" class="contents__li__a is-btn01">View More</a>
          </li>
          <li>
            <figure class="contents__li__img contents__li--tips">
              <img src="<?php echo $view->getThemePath()?>/assets/img/top/blog.jpg" alt="Tips">
              <figcaption>blog</figcaption>
            </figure>
            <h3 class="contents__li__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/blog/pmsakurai01">【最新ブログ】移行データをどう作る？ データ移行経験20年のベテランが語る絶対知っておきたいデータ移行のポイント！</a></h3>
            <p class="contents__li__lead">この数年、データ移行の問い合わせが増えています。<br>しかしシステム開発者は、システムは作っても移行データは作ってくれない場合多く・・・・</p>
           <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/blog" class="works__a is-btn01">View More</a>
          </li>
          <li>
            <figure class="contents__li__img contents__li--document">
              <img src="<?php echo $view->getThemePath()?>/assets/img/top/document.jpg" alt="Document">
              <figcaption>Library</figcaption>
            </figure>
            <h3 class="contents__li__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/white-paper/whitepaper03">【資料ダウンロード】データ活用の最大にして最後の難関「データ移行」を成功させるポイント</h3>
            <p class="contents__li__lead">データを積極的に経営に活かすために<br>重要となるのがデータの「品質」です。<br>品質改善に向けての具体的なアクションを解説</p>
           <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/white-paper" class="contents__li__a is-btn01">View More</a>
          </li>
        </ul>
      </div><!--contents__in-->
    </section><!--contents-->

    <div class="post">
      <div class="post__in">
        <section class="news">
          <h2 class="news__ttl c-hover is-ttl01"><span><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/news">News</a></span></h2>
          <ul class="news__li">
            <?php
              $content = new Area('NEWS');
              $content->display($c);
            ?>
          </ul>
        </section><!--news-->
        <section class="event">
          <h2 class="event__ttl c-hover is-ttl01"><span><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/event">Event</a></span></h2>
          <ul class="event__li">
            <?php
              $content = new Area('EVENT');
              $content->display($c);
            ?>
          </ul>
        </section><!--event-->
      </div><!--post__in-->
    </div><!--post-->
    <section class="contact">
      <div class="contact__in">
        <h2 class="contact__ttl is-ttl01"><span>Contact</span></h2>
        <div class="contact__cnt">
          <section class="contact__mail">
            <h3 class="contact__mail__ttl">データマネジメントに関するお問合せ・ご相談</h3>
            <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/contact" class="contact__mail__a">メールフォームはこちら<span></span></a>
            <!--p class="contact__mail__info">info@realize-corp.jp</p-->
          </section><!--contact__mail-->
          <section class="contact__tel">
            <h3 class="contact__tel__ttl">お電話でのお問合せ・ご相談</h3>
            <div class="contact__tel__in">
              <p class="contact__tel__number">03-6734-9888</p>
              <p class="contact__tel__date">（平日10:00〜18:00）</p>
            </div><!--contact__tel__in-->
          </section><!--contact__tel-->
        </div><!--contact__cnt-->
      </div><!--contact-->
    </section><!--contact-->
  </main>
<?php $view->inc('assets/elements/footer.php'); ?>
