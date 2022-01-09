<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Operations\Countries;

/**
 * @property array<int, \App\GraphQLExecutor\Operations\Countries\Countries\Country> $countries
 * @property string $__typename
 */
class Countries extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param array<int, \App\GraphQLExecutor\Operations\Countries\Countries\Country> $countries
     */
    public static function make($countries): self
    {
        $instance = new self;

        if ($countries !== self::UNDEFINED) {
            $instance->countries = $countries;
        }
        $instance->__typename = 'query_root';

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'countries' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \App\GraphQLExecutor\Operations\Countries\Countries\Country))),
            '__typename' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
