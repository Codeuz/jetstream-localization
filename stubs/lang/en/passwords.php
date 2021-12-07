<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset' => 'Your password has been reset!',
    'sent' => 'We have emailed your password reset link!',
    'throttled' => 'Please wait before retrying.',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that email address.",
    'fortify' => [
        'uppercase' => 'The :attribute must be at least :length characters and contain at least one uppercase character.',
        'numeric' => 'The :attribute must be at least :length characters and contain at least one number.',
        'special' => 'The :attribute must be at least :length characters and contain at least one special character.',
        'uppercase-numeric' => 'The :attribute must be at least :length characters and contain at least one uppercase character and one number.',
        'uppercase-special' => 'The :attribute must be at least :length characters and contain at least one uppercase character and one special character.',
        'uppercase-numeric-special' => 'The :attribute must be at least :length characters and contain at least one uppercase character, one number, and one special character.',
        'numeric-special' => 'The :attribute must be at least :length characters and contain at least one special character and one number.',
        'default' => 'The :attribute must be at least :length characters.'
    ]

];
