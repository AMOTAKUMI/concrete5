<?php
defined('C5_EXECUTE') or die("Access Denied.");
global $TTL;
global $FILE;
if(isset($success)) $FILE = true;
?>
<?php if (isset($renderer)) { ?>
    <a name="form<?php echo $bID?>"></a>


    <?php if (isset($success)) { ?>
    <section class="leaf16__txt">
    <div class="leaf16__txt__in">
      <p class="leaf16__txt__lead">
        ホワイトペーパーダウンロード誠にありがとうございます。<br />
        対象ファイル名：<?php echo $TTL; ?>.pdfの<br />
        ダウンロードは以下より行えます。
      </p>
    </div><!--leaf16__txt__in-->
    </section>
    <?php } else { ?>
      <section class="leaf16__txt">
      <div class="leaf16__txt__in">
        <p class="leaf16__txt__ttl">対象ファイル名：<?php echo $TTL; ?>.pdf</p>
        <p class="leaf16__txt__lead">
          こちらのホワイトペーパーをダウンロードご希望の方は、以下の入力フォーム後の画面（サンクスページ）<br />
          よりダウンロードをお願い致します。
        </p>
      </div><!--leaf16__txt__in-->
      </section>

    <?php } ?>

    <?php if (isset($error) && is_object($error)) { ?>
        <div class="alert alert-danger"><?php echo $error->output()?></div>
    <?php } ?>

    <?php if (!isset($success)) { ?>
    <form enctype="multipart/form-data" class="form-stacked" method="post" action="<?php echo $view->action('submit')?>#form<?php echo $bID?>">
    <?php
    print $renderer->render();
    if ($displayCaptcha) {
        $captcha = \Core::make('helper/validation/captcha');
        ?>
        <div class="form-group captcha">
            <?php
            $captchaLabel = $captcha->label();
            if (!empty($captchaLabel)) {
            ?>
              <label class="control-label"><?php echo $captchaLabel; ?></label>
            <?php } ?>
            <div><?php  $captcha->display(); ?></div>
            <div><?php  $captcha->showInput(); ?></div>
        </div>
    <?php } ?>
    <div class="form-actions">
        <button type="submit" name="Submit" class="btn btn-primary"><?php echo t($submitLabel)?></button>
    </div>
    </form>
    <?php } ?>

<?php } else { ?>
    <p><?php echo t('This form is unavailable.')?></p>
<?php } ?>
