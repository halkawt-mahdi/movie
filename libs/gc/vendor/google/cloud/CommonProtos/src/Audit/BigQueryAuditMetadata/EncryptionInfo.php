<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption properties for a table or a job
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.EncryptionInfo</code>
 */
class EncryptionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud kms key identifier.
     * Format:
     * `projects/<project_id>/locations/<location>/keyRings/<key_ring_name>/cryptoKeys/<key_name>`
     *
     * Generated from protobuf field <code>string kms_key_name = 1;</code>
     */
    protected $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_name
     *           Cloud kms key identifier.
     *           Format:
     *           `projects/<project_id>/locations/<location>/keyRings/<key_ring_name>/cryptoKeys/<key_name>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud kms key identifier.
     * Format:
     * `projects/<project_id>/locations/<location>/keyRings/<key_ring_name>/cryptoKeys/<key_name>`
     *
     * Generated from protobuf field <code>string kms_key_name = 1;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Cloud kms key identifier.
     * Format:
     * `projects/<project_id>/locations/<location>/keyRings/<key_ring_name>/cryptoKeys/<key_name>`
     *
     * Generated from protobuf field <code>string kms_key_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}


