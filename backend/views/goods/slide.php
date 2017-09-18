<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 7/9/16
 * Time: 1:55 PM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\assets\CropAsset;
use backend\assets\AppAsset;
CropAsset::register($this);
AppAsset::register($this);

$imageArr = json_decode($model->image, true);
$imageSrc = $imageArr['max'];
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
</head>
<body>
<img src="/images/goods/<?=$model->id?>/<?=$imageSrc?>" alt="crop img" class="cropimg" />
<?$this->registerJs( "
        $('img.cropimg').cropimg({
            resultWidth:600,
            resultHeight:300,
            onChange: function() {
                $('#preview-info').hide();
                $('#preview-container').show();
            }
        });
        " );?>
<div style="width:600px;margin:0 auto">
    <h2>Result data</h2>

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
    <table>
        <tbody>
        <tr>
            <td>X:</td>
            <td><input type="text" name="x" value="0" id="x" /></td>
        </tr>
        <tr>
            <td>Y:</td>
            <td><input type="text" name="y" value="0" id="y" /></td>
        </tr>
        <tr>
            <td>W:</td>
            <td><input type="text" name="w" value="0" id="w" /></td>
        </tr>
        <tr>
            <td>H:</td>
            <td><input type="text" name="h" value="0" id="h" /></td>
        </tr>
        </tbody>
    </table>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Slide'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<body>
</html>