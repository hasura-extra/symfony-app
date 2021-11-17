<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Countries\Countries;

class Countries extends \Spawnia\Sailor\TypedObject
{
    /** @var string */
    public $name;

    /** @var string|null */
    public $capital;

    /** @var string|null */
    public $currency;

    public function nameTypeMapper(): callable
    {
        return new \Spawnia\Sailor\Mapper\DirectMapper();
    }

    public function capitalTypeMapper(): callable
    {
        return new \Spawnia\Sailor\Mapper\DirectMapper();
    }

    public function currencyTypeMapper(): callable
    {
        return new \Spawnia\Sailor\Mapper\DirectMapper();
    }
}
