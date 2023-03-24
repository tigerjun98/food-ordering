<?php

namespace App\Entity\Enums;

enum ConsultationEnum: string
{
    public const TABLET_OR_CAPSULE = 201;
    public const GRANULE_OR_POWDER = 202;
    public const FLUID = 203;
    public const EXTERNAL = 204;
    public const ACUPUNCTURE = 205;
    public const MASSAGE = 206;
    public const OTHER = 207;
    public const CONSULTATION = 208;

    public static function getPrescriptionListing(): array
    {
        return [
            self::EXTERNAL => trans('common.external_use'), // 外用药
            self::ACUPUNCTURE => trans('common.acupuncture'), // 针灸
            self::MASSAGE => trans('common.massage'), // 推拿
            self::OTHER => trans('common.other'),
        ];
    }

    public static function getMedicineListing(): array
    {
        return [
            self::TABLET_OR_CAPSULE => trans('common.tablet_or_capsule'),
            self::GRANULE_OR_POWDER => trans('common.granule_or_powder'),
            self::FLUID => trans('common.liquid'),
        ];
    }

    public static function getListing(): array
    {
        $arr = [
            self::CONSULTATION => trans('common.consultation'),
        ];
        return self::getMedicineListing() + self::getPrescriptionListing() + $arr;
    }
}
