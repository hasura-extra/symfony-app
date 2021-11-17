<?php

declare(strict_types=1);

namespace App\GraphQLExecutor;

class Countries extends \Spawnia\Sailor\Operation
{
    public static function execute(): Countries\CountriesResult
    {
        return self::executeOperation(...func_get_args());
    }

    public static function document(): string
    {
        return /* @lang GraphQL */ 'query Countries {
          countries {
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
