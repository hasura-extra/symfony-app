<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Operations\Countries;

class CountriesResult extends \Spawnia\Sailor\Result
{
    public ?Countries $data = null;

    public static function endpoint(): string
    {
        return 'hasura';
    }

    protected function setData(\stdClass $data): void
    {
        $this->data = Countries::fromStdClass($data);
    }

    /**
     * Useful for instantiation of successful mocked results.
     *
     * @return static
     */
    public static function fromData(Countries $data): self
    {
        $instance = new static;
        $instance->data = $data;

        return $instance;
    }

    public function errorFree(): CountriesErrorFreeResult
    {
        return CountriesErrorFreeResult::fromResult($this);
    }
}
