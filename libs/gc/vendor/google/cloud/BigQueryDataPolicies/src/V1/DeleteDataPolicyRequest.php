<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the DeleteDataPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datapolicies.v1.DeleteDataPolicyRequest</code>
 */
class DeleteDataPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the data policy to delete. Format is
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Resource name of the data policy to delete. Format is
     *                     `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`. Please see
     *                     {@see DataPolicyServiceClient::dataPolicyName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\DataPolicies\V1\DeleteDataPolicyRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the data policy to delete. Format is
     *           `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datapolicies\V1\Datapolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the data policy to delete. Format is
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the data policy to delete. Format is
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

