<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property \App\GraphQLExecutor\Types\StringQueryOperatorInput|null $code
 */
class ContinentFilterInput extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param \App\GraphQLExecutor\Types\StringQueryOperatorInput|null $code
     */
    public static function make($code = 1.7976931348623157E+308): self
    {
        $instance = new self;

        if ($code !== self::UNDEFINED) {
            $instance->code = $code;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'code' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutor\Types\StringQueryOperatorInput),
        ];
    }
}
