<?php
/************************************************************
 * DESIGNERS: SCROLL DOWN! (IGNORE ALL THIS STUFF AT THE TOP)
 ************************************************************/
defined('C5_EXECUTE') or die("Access Denied.");
use \Concrete\Block\Form\MiniSurvey;

$survey = $controller;
$miniSurvey = new MiniSurvey($b);
$miniSurvey->frontEndMode = true;

//Clean up variables from controller so html is easier to work with...
$bID = intval($bID);
$qsID = intval($survey->questionSetId);
$formAction = $view->action('submit_form').'#formblock'.$bID;

$questionsRS = $miniSurvey->loadQuestions($qsID, $bID);
$questions = [];
while ($questionRow = $questionsRS->fetchRow()) {
    $question = $questionRow;
    $question['input'] = $miniSurvey->loadInputType($questionRow, false);

    //Make type names common-sensical
    if ($questionRow['inputType'] == 'text') {
        $question['type'] = 'textarea';
    } elseif ($questionRow['inputType'] == 'field') {
        $question['type'] = 'text';
    } else {
        $question['type'] = $questionRow['inputType'];
    }

    $question['labelFor'] = 'for="Question' . $questionRow['msqID'] . '"';

    //Remove hardcoded style on textareas
    if ($question['type'] == 'textarea') {
        $question['input'] = str_replace('style="width:95%"', '', $question['input']);
    }

    $questions[] = $question;
}

//Prep thank-you message
$success = (\Request::request('surveySuccess') && \Request::request('qsid') == intval($qsID));
$thanksMsg = $survey->thankyouMsg;

//Collate all errors and put them into divs
$errorHeader = isset($formResponse) ? $formResponse : null;
$errors = isset($errors) && is_array($errors) ? $errors : [];
if (isset($invalidIP) && $invalidIP) {
    $errors[] = $invalidIP;
}
$errorDivs = '';
foreach ($errors as $error) {
    $errorDivs .= '<div class="error">'.$error."</div>\n"; //It's okay for this one thing to have the html here -- it can be identified in CSS via parent wrapper div (e.g. '.formblock .error')
}

//Prep captcha
$surveyBlockInfo = $miniSurvey->getMiniSurveyBlockInfoByQuestionId($qsID, $bID);
$captcha = $surveyBlockInfo['displayCaptcha'] ? Loader::helper('validation/captcha') : false;

/******************************************************************************
* DESIGNERS: CUSTOMIZE THE FORM HTML STARTING HERE...
*/?>

<?php  if ($success): ?>
  <section class="leaf16__txt">
  <div class="leaf16__txt__in">
    <h3 class="leaf16__txt__ttl">対象ファイル名：<?php echo $c->getCollectionName(); ?></h3>
    <p class="leaf16__txt__lead">こちらのホワイトペーパーをダウンロードご希望の方は、以下の入力フォーム後の画面(サンクスページ) よりダウンロードをお願い致します。</p>
  </div><!--leaf16__txt__in-->
  </section>
<?php  elseif (!$success): ?>
  <section class="leaf16__txt">
  <div class="leaf16__txt__in">
    <p class="leaf16__txt__lead">
      ホワイトペーパーダウンロード誠にありがとうございます。<br />
      対象ファイル名：<?php echo $c->getCollectionName(); ?>の<br />
      ダウンロードは以下より行えます。
    </p>
  </div><!--leaf16__txt__in-->
  </section>
<?php  endif; ?>


<?php  if ($success): ?>
  <div class="alert alert-success">
    <?php  echo h($thanksMsg); ?>
  </div>
<?php  elseif ($errors): ?>
  <div class="alert alert-danger">
    <?php  echo $errorHeader; ?>
    <?php  echo $errorDivs; /* each error wrapped in <div class="error">...</div> */ ?>
  </div>
<?php  endif; ?>

<div id="formblock<?php  echo $bID; ?>" class="ccm-block-type-form">
<form enctype="multipart/form-data" class="form-stacked miniSurveyView" id="miniSurveyView<?php  echo $bID; ?>" method="post" action="<?php  echo $formAction ?>">
    <?php echo Core::make('token')->output('form_block_submit_qs_'.$qsID);?>



  <?php  if (！$success): ?>
	<div class="fields">
		<?php  foreach ($questions as $question): ?>
			<div class="form-group field field-<?php  echo $question['type']; ?> <?php echo isset($errorDetails[$question['msqID']]) ? 'has-error' : ''?>">
				<label class="control-label" <?php  echo $question['labelFor']; ?>>
					<?php  echo $question['question']; ?>
          <?php if ($question['required']): ?><span class="text-muted small" style="font-weight: normal"><?php echo t("Required")?></span><?php  endif; ?>
				</label>
				<?php  echo $question['input']; ?>
			</div>
		<?php  endforeach; ?>
	</div><!-- .fields -->
  <?php  endif; ?>

	<?php  if ($captcha): ?>
		<div class="form-group captcha">
			<?php
            $captchaLabel = $captcha->label();
            if (!empty($captchaLabel)) {
                ?>
				<label class="control-label"><?php echo $captchaLabel; ?></label>
				<?php

            }
            ?>
			<div><?php  $captcha->display(); ?></div>
			<div><?php  $captcha->showInput(); ?></div>
		</div>
	<?php  endif; ?>

	<div class="form-actions">
		<input type="submit" name="Submit" class="btn btn-primary" value="<?php  echo h(t($survey->submitText)); ?>" />
	</div>

	<input name="qsID" type="hidden" value="<?php  echo $qsID; ?>" />
	<input name="pURI" type="hidden" value="<?php  echo isset($pURI) ? $pURI : ''; ?>" />

</form>
</div><!-- .formblock -->