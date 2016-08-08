<?php

namespace NilPortugues\Foundation\Infrastructure\Model\Repository\InMemory\Filters;

use Exception;
use NilPortugues\Foundation\Infrastructure\Model\Repository\InMemory\PropertyValue;

class StringFilter
{
    /**
     * @param string           $property
     * @param string|int|float $value
     *
     * @return \Closure
     */
    public static function startsWith(string $property, $value): \Closure
    {
        return function ($v) use ($property, $value) {
            $v = PropertyValue::get($v, $property);

            self::propertyGuard($v, $property);
            self::valueGuard($value, 'Starting');

            return 1 == preg_match(sprintf('/^%s/i', $value), $v);
        };
    }

    /**
     * @throws Exception
     */
    private static function propertyGuard($v, $property)
    {
        if (false === is_scalar($v)) {
            throw new Exception(sprintf("Value for '%s' is not a scalar value.", $property));
        }
    }

    /**
     * @throws Exception
     */
    private static function valueGuard($value, $type)
    {
        if (false === is_scalar($value)) {
            throw new Exception(sprintf('%s value provided is not a scalar value.', $type));
        }
    }

    /**
     * @param string           $property
     * @param string|int|float $value
     *
     * @return \Closure
     */
    public static function endsWith(string $property, $value): \Closure
    {
        return function ($v) use ($property, $value) {
            $v = PropertyValue::get($v, $property);

            self::propertyGuard($v, $property);
            self::valueGuard($value, 'Ending');

            return 1 == preg_match(sprintf('/%s$/i', $value), $v);
        };
    }

    public static function notStartsWith($property, $value): \Closure
    {
        return function ($v) use ($property, $value) {
            $v = PropertyValue::get($v, $property);

            self::propertyGuard($v, $property);
            self::valueGuard($value, 'Starting');

            return 0 == preg_match(sprintf('/^%s/i', $value), $v);
        };
    }

    public static function notEndsWith($property, $value): \Closure
    {
        return function ($v) use ($property, $value) {
            $v = PropertyValue::get($v, $property);

            self::propertyGuard($v, $property);
            self::valueGuard($value, 'Ending');

            return 0 == preg_match(sprintf('/%s$/i', $value), $v);
        };
    }
}
