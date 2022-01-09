<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property int $id
 */
class user_pk_columns_input extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param int $id
     */
    public static function make($id): self
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
            'id' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\IntConverter),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
