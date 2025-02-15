<?php
var_dump(getenv('SMTP_USER'));

return[
    'smtp_host' => getenv('SMTP_HOST'),
    'smtp_user' => getenv('SMTP_USER'),
    'smtp_pass' => getenv('SMTP_PASS'),
    'smtp_port' => getenv('SMTP_PORT'),
];