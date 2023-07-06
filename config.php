<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\OC\Memcache\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'oco8qn8b0jxg',
  'passwordsalt' => 'pMCxW7/iN5MAcnNRmszBca5NMRn/pg',
  'secret' => 'TziI6TEblfz0p8XdC5v+BmU3flY6vSNyPlFh7XsUwuQd6KzM',
  'trusted_domains' => 
  array (
    0 => '192.168.0.244:30715',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '27.0.0.8',
  'overwrite.cli.url' => 'http://192.168.0.244:30715',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud-mysql',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'xardas',
  'installed' => true,
  'filelocking.enabled' => true,
  'memcache.distributed' => '\OC\Memcache\Redis',
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' => array(
       'host' => 'nc-redis',
       'port' => 6379,
       'timeout' => 0.0,
        ),
);
