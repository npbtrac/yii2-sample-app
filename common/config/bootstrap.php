<?php
// Defining root namespace to the root folder of application
Yii::setAlias('root', dirname(dirname(__DIR__)));

// Defining common namespace
Yii::setAlias('common', dirname(__DIR__));

Yii::setAlias('enpiiCms', dirname(dirname(__DIR__)).'/modules/enpiiCms');


Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');