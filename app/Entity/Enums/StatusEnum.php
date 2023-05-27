<?php

namespace App\Entity\Enums;

enum StatusEnum: string
{
    public const ACTIVE = 100;
    public const INACTIVE = 101;
    public const SHOW = 102;
    public const HIDE = 103;
    public const UNPAID = 104;
    public const PAID = 105;
    public const PENDING = 106;
    public const PREPARING = 108;
    public const SHIPPING = 109;
    public const EXPIRED = 110;
    public const COMPLETED = 111;
    public const CANCELLED = 112;
    public const REJECTED = 113;

    public static function getListing(): array
    {
        return [
            self::ACTIVE            => 'Active',
            self::INACTIVE          => 'Inactive',
            self::SHOW              => 'Show',
            self::HIDE              => 'Hide',
            self::UNPAID            => 'Unpaid',
            self::PAID              => 'Paid',
            self::PENDING           => 'Pending',
            self::PREPARING         => 'Preparing',
            self::SHIPPING          => 'Shipping',
            self::EXPIRED           => 'Expired',
            self::COMPLETED         => 'Completed',
            self::CANCELLED         => 'Cancelled',
            self::REJECTED          => 'Rejected',
        ];
    }

    public static function getOrderListing(): array
    {
        return array_only(self::getListing(), [
            self::UNPAID,
            self::PENDING,
            self::PREPARING,
            self::SHIPPING,
            self::COMPLETED,
            self::CANCELLED,
            self::EXPIRED,
        ]);
    }

    public static function getUserOrderListing(): array
    {
        return [
            self::PENDING           => trans('status.to_ship'),
            self::SHIPPING          => trans('status.to_receive'),
            self::COMPLETED         => trans('status.to_review'),
            self::CANCELLED         => trans('status.cancelled'),
        ];
    }

    public static function getActivityListing(): array
    {
        return [
            self::ACTIVE => trans('common.active'),
            self::INACTIVE => trans('common.inactive'),
        ];
    }

    public static function getDisplayListing(): array
    {
        return [
            self::SHOW => trans('status.show'),
            self::HIDE => trans('status.hide'),
        ];
    }

}
