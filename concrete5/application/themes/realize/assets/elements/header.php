<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php Loader::element('header_required')?>
  <meta name="format-detection" content="telephone=no">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Domine:400">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Arapey">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script src="<?php echo $view->getThemePath()?>/assets/dist/bundle.js"></script>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="wr <?php echo $c->getPageWrapperClass()?>">

  <header class="hd is-pc" role="banner">
    <div class="hd__in">
      <h1 class="hd__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/"><img src="<?php echo $view->getThemePath()?>/assets/img/common/logo_realize.svg" alt="Relize"></a>
        <span>Realize</span>
      </h1>
      <nav class="nv" role="navigation">
        <ul class="nv__li">
          <li>
            <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/"><span>Solution</span></a>
            <ul class="nv__li__in">
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
          </li>
          <li>
            <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/"><span>Method</span></a>
            <ul class="nv__li__in">
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/addresses/">名寄せ</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/data-cleansing/">データクレンジング</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/data-governance/">データガバナンス構築</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/cleansing/">名寄せ・データクレンジングツール</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/"><span>Features</span></a>
            <ul class="nv__li__in">
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/particular/">リアライズのこだわり</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/introduction/">課題と解決方法の紹介</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/flow/">見積～開始までの手順</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/proceed/">進め方・アプローチ</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/case/"><span>Work</span></a>
            <ul class="nv__li__in<?php if($c->isEditMode()) echo ' is-active'; ?>">
              <?php
              $a = new GlobalArea('work');
              $a->display();
              ?>
            </ul>
          </li>
          <li>
            <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/profile/"><span>Company</span></a>
            <ul class="nv__li__in">
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/profile">会社概要</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/greeting">社長挨拶</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/philosophy">企業理念</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/access">アクセスマップ</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/careers">採用情報</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/news">ニュース</a></li>
              <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/event">イベント</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/contact" class="hd__btn is-btn02">contact</a>
    </div>
  </header><!--header-->

  <header class="hd is-sp" role="banner">
    <div class="hd__in">
      <h1 class="hd__ttl"><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/"><img src="<?php echo $view->getThemePath()?>/assets/img/common/logo_realize.svg" alt="Relize"></a>
        <span>Realize</span>
      </h1>
      <a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/contact" class="hd__btn is-mail is-btn02"></a>
      <a class="hd__btn is-nv js-nv is-btn02"></a>
    </div>
  </header><!--header-->

  <nav class="nv is-sp" role="navigation">
  <a class="js-close nv__btn"></a>
    <ul class="nv__li">
      <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/solution/">Solution</a></li>
      <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/method/">Method</a></li>
      <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/features/">Features</a></li>
      <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/case/">Work</a></li>
      <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/company/profile/">Company</a></li>
    </ul>
  </nav>

  <?php if($c->getCollectionHandle()){ ?>
    <div class="breadcrumbs">
      <ol class="breadcrumbs__li">
        <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']; ?>/"><span>ホーム</span></a></li>
        <?php
        $parent = Page::getByID($c->getCollectionParentID());
        if($parent->cParentID != 0){
        ?>
        <li><a href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$parent->cPath; ?>"><span><?php echo $parent->getCollectionName(); ?></span></a></li>
        <?php } ?>
        <li><span><?php echo $c->getCollectionName(); ?></span></li>
      </ol>
    </div><!--breadcrumbs-->
  <?php } ?>
