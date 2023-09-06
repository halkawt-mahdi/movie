<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Image;

use UnexpectedValueException;

/**
 * The architecture of the image. Valid values are ARM64 or X86_64.
 *
 * Protobuf type <code>google.cloud.compute.v1.Image.Architecture</code>
 */
class Architecture
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ARCHITECTURE = 0;</code>
     */
    const UNDEFINED_ARCHITECTURE = 0;
    /**
     * Default value indicating Architecture is not set.
     *
     * Generated from protobuf enum <code>ARCHITECTURE_UNSPECIFIED = 394750507;</code>
     */
    const ARCHITECTURE_UNSPECIFIED = 394750507;
    /**
     * Machines with architecture ARM64
     *
     * Generated from protobuf enum <code>ARM64 = 62547450;</code>
     */
    const ARM64 = 62547450;
    /**
     * Machines with architecture X86_64
     *
     * Generated from protobuf enum <code>X86_64 = 425300551;</code>
     */
    const X86_64 = 425300551;

    private static $valueToName = [
        self::UNDEFINED_ARCHITECTURE => 'UNDEFINED_ARCHITECTURE',
        self::ARCHITECTURE_UNSPECIFIED => 'ARCHITECTURE_UNSPECIFIED',
        self::ARM64 => 'ARM64',
        self::X86_64 => 'X86_64',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


