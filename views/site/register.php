<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->title = Yii::t('app', 'Sign Up');
?>

<h1><?= Html::encode($this->title) ?></h1>
<p><?= Yii::t('app', 'Please, register:') ?></p>
<?php $registerForm = ActiveForm::begin([
        'id' => 'register-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label'],
        ],
    ]); ?>
<?=$registerForm->errorSummary($newUser);  ?>
<?= $registerForm->field($newUser, 'username')->textInput(['autofocus' => true]) ?>
<?= $registerForm->field($newUser, 'email')->textInput() ?>
<?= $registerForm->field($newUser, 'password')->passwordInput(['value'=>'']) ?>
<?= $registerForm->field($newUser, 'password_repeat')->passwordInput(['value'=>'']) ?>
<div class="form-group">
    <div class="offset-lg-1 col-lg-11">
    <?= Html::submitButton(Yii::t('app', 'Sign up'), ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
