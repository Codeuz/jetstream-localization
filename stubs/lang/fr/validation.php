<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'error' => 'Une erreur est survenue.',
    'accepted' => 'Le champs :attribute doit être accepté.',
    'accepted_if' => 'Le champs :attribute doit être accepté quand :other est :value.',
    'active_url' => 'Le champs :attribute n\'est pas une URL valide.',
    'after' => 'Le champs :attribute doit être une date après le :date.',
    'after_or_equal' => 'Le champs :attribute doit être une date après ou égale au :date.',
    'alpha' => 'Le champs :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le champs :attribute ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => 'Le champs :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le champs :attribute doit être un tableau.',
    'before' => 'Le champs :attribute doit être une date avant le :date.',
    'before_or_equal' => 'Le champs :attribute doit être une date avant ou égale au :date.',
    'between' => [
        'numeric' => 'Le champs :attribute doit être compris entre :min et :max.',
        'file' => 'Le fichier :attribute doit être compris entre :min et :max kilo-octets.',
        'string' => 'Le champs :attribute doit contenir entre :min et :max caractères.',
        'array' => 'Le champs :attribute doit contenir entre :min et :max entrées.',
    ],
    'boolean' => 'Le champs :attribute doit être vrai ou faux.',
    'confirmed' => 'Le champs :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le champs :attribute n\'est pas une date valide.',
    'date_equals' => 'Le champs :attribute doit être une date égale au :date.',
    'date_format' => 'Le champs :attribute ne correspond pas au format :format.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Le champs :attribute doit contenir :digits chiffres.',
    'digits_between' => 'Le champs :attribute doit contenir entre :min et :max digits.',
    'dimensions' => 'L\'image :attribute a des dimensions invalides.',
    'distinct' => 'Le champs :attribute existe déjà.',
    'email' => 'Le champs :attribute doit être une adresse mail valide.',
    'ends_with' => 'Le champs :attribute doit se terminer par une des valeurs suivantes : :values.',
    'exists' => 'Le champs :attribute n\'est pas valide.',
    'file' => 'Le champs :attribute doit être un fichiers',
    'filled' => 'Le champs :attribute doit être rempli.',
    'gt' => [
        'numeric' => 'Le champs :attribute doit être supérieur à :value.',
        'file' => 'Le fichier :attribute doit peser plus de :value kilo-octets.',
        'string' => 'Le champs :attribute doit contenir plus de :value caractères.',
        'array' => 'Le tableau :attribute doit contenir plus de :value entrées.',
    ],
    'gte' => [
        'numeric' => 'Le champs :attribute doit être supérieur ou égal à :value.',
        'file' => 'Le fichier :attribute doit être égal ou peser plus de :value kilo-octets.',
        'string' => 'Le champs :attribute doit contenir au moins :value caractères.',
        'array' => 'Le tableau :attribute doit contenir au moins :value entrées.',
    ],
    'image' => 'Le champs :attribute doit être une image.',
    'in' => 'Le champs :attribute est invalide.',
    'in_array' => 'Le champs :attribute n\'existe pas dans :other.',
    'integer' => 'Le champs :attribute doit être un entier.',
    'ip' => 'Le champs :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champs :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champs :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champs :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'Le champs :attribute doit être inférieur à :value.',
        'file' => 'Le fichier :attribute doit peser moins de :value kilo-octets.',
        'string' => 'Le champs :attribute doit contenir moins de :value caractères.',
        'array' => 'Le tableau :attribute doit contenir moins de :value entrées.',
    ],
    'lte' => [
        'numeric' => 'Le champs :attribute doit être inférieur ou égal à :value.',
        'file' => 'Le fichier :attribute doit être égal ou peser moins de :value kilo-octets.',
        'string' => 'Le champs :attribute doit contenir :value caractères ou moins.',
        'array' => 'Le tableau :attribute doit contenir :value entrées ou moins.',
    ],
    'max' => [
        'numeric' => 'Le champs :attribute ne doit pas être plus grand que :max.',
        'file' => 'Le fichier :attribute ne doit pas excéder :max kilo-octets.',
        'string' => 'Le champs :attribute ne doit pas excéder :max caractères.',
        'array' => 'Le tableau :attribute ne doit pas excéder :max entrées.',
    ],
    'mimes' => 'Le champs :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champs :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'Le champs :attribute doit être au moins égal à :min.',
        'file' => 'Le fichier :attribute doit peser au moins :min kilo-octets.',
        'string' => 'Le champs :attribute doit contenir au moins :min caractères.',
        'array' => 'Le tableau :attribute doit contenir au moins :min entrées.',
    ],
    'multiple_of' => 'Le champs :attribute doit être un multiple de :value.',
    'not_in' => 'Le champs :attribute n\'est pas valide.',
    'not_regex' => 'Le format du champs :attribute est invalide.',
    'numeric' => 'Le champs :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champs :attribute doit être présent.',
    'regex' => 'Le format du champs :attribute n\'est pas valide.',
    'required' => 'Le champs :attribute est obligatoire.',
    'required_if' => 'Le champs :attribute est obligatoire quand :other est :value.',
    'required_unless' => 'Le champs :attribute est obligatoire quand :other n\'est pas dans ces valeurs : :values.',
    'required_with' => 'Le champs :attribute est obligatoire quand :values est présent.',
    'required_with_all' => 'Le champs :attribute est obligatoire quand :values sont présents.',
    'required_without' => 'Le champs :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champs :attribute est obligatoire quand aucune de ces valeurs n\'est présente :values.',
    'prohibited' => 'Le champs :attribute est interdit.',
    'prohibited_if' => 'Le champs :attribute est interdit quand :other est :value.',
    'prohibited_unless' => 'Le champs :attribute est interdit si :other n\'a pas la valeur :values.',
    'prohibits' => 'Le champs :attribute interdit la présence de :other.',
    'same' => 'Les champs :attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => 'Le champs :attribute doit avoir la valeur :size.',
        'file' => 'Le champs :attribute doit peser :size kilo-octets.',
        'string' => 'Le champs :attribute doit contenir :size caractères.',
        'array' => 'Le tableau :attribute doit contenir :size entrées.',
    ],
    'starts_with' => 'Le champs :attribute doit débuter par cette valeur : :values.',
    'string' => 'Le champs :attribute doit être de type texte.',
    'timezone' => 'Le champs :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le champs :attribute existe déjà.',
    'uploaded' => 'Le fichier :attribute n\'a pas pu être téléchargé.',
    'url' => 'Le champs :attribute doit être une URL valide.',
    'uuid' => 'Le champs :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
