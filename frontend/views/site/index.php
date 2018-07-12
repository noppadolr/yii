<?php
use yii\helpers\html;
/* @var $this yii\web\View */

 $this->title = 'เรียนจาก Youtube กรมอนามัย';
?>
<div class="site-index">
    <div class="body-content">
<?php
$routTest1=Yii::$app->urlmanager->createUrl('test/test1');
?>
<a href="<?=$routTest1?>">ไป Test1</a>
<br>

<?php
$routTest2=Yii::$app->urlmanager->createUrl(['test/test2','name'=>'Boy','lname'=>'riyasarn']);
?>
<a href="<?=$routTest2?>">ไป Test2</a>
<br>

<?=
html::a('ลิ้งค์แบบที่ 3',['test/test1','a'=>'1']);
?>

</div>
</div>
