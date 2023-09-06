<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace GPBMetadata\Google\Cloud\Dataplex\V1;

class DataProfile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\Processing::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/dataplex/v1/data_profile.protogoogle.cloud.dataplex.v1google/api/resource.proto)google/cloud/dataplex/v1/processing.proto"�
DataProfileSpec
sampling_percent (B�A

row_filter (	B�AY
post_scan_actions (29.google.cloud.dataplex.v1.DataProfileSpec.PostScanActionsB�AU
include_fields (28.google.cloud.dataplex.v1.DataProfileSpec.SelectedFieldsB�AU
exclude_fields (28.google.cloud.dataplex.v1.DataProfileSpec.SelectedFieldsB�A�
PostScanActionsf
bigquery_export (2H.google.cloud.dataplex.v1.DataProfileSpec.PostScanActions.BigQueryExportB�AN
BigQueryExport<
results_table (	B%�A�A
bigquery.googleapis.com/Table*
SelectedFields
field_names (	B�A"�
DataProfileResult
	row_count (D
profile (23.google.cloud.dataplex.v1.DataProfileResult.Profile;
scanned_data (2%.google.cloud.dataplex.v1.ScannedDatah
post_scan_actions_result (2A.google.cloud.dataplex.v1.DataProfileResult.PostScanActionsResultB�A�
ProfileI
fields (29.google.cloud.dataplex.v1.DataProfileResult.Profile.Field�
Field
name (	
type (	
mode (	V
profile (2E.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo�
ProfileInfo

null_ratio (
distinct_ratio (e
top_n_values (2O.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.TopNValueo
string_profilee (2U.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.StringFieldInfoH q
integer_profilef (2V.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.IntegerFieldInfoH o
double_profileg (2U.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.DoubleFieldInfoH Q
StringFieldInfo

min_length (

max_length (
average_length (l
IntegerFieldInfo
average (
standard_deviation (
min (
	quartiles (
max (k
DoubleFieldInfo
average (
standard_deviation (
min (
	quartiles (
max (8
	TopNValue
value (	
count (
ratio (B

field_info�
PostScanActionsResult{
bigquery_export_result (2V.google.cloud.dataplex.v1.DataProfileResult.PostScanActionsResult.BigQueryExportResultB�A�
BigQueryExportResultp
state (2\\.google.cloud.dataplex.v1.DataProfileResult.PostScanActionsResult.BigQueryExportResult.StateB�A
message (	B�A"F
State
STATE_UNSPECIFIED 
	SUCCEEDED

FAILED
SKIPPEDBl
com.google.cloud.dataplex.v1BDataProfileProtoPZ8cloud.google.com/go/dataplex/apiv1/dataplexpb;dataplexpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

