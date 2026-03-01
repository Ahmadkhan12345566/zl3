<?php
$baseDir = dirname(dirname(__FILE__));

return [
    'plugins' => [
        'Ajax' => $baseDir . '/vendor/dereuromark/cakephp-ajax/',
        'Authentication' => $baseDir . '/vendor/cakephp/authentication/',
        'Authorization' => $baseDir . '/vendor/cakephp/authorization/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'Bootstrap' => $baseDir . '/vendor/elboletaire/twbs-cake-plugin/',
        'BootstrapUI' => $baseDir . '/vendor/friendsofcake/bootstrap-ui/',
        'CakePHPAppInstaller' => $baseDir . '/vendor/cakephp-app-installer/installer/',
        'Cake/TwigView' => $baseDir . '/vendor/cakephp/twig-view/',
        'CakephpFixtureFactories' => $baseDir . '/vendor/vierge-noire/cakephp-fixture-factories/',
        'CakephpTestSuiteLight' => $baseDir . '/vendor/vierge-noire/cakephp-test-suite-light/',
        'Calendar' => $baseDir . '/vendor/dereuromark/cakephp-calendar/',
        'ChasePayment' => $baseDir . '/plugins/ChasePayment/',
        'Cors' => $baseDir . '/vendor/ozee31/cakephp-cors/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'ElavonPayment' => $baseDir . '/plugins/ElavonPayment/',
        'Josegonzalez/Upload' => $baseDir . '/vendor/josegonzalez/cakephp-upload/',
        'Less' => $baseDir . '/vendor/elboletaire/less-cake-plugin/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Muffin/Footprint' => $baseDir . '/vendor/muffin/footprint/',
        'PayPalPayment' => $baseDir . '/plugins/PayPalPayment/',
        'Scheduler' => $baseDir . '/vendor/trentrichardson/cakephp-scheduler/',
        'StripePayment' => $baseDir . '/plugins/StripePayment/',
        'ZuluruBootstrap' => $baseDir . '/vendor/zuluru/cakephp-bootstrap/',
        'ZuluruJquery' => $baseDir . '/vendor/zuluru/cakephp-jquery/',
    ],
];
