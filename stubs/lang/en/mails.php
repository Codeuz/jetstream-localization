<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mails Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various email messages.
    | You are free to modify these language lines according to your
    | application's requirements.
    |
    */

    'greeting' => 'Hello,',
    'greeting_user' => 'Hello :name,',
    'all_rights' => 'All rights reserved.',
    'whoops' => 'Whoops!',
    'regards' => 'Regards',
    'action_notice' => "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below into your web browser:",

    'auth' => [
        'register' => [
            'subject' => 'Verify Email Address',
            'line_1' => 'Click the button below to verify your email address.',
            'action' => 'Verify Email Address!'
        ],

        'reset_password' => [
            'subject' => 'Reset Password Notification',
            'line_1' => 'You are receiving this email because we received a password reset request for your account.',
            'action' => 'Reset Password',
            'line_2' => 'This password reset link will expire in :count minutes.',
            'line_3' => 'If you did not request a password reset, no further action is required.'
        ]
    ]
];
