<?php

namespace App\Entity\Enums;

enum StatusEnum: string
{
    case ACTIVE = '100';
    case INACTIVE = '101';

    public static function getClass($type)
    {
        foreach (self::cases() as $case){
            if($case->value == $type){
                return $case->getType();
            }
        }
        return null;
    }

    public static function getListing()
    {
        $options = [];
        foreach (self::cases() as $case){
            $options[$case->value] = $case->getName();
        }

        return $options;
    }

    public function getName(): string
    {
        return match ($this) {
            self::ACTIVE => trans('common.active'),
            self::INACTIVE => trans('common.inactive'),
        };
    }

    public function getType(): string
    {
        return match ($this) {
            self::ACTIVE => 'success',
            self::INACTIVE => 'light',
        };
    }
}
