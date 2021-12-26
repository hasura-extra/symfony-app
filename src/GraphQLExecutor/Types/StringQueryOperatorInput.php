<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property string|null $eq
 * @property string|null $glob
 * @property array<int, string|null>|null $in
 * @property string|null $ne
 * @property array<int, string|null>|null $nin
 * @property string|null $regex
 */
class StringQueryOperatorInput extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string|null $eq
     * @param string|null $glob
     * @param array<int, string|null>|null $in
     * @param string|null $ne
     * @param array<int, string|null>|null $nin
     * @param string|null $regex
     */
    public static function make(
        $eq = 1.7976931348623157E+308,
        $glob = 1.7976931348623157E+308,
        $in = 1.7976931348623157E+308,
        $ne = 1.7976931348623157E+308,
        $nin = 1.7976931348623157E+308,
        $regex = 1.7976931348623157E+308
    ): self {
        $instance = new self;

        if ($eq !== self::UNDEFINED) {
            $instance->eq = $eq;
        }
        if ($glob !== self::UNDEFINED) {
            $instance->glob = $glob;
        }
        if ($in !== self::UNDEFINED) {
            $instance->in = $in;
        }
        if ($ne !== self::UNDEFINED) {
            $instance->ne = $ne;
        }
        if ($nin !== self::UNDEFINED) {
            $instance->nin = $nin;
        }
        if ($regex !== self::UNDEFINED) {
            $instance->regex = $regex;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'eq' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'glob' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'in' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter))),
            'ne' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'nin' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter))),
            'regex' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
        ];
    }
}
