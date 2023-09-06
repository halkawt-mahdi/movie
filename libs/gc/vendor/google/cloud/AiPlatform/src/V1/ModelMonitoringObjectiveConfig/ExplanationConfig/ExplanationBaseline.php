<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_monitoring.proto

namespace Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output from
 * [BatchPredictionJob][google.cloud.aiplatform.v1.BatchPredictionJob] for
 * Model Monitoring baseline dataset, which can be used to generate baseline
 * attribution scores.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig.ExplanationBaseline</code>
 */
class ExplanationBaseline extends \Google\Protobuf\Internal\Message
{
    /**
     * The storage format of the predictions generated BatchPrediction job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig.ExplanationBaseline.PredictionFormat prediction_format = 1;</code>
     */
    private $prediction_format = 0;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GcsDestination $gcs
     *           Cloud Storage location for BatchExplain output.
     *     @type \Google\Cloud\AIPlatform\V1\BigQueryDestination $bigquery
     *           BigQuery location for BatchExplain output.
     *     @type int $prediction_format
     *           The storage format of the predictions generated BatchPrediction job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage location for BatchExplain output.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination gcs = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\GcsDestination|null
     */
    public function getGcs()
    {
        return $this->readOneof(2);
    }

    public function hasGcs()
    {
        return $this->hasOneof(2);
    }

    /**
     * Cloud Storage location for BatchExplain output.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination gcs = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\GcsDestination $var
     * @return $this
     */
    public function setGcs($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GcsDestination::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * BigQuery location for BatchExplain output.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQueryDestination bigquery = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\BigQueryDestination|null
     */
    public function getBigquery()
    {
        return $this->readOneof(3);
    }

    public function hasBigquery()
    {
        return $this->hasOneof(3);
    }

    /**
     * BigQuery location for BatchExplain output.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQueryDestination bigquery = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\BigQueryDestination $var
     * @return $this
     */
    public function setBigquery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\BigQueryDestination::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The storage format of the predictions generated BatchPrediction job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig.ExplanationBaseline.PredictionFormat prediction_format = 1;</code>
     * @return int
     */
    public function getPredictionFormat()
    {
        return $this->prediction_format;
    }

    /**
     * The storage format of the predictions generated BatchPrediction job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig.ExplanationBaseline.PredictionFormat prediction_format = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPredictionFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig\ExplanationBaseline\PredictionFormat::class);
        $this->prediction_format = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}


