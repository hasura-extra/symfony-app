<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Countries;

class Countries extends \Spawnia\Sailor\TypedObject
{
    /** @var array<int, \App\GraphQLExecutor\Countries\Countries\Countries> */
    public $countries;

    public function countriesTypeMapper(): callable
    {
        return static function (\stdClass $value): \Spawnia\Sailor\TypedObject {
            return \App\GraphQLExecutor\Countries\Countries\Countries::fromStdClass($value);
        };
    }
}
