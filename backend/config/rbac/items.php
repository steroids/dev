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
    'm::steroids\\auth\\models\\AuthLogin' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\AuthLogin',
        'children' => [
            'm::steroids\\auth\\models\\AuthLogin::view',
            'm::steroids\\auth\\models\\AuthLogin::create',
            'm::steroids\\auth\\models\\AuthLogin::update',
            'm::steroids\\auth\\models\\AuthLogin::delete',
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
    'm::steroids\\auth\\models\\AuthSocial' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\AuthSocial',
        'children' => [
            'm::steroids\\auth\\models\\AuthSocial::view',
            'm::steroids\\auth\\models\\AuthSocial::create',
            'm::steroids\\auth\\models\\AuthSocial::update',
            'm::steroids\\auth\\models\\AuthSocial::delete',
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
    'm::app\\user\\models\\User' => [
        'type' => 2,
        'description' => 'app\\user\\models\\User',
        'children' => [
            'm::app\\user\\models\\User::view',
            'm::app\\user\\models\\User::create',
            'm::app\\user\\models\\User::update',
            'm::app\\user\\models\\User::delete',
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
    'm::steroids\\billing\\models\\BillingCurrency' => [
        'type' => 2,
        'description' => 'steroids\\billing\\models\\BillingCurrency',
        'children' => [
            'm::steroids\\billing\\models\\BillingCurrency::view',
            'm::steroids\\billing\\models\\BillingCurrency::create',
            'm::steroids\\billing\\models\\BillingCurrency::update',
            'm::steroids\\billing\\models\\BillingCurrency::delete',
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
    'm::steroids\\billing\\models\\BillingOperation' => [
        'type' => 2,
        'description' => 'steroids\\billing\\models\\BillingOperation',
        'children' => [
            'm::steroids\\billing\\models\\BillingOperation::view',
            'm::steroids\\billing\\models\\BillingOperation::create',
            'm::steroids\\billing\\models\\BillingOperation::update',
            'm::steroids\\billing\\models\\BillingOperation::delete',
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
    'm::steroids\\billing\\models\\BillingManualDocument' => [
        'type' => 2,
        'description' => 'steroids\\billing\\models\\BillingManualDocument',
        'children' => [
            'm::steroids\\billing\\models\\BillingManualDocument::view',
            'm::steroids\\billing\\models\\BillingManualDocument::create',
            'm::steroids\\billing\\models\\BillingManualDocument::update',
            'm::steroids\\billing\\models\\BillingManualDocument::delete',
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
    'm::steroids\\auth\\models\\AuthTwoFactor' => [
        'type' => 2,
        'description' => 'steroids\\auth\\models\\AuthTwoFactor',
        'children' => [
            'm::steroids\\auth\\models\\AuthTwoFactor::view',
            'm::steroids\\auth\\models\\AuthTwoFactor::create',
            'm::steroids\\auth\\models\\AuthTwoFactor::update',
            'm::steroids\\auth\\models\\AuthTwoFactor::delete',
        ],
    ],
    'm::steroids\\auth\\models\\AuthTwoFactor::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\auth\\models\\AuthTwoFactor::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\auth\\models\\AuthTwoFactor::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\auth\\models\\AuthTwoFactor::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\document\\models\\Document' => [
        'type' => 2,
        'description' => 'steroids\\document\\models\\Document',
        'children' => [
            'm::steroids\\document\\models\\Document::view',
            'm::steroids\\document\\models\\Document::create',
            'm::steroids\\document\\models\\Document::update',
            'm::steroids\\document\\models\\Document::delete',
        ],
    ],
    'm::steroids\\document\\models\\Document::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\document\\models\\Document::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\document\\models\\Document::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\document\\models\\Document::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\document\\models\\DocumentCategory' => [
        'type' => 2,
        'description' => 'steroids\\document\\models\\DocumentCategory',
        'children' => [
            'm::steroids\\document\\models\\DocumentCategory::view',
            'm::steroids\\document\\models\\DocumentCategory::create',
            'm::steroids\\document\\models\\DocumentCategory::update',
            'm::steroids\\document\\models\\DocumentCategory::delete',
        ],
    ],
    'm::steroids\\document\\models\\DocumentCategory::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\document\\models\\DocumentCategory::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\document\\models\\DocumentCategory::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\document\\models\\DocumentCategory::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\document\\models\\DocumentParam' => [
        'type' => 2,
        'description' => 'steroids\\document\\models\\DocumentParam',
        'children' => [
            'm::steroids\\document\\models\\DocumentParam::view',
            'm::steroids\\document\\models\\DocumentParam::create',
            'm::steroids\\document\\models\\DocumentParam::update',
            'm::steroids\\document\\models\\DocumentParam::delete',
        ],
    ],
    'm::steroids\\document\\models\\DocumentParam::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\document\\models\\DocumentParam::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\document\\models\\DocumentParam::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\document\\models\\DocumentParam::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\document\\models\\DocumentUser' => [
        'type' => 2,
        'description' => 'steroids\\document\\models\\DocumentUser',
        'children' => [
            'm::steroids\\document\\models\\DocumentUser::view',
            'm::steroids\\document\\models\\DocumentUser::create',
            'm::steroids\\document\\models\\DocumentUser::update',
            'm::steroids\\document\\models\\DocumentUser::delete',
        ],
    ],
    'm::steroids\\document\\models\\DocumentUser::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\document\\models\\DocumentUser::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\document\\models\\DocumentUser::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\document\\models\\DocumentUser::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\payment\\models\\PaymentMethod' => [
        'type' => 2,
        'description' => 'steroids\\payment\\models\\PaymentMethod',
        'children' => [
            'm::steroids\\payment\\models\\PaymentMethod::view',
            'm::steroids\\payment\\models\\PaymentMethod::create',
            'm::steroids\\payment\\models\\PaymentMethod::update',
            'm::steroids\\payment\\models\\PaymentMethod::delete',
        ],
    ],
    'm::steroids\\payment\\models\\PaymentMethod::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\payment\\models\\PaymentMethod::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\payment\\models\\PaymentMethod::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\payment\\models\\PaymentMethod::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\payment\\models\\PaymentMethodParam' => [
        'type' => 2,
        'description' => 'steroids\\payment\\models\\PaymentMethodParam',
        'children' => [
            'm::steroids\\payment\\models\\PaymentMethodParam::view',
            'm::steroids\\payment\\models\\PaymentMethodParam::create',
            'm::steroids\\payment\\models\\PaymentMethodParam::update',
            'm::steroids\\payment\\models\\PaymentMethodParam::delete',
        ],
    ],
    'm::steroids\\payment\\models\\PaymentMethodParam::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\payment\\models\\PaymentMethodParam::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\payment\\models\\PaymentMethodParam::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\payment\\models\\PaymentMethodParam::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\payment\\models\\PaymentOrder' => [
        'type' => 2,
        'description' => 'steroids\\payment\\models\\PaymentOrder',
        'children' => [
            'm::steroids\\payment\\models\\PaymentOrder::view',
            'm::steroids\\payment\\models\\PaymentOrder::create',
            'm::steroids\\payment\\models\\PaymentOrder::update',
            'm::steroids\\payment\\models\\PaymentOrder::delete',
        ],
    ],
    'm::steroids\\payment\\models\\PaymentOrder::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\payment\\models\\PaymentOrder::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\payment\\models\\PaymentOrder::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\payment\\models\\PaymentOrder::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\payment\\models\\PaymentOrderItem' => [
        'type' => 2,
        'description' => 'steroids\\payment\\models\\PaymentOrderItem',
        'children' => [
            'm::steroids\\payment\\models\\PaymentOrderItem::view',
            'm::steroids\\payment\\models\\PaymentOrderItem::create',
            'm::steroids\\payment\\models\\PaymentOrderItem::update',
            'm::steroids\\payment\\models\\PaymentOrderItem::delete',
        ],
    ],
    'm::steroids\\payment\\models\\PaymentOrderItem::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\payment\\models\\PaymentOrderItem::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\payment\\models\\PaymentOrderItem::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\payment\\models\\PaymentOrderItem::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\payment\\models\\PaymentProviderLog' => [
        'type' => 2,
        'description' => 'steroids\\payment\\models\\PaymentProviderLog',
        'children' => [
            'm::steroids\\payment\\models\\PaymentProviderLog::view',
            'm::steroids\\payment\\models\\PaymentProviderLog::create',
            'm::steroids\\payment\\models\\PaymentProviderLog::update',
            'm::steroids\\payment\\models\\PaymentProviderLog::delete',
        ],
    ],
    'm::steroids\\payment\\models\\PaymentProviderLog::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\payment\\models\\PaymentProviderLog::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\payment\\models\\PaymentProviderLog::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\payment\\models\\PaymentProviderLog::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\document\\models\\DocumentTag' => [
        'type' => 2,
        'description' => 'steroids\\document\\models\\DocumentTag',
        'children' => [
            'm::steroids\\document\\models\\DocumentTag::view',
            'm::steroids\\document\\models\\DocumentTag::create',
            'm::steroids\\document\\models\\DocumentTag::update',
            'm::steroids\\document\\models\\DocumentTag::delete',
        ],
    ],
    'm::steroids\\document\\models\\DocumentTag::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\document\\models\\DocumentTag::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\document\\models\\DocumentTag::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\document\\models\\DocumentTag::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::steroids\\notifier\\models\\Notification' => [
        'type' => 2,
        'description' => 'steroids\\notifier\\models\\Notification',
        'children' => [
            'm::steroids\\notifier\\models\\Notification::view',
            'm::steroids\\notifier\\models\\Notification::create',
            'm::steroids\\notifier\\models\\Notification::update',
            'm::steroids\\notifier\\models\\Notification::delete',
        ],
    ],
    'm::steroids\\notifier\\models\\Notification::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::steroids\\notifier\\models\\Notification::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::steroids\\notifier\\models\\Notification::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::steroids\\notifier\\models\\Notification::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
];
