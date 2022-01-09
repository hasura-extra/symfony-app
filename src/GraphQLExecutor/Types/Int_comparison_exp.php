<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property int|null $_eq
 * @property int|null $_gt
 * @property int|null $_gte
 * @property array<int, int>|null $_in
 * @property bool|null $_is_null
 * @property int|null $_lt
 * @property int|null $_lte
 * @property int|null $_neq
 * @property array<int, int>|null $_nin
 */
class Int_comparison_exp extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param int|null $_eq
     * @param int|null $_gt
     * @param int|null $_gte
     * @param array<int, int>|null $_in
     * @param bool|null $_is_null
     * @param int|null $_lt
     * @param int|null $_lte
     * @param int|null $_neq
     * @param array<int, int>|null $_nin
     */
    public static function make(
        $_eq = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_gt = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_gte = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_in = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_is_null = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_lt = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_lte = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_neq = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_nin = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'
    ): self {
        $instance = new self;

        if ($_eq !== self::UNDEFINED) {
            $instance->_eq = $_eq;
        }
        if ($_gt !== self::UNDEFINED) {
            $instance->_gt = $_gt;
        }
        if ($_gte !== self::UNDEFINED) {
            $instance->_gte = $_gte;
        }
        if ($_in !== self::UNDEFINED) {
            $instance->_in = $_in;
        }
        if ($_is_null !== self::UNDEFINED) {
            $instance->_is_null = $_is_null;
        }
        if ($_lt !== self::UNDEFINED) {
            $instance->_lt = $_lt;
        }
        if ($_lte !== self::UNDEFINED) {
            $instance->_lte = $_lte;
        }
        if ($_neq !== self::UNDEFINED) {
            $instance->_neq = $_neq;
        }
        if ($_nin !== self::UNDEFINED) {
            $instance->_nin = $_nin;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            '_eq' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\IntConverter),
            '_gt' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\IntConverter),
            '_gte' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\IntConverter),
            '_in' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\IntConverter))),
            '_is_null' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\BooleanConverter),
            '_lt' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\IntConverter),
            '_lte' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\IntConverter),
            '_neq' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\IntConverter),
            '_nin' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\IntConverter))),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
