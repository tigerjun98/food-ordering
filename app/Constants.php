<?php

namespace App;

use phpDocumentor\Reflection\Types\Self_;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class Constants
{
    public const ACTIVE = 100;
    public const INACTIVE = 101;

    public const BANNED = 200;
    public const BLOCKED = 201;

    public const JOHOR = 801;
    public const KEDAH = 802;
    public const KELANTAN = 803;
    public const KL = 804;
    public const LABUAN = 805;
    public const MELAKA = 806;
    public const PAHANG = 807;
    public const PENANG = 808;
    public const PERAK = 809;
    public const PERLIS = 810;
    public const PUTRAJAYA = 811;
    public const SABAH = 812;
    public const SARAWAK = 813;
    public const SELANGOR = 814;
    public const SEMBILAN = 815;
    public const TERENGGANU = 816;

    public static $typeRange = [
        'state'         => [801, 816],
    ];

    public static $statusTexts = [
        self::ACTIVE        => 'Active',
        self::INACTIVE      => 'Inactive',
        self::BANNED        => 'Banned',
        self::BLOCKED       => 'Blocked',
        self::JOHOR         => 'Johor',
        self::KEDAH         => 'Kedah',
        self::KELANTAN      => 'Kelantan',
        self::KL            => 'KL',
        self::LABUAN        => 'Labuan',
        self::MELAKA        => 'Melaka',
        self::PAHANG        => 'Pahang',
        self::PENANG        => 'Penang',
        self::PERAK         => 'Perak',
        self::PERLIS        => 'Perlis',
        self::PUTRAJAYA     => 'Putrajaya',
        self::SABAH         => 'Sabah',
        self::SARAWAK       => 'Sarawak',
        self::SELANGOR      => 'Selangor',
        self::SEMBILAN      => 'Sembilan',
        self::TERENGGANU    => 'Terengganu',
    ];

    public int $statusCode;
    public ?string $statusText;

    public static function translation($v)
    {
        return trans('constant.'.strtolower($v));
    }

    public static function getLists($name): array
    {
        $range = self::$typeRange[$name];
        $filter = array_filter(self::$statusTexts, function($k) use($range) {
            return $k >= $range[0] && $k <= $range[1];
        }, ARRAY_FILTER_USE_KEY);

        return array_map(function($item) {
            return self::translation($item);
        }, $filter);
    }

    public function isInvalid(): bool
    {
        return !array_key_exists($this->statusCode ,self::$statusTexts);
    }

    public function setStatusCode(int $code, string $text = null): static
    {
        $this->statusCode = $code;
        if ($this->isInvalid()) {
            throw new \InvalidArgumentException(sprintf('The constant code "%s" is not valid.', $code));
        }

        if (null === $text) {
            $this->statusText = self::$statusTexts[$code] ?? 'unknown status';

            return $this;
        }

        if (false === $text) {
            $this->statusText = '';

            return $this;
        }

        $this->statusText = $text;

        return $this;
    }
}
