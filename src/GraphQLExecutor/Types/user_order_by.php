<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property string|null $email
 * @property string|null $id
 * @property string|null $name
 * @property string|null $password
 */
class user_order_by extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string|null $email
     * @param string|null $id
     * @param string|null $name
     * @param string|null $password
     */
    public static function make(
        $email = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $id = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $name = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $password = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'
    ): self {
        $instance = new self;

        if ($email !== self::UNDEFINED) {
            $instance->email = $email;
        }
        if ($id !== self::UNDEFINED) {
            $instance->id = $id;
        }
        if ($name !== self::UNDEFINED) {
            $instance->name = $name;
        }
        if ($password !== self::UNDEFINED) {
            $instance->password = $password;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'email' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\EnumConverter),
            'id' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\EnumConverter),
            'name' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\EnumConverter),
            'password' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\EnumConverter),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
