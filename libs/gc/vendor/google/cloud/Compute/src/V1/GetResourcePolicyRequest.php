<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for ResourcePolicies.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetResourcePolicyRequest</code>
 */
class GetResourcePolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * Name of the resource policy to retrieve.
     *
     * Generated from protobuf field <code>string resource_policy = 159240835 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource_policy = '';

    /**
     * @param string $project        Project ID for this request.
     * @param string $region         Name of the region for this request.
     * @param string $resourcePolicy Name of the resource policy to retrieve.
     *
     * @return \Google\Cloud\Compute\V1\GetResourcePolicyRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $resourcePolicy): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setResourcePolicy($resourcePolicy);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region for this request.
     *     @type string $resource_policy
     *           Name of the resource policy to retrieve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Name of the resource policy to retrieve.
     *
     * Generated from protobuf field <code>string resource_policy = 159240835 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResourcePolicy()
    {
        return $this->resource_policy;
    }

    /**
     * Name of the resource policy to retrieve.
     *
     * Generated from protobuf field <code>string resource_policy = 159240835 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResourcePolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_policy = $var;

        return $this;
    }

}

