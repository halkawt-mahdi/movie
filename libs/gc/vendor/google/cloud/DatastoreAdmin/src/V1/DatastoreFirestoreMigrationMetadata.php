<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/datastore_admin.proto

namespace Google\Cloud\Datastore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for Datastore to Firestore migration operations.
 * The DatastoreFirestoreMigration operation is not started by the end-user via
 * an explicit "creation" method. This is an intentional deviation from the LRO
 * design pattern.
 * This singleton resource can be accessed at:
 * "projects/{project_id}/operations/datastore-firestore-migration"
 *
 * Generated from protobuf message <code>google.datastore.admin.v1.DatastoreFirestoreMigrationMetadata</code>
 */
class DatastoreFirestoreMigrationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The current state of migration from Cloud Datastore to Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationState migration_state = 1;</code>
     */
    private $migration_state = 0;
    /**
     * The current step of migration from Cloud Datastore to Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationStep migration_step = 2;</code>
     */
    private $migration_step = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $migration_state
     *           The current state of migration from Cloud Datastore to Cloud Firestore in
     *           Datastore mode.
     *     @type int $migration_step
     *           The current step of migration from Cloud Datastore to Cloud Firestore in
     *           Datastore mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1\DatastoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The current state of migration from Cloud Datastore to Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationState migration_state = 1;</code>
     * @return int
     */
    public function getMigrationState()
    {
        return $this->migration_state;
    }

    /**
     * The current state of migration from Cloud Datastore to Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationState migration_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMigrationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\Admin\V1\MigrationState::class);
        $this->migration_state = $var;

        return $this;
    }

    /**
     * The current step of migration from Cloud Datastore to Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationStep migration_step = 2;</code>
     * @return int
     */
    public function getMigrationStep()
    {
        return $this->migration_step;
    }

    /**
     * The current step of migration from Cloud Datastore to Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationStep migration_step = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMigrationStep($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\Admin\V1\MigrationStep::class);
        $this->migration_step = $var;

        return $this;
    }

}

