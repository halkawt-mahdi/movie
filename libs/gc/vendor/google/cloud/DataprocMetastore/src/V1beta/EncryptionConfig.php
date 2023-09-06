<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption settings for the service.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1beta.EncryptionConfig</code>
 */
class EncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The fully qualified customer provided Cloud KMS key name to use for
     * customer data encryption, in the following form:
     * `projects/{project_number}/locations/{location_id}/keyRings/{key_ring_id}/cryptoKeys/{crypto_key_id}`.
     *
     * Generated from protobuf field <code>string kms_key = 1;</code>
     */
    private $kms_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key
     *           The fully qualified customer provided Cloud KMS key name to use for
     *           customer data encryption, in the following form:
     *           `projects/{project_number}/locations/{location_id}/keyRings/{key_ring_id}/cryptoKeys/{crypto_key_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Beta\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The fully qualified customer provided Cloud KMS key name to use for
     * customer data encryption, in the following form:
     * `projects/{project_number}/locations/{location_id}/keyRings/{key_ring_id}/cryptoKeys/{crypto_key_id}`.
     *
     * Generated from protobuf field <code>string kms_key = 1;</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * The fully qualified customer provided Cloud KMS key name to use for
     * customer data encryption, in the following form:
     * `projects/{project_number}/locations/{location_id}/keyRings/{key_ring_id}/cryptoKeys/{crypto_key_id}`.
     *
     * Generated from protobuf field <code>string kms_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

}

