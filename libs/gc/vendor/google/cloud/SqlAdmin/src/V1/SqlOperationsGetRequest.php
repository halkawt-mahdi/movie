<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_operations.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operations get request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.SqlOperationsGetRequest</code>
 */
class SqlOperationsGetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Instance operation ID.
     *
     * Generated from protobuf field <code>string operation = 1;</code>
     */
    private $operation = '';
    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    private $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operation
     *           Instance operation ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlOperations::initOnce();
        parent::__construct($data);
    }

    /**
     * Instance operation ID.
     *
     * Generated from protobuf field <code>string operation = 1;</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Instance operation ID.
     *
     * Generated from protobuf field <code>string operation = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation = $var;

        return $this;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

