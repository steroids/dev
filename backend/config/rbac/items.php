<?php
return [
    'a::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::gii::self',
            'a::gii::index',
        ],
    ],
    'a::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api' => [
        'type' => 2,
        'description' => 'api',
        'children' => [
            'a::api::self',
            'a::api::gii',
            'a::api::admin',
            'a::api::billing',
        ],
    ],
    'a::api::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'guest' => [
        'type' => 1,
        'children' => [
            'a::file',
            'a::api::admin::self',
            'a::api::admin::billing',
            'a::api::billing::currencies',
        ],
    ],
    'user' => [
        'type' => 1,
        'children' => [
            'a::file',
            'a::api::billing',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'a::file',
            'a::api::admin',
            'a::api::billing',
        ],
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
            'm::steroids\\auth\\models\\AuthConfirm::uid',
            'm::steroids\\auth\\models\\AuthConfirm::is2Fa',
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
            'm::app\\user\\models\\User::login',
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
    'm::app\\user\\models\\User::login' => [
        'type' => 2,
        'description' => 'login',
        'children' => [
            'm::app\\user\\models\\User::login::view',
            'm::app\\user\\models\\User::login::create',
            'm::app\\user\\models\\User::login::update',
        ],
    ],
    'm::app\\user\\models\\User::login::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::login::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::login::update' => [
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
    'a::gii::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'a::api::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::api::gii::self',
            'a::api::gii::init',
            'a::api::gii::entity',
            'a::api::gii::api-get-entities',
            'a::api::gii::api-class-save',
            'a::api::gii::api-get-permissions',
            'a::api::gii::api-permissions-save',
        ],
    ],
    'a::api::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::gii::init' => [
        'type' => 2,
        'description' => 'init',
    ],
    'a::api::gii::entity' => [
        'type' => 2,
        'description' => 'entity',
    ],
    'a::api::gii::api-get-entities' => [
        'type' => 2,
        'description' => 'api-get-entities',
    ],
    'a::api::gii::api-class-save' => [
        'type' => 2,
        'description' => 'api-class-save',
    ],
    'a::api::gii::api-get-permissions' => [
        'type' => 2,
        'description' => 'api-get-permissions',
    ],
    'a::api::gii::api-permissions-save' => [
        'type' => 2,
        'description' => 'api-permissions-save',
    ],
    'a::file' => [
        'type' => 2,
        'description' => 'file',
        'children' => [
            'a::file::self',
            'a::file::index',
        ],
    ],
    'a::file::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::file::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'm::steroids\\billing\\models\\BillingAccount' => [
        'type' => 2,
        'description' => 'steroids\\billing\\models\\BillingAccount',
        'children' => [
            'm::steroids\\billing\\models\\BillingAccount::view',
            'm::steroids\\billing\\models\\BillingAccount::create',
            'm::steroids\\billing\\models\\BillingAccount::update',
            'm::steroids\\billing\\models\\BillingAccount::delete',
            'm::steroids\\billing\\models\\BillingAccount::id',
            'm::steroids\\billing\\models\\BillingAccount::name',
            'm::steroids\\billing\\models\\BillingAccount::userId',
            'm::steroids\\billing\\models\\BillingAccount::currencyId',
            'm::steroids\\billing\\models\\BillingAccount::balance',
        ],
    ],
    'm::steroids\\billing\\models\\BillingAccount::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingAccount::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingAccount::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingAccount::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\billing\\models\\BillingAccount::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\billing\\models\\BillingAccount::id::view',
        ],
    ],
    'm::steroids\\billing\\models\\BillingAccount::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingAccount::name' => [
        'type' => 2,
        'description' => 'name',
        'children' => [
            'm::steroids\\billing\\models\\BillingAccount::name::view',
            'm::steroids\\billing\\models\\BillingAccount::name::create',
            'm::steroids\\billing\\models\\BillingAccount::name::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingAccount::name::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingAccount::name::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingAccount::name::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingAccount::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::steroids\\billing\\models\\BillingAccount::userId::view',
            'm::steroids\\billing\\models\\BillingAccount::userId::create',
            'm::steroids\\billing\\models\\BillingAccount::userId::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingAccount::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingAccount::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingAccount::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingAccount::currencyId' => [
        'type' => 2,
        'description' => 'currencyId',
        'children' => [
            'm::steroids\\billing\\models\\BillingAccount::currencyId::view',
            'm::steroids\\billing\\models\\BillingAccount::currencyId::create',
            'm::steroids\\billing\\models\\BillingAccount::currencyId::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingAccount::currencyId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingAccount::currencyId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingAccount::currencyId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingAccount::balance' => [
        'type' => 2,
        'description' => 'balance',
        'children' => [
            'm::steroids\\billing\\models\\BillingAccount::balance::view',
            'm::steroids\\billing\\models\\BillingAccount::balance::create',
            'm::steroids\\billing\\models\\BillingAccount::balance::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingAccount::balance::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingAccount::balance::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingAccount::balance::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency' => [
        'type' => 2,
        'description' => 'steroids\\billing\\models\\BillingCurrency',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::view',
            'm::steroids\\billing\\models\\BillingCurrency::create',
            'm::steroids\\billing\\models\\BillingCurrency::update',
            'm::steroids\\billing\\models\\BillingCurrency::delete',
            'm::steroids\\billing\\models\\BillingCurrency::id',
            'm::steroids\\billing\\models\\BillingCurrency::code',
            'm::steroids\\billing\\models\\BillingCurrency::precision',
            'm::steroids\\billing\\models\\BillingCurrency::label',
            'm::steroids\\billing\\models\\BillingCurrency::rateUsd',
            'm::steroids\\billing\\models\\BillingCurrency::ratePrecision',
            'm::steroids\\billing\\models\\BillingCurrency::isVisible',
            'm::steroids\\billing\\models\\BillingCurrency::createTime',
            'm::steroids\\billing\\models\\BillingCurrency::updateTime',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::id::view',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::code' => [
        'type' => 2,
        'description' => 'code',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::code::view',
            'm::steroids\\billing\\models\\BillingCurrency::code::create',
            'm::steroids\\billing\\models\\BillingCurrency::code::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::code::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::code::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::code::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::precision' => [
        'type' => 2,
        'description' => 'precision',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::precision::view',
            'm::steroids\\billing\\models\\BillingCurrency::precision::create',
            'm::steroids\\billing\\models\\BillingCurrency::precision::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::precision::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::precision::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::precision::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::label' => [
        'type' => 2,
        'description' => 'label',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::label::view',
            'm::steroids\\billing\\models\\BillingCurrency::label::create',
            'm::steroids\\billing\\models\\BillingCurrency::label::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::label::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::label::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::label::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::rateUsd' => [
        'type' => 2,
        'description' => 'rateUsd',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::rateUsd::view',
            'm::steroids\\billing\\models\\BillingCurrency::rateUsd::create',
            'm::steroids\\billing\\models\\BillingCurrency::rateUsd::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::rateUsd::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::rateUsd::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::rateUsd::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::ratePrecision' => [
        'type' => 2,
        'description' => 'ratePrecision',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::ratePrecision::view',
            'm::steroids\\billing\\models\\BillingCurrency::ratePrecision::create',
            'm::steroids\\billing\\models\\BillingCurrency::ratePrecision::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::ratePrecision::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::ratePrecision::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::ratePrecision::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::isVisible' => [
        'type' => 2,
        'description' => 'isVisible',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::isVisible::view',
            'm::steroids\\billing\\models\\BillingCurrency::isVisible::create',
            'm::steroids\\billing\\models\\BillingCurrency::isVisible::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::isVisible::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::isVisible::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::isVisible::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::createTime::view',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingCurrency::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::updateTime::view',
        ],
    ],
    'm::steroids\\billing\\models\\BillingCurrency::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation' => [
        'type' => 2,
        'description' => 'steroids\\billing\\models\\BillingOperation',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::view',
            'm::steroids\\billing\\models\\BillingOperation::create',
            'm::steroids\\billing\\models\\BillingOperation::update',
            'm::steroids\\billing\\models\\BillingOperation::delete',
            'm::steroids\\billing\\models\\BillingOperation::id',
            'm::steroids\\billing\\models\\BillingOperation::name',
            'm::steroids\\billing\\models\\BillingOperation::delta',
            'm::steroids\\billing\\models\\BillingOperation::createTime',
            'm::steroids\\billing\\models\\BillingOperation::currencyId',
            'm::steroids\\billing\\models\\BillingOperation::fromAccountId',
            'm::steroids\\billing\\models\\BillingOperation::toAccountId',
            'm::steroids\\billing\\models\\BillingOperation::documentId',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingOperation::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingOperation::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\billing\\models\\BillingOperation::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::id::view',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::name' => [
        'type' => 2,
        'description' => 'name',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::name::view',
            'm::steroids\\billing\\models\\BillingOperation::name::create',
            'm::steroids\\billing\\models\\BillingOperation::name::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::name::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::name::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingOperation::name::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingOperation::delta' => [
        'type' => 2,
        'description' => 'delta',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::delta::view',
            'm::steroids\\billing\\models\\BillingOperation::delta::create',
            'm::steroids\\billing\\models\\BillingOperation::delta::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::delta::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::delta::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingOperation::delta::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingOperation::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::createTime::view',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::uid' => [
        'type' => 2,
        'description' => 'uid',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::uid::view',
            'm::steroids\\auth\\models\\AuthConfirm::uid::create',
            'm::steroids\\auth\\models\\AuthConfirm::uid::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::uid::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::uid::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::uid::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingOperation::currencyId' => [
        'type' => 2,
        'description' => 'currencyId',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::currencyId::view',
            'm::steroids\\billing\\models\\BillingOperation::currencyId::create',
            'm::steroids\\billing\\models\\BillingOperation::currencyId::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::currencyId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::currencyId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingOperation::currencyId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingOperation::fromAccountId' => [
        'type' => 2,
        'description' => 'fromAccountId',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::fromAccountId::view',
            'm::steroids\\billing\\models\\BillingOperation::fromAccountId::create',
            'm::steroids\\billing\\models\\BillingOperation::fromAccountId::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::fromAccountId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::fromAccountId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingOperation::fromAccountId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingOperation::toAccountId' => [
        'type' => 2,
        'description' => 'toAccountId',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::toAccountId::view',
            'm::steroids\\billing\\models\\BillingOperation::toAccountId::create',
            'm::steroids\\billing\\models\\BillingOperation::toAccountId::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::toAccountId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::toAccountId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingOperation::toAccountId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingOperation::documentId' => [
        'type' => 2,
        'description' => 'documentId',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::documentId::view',
            'm::steroids\\billing\\models\\BillingOperation::documentId::create',
            'm::steroids\\billing\\models\\BillingOperation::documentId::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingOperation::documentId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingOperation::documentId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingOperation::documentId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument' => [
        'type' => 2,
        'description' => 'steroids\\billing\\models\\BillingManualDocument',
        'children' => [
            'm::steroids\\billing\\models\\BillingManualDocument::view',
            'm::steroids\\billing\\models\\BillingManualDocument::create',
            'm::steroids\\billing\\models\\BillingManualDocument::update',
            'm::steroids\\billing\\models\\BillingManualDocument::delete',
            'm::steroids\\billing\\models\\BillingManualDocument::id',
            'm::steroids\\billing\\models\\BillingManualDocument::userId',
            'm::steroids\\billing\\models\\BillingManualDocument::ipAddress',
            'm::steroids\\billing\\models\\BillingManualDocument::comment',
        ],
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\billing\\models\\BillingManualDocument::id::view',
        ],
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::steroids\\billing\\models\\BillingManualDocument::userId::view',
            'm::steroids\\billing\\models\\BillingManualDocument::userId::create',
            'm::steroids\\billing\\models\\BillingManualDocument::userId::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::ipAddress' => [
        'type' => 2,
        'description' => 'ipAddress',
        'children' => [
            'm::steroids\\billing\\models\\BillingManualDocument::ipAddress::view',
            'm::steroids\\billing\\models\\BillingManualDocument::ipAddress::create',
            'm::steroids\\billing\\models\\BillingManualDocument::ipAddress::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::ipAddress::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::ipAddress::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::ipAddress::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::comment' => [
        'type' => 2,
        'description' => 'comment',
        'children' => [
            'm::steroids\\billing\\models\\BillingManualDocument::comment::view',
            'm::steroids\\billing\\models\\BillingManualDocument::comment::create',
            'm::steroids\\billing\\models\\BillingManualDocument::comment::update',
        ],
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::comment::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::comment::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\billing\\models\\BillingManualDocument::comment::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::api::admin' => [
        'type' => 2,
        'description' => 'admin',
        'children' => [
            'a::api::admin::self',
            'a::api::admin::billing',
        ],
    ],
    'a::api::admin::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::billing' => [
        'type' => 2,
        'description' => 'billing',
        'children' => [
            'a::api::admin::billing::self',
            'a::api::admin::billing::get-operations',
            'a::api::admin::billing::create-manual',
        ],
    ],
    'a::api::admin::billing::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::admin::billing::get-operations' => [
        'type' => 2,
        'description' => 'get-operations',
    ],
    'a::api::admin::billing::create-manual' => [
        'type' => 2,
        'description' => 'create-manual',
    ],
    'a::api::billing' => [
        'type' => 2,
        'description' => 'billing',
        'children' => [
            'a::api::billing::self',
            'a::api::billing::user-operations',
            'a::api::billing::currencies',
        ],
    ],
    'a::api::billing::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::billing::user-operations' => [
        'type' => 2,
        'description' => 'user-operations',
    ],
    'a::api::billing::currencies' => [
        'type' => 2,
        'description' => 'currencies',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\Auth2FaValidation',
        'children' => [
            'm::steroids\\auth\\models\\Auth2FaValidation::view',
            'm::steroids\\auth\\models\\Auth2FaValidation::create',
            'm::steroids\\auth\\models\\Auth2FaValidation::update',
            'm::steroids\\auth\\models\\Auth2FaValidation::delete',
            'm::steroids\\auth\\models\\Auth2FaValidation::id',
            'm::steroids\\auth\\models\\Auth2FaValidation::createTime',
            'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType',
            'm::steroids\\auth\\models\\Auth2FaValidation::userId',
        ],
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\auth\\models\\Auth2FaValidation::id::view',
        ],
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::steroids\\auth\\models\\Auth2FaValidation::createTime::view',
            'm::steroids\\auth\\models\\Auth2FaValidation::createTime::create',
            'm::steroids\\auth\\models\\Auth2FaValidation::createTime::update',
        ],
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::createTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::createTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType' => [
        'type' => 2,
        'description' => 'authentificatorType',
        'children' => [
            'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType::view',
            'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType::create',
            'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType::update',
        ],
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::authentificatorType::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::steroids\\auth\\models\\Auth2FaValidation::userId::view',
            'm::steroids\\auth\\models\\Auth2FaValidation::userId::create',
            'm::steroids\\auth\\models\\Auth2FaValidation::userId::update',
        ],
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\Auth2FaValidation::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\UserAuthentificatorKeys',
        'children' => [
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::view',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::create',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::update',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::delete',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::id',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType',
        ],
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::id::view',
        ],
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId' => [
        'type' => 2,
        'description' => 'userId',
        'children' => [
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId::view',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId::create',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId::update',
        ],
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::userId::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey' => [
        'type' => 2,
        'description' => 'secretKey',
        'children' => [
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey::view',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey::create',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey::update',
        ],
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::secretKey::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType' => [
        'type' => 2,
        'description' => 'authentificatorType',
        'children' => [
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType::view',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType::create',
            'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType::update',
        ],
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\UserAuthentificatorKeys::authentificatorType::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::is2Fa' => [
        'type' => 2,
        'description' => 'is2Fa',
        'children' => [
            'm::steroids\\auth\\models\\AuthConfirm::is2Fa::view',
            'm::steroids\\auth\\models\\AuthConfirm::is2Fa::create',
            'm::steroids\\auth\\models\\AuthConfirm::is2Fa::update',
        ],
    ],
    'm::steroids\\auth\\models\\AuthConfirm::is2Fa::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::is2Fa::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthConfirm::is2Fa::update' => [
        'type' => 2,
        'description' => 'update',
    ],
];
