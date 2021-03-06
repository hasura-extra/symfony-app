<?php

declare(strict_types=1);

namespace App\GraphQLExecutor\Types;

/**
 * @property string|null $_eq
 * @property string|null $_gt
 * @property string|null $_gte
 * @property string|null $_ilike
 * @property array<int, string>|null $_in
 * @property string|null $_iregex
 * @property bool|null $_is_null
 * @property string|null $_like
 * @property string|null $_lt
 * @property string|null $_lte
 * @property string|null $_neq
 * @property string|null $_nilike
 * @property array<int, string>|null $_nin
 * @property string|null $_niregex
 * @property string|null $_nlike
 * @property string|null $_nregex
 * @property string|null $_nsimilar
 * @property string|null $_regex
 * @property string|null $_similar
 */
class String_comparison_exp extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string|null $_eq
     * @param string|null $_gt
     * @param string|null $_gte
     * @param string|null $_ilike
     * @param array<int, string>|null $_in
     * @param string|null $_iregex
     * @param bool|null $_is_null
     * @param string|null $_like
     * @param string|null $_lt
     * @param string|null $_lte
     * @param string|null $_neq
     * @param string|null $_nilike
     * @param array<int, string>|null $_nin
     * @param string|null $_niregex
     * @param string|null $_nlike
     * @param string|null $_nregex
     * @param string|null $_nsimilar
     * @param string|null $_regex
     * @param string|null $_similar
     */
    public static function make(
        $_eq = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_gt = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_gte = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_ilike = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_in = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_iregex = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_is_null = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_like = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_lt = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_lte = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_neq = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_nilike = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_nin = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_niregex = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_nlike = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_nregex = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_nsimilar = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_regex = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_similar = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'
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
        if ($_ilike !== self::UNDEFINED) {
            $instance->_ilike = $_ilike;
        }
        if ($_in !== self::UNDEFINED) {
            $instance->_in = $_in;
        }
        if ($_iregex !== self::UNDEFINED) {
            $instance->_iregex = $_iregex;
        }
        if ($_is_null !== self::UNDEFINED) {
            $instance->_is_null = $_is_null;
        }
        if ($_like !== self::UNDEFINED) {
            $instance->_like = $_like;
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
        if ($_nilike !== self::UNDEFINED) {
            $instance->_nilike = $_nilike;
        }
        if ($_nin !== self::UNDEFINED) {
            $instance->_nin = $_nin;
        }
        if ($_niregex !== self::UNDEFINED) {
            $instance->_niregex = $_niregex;
        }
        if ($_nlike !== self::UNDEFINED) {
            $instance->_nlike = $_nlike;
        }
        if ($_nregex !== self::UNDEFINED) {
            $instance->_nregex = $_nregex;
        }
        if ($_nsimilar !== self::UNDEFINED) {
            $instance->_nsimilar = $_nsimilar;
        }
        if ($_regex !== self::UNDEFINED) {
            $instance->_regex = $_regex;
        }
        if ($_similar !== self::UNDEFINED) {
            $instance->_similar = $_similar;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            '_eq' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_gt' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_gte' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_ilike' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_in' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter))),
            '_iregex' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_is_null' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\BooleanConverter),
            '_like' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_lt' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_lte' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_neq' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_nilike' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_nin' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\StringConverter))),
            '_niregex' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_nlike' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_nregex' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_nsimilar' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_regex' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            '_similar' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
