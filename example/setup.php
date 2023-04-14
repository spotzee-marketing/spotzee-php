<?php

exit('COMMENT ME TO TEST THE EXAMPLES!');

require_once __DIR__ . '/../vendor/autoload.php';

// configuration object
$config = new \SpotzeeApi\Config([
    'apiUrl'    => 'https://cp.spotzee.marketing/api',
    'apiKey'    => 'X-SPZ-PUBLIC-KEY',

    // components
    'components' => [
        'cache' => [
            'class'     => \SpotzeeApi\Cache\File::class,
            'filesPath' => __DIR__ . '/data/cache', // make sure it is writable by webserver
        ]
    ],
]);

// now inject the configuration and we are ready to make api calls
\SpotzeeApi\Base::setConfig($config);

// start UTC
date_default_timezone_set('UTC');
