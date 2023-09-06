<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to load a snapshot into a Cloud Composer environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.LoadSnapshotRequest</code>
 */
class LoadSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the target environment in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     */
    private $environment = '';
    /**
     * A Cloud Storage path to a snapshot to load, e.g.:
     * "gs://my-bucket/snapshots/project_location_environment_timestamp".
     *
     * Generated from protobuf field <code>string snapshot_path = 2;</code>
     */
    private $snapshot_path = '';
    /**
     * Whether or not to skip installing Pypi packages when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_pypi_packages_installation = 3;</code>
     */
    private $skip_pypi_packages_installation = false;
    /**
     * Whether or not to skip setting environment variables when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_environment_variables_setting = 4;</code>
     */
    private $skip_environment_variables_setting = false;
    /**
     * Whether or not to skip setting Airflow overrides when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_airflow_overrides_setting = 5;</code>
     */
    private $skip_airflow_overrides_setting = false;
    /**
     * Whether or not to skip copying Cloud Storage data when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_gcs_data_copying = 6;</code>
     */
    private $skip_gcs_data_copying = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $environment
     *           The resource name of the target environment in the form:
     *           "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *     @type string $snapshot_path
     *           A Cloud Storage path to a snapshot to load, e.g.:
     *           "gs://my-bucket/snapshots/project_location_environment_timestamp".
     *     @type bool $skip_pypi_packages_installation
     *           Whether or not to skip installing Pypi packages when loading the
     *           environment's state.
     *     @type bool $skip_environment_variables_setting
     *           Whether or not to skip setting environment variables when loading the
     *           environment's state.
     *     @type bool $skip_airflow_overrides_setting
     *           Whether or not to skip setting Airflow overrides when loading the
     *           environment's state.
     *     @type bool $skip_gcs_data_copying
     *           Whether or not to skip copying Cloud Storage data when loading the
     *           environment's state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the target environment in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * The resource name of the target environment in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment = $var;

        return $this;
    }

    /**
     * A Cloud Storage path to a snapshot to load, e.g.:
     * "gs://my-bucket/snapshots/project_location_environment_timestamp".
     *
     * Generated from protobuf field <code>string snapshot_path = 2;</code>
     * @return string
     */
    public function getSnapshotPath()
    {
        return $this->snapshot_path;
    }

    /**
     * A Cloud Storage path to a snapshot to load, e.g.:
     * "gs://my-bucket/snapshots/project_location_environment_timestamp".
     *
     * Generated from protobuf field <code>string snapshot_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshotPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot_path = $var;

        return $this;
    }

    /**
     * Whether or not to skip installing Pypi packages when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_pypi_packages_installation = 3;</code>
     * @return bool
     */
    public function getSkipPypiPackagesInstallation()
    {
        return $this->skip_pypi_packages_installation;
    }

    /**
     * Whether or not to skip installing Pypi packages when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_pypi_packages_installation = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipPypiPackagesInstallation($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_pypi_packages_installation = $var;

        return $this;
    }

    /**
     * Whether or not to skip setting environment variables when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_environment_variables_setting = 4;</code>
     * @return bool
     */
    public function getSkipEnvironmentVariablesSetting()
    {
        return $this->skip_environment_variables_setting;
    }

    /**
     * Whether or not to skip setting environment variables when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_environment_variables_setting = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipEnvironmentVariablesSetting($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_environment_variables_setting = $var;

        return $this;
    }

    /**
     * Whether or not to skip setting Airflow overrides when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_airflow_overrides_setting = 5;</code>
     * @return bool
     */
    public function getSkipAirflowOverridesSetting()
    {
        return $this->skip_airflow_overrides_setting;
    }

    /**
     * Whether or not to skip setting Airflow overrides when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_airflow_overrides_setting = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipAirflowOverridesSetting($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_airflow_overrides_setting = $var;

        return $this;
    }

    /**
     * Whether or not to skip copying Cloud Storage data when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_gcs_data_copying = 6;</code>
     * @return bool
     */
    public function getSkipGcsDataCopying()
    {
        return $this->skip_gcs_data_copying;
    }

    /**
     * Whether or not to skip copying Cloud Storage data when loading the
     * environment's state.
     *
     * Generated from protobuf field <code>bool skip_gcs_data_copying = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipGcsDataCopying($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_gcs_data_copying = $var;

        return $this;
    }

}

