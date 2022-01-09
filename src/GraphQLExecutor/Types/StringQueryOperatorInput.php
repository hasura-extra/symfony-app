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
        $eq = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $glob = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $in = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $ne = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $nin = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $regex = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'
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

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
