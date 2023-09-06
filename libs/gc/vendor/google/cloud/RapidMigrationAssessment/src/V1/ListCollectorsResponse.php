<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/rapidmigrationassessment/v1/rapidmigrationassessment.proto

namespace Google\Cloud\RapidMigrationAssessment\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for response to listing Collectors.
 *
 * Generated from protobuf message <code>google.cloud.rapidmigrationassessment.v1.ListCollectorsResponse</code>
 */
class ListCollectorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of Collectors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.rapidmigrationassessment.v1.Collector collectors = 1;</code>
     */
    private $collectors;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\RapidMigrationAssessment\V1\Collector>|\Google\Protobuf\Internal\RepeatedField $collectors
     *           The list of Collectors.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Rapidmigrationassessment\V1\Rapidmigrationassessment::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of Collectors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.rapidmigrationassessment.v1.Collector collectors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollectors()
    {
        return $this->collectors;
    }

    /**
     * The list of Collectors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.rapidmigrationassessment.v1.Collector collectors = 1;</code>
     * @param array<\Google\Cloud\RapidMigrationAssessment\V1\Collector>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollectors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RapidMigrationAssessment\V1\Collector::class);
        $this->collectors = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

