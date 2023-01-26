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

    public const UNPAID = 300;
    public const PAID = 301;
    public const PENDING = 302;
    public const PROCESSING = 303;
    public const COMPLETED = 304;
    public const CANCELLED = 305;
    public const REFUNDING = 306;
    public const REFUNDED = 307;

    public const DEPOSIT = 401;
    public const WITHDRAW = 402;
    public const EARN = 403;
    public const LOSS = 404;
    public const BUY = 405;
    public const SELL = 406;

    public static $statusTexts = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive',
        self::BANNED => 'Banned',
        self::BLOCKED => 'Blocked',
        self::UNPAID => 'Unpaid',
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::PROCESSING => 'Processing',
        self::COMPLETED => 'Completed',
        self::CANCELLED => 'Cancelled',
        self::REFUNDING => 'Refund',
        self::REFUNDED => 'Refunded',
        self::DEPOSIT => 'Deposit',
        self::WITHDRAW => 'Withdraw',
        self::EARN => 'Earn',
        self::LOSS => 'Loss',
        self::BUY => 'Buy',
        self::SELL => 'Sell',
    ];

    public int $statusCode;
    public ?string $statusText;

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
