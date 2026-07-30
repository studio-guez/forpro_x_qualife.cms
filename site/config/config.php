<?php

$dotenv = is_file(__DIR__ . '/../../.env.php') ? require __DIR__ . '/../../.env.php' : [];

return array_merge($dotenv, [
  'debug' => true,
  'panel' => [
    'css' => 'assets/css/custom-panel.css',
  ],
  'routes' => [
    [
      'pattern' => '/',
      'action'  => function () {
        go('/panel');
      }
    ],
  ],
  'api' => [
    'basicAuth' => false,        // ❌ désactive l'auth
    'allowInsecure' => true      // ✅ accepte HTTP
  ],
  'kql' => [
    'auth' => false,             // ✅ KQL sans login
    //    'intercept' => function ($type, $key, $value) {
    //      return true;  // Autorise TOUT en mode dev
    //    }
  ],
]);
