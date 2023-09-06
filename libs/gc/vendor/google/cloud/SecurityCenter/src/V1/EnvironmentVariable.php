<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/process.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A name-value pair representing an environment variable used in an operating
 * system process.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.EnvironmentVariable</code>
 */
class EnvironmentVariable extends \Google\Protobuf\Internal\Message
{
    /**
     * Environment variable name as a JSON encoded string.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Environment variable value as a JSON encoded string.
     *
     * Generated from protobuf field <code>string val = 2;</code>
     */
    private $val = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Environment variable name as a JSON encoded string.
     *     @type string $val
     *           Environment variable value as a JSON encoded string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Process::initOnce();
        parent::__construct($data);
    }

    /**
     * Environment variable name as a JSON encoded string.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Environment variable name as a JSON encoded string.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Environment variable value as a JSON encoded string.
     *
     * Generated from protobuf field <code>string val = 2;</code>
     * @return string
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Environment variable value as a JSON encoded string.
     *
     * Generated from protobuf field <code>string val = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVal($var)
    {
        GPBUtil::checkString($var, True);
        $this->val = $var;

        return $this;
    }

}

