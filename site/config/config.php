<?php

$env = is_file(__DIR__ . '/../../.env.php')
  ? require __DIR__ . '/../../.env.php'
  : [];

return [
  'debug' => (bool)($env['DEBUG'] ?? false),
  'content.salt' => $env['CONTENT_SALT'] ?? null,
  'cookie.key'   => $env['COOKIE_KEY'] ?? null,
  'panel' => [
    'css' => 'assets/css/custom-panel.css',
    'vue' => [
      'compiler' => (bool)($env['PANEL_VUE_COMPILER'] ?? false),
    ],
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
];
