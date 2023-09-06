<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database Instance reencrypt request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.InstancesReencryptRequest</code>
 */
class InstancesReencryptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Configuration specific to backup re-encryption
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.BackupReencryptionConfig backup_reencryption_config = 1;</code>
     */
    private $backup_reencryption_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Sql\V1\BackupReencryptionConfig $backup_reencryption_config
     *           Configuration specific to backup re-encryption
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration specific to backup re-encryption
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.BackupReencryptionConfig backup_reencryption_config = 1;</code>
     * @return \Google\Cloud\Sql\V1\BackupReencryptionConfig|null
     */
    public function getBackupReencryptionConfig()
    {
        return $this->backup_reencryption_config;
    }

    public function hasBackupReencryptionConfig()
    {
        return isset($this->backup_reencryption_config);
    }

    public function clearBackupReencryptionConfig()
    {
        unset($this->backup_reencryption_config);
    }

    /**
     * Configuration specific to backup re-encryption
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.BackupReencryptionConfig backup_reencryption_config = 1;</code>
     * @param \Google\Cloud\Sql\V1\BackupReencryptionConfig $var
     * @return $this
     */
    public function setBackupReencryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\BackupReencryptionConfig::class);
        $this->backup_reencryption_config = $var;

        return $this;
    }

}

