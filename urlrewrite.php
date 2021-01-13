<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => 'SMART_FILTER_PATH=$1',
    'ID' => '',
    'PATH' => '/services/index.php',
    'SORT' => 99,
  ),
  7 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
