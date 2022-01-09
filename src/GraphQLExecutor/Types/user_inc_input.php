<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property int|null $id
 */
class user_inc_input extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param int|null $id
     */
    public static function make($id = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'): self
    {
        $instance = new self;

        if ($id !== self::UNDEFINED) {
            $instance->id = $id;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'id' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\IntConverter),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
