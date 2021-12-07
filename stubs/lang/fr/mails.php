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

    'greeting' => 'Bonjour,',
    'greeting_user' => 'Bonjour :name,',
    'all_rights' => 'Tous droits réservés.',
    'whoops' => 'Attention !',
    'regards' => 'Cordialement',
    'action_notice' => "Si vous rencontrez des difficultés en cliquant sur le bouton \":actionText\", copiez et collez l'URL ci-dessous dans votre navigateur :",

    'auth' => [
        'register' => [
            'subject' => 'Merci de vérifier votre adresse e-mail',
            'line_1' => 'Cliquez sur le bouton ci-dessous pour vérifier votre adresse e-mail.',
            'action' => 'Vérifier mon adresse !'
        ],

        'reset_password' => [
            'subject' => 'Réinitialisation de mot de passe',
            'line_1' => 'Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.',
            'action' => 'Réinitialiser le mot de passe',
            'line_2' => 'Ce lien de réinitialisation de mot de passe expirera dans :count minutes.',
            'line_3' => 'Si vous n\'avez pas demandé de réinitialisation de mot de passe, merci d\'ignorer ce message.'
        ]
    ]
];
