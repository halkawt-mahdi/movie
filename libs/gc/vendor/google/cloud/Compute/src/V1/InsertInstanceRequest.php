<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Instances.Insert. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InsertInstanceRequest</code>
 */
class InsertInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Instance instance_resource = 215988344 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_resource = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * Specifies instance template to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate 
     *
     * Generated from protobuf field <code>optional string source_instance_template = 332423616;</code>
     */
    private $source_instance_template = null;
    /**
     * Specifies the machine image to use to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to a machine image: - https://www.googleapis.com/compute/v1/projects/project/global/global /machineImages/machineImage - projects/project/global/global/machineImages/machineImage - global/machineImages/machineImage 
     *
     * Generated from protobuf field <code>optional string source_machine_image = 21769791;</code>
     */
    private $source_machine_image = null;
    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     */
    private $zone = '';

    /**
     * @param string                            $project          Project ID for this request.
     * @param string                            $zone             The name of the zone for this request.
     * @param \Google\Cloud\Compute\V1\Instance $instanceResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\InsertInstanceRequest
     *
     * @experimental
     */
    public static function build(string $project, string $zone, \Google\Cloud\Compute\V1\Instance $instanceResource): self
    {
        return (new self())
            ->setProject($project)
            ->setZone($zone)
            ->setInstanceResource($instanceResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Instance $instance_resource
     *           The body resource for this request
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type string $source_instance_template
     *           Specifies instance template to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate 
     *     @type string $source_machine_image
     *           Specifies the machine image to use to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to a machine image: - https://www.googleapis.com/compute/v1/projects/project/global/global /machineImages/machineImage - projects/project/global/global/machineImages/machineImage - global/machineImages/machineImage 
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Instance instance_resource = 215988344 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\Instance|null
     */
    public function getInstanceResource()
    {
        return $this->instance_resource;
    }

    public function hasInstanceResource()
    {
        return isset($this->instance_resource);
    }

    public function clearInstanceResource()
    {
        unset($this->instance_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Instance instance_resource = 215988344 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\Instance $var
     * @return $this
     */
    public function setInstanceResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Instance::class);
        $this->instance_resource = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
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
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Specifies instance template to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate 
     *
     * Generated from protobuf field <code>optional string source_instance_template = 332423616;</code>
     * @return string
     */
    public function getSourceInstanceTemplate()
    {
        return isset($this->source_instance_template) ? $this->source_instance_template : '';
    }

    public function hasSourceInstanceTemplate()
    {
        return isset($this->source_instance_template);
    }

    public function clearSourceInstanceTemplate()
    {
        unset($this->source_instance_template);
    }

    /**
     * Specifies instance template to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate 
     *
     * Generated from protobuf field <code>optional string source_instance_template = 332423616;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceInstanceTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_instance_template = $var;

        return $this;
    }

    /**
     * Specifies the machine image to use to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to a machine image: - https://www.googleapis.com/compute/v1/projects/project/global/global /machineImages/machineImage - projects/project/global/global/machineImages/machineImage - global/machineImages/machineImage 
     *
     * Generated from protobuf field <code>optional string source_machine_image = 21769791;</code>
     * @return string
     */
    public function getSourceMachineImage()
    {
        return isset($this->source_machine_image) ? $this->source_machine_image : '';
    }

    public function hasSourceMachineImage()
    {
        return isset($this->source_machine_image);
    }

    public function clearSourceMachineImage()
    {
        unset($this->source_machine_image);
    }

    /**
     * Specifies the machine image to use to create the instance. This field is optional. It can be a full or partial URL. For example, the following are all valid URLs to a machine image: - https://www.googleapis.com/compute/v1/projects/project/global/global /machineImages/machineImage - projects/project/global/global/machineImages/machineImage - global/machineImages/machineImage 
     *
     * Generated from protobuf field <code>optional string source_machine_image = 21769791;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceMachineImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_machine_image = $var;

        return $this;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

