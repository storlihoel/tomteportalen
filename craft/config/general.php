<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */
return array(
  '*' => array(
      'loginPath' => 'admin/login'
    ),
  '.dev' => array(
    'cooldownDuration' => 0,
    'devMode' => true,
    'siteUrl' => 'http://tomteportalen.dev',
    'environmentVariables' => array(
      'baseUrl' => 'http://tomteportalen.dev/',
      'basePath' => '/Users/storlihoel/Projects/tomteportalen/httpdocs/',
      'siteUrl' => 'http://tomteportalen.dev',
      )
    ),
  'hyttetomta.no' => array(
    'cooldownDuration' => 0,
    'siteUrl' => 'http://hyttetomta.no',
    'generateTransformsBeforePageLoad' => true,
    'environmentVariables' => array(
      'baseUrl' => 'http://hyttetomta.no/',
      'basePath' => '/var/www/vhosts/hyttetomta.no/httpdocs/',
      'siteUrl' => 'http://hyttetomta.no',
      )
    ),
  );