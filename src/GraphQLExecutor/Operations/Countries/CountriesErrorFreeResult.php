<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Operations\Countries;

class CountriesErrorFreeResult extends \Spawnia\Sailor\ErrorFreeResult
{
    public Countries $data;

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
