<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/16/16
 * Time: 10:26 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \dosamigos\ckeditor\CKEditor;
use \backend\models\Companies;
use app\models\User;
?>
<?=$this->render('/layouts/_eshopmenu', ['layoutPath'=>$layoutPath, 'id'=>$id]);?>
<div id="container">
    <div style="margin-top: 10px;"></div>
    <h2 style="color: red; margin: 0; padding: 10px; float: left">ОТЗЫВЫ</h2>
    <div class="clear"></div>
    <div style="border-bottom: 1px solid red;"></div>
    <div style="padding: 10px;">
        <? foreach ($reviews as $key => $review):
            $user = User::find()->where(['id' => $review->id_user])->one();
        ?>
            <div class="review-comment">
                <? if ($user->avatar):?>
                    <img src="/images/eshopreview/<?=$user->avatar;?>">
                <? else: ?>
                    <img src="/images/eshopreview/placeholder.png">
                <? endif; ?>
                <p>
                    <span class="reviews-name"><?=$user->username;?></span>
                    <span class="reviews-date"><? echo date('d.m.Y', $review->date); ?></span><br>
                    <?=$review->text;?>
                </p>
                <div class="clear"></div>
            </div>
        <? endforeach; ?>
        <div class="review-form">
            <?if(Yii::$app->user->isGuest):?>
                <h4 style="text-align: center;">Чтобы оставить отзыв авторизуйтесь</h4>
                <p style="text-align: center;"><a href="<?=Url::toRoute('/user/login')?>" class="a">Войти</a></p>
                <h4 style="text-align: center;">Если у вас нет аккаунта зарегистрируйтесь</h4>
                <p style="text-align: center;"><a href="<?=Url::toRoute('/user/register')?>" class="a">Регистрация</a></p>
            <?else:?>
                <div class="ads-form">
                    <?php $form = ActiveForm::begin(['options' => [
                        'enctype' => 'multipart/form-data',
                        'class' => 'contact_form'
                    ]]);?>

                    

                    <?=$form->field($model, 'id_shop')->hiddenInput(['value' => $id]);?>
                    <?=$form->field($model, 'name')->hiddenInput(['value' => Yii::$app->user->identity->username]);?>

                    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
                        'options' => ['rows' => 6],
                        'preset' => 'full',
                    ])->textarea(['required' => 'required', 'rows' => 6])->label('Текст отзыва'); ?>

                    <div class="form-group field-reviews-name required">
                        <label class="control-label" for="reviews-name">Фото</label>
                        <input type="file" name="photo">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Оставить свой отзыв') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'detail' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            <?endif;?>
        </div>
    </div>
</div>