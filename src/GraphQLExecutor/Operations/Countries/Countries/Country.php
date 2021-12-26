<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Operations\Countries\Countries;

/**
 * @property string $name
 * @property string $__typename
 * @property string|null $capital
 * @property string|null $currency
 */
class Country extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string $name
     * @param string|null $capital
     * @param string|null $currency
     */
    public static function make($name, $capital = 1.7976931348623157E+308, $currency = 1.7976931348623157E+308): self
    {
        $instance = new self;

        if ($name !== self::UNDEFINED) {
            $instance->name = $name;
        }
        $instance->__typename = 'Country';
        if ($capital !== self::UNDEFINED) {
            $instance->capital = $capital;
        }
        if ($currency !== self::UNDEFINED) {
            $instance->currency = $currency;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'name' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '__typename' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'capital' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'currency' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
        ];
    }
}
