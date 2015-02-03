<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>

<?php

echo Yii::app()->request->baseUrl."<br/>" ;
print_r(Yii::app()->request->baseUrl);
echo "<br/>";
var_dump(Yii::app()->getBaseUrl(true));
echo "<br/>";
echo Yii::app()->request->getBaseUrl(true);
?>