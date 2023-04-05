<?php

namespace App\Entity\Enums;

enum ProcessStatusEnum: string
{
    case PENDING    = '101';
    case ACCEPTED   = '102';
    case REJECTED   = '103';
    case CANCELLED  = '104';
    case COMPLETED  = '105';

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
            self::PENDING => trans('common.pending'),
            self::ACCEPTED => trans('common.accepted'),
            self::REJECTED => trans('common.rejected'),
            self::CANCELLED => trans('common.cancelled'),
            self::COMPLETED => trans('common.completed'),
        };
    }

    public function getType(): string
    {
        return match ($this) {
            self::PENDING => 'warning',
            self::ACCEPTED => 'info',
            self::REJECTED => 'danger',
            self::CANCELLED => 'light',
            self::COMPLETED => 'success',
        };
    }
}
