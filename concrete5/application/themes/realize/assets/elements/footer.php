<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php if($c->getCollectionHandle()){ ?>
  <div class="contact_sec">
  <div class="contact_sec__in">
    <div class="contact_sec__download">
      <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/white-paper" class="contact_sec__download__btn is-btn03"><span></span>参考資料ダウンロード</a>
    </div>
    <div class="contact_sec__contact">
      <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/contact" class="contact_sec__contact__btn is-btn03"><span></span>お問い合わせ</a>
    </div>
  </div><!--contact_sec__in-->
  </div><!--contact_sec__contact-->
<?php } ?>
  <footer class="ft" role="contentinfo">
    <div class="ft__in">
      <div class="ft__main_cnt">
        <section class="ft__solution">
          <h3 class="ft__solution__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution">Solution</a></h3>
          <ul class="ft__solution__li">
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/data-integration/">データ統合</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/data-migration/">データ移行</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/data-management/">データマネジメント定着化</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/customer-data/">顧客データ整備</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/procurement-data/">調達品データ整備</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/ec-data/">EC商品データ整備</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/asset-management/">IT資産管理</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/outsourcing/">データ運用アウトソーシング</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/data-master/">Data-Master</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/toppage/">TOPPAGE</a></li>
          </ul>
        </section>
        <section class="ft__method">
          <h3 class="ft__method__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method">Method</a></h3>
          <ul class="ft__method__li">
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/addresses/">名寄せ</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/data-cleansing/">データクレンジング</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/data-governance/">データガバナンス構築</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/cleansing/">データクレンジングツール</a></li>
          </ul>
        </section>
        <section class="ft__features">
          <h3 class="ft__features__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features">Features</a></h3>
          <ul class="ft__features__li">
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/particular/">リアライズのこだわり</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/introduction/">課題と解決方法の紹介</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/flow/">見積～開始までの手順</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/proceed/">進め方・アプローチ</a></li>
          </ul>
        </section>
        <section class="ft__work">
          <h3 class="ft__work__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/case">Work</a></h3>
          <ul class="ft__work__li">
            <?php
            $a = new GlobalArea('work');
            $a->display();
            ?>
          </ul>
        </section>
      </div><!--ft__main_cnt-->

      <div class="ft__cnts">
        <div class="ft__nv">
          <ul class="ft__nv__li">
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/profile">会社概要</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/greeting">社長挨拶</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/philosophy">企業理念</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/access">アクセスマップ</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/careers">採用情報</a></li>
          </ul>
          <ul class="ft__nv__li">
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/sitemap">サイトマップ</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/site-policy">サイトポリシー</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/privacy-policy">プライバシーポリシー</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/security">情報セキュリティ方針</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/contact">お問い合わせ</a></li>
          </ul>
          <ul class="ft__nv__li">
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/glossary">用語集</a></li>
			      <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/news">ニュース</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/event">イベント</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/blog">ブログ</a></li>
            <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/white-paper">資料ダウンロード</a></li>
          </ul>
        </div>
        <div class="ft__corp">
          <div class="ft__corp__in">
            <div class="ft__corp__ttl">
              <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/"><img src="<?php echo $view->getThemePath()?>/assets/img/common/logo_realize_white.svg" alt="Realize"></a>
            </div>
            <div class="ft__corp__add">
              <p>東京都江東区木場5-5-2　CN-1ビル 6F</p>
              <p><a href="tel:0367349888">03-6734-9888</a></p>
            </div>
          </div>
          <small class="ft__corp__copy">Copyright(C) Realize Corporation All Rights Reserved.</small>
        </div><!--ft__corp-->
      </div><!--ft__cnts-->
    </div><!--ft__in-->

    <div class="ft__other">
      <div class="ft__other__in">
        <span class="ft__other__isms">
          <img src="<?php echo $view->getThemePath()?>/assets/img/common/logo_isms.png" alt="ISMS">
          <span>IS 534084 / ISO 27001</span>
        </span>
        <a class="ft__other__ntt" href="//www.nttdata.com/jp/ja/index.html" target="_blank"><img src="<?php echo $view->getThemePath()?>/assets/img/common/logo_ntt_data.svg" alt="NTT DATA"></a>
      </div>
    </div>

  </footer>

</div><!--wr-->
<?php Loader::element('footer_required')?>
</body>
</html>
