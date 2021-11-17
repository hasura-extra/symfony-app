<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Countries;

class CountriesResult extends \Spawnia\Sailor\Result
{
    public ?Countries $data;

    protected function setData(\stdClass $data): void
    {
        $this->data = Countries::fromStdClass($data);
    }

    public function errorFree(): CountriesErrorFreeResult
    {
        return CountriesErrorFreeResult::fromResult($this);
    }
}
