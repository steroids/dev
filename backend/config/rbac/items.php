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
    'm::steroids\\auth\\models\\AuthConfirm' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\AuthConfirm',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::view',
            'm::steroids\\auth\\models\\AuthConfirm::create',
            'm::steroids\\auth\\models\\AuthConfirm::update',
            'm::steroids\\auth\\models\\AuthConfirm::delete',
            'm::steroids\\auth\\models\\AuthConfirm::id',
            'm::steroids\\auth\\models\\AuthConfirm::userId',
            'm::steroids\\auth\\models\\AuthConfirm::code',
            'm::steroids\\auth\\models\\AuthConfirm::isConfirmed',
            'm::steroids\\auth\\models\\AuthConfirm::createTime',
            'm::steroids\\auth\\models\\AuthConfirm::updateTime',
            'm::steroids\\auth\\models\\AuthConfirm::expireTime',
            'm::steroids\\auth\\models\\AuthConfirm::value',
            'm::steroids\\auth\\models\\AuthConfirm::type',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::id::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::userId::view',
            'm::steroids\\auth\\models\\AuthConfirm::userId::create',
            'm::steroids\\auth\\models\\AuthConfirm::userId::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::code' => [
        'type' => 2,
        'description' => 'code',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::code::view',
            'm::steroids\\auth\\models\\AuthConfirm::code::create',
            'm::steroids\\auth\\models\\AuthConfirm::code::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::code::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::code::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::code::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::isConfirmed' => [
        'type' => 2,
        'description' => 'isConfirmed',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::isConfirmed::view',
            'm::steroids\\auth\\models\\AuthConfirm::isConfirmed::create',
            'm::steroids\\auth\\models\\AuthConfirm::isConfirmed::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::isConfirmed::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::isConfirmed::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::isConfirmed::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::createTime::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::updateTime::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::expireTime' => [
        'type' => 2,
        'description' => 'expireTime',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::expireTime::view',
            'm::steroids\\auth\\models\\AuthConfirm::expireTime::create',
            'm::steroids\\auth\\models\\AuthConfirm::expireTime::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::expireTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::expireTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::expireTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\AuthLogin',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::view',
            'm::steroids\\auth\\models\\AuthLogin::create',
            'm::steroids\\auth\\models\\AuthLogin::update',
            'm::steroids\\auth\\models\\AuthLogin::delete',
            'm::steroids\\auth\\models\\AuthLogin::id',
            'm::steroids\\auth\\models\\AuthLogin::userId',
            'm::steroids\\auth\\models\\AuthLogin::authId',
            'm::steroids\\auth\\models\\AuthLogin::accessToken',
            'm::steroids\\auth\\models\\AuthLogin::wsToken',
            'm::steroids\\auth\\models\\AuthLogin::ipAddress',
            'm::steroids\\auth\\models\\AuthLogin::location',
            'm::steroids\\auth\\models\\AuthLogin::userAgent',
            'm::steroids\\auth\\models\\AuthLogin::createTime',
            'm::steroids\\auth\\models\\AuthLogin::expireTime',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\auth\\models\\AuthLogin::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::id::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::userId::view',
            'm::steroids\\auth\\models\\AuthLogin::userId::create',
            'm::steroids\\auth\\models\\AuthLogin::userId::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::authId' => [
        'type' => 2,
        'description' => 'authId',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::authId::view',
            'm::steroids\\auth\\models\\AuthLogin::authId::create',
            'm::steroids\\auth\\models\\AuthLogin::authId::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::authId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::authId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::authId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::accessToken' => [
        'type' => 2,
        'description' => 'accessToken',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::accessToken::view',
            'm::steroids\\auth\\models\\AuthLogin::accessToken::create',
            'm::steroids\\auth\\models\\AuthLogin::accessToken::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::accessToken::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::accessToken::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::accessToken::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::wsToken' => [
        'type' => 2,
        'description' => 'wsToken',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::wsToken::view',
            'm::steroids\\auth\\models\\AuthLogin::wsToken::create',
            'm::steroids\\auth\\models\\AuthLogin::wsToken::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::wsToken::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::wsToken::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::wsToken::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::ipAddress' => [
        'type' => 2,
        'description' => 'ipAddress',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::ipAddress::view',
            'm::steroids\\auth\\models\\AuthLogin::ipAddress::create',
            'm::steroids\\auth\\models\\AuthLogin::ipAddress::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::ipAddress::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::ipAddress::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::ipAddress::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::location' => [
        'type' => 2,
        'description' => 'location',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::location::view',
            'm::steroids\\auth\\models\\AuthLogin::location::create',
            'm::steroids\\auth\\models\\AuthLogin::location::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::location::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::location::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::location::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::userAgent' => [
        'type' => 2,
        'description' => 'userAgent',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::userAgent::view',
            'm::steroids\\auth\\models\\AuthLogin::userAgent::create',
            'm::steroids\\auth\\models\\AuthLogin::userAgent::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::userAgent::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::userAgent::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::userAgent::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthLogin::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::createTime::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::expireTime' => [
        'type' => 2,
        'description' => 'expireTime',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::expireTime::view',
            'm::steroids\\auth\\models\\AuthLogin::expireTime::create',
            'm::steroids\\auth\\models\\AuthLogin::expireTime::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthLogin::expireTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthLogin::expireTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthLogin::expireTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthSocial' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\AuthSocial',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::view',
            'm::steroids\\auth\\models\\AuthSocial::create',
            'm::steroids\\auth\\models\\AuthSocial::update',
            'm::steroids\\auth\\models\\AuthSocial::delete',
            'm::steroids\\auth\\models\\AuthSocial::id',
            'm::steroids\\auth\\models\\AuthSocial::userId',
            'm::steroids\\auth\\models\\AuthSocial::externalId',
            'm::steroids\\auth\\models\\AuthSocial::socialName',
            'm::steroids\\auth\\models\\AuthSocial::createTime',
            'm::steroids\\auth\\models\\AuthSocial::updateTime',
            'm::steroids\\auth\\models\\AuthSocial::uid',
            'm::steroids\\auth\\models\\AuthSocial::profileJson',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthSocial::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthSocial::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\auth\\models\\AuthSocial::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::id::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::userId::view',
            'm::steroids\\auth\\models\\AuthSocial::userId::create',
            'm::steroids\\auth\\models\\AuthSocial::userId::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthSocial::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthSocial::externalId' => [
        'type' => 2,
        'description' => 'externalId',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::externalId::view',
            'm::steroids\\auth\\models\\AuthSocial::externalId::create',
            'm::steroids\\auth\\models\\AuthSocial::externalId::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::externalId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::externalId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthSocial::externalId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthSocial::socialName' => [
        'type' => 2,
        'description' => 'socialName',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::socialName::view',
            'm::steroids\\auth\\models\\AuthSocial::socialName::create',
            'm::steroids\\auth\\models\\AuthSocial::socialName::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::socialName::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::socialName::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthSocial::socialName::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthSocial::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::createTime::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::updateTime::view',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::uid' => [
        'type' => 2,
        'description' => 'uid',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::uid::view',
            'm::steroids\\auth\\models\\AuthSocial::uid::create',
            'm::steroids\\auth\\models\\AuthSocial::uid::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::uid::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::uid::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthSocial::uid::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthSocial::profileJson' => [
        'type' => 2,
        'description' => 'profileJson',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::profileJson::view',
            'm::steroids\\auth\\models\\AuthSocial::profileJson::create',
            'm::steroids\\auth\\models\\AuthSocial::profileJson::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthSocial::profileJson::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthSocial::profileJson::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthSocial::profileJson::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::value' => [
        'type' => 2,
        'description' => 'value',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::value::view',
            'm::steroids\\auth\\models\\AuthConfirm::value::create',
            'm::steroids\\auth\\models\\AuthConfirm::value::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::value::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::value::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::value::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::type' => [
        'type' => 2,
        'description' => 'type',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::type::view',
            'm::steroids\\auth\\models\\AuthConfirm::type::create',
            'm::steroids\\auth\\models\\AuthConfirm::type::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::type::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::type::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::type::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User' => [
        'type' => 2,
        'description' => 'app\\user\\models\\User',
        'children' => [
            'm::app\\user\\models\\User::view',
            'm::app\\user\\models\\User::create',
            'm::app\\user\\models\\User::update',
            'm::app\\user\\models\\User::delete',
            'm::app\\user\\models\\User::id',
            'm::app\\user\\models\\User::role',
            'm::app\\user\\models\\User::username',
            'm::app\\user\\models\\User::email',
            'm::app\\user\\models\\User::phone',
            'm::app\\user\\models\\User::passwordHash',
            'm::app\\user\\models\\User::uiLanguage',
            'm::app\\user\\models\\User::isBanned',
            'm::app\\user\\models\\User::createTime',
            'm::app\\user\\models\\User::updateTime',
        ],
    ],
    'm::app\\user\\models\\User::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\user\\models\\User::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\user\\models\\User::id::view',
        ],
    ],
    'm::app\\user\\models\\User::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::role' => [
        'type' => 2,
        'description' => 'role',
        'children' => [
            'm::app\\user\\models\\User::role::view',
            'm::app\\user\\models\\User::role::create',
            'm::app\\user\\models\\User::role::update',
        ],
    ],
    'm::app\\user\\models\\User::role::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::role::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::role::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::username' => [
        'type' => 2,
        'description' => 'username',
        'children' => [
            'm::app\\user\\models\\User::username::view',
            'm::app\\user\\models\\User::username::create',
            'm::app\\user\\models\\User::username::update',
        ],
    ],
    'm::app\\user\\models\\User::username::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::username::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::username::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::email' => [
        'type' => 2,
        'description' => 'email',
        'children' => [
            'm::app\\user\\models\\User::email::view',
            'm::app\\user\\models\\User::email::create',
            'm::app\\user\\models\\User::email::update',
        ],
    ],
    'm::app\\user\\models\\User::email::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::email::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::email::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::phone' => [
        'type' => 2,
        'description' => 'phone',
        'children' => [
            'm::app\\user\\models\\User::phone::view',
            'm::app\\user\\models\\User::phone::create',
            'm::app\\user\\models\\User::phone::update',
        ],
    ],
    'm::app\\user\\models\\User::phone::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::phone::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::phone::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::passwordHash' => [
        'type' => 2,
        'description' => 'passwordHash',
        'children' => [
            'm::app\\user\\models\\User::passwordHash::view',
            'm::app\\user\\models\\User::passwordHash::create',
            'm::app\\user\\models\\User::passwordHash::update',
        ],
    ],
    'm::app\\user\\models\\User::passwordHash::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::passwordHash::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::passwordHash::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::uiLanguage' => [
        'type' => 2,
        'description' => 'uiLanguage',
        'children' => [
            'm::app\\user\\models\\User::uiLanguage::view',
            'm::app\\user\\models\\User::uiLanguage::create',
            'm::app\\user\\models\\User::uiLanguage::update',
        ],
    ],
    'm::app\\user\\models\\User::uiLanguage::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::uiLanguage::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::uiLanguage::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::isBanned' => [
        'type' => 2,
        'description' => 'isBanned',
        'children' => [
            'm::app\\user\\models\\User::isBanned::view',
            'm::app\\user\\models\\User::isBanned::create',
            'm::app\\user\\models\\User::isBanned::update',
        ],
    ],
    'm::app\\user\\models\\User::isBanned::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::isBanned::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::isBanned::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\user\\models\\User::createTime::view',
        ],
    ],
    'm::app\\user\\models\\User::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::app\\user\\models\\User::updateTime::view',
        ],
    ],
    'm::app\\user\\models\\User::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
];
