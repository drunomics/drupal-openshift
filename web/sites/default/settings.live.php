<?php

// When run from Drush, only $_ENV is available. Might be a bug.
$src = array_key_exists('OPENSHIFT_APP_NAME', $_SERVER) ? $_SERVER : $_ENV;

$databases = array (
  'default' =>
    array (
      'default' =>
        array (
          'database' => $src['OPENSHIFT_APP_NAME'],
          'username' => $src['OPENSHIFT_MYSQL_DB_USERNAME'],
          'password' => $src['OPENSHIFT_MYSQL_DB_PASSWORD'],
          'host' => $src['OPENSHIFT_MYSQL_DB_HOST'],
          'port' => $src['OPENSHIFT_MYSQL_DB_PORT'],
          'driver' => 'mysql',
          'prefix' => '',
        ),
    ),
);

$update_free_access = FALSE;

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
# $cookie_domain = 'example.com';

# $conf['site_name'] = 'My Drupal site';
# $conf['theme_default'] = 'garland';
# $conf['anonymous'] = 'Visitor';

# $conf['maintenance_theme'] = 'bartik';
# $conf['reverse_proxy'] = TRUE;
# $conf['reverse_proxy_addresses'] = array('a.b.c.d', ...);
# $conf['omit_vary_cookie'] = TRUE;

# $conf['locale_custom_strings_en'][''] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );

$conf['file_public_path'] = 'files';
$conf['file_private_path'] = $src['OPENSHIFT_DATA_DIR'] . 'private/';
$conf['file_temporary_path'] = $src['OPENSHIFT_TMP_DIR'] . 'drupal/';

$conf['environment_indicator_enabled'] = FALSE;
