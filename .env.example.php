<?php
// Copy this file to .env.php and fill in the values.
// These are consumed explicitly in site/config/config.php.
// Generate random secrets with: php -r "echo bin2hex(random_bytes(32));"

return [
    'DEBUG'              => false, // MUST stay false in production
    'CONTENT_SALT'       => '',    // required — 64-char random hex string
    'COOKIE_KEY'         => '',    // required — 64-char random hex string
    'PANEL_VUE_COMPILER' => false, // true only when authoring panel plugins
];
