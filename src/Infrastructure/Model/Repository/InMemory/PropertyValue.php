<?php

namespace NilPortugues\Foundation\Infrastructure\Model\Repository\InMemory;

class PropertyValue
{
    /**
     * @throws \Exception
     */
    public static function get($object, string $property)
    {
        if (array_key_exists($property, get_object_vars($object))) {
            return $object->{$property};
        }

        if (method_exists(get_class($object), $property)) {
            return $object->{$property}();
        }

        if (method_exists(get_class($object), 'get'.$property)) {
            $property = 'get'.$property;

            return $object->{$property}();
        }

        throw new \Exception(
            sprintf(
                'Could not filter by property \'%s\' as it does not exist in object %s.',
                $property,
                get_class($object)
            )
        );
    }
}
