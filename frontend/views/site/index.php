<?php

/* @var $this yii\web\View */

 $this->title = 'เรียนจาก Youtube กรมอนามัย';
?>
<div class="site-index">
    <div class="body-content">
<?php
$routTest1=Yii::$app->urlmanager->createUrl('test/test1');
?>
<a href="<?=$routTest1?>">ไป Test1</a>

    </div>
</div>
