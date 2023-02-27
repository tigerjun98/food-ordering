<?php

namespace App\Modules\Admin\Permissions;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class Permission
{
    public const CAN_ACCESS_USERS = 'user.*';
    public const CAN_ACCESS_QUEUE = 'access-queue';
    public const CAN_ACCESS_ACCOUNT = 'access-account';
    public const CAN_ACCESS_MEDICINE = 'access-medicine';
    public const CAN_ACCESS_OPTION = 'access-option';
    public const CAN_ACCESS_CONSULTATION = 'access-consultation';
    public const CAN_ACCESS_ATTACHMENT = 'access-attachment';
}
