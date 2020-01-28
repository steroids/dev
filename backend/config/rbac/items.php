<?php
return [
    'a::admin' => [
        'type' => 2,
        'description' => 'admin',
    ],
    'a::error' => [
        'type' => 2,
        'description' => 'error',
    ],
    'a::docs' => [
        'type' => 2,
        'description' => 'docs',
        'children' => [
            'a::docs::self',
            'a::docs::json',
        ],
    ],
    'a::docs::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::docs::json' => [
        'type' => 2,
        'description' => 'json',
    ],
    'a::file' => [
        'type' => 2,
        'description' => 'file',
        'children' => [
            'a::file::self',
            'a::file::upload',
            'a::file::upload-editor',
            'a::file::download',
        ],
    ],
    'a::file::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::file::upload' => [
        'type' => 2,
        'description' => 'upload',
    ],
    'a::file::upload-editor' => [
        'type' => 2,
        'description' => 'upload-editor',
    ],
    'a::file::download' => [
        'type' => 2,
        'description' => 'download',
    ],
    'a::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::gii::self',
            'a::gii::gii',
        ],
    ],
    'a::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::gii::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::gii::gii::self',
            'a::gii::gii::gii-children',
        ],
    ],
    'a::gii::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::gii::gii::gii-children' => [
        'type' => 2,
        'description' => 'gii-children',
    ],
    'a::api' => [
        'type' => 2,
        'description' => 'api',
        'children' => [
            'a::api::self',
            'a::api::api-gii',
            'a::api::user',
        ],
    ],
    'a::api::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::api-gii' => [
        'type' => 2,
        'description' => 'api-gii',
        'children' => [
            'a::api::api-gii::self',
            'a::api::api-gii::entity',
            'a::api::api-gii::api-get-entities',
            'a::api::api-gii::api-class-save',
            'a::api::api-gii::api-get-permissions',
            'a::api::api-gii::api-permissions-save',
        ],
    ],
    'a::api::api-gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::api-gii::entity' => [
        'type' => 2,
        'description' => 'entity',
    ],
    'a::api::api-gii::api-get-entities' => [
        'type' => 2,
        'description' => 'api-get-entities',
    ],
    'a::api::api-gii::api-class-save' => [
        'type' => 2,
        'description' => 'api-class-save',
    ],
    'a::api::api-gii::api-get-permissions' => [
        'type' => 2,
        'description' => 'api-get-permissions',
    ],
    'a::api::api-gii::api-permissions-save' => [
        'type' => 2,
        'description' => 'api-permissions-save',
    ],
    'a::api::user' => [
        'type' => 2,
        'description' => 'user',
        'children' => [
            'a::api::user::self',
            'a::api::user::login',
            'a::api::user::logout',
            'a::api::user::recovery-send',
            'a::api::user::recovery-change',
            'a::api::user::registration',
            'a::api::user::registration-email-confirm',
        ],
    ],
    'a::api::user::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::user::login' => [
        'type' => 2,
        'description' => 'login',
    ],
    'a::api::user::logout' => [
        'type' => 2,
        'description' => 'logout',
    ],
    'a::api::user::recovery-send' => [
        'type' => 2,
        'description' => 'recovery-send',
    ],
    'a::api::user::recovery-change' => [
        'type' => 2,
        'description' => 'recovery-change',
    ],
    'a::api::user::registration' => [
        'type' => 2,
        'description' => 'registration',
    ],
    'a::api::user::registration-email-confirm' => [
        'type' => 2,
        'description' => 'registration-email-confirm',
    ],
    'a::steroids-api' => [
        'type' => 2,
        'description' => 'steroids-api',
        'children' => [
            'a::steroids-api::self',
            'a::steroids-api::fields-fetch',
        ],
    ],
    'a::steroids-api::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::steroids-api::fields-fetch' => [
        'type' => 2,
        'description' => 'fields-fetch',
    ],
    'a::user' => [
        'type' => 2,
        'description' => 'user',
        'children' => [
            'a::user::self',
            'a::user::auth',
            'a::user::registration',
        ],
    ],
    'a::user::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::auth' => [
        'type' => 2,
        'description' => 'auth',
        'children' => [
            'a::user::auth::self',
            'a::user::auth::login',
            'a::user::auth::logout',
            'a::user::auth::recovery',
        ],
    ],
    'a::user::auth::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::auth::login' => [
        'type' => 2,
        'description' => 'login',
    ],
    'a::user::auth::logout' => [
        'type' => 2,
        'description' => 'logout',
    ],
    'a::user::auth::recovery' => [
        'type' => 2,
        'description' => 'recovery',
        'children' => [
            'a::user::auth::recovery::self',
            'a::user::auth::recovery::change',
        ],
    ],
    'a::user::auth::recovery::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::auth::recovery::change' => [
        'type' => 2,
        'description' => 'change',
    ],
    'a::user::registration' => [
        'type' => 2,
        'description' => 'registration',
        'children' => [
            'a::user::registration::self',
            'a::user::registration::success',
            'a::user::registration::agreement',
            'a::user::registration::email',
            'a::user::registration::sms',
        ],
    ],
    'a::user::registration::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::registration::success' => [
        'type' => 2,
        'description' => 'success',
    ],
    'a::user::registration::agreement' => [
        'type' => 2,
        'description' => 'agreement',
    ],
    'a::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'guest' => [
        'type' => 1,
        'children' => [
            'a::index',
            'a::user::registration',
            'a::user::auth',
        ],
    ],
    'user' => [
        'type' => 1,
        'children' => [
            'a::index',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'a::index',
        ],
    ],
    'a::user::registration::email' => [
        'type' => 2,
        'description' => 'email',
        'children' => [
            'a::user::registration::email::self',
            'a::user::registration::email::email-confirm',
        ],
    ],
    'a::user::registration::email::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::registration::email::email-confirm' => [
        'type' => 2,
        'description' => 'email-confirm',
    ],
    'a::user::registration::sms' => [
        'type' => 2,
        'description' => 'sms',
        'children' => [
            'a::user::registration::sms::self',
            'a::user::registration::sms::sms-confirm',
        ],
    ],
    'a::user::registration::sms::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::registration::sms::sms-confirm' => [
        'type' => 2,
        'description' => 'sms-confirm',
    ],
];
