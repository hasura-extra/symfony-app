<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Operations;

/**
 * @extends \Spawnia\Sailor\Operation<\App\GraphQLExecutor\Operations\Countries\CountriesResult>
 */
class Countries extends \Spawnia\Sailor\Operation
{
    public static function execute(): Countries\CountriesResult
    {
        return self::executeOperation(
        );
    }

    protected static function converters(): array
    {
        static $converters;

        return $converters ??= [
        ];
    }

    public static function document(): string
    {
        return /* @lang GraphQL */ 'query Countries {
          __typename
          countries {
            __typename
            name
            capital
            currency
          }
        }';
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
