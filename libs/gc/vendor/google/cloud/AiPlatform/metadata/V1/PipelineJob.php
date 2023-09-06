<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_job.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class PipelineJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Artifact::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Context::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Execution::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineFailurePolicy::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineState::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Value::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�&
-google/cloud/aiplatform/v1/pipeline_job.protogoogle.cloud.aiplatform.v1google/api/resource.proto)google/cloud/aiplatform/v1/artifact.proto(google/cloud/aiplatform/v1/context.proto0google/cloud/aiplatform/v1/encryption_spec.proto*google/cloud/aiplatform/v1/execution.proto8google/cloud/aiplatform/v1/pipeline_failure_policy.proto/google/cloud/aiplatform/v1/pipeline_state.proto&google/cloud/aiplatform/v1/value.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
PipelineJob
name (	B�A
display_name (	4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A.
pipeline_spec (2.google.protobuf.Struct=
state (2).google.cloud.aiplatform.v1.PipelineStateB�AF

job_detail	 (2-.google.cloud.aiplatform.v1.PipelineJobDetailB�A&
error
 (2.google.rpc.StatusB�AC
labels (23.google.cloud.aiplatform.v1.PipelineJob.LabelsEntryM
runtime_config (25.google.cloud.aiplatform.v1.PipelineJob.RuntimeConfigC
encryption_spec (2*.google.cloud.aiplatform.v1.EncryptionSpec
service_account (	4
network (	B#�A 
compute.googleapis.com/Network
reserved_ip_ranges (	
template_uri (	T
template_metadata (24.google.cloud.aiplatform.v1.PipelineTemplateMetadataB�A�
RuntimeConfig]

parameters (2E.google.cloud.aiplatform.v1.PipelineJob.RuntimeConfig.ParametersEntryB!
gcs_output_directory (	B�Ad
parameter_values (2J.google.cloud.aiplatform.v1.PipelineJob.RuntimeConfig.ParameterValuesEntryI
failure_policy (21.google.cloud.aiplatform.v1.PipelineFailurePolicyb
input_artifacts (2I.google.cloud.aiplatform.v1.PipelineJob.RuntimeConfig.InputArtifactsEntry.
InputArtifact
artifact_id (	H B
kindT
ParametersEntry
key (	0
value (2!.google.cloud.aiplatform.v1.Value:8N
ParameterValuesEntry
key (	%
value (2.google.protobuf.Value:8z
InputArtifactsEntry
key (	R
value (2C.google.cloud.aiplatform.v1.PipelineJob.RuntimeConfig.InputArtifact:8-
LabelsEntry
key (	
value (	:8:o�Al
%aiplatform.googleapis.com/PipelineJobCprojects/{project}/locations/{location}/pipelineJobs/{pipeline_job}"+
PipelineTemplateMetadata
version (	"�
PipelineJobDetailB
pipeline_context (2#.google.cloud.aiplatform.v1.ContextB�AF
pipeline_run_context (2#.google.cloud.aiplatform.v1.ContextB�AI
task_details (2..google.cloud.aiplatform.v1.PipelineTaskDetailB�A"�
PipelineTaskDetail
task_id (B�A
parent_task_id (B�A
	task_name (	B�A4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AT
executor_detail (26.google.cloud.aiplatform.v1.PipelineTaskExecutorDetailB�AH
state (24.google.cloud.aiplatform.v1.PipelineTaskDetail.StateB�A=
	execution (2%.google.cloud.aiplatform.v1.ExecutionB�A&
error	 (2.google.rpc.StatusB�Ad
pipeline_task_status (2A.google.cloud.aiplatform.v1.PipelineTaskDetail.PipelineTaskStatusB�AO
inputs
 (2:.google.cloud.aiplatform.v1.PipelineTaskDetail.InputsEntryB�AQ
outputs (2;.google.cloud.aiplatform.v1.PipelineTaskDetail.OutputsEntryB�A�
PipelineTaskStatus4
update_time (2.google.protobuf.TimestampB�AH
state (24.google.cloud.aiplatform.v1.PipelineTaskDetail.StateB�A&
error (2.google.rpc.StatusB�AL
ArtifactList<
	artifacts (2$.google.cloud.aiplatform.v1.ArtifactB�Aj
InputsEntry
key (	J
value (2;.google.cloud.aiplatform.v1.PipelineTaskDetail.ArtifactList:8k
OutputsEntry
key (	J
value (2;.google.cloud.aiplatform.v1.PipelineTaskDetail.ArtifactList:8"�
State
STATE_UNSPECIFIED 
PENDING
RUNNING
	SUCCEEDED
CANCEL_PENDING

CANCELLING
	CANCELLED

FAILED
SKIPPED
NOT_TRIGGERED	"�
PipelineTaskExecutorDetailg
container_detail (2F.google.cloud.aiplatform.v1.PipelineTaskExecutorDetail.ContainerDetailB�AH h
custom_job_detail (2F.google.cloud.aiplatform.v1.PipelineTaskExecutorDetail.CustomJobDetailB�AH �
ContainerDetail=
main_job (	B+�A�A%
#aiplatform.googleapis.com/CustomJobJ
pre_caching_check_job (	B+�A�A%
#aiplatform.googleapis.com/CustomJob
failed_main_jobs (	B�A*
failed_pre_caching_check_jobs (	B�Ae
CustomJobDetail8
job (	B+�A�A%
#aiplatform.googleapis.com/CustomJob
failed_jobs (	B�AB	
detailsB�
com.google.cloud.aiplatform.v1BPipelinePZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

