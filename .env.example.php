<?php
// Copy this file to .env.php and fill in the values.
// Generate random secrets with: php -r "echo bin2hex(random_bytes(32));"

return [
    'content.salt'       => '',  // required — 64-char random hex string
    'cookie.key'         => '',  // required — 64-char random hex string
    'panel.vue.compiler' => true,  // set to false in production
];
