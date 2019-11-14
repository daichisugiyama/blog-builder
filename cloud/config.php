<?php
$CONFIG = array (
  'instanceid' => 'xxxxxxxxxxxxxxxx',
  'passwordsalt' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'secret' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
  'trusted_domains' => 
  array (
    0 => 'daichisugiyama.com',
  ),
  'datadirectory' => '/var/www/owncloud/data',
  'overwrite.cli.url' => 'http://daichisugiyama.com/owncloud',
  'dbtype' => 'mysql',
  'version' => '10.2.0.5',
  'dbname' => 'owncloud',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'xxxxx',
  'dbpassword' => 'xxxxxxxxxxxxxxxx',
  'logtimezone' => 'UTC',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/owncloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/owncloud/apps-external',
      'url' => '/apps-external',
      'writable' => true,
    ),
  ),
  'objectstore' => 
  array (
    'class' => 'OC\\Files\\ObjectStore\\Swift',
    'arguments' => 
    array (
      'serviceName' => 'Object Storage Service',
      'url' => 'https://identity.tyo2.conoha.io/v2.0',
      'region' => 'tyo2',
      'tenantName' => 'gnctxxxxxxxx',
      'username' => 'gncuxxxxxxxx',
      'password' => 'xxxxxxxxxxx',
      'container' => 'owncloud',
    ),
  ),
  'installed' => true,
);
