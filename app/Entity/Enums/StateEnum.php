<?php

namespace App\Entity\Enums;

enum StateEnum: string
{
    case JOHOR = '801';
    CASE KEDAH = '802';
    CASE KELANTAN = '803';
    CASE KL = '804';
    CASE LABUAN = '805';
    CASE MELAKA = '806';
    CASE PAHANG = '807';
    CASE PENANG = '808';
    CASE PERAK = '809';
    CASE PERLIS = '810';
    CASE PUTRAJAYA = '811';
    CASE SABAH = '812';
    CASE SARAWAK = '813';
    CASE SELANGOR = '814';
    CASE SEMBILAN = '815';
    CASE TERENGGANU = '816';

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
            self::JOHOR => trans('state.johor'),
            self::KEDAH => trans('state.kedah'),
            self::KELANTAN => trans('state.kelantan'),
            self::KL => trans('state.kl'),
            self::LABUAN => trans('state.labuan'),
            self::MELAKA => trans('state.melaka'),
            self::PAHANG => trans('state.pahang'),
            self::PENANG => trans('state.penang'),
            self::PERAK => trans('state.perak'),
            self::PERLIS => trans('state.perlis'),
            self::PUTRAJAYA => trans('state.putrajaya'),
            self::SABAH => trans('state.sabah'),
            self::SARAWAK => trans('state.sarawak'),
            self::SELANGOR => trans('state.selangor'),
            self::SEMBILAN => trans('state.sembilan'),
            self::TERENGGANU => trans('state.terengganu'),
        };
    }
}
