<?php
use yii\helpers\Html;

?>
<h1>Test</h1>
<?=	Yii::$app->getUrlManager()->getHostInfo() ?>
<ul>
<?php foreach ($query as $test): ?>
    <li>
        <?= Html::encode("{$test->id} ({$test->name})") ?>:
    </li>
<?php endforeach; ?>
</ul>