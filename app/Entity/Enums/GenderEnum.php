<?php

namespace App\Entity\Enums;

enum GenderEnum: string
{
    case Male = '100';
    case Female = '101';
    case Other = '102';

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
            self::Male => 'Male',
            self::Female => 'Female',
            self::Other => 'Other',
        };
    }
}
