<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/operations.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of an ImportData operation.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ImportDataOperationMetadata</code>
 */
class ImportDataOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of imported dataset.
     * "projects/&#42;&#47;datasets/&#42;"
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     */
    private $dataset = '';
    /**
     * Output only. Partial failures encountered.
     * E.g. single files that couldn't be read.
     * Status details field will contain standard GCP error details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 2;</code>
     */
    private $partial_failures;
    /**
     * Output only. Timestamp when import dataset request was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    private $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Output only. The name of imported dataset.
     *           "projects/&#42;&#47;datasets/&#42;"
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $partial_failures
     *           Output only. Partial failures encountered.
     *           E.g. single files that couldn't be read.
     *           Status details field will contain standard GCP error details.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when import dataset request was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of imported dataset.
     * "projects/&#42;&#47;datasets/&#42;"
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Output only. The name of imported dataset.
     * "projects/&#42;&#47;datasets/&#42;"
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Output only. Partial failures encountered.
     * E.g. single files that couldn't be read.
     * Status details field will contain standard GCP error details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartialFailures()
    {
        return $this->partial_failures;
    }

    /**
     * Output only. Partial failures encountered.
     * E.g. single files that couldn't be read.
     * Status details field will contain standard GCP error details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 2;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartialFailures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->partial_failures = $arr;

        return $this;
    }

    /**
     * Output only. Timestamp when import dataset request was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when import dataset request was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

