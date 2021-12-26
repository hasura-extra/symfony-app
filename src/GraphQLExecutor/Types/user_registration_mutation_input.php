<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property string $email
 * @property string $name
 * @property string $password
 */
class user_registration_mutation_input extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string $email
     * @param string $name
     * @param string $password
     */
    public static function make($email, $name, $password): self
    {
        $instance = new self;

        if ($email !== self::UNDEFINED) {
            $instance->email = $email;
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
            'email' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'name' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'password' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter),
        ];
    }
}
