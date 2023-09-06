<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnectors/v1/app_connectors_service.proto

namespace Google\Cloud\BeyondCorp\AppConnectors\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BeyondCorp.UpdateAppConnector.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnectors.v1.UpdateAppConnectorRequest</code>
 */
class UpdateAppConnectorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [BeyondCorp.AppConnector]:
     * * `labels`
     * * `display_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. AppConnector message with updated fields. Only supported fields
     * specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.AppConnector app_connector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $app_connector = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';
    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;

    /**
     * @param \Google\Cloud\BeyondCorp\AppConnectors\V1\AppConnector $appConnector Required. AppConnector message with updated fields. Only supported fields
     *                                                                             specified in update_mask are updated.
     * @param \Google\Protobuf\FieldMask                             $updateMask   Required. Mask of fields to update. At least one path must be supplied in
     *                                                                             this field. The elements of the repeated paths field may only include these
     *                                                                             fields from [BeyondCorp.AppConnector]:
     *                                                                             * `labels`
     *                                                                             * `display_name`
     *
     * @return \Google\Cloud\BeyondCorp\AppConnectors\V1\UpdateAppConnectorRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\BeyondCorp\AppConnectors\V1\AppConnector $appConnector, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAppConnector($appConnector)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field. The elements of the repeated paths field may only include these
     *           fields from [BeyondCorp.AppConnector]:
     *           * `labels`
     *           * `display_name`
     *     @type \Google\Cloud\BeyondCorp\AppConnectors\V1\AppConnector $app_connector
     *           Required. AppConnector message with updated fields. Only supported fields
     *           specified in update_mask are updated.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set, validates request by executing a dry-run which would not
     *           alter the resource in any way.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnectors\V1\AppConnectorsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [BeyondCorp.AppConnector]:
     * * `labels`
     * * `display_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [BeyondCorp.AppConnector]:
     * * `labels`
     * * `display_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. AppConnector message with updated fields. Only supported fields
     * specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.AppConnector app_connector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BeyondCorp\AppConnectors\V1\AppConnector|null
     */
    public function getAppConnector()
    {
        return $this->app_connector;
    }

    public function hasAppConnector()
    {
        return isset($this->app_connector);
    }

    public function clearAppConnector()
    {
        unset($this->app_connector);
    }

    /**
     * Required. AppConnector message with updated fields. Only supported fields
     * specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnectors.v1.AppConnector app_connector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BeyondCorp\AppConnectors\V1\AppConnector $var
     * @return $this
     */
    public function setAppConnector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\AppConnectors\V1\AppConnector::class);
        $this->app_connector = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

