<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains details of the listing publisher.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.Publisher</code>
 */
class Publisher extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the listing publisher.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Optional. Email or URL of the listing publisher.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $primary_contact = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Name of the listing publisher.
     *     @type string $primary_contact
     *           Optional. Email or URL of the listing publisher.
     *           Max Length: 1000 bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the listing publisher.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Name of the listing publisher.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Email or URL of the listing publisher.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPrimaryContact()
    {
        return $this->primary_contact;
    }

    /**
     * Optional. Email or URL of the listing publisher.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryContact($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_contact = $var;

        return $this;
    }

}

