<?php
$this->breadcrumbs = array(
    tc('Users') => array('admin'),
    tt('Add user'),
);
$this->menu = array(
    //array('label'=>tc('Users'), 'url'=>array('admin')),
    AdminLteHelper::getBackMenuLink(Yii::t('common', 'User managment'), array('admin')),
);
$this->adminTitle = tt('Add user');

?>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>