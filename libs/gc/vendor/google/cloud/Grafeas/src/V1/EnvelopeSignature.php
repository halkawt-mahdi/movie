<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/common.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grafeas.v1.EnvelopeSignature</code>
 */
class EnvelopeSignature extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes sig = 1;</code>
     */
    private $sig = '';
    /**
     * Generated from protobuf field <code>string keyid = 2;</code>
     */
    private $keyid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sig
     *     @type string $keyid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes sig = 1;</code>
     * @return string
     */
    public function getSig()
    {
        return $this->sig;
    }

    /**
     * Generated from protobuf field <code>bytes sig = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSig($var)
    {
        GPBUtil::checkString($var, False);
        $this->sig = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string keyid = 2;</code>
     * @return string
     */
    public function getKeyid()
    {
        return $this->keyid;
    }

    /**
     * Generated from protobuf field <code>string keyid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyid($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyid = $var;

        return $this;
    }

}

