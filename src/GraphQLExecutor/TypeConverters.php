<?php

declare(strict_types=1);

namespace App\GraphQLExecutor;

class TypeConverters
{
    public static function Int(): \Spawnia\Sailor\Convert\IntConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\IntConverter();
    }

    public static function Float(): \Spawnia\Sailor\Convert\FloatConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\FloatConverter();
    }

    public static function String(): \Spawnia\Sailor\Convert\StringConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\StringConverter();
    }

    public static function Boolean(): \Spawnia\Sailor\Convert\BooleanConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\BooleanConverter();
    }

    public static function ID(): \Spawnia\Sailor\Convert\IDConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\IDConverter();
    }

    public static function ContinentFilterInput(): Types\ContinentFilterInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\ContinentFilterInput();
    }

    public static function StringQueryOperatorInput(): Types\StringQueryOperatorInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\StringQueryOperatorInput();
    }

    public static function CountryFilterInput(): Types\CountryFilterInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\CountryFilterInput();
    }

    public static function LanguageFilterInput(): Types\LanguageFilterInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\LanguageFilterInput();
    }

    public static function user_select_column(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function user_order_by(): Types\user_order_by
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_order_by();
    }

    public static function order_by(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function user_bool_exp(): Types\user_bool_exp
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_bool_exp();
    }

    public static function String_comparison_exp(): Types\String_comparison_exp
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\String_comparison_exp();
    }

    public static function Int_comparison_exp(): Types\Int_comparison_exp
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\Int_comparison_exp();
    }

    public static function user_insert_input(): Types\user_insert_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_insert_input();
    }

    public static function user_on_conflict(): Types\user_on_conflict
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_on_conflict();
    }

    public static function user_constraint(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function user_update_column(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function user_inc_input(): Types\user_inc_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_inc_input();
    }

    public static function user_set_input(): Types\user_set_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_set_input();
    }

    public static function user_pk_columns_input(): Types\user_pk_columns_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_pk_columns_input();
    }

    public static function user_registration_mutation_input(): Types\user_registration_mutation_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutor\Types\user_registration_mutation_input();
    }

    public static function __TypeKind(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function __DirectiveLocation(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function json(): \Hasura\SailorBridge\Convert\JsonTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\JsonTypeConverter();
    }

    public static function jsonb(): \Hasura\SailorBridge\Convert\JsonTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\JsonTypeConverter();
    }

    public static function date(): \Hasura\SailorBridge\Convert\DateTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\DateTypeConverter();
    }

    public static function timetz(): \Hasura\SailorBridge\Convert\TimetzTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\TimetzTypeConverter();
    }

    public static function timestamptz(): \Hasura\SailorBridge\Convert\TimestamptzTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\TimestamptzTypeConverter();
    }

    public static function uuid(): \Hasura\SailorBridge\Convert\UuidTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\UuidTypeConverter();
    }
}
