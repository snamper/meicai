<?php
if(!defined('THINK_PATH')) exit();
return $array = array (
  'DB_TYPE' => 'mysql',
  'DB_HOST' => '127.0.0.1',
  'DB_NAME' => 'meicai',
  'DB_USER' => 'root',
  'DB_PWD' => '1234',
  'DB_PORT' => '3306',
  'DB_PREFIX' => 'mc_',
  'DB_BACKUP' => '../Data/backup',
  'RBAC_ROLE_TABLE' => 'mc_role',
  'RBAC_USER_TABLE' => 'mc_user',
  'RBAC_ACCESS_TABLE' => 'mc_access',
  'RBAC_NODE_TABLE' => 'mc_node',
  'URL_CASE_INSENSITIVE' => true,
  'SITE_NAME' => '美才网',
  'SITE_TITLE' => '美才网',
  'SITE_KEYWORDS' => '美才网',
  'SITE_DESCRIPTION' => '美才网',
  'URL_MODEL' => 0,
  'DEFAULT_THEME' => 'meicai',
  'WX_QRCODE' => NULL,
);
?>