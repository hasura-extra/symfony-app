<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property array<int, \App\GraphQLExecutor\Types\user_bool_exp>|null $_and
 * @property \App\GraphQLExecutor\Types\user_bool_exp|null $_not
 * @property array<int, \App\GraphQLExecutor\Types\user_bool_exp>|null $_or
 * @property \App\GraphQLExecutor\Types\String_comparison_exp|null $email
 * @property \App\GraphQLExecutor\Types\Int_comparison_exp|null $id
 * @property \App\GraphQLExecutor\Types\String_comparison_exp|null $name
 * @property \App\GraphQLExecutor\Types\String_comparison_exp|null $password
 */
class user_bool_exp extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param array<int, \App\GraphQLExecutor\Types\user_bool_exp>|null $_and
     * @param \App\GraphQLExecutor\Types\user_bool_exp|null $_not
     * @param array<int, \App\GraphQLExecutor\Types\user_bool_exp>|null $_or
     * @param \App\GraphQLExecutor\Types\String_comparison_exp|null $email
     * @param \App\GraphQLExecutor\Types\Int_comparison_exp|null $id
     * @param \App\GraphQLExecutor\Types\String_comparison_exp|null $name
     * @param \App\GraphQLExecutor\Types\String_comparison_exp|null $password
     */
    public static function make(
        $_and = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_not = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_or = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $email = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $id = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $name = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $password = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'
    ): self {
        $instance = new self;

        if ($_and !== self::UNDEFINED) {
            $instance->_and = $_and;
        }
        if ($_not !== self::UNDEFINED) {
            $instance->_not = $_not;
        }
        if ($_or !== self::UNDEFINED) {
            $instance->_or = $_or;
        }
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
            '_and' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \App\GraphQLExecutor\Types\user_bool_exp))),
            '_not' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutor\Types\user_bool_exp),
            '_or' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \App\GraphQLExecutor\Types\user_bool_exp))),
            'email' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutor\Types\String_comparison_exp),
            'id' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutor\Types\Int_comparison_exp),
            'name' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutor\Types\String_comparison_exp),
            'password' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutor\Types\String_comparison_exp),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
