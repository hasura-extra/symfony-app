<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Countries;

class CountriesErrorFreeResult extends \Spawnia\Sailor\ErrorFreeResult
{
    public Countries $data;
}
