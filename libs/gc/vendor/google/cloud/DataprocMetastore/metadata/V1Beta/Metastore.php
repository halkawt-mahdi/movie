<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace GPBMetadata\Google\Cloud\Metastore\V1Beta;

class Metastore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/metastore/v1beta/metastore.protogoogle.cloud.metastore.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/dayofweek.proto"�
ServiceS
hive_metastore_config (22.google.cloud.metastore.v1beta.HiveMetastoreConfigH 
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AB
labels (22.google.cloud.metastore.v1beta.Service.LabelsEntry7
network (	B&�A�A 
compute.googleapis.com/Network
endpoint_uri (	B�A
port	 (@
state
 (2,.google.cloud.metastore.v1beta.Service.StateB�A
state_message (	B�A
artifact_gcs_uri (	B�A9
tier (2+.google.cloud.metastore.v1beta.Service.TierP
metadata_integration (22.google.cloud.metastore.v1beta.MetadataIntegrationL
maintenance_window (20.google.cloud.metastore.v1beta.MaintenanceWindow
uid (	B�Ad
metadata_management_activity (29.google.cloud.metastore.v1beta.MetadataManagementActivityB�AS
release_channel (25.google.cloud.metastore.v1beta.Service.ReleaseChannelB�AO
encryption_config (2/.google.cloud.metastore.v1beta.EncryptionConfigB�AD
network_config (2,.google.cloud.metastore.v1beta.NetworkConfigO
database_type (23.google.cloud.metastore.v1beta.Service.DatabaseTypeB�AH
telemetry_config (2..google.cloud.metastore.v1beta.TelemetryConfigD
scaling_config (2,.google.cloud.metastore.v1beta.ScalingConfig-
LabelsEntry
key (	
value (	:8"~
State
STATE_UNSPECIFIED 
CREATING

ACTIVE

SUSPENDING
	SUSPENDED
UPDATING
DELETING	
ERROR";
Tier
TIER_UNSPECIFIED 
	DEVELOPER

ENTERPRISE"I
ReleaseChannel
RELEASE_CHANNEL_UNSPECIFIED 

CANARY

STABLE"E
DatabaseType
DATABASE_TYPE_UNSPECIFIED 	
MYSQL
SPANNER:a�A^
 metastore.googleapis.com/Service:projects/{project}/locations/{location}/services/{service}B
metastore_config"�
MetadataIntegrationM
data_catalog_config (20.google.cloud.metastore.v1beta.DataCatalogConfigF
dataplex_config (2-.google.cloud.metastore.v1beta.DataplexConfig"$
DataCatalogConfig
enabled ("�
DataplexConfigX
lake_resources (2@.google.cloud.metastore.v1beta.DataplexConfig.LakeResourcesEntryY
LakeResourcesEntry
key (	2
value (2#.google.cloud.metastore.v1beta.Lake:8"7
Lake/
name (	B!�A
dataplex.googleapis.com/Lake"r
MaintenanceWindow0
hour_of_day (2.google.protobuf.Int32Value+
day_of_week (2.google.type.DayOfWeek"�
HiveMetastoreConfig
version (	B�Aa
config_overrides (2G.google.cloud.metastore.v1beta.HiveMetastoreConfig.ConfigOverridesEntryF
kerberos_config (2-.google.cloud.metastore.v1beta.KerberosConfig^
endpoint_protocol (2C.google.cloud.metastore.v1beta.HiveMetastoreConfig.EndpointProtocole
auxiliary_versions (2I.google.cloud.metastore.v1beta.HiveMetastoreConfig.AuxiliaryVersionsEntry6
ConfigOverridesEntry
key (	
value (	:8o
AuxiliaryVersionsEntry
key (	D
value (25.google.cloud.metastore.v1beta.AuxiliaryVersionConfig:8"K
EndpointProtocol!
ENDPOINT_PROTOCOL_UNSPECIFIED 

THRIFT
GRPC"w
KerberosConfig5
keytab (2%.google.cloud.metastore.v1beta.Secret
	principal (	
krb5_config_gcs_uri (	")
Secret
cloud_secret (	H B
value"#
EncryptionConfig
kms_key (	"�
AuxiliaryVersionConfig
version (	d
config_overrides (2J.google.cloud.metastore.v1beta.AuxiliaryVersionConfig.ConfigOverridesEntryI
network_config (2,.google.cloud.metastore.v1beta.NetworkConfigB�A6
ConfigOverridesEntry
key (	
value (	:8"�
NetworkConfigM
	consumers (25.google.cloud.metastore.v1beta.NetworkConfig.ConsumerB�A
custom_routes_enabled (v
Consumer?

subnetwork (	B)�A�A#
!compute.googleapis.com/SubnetworkH 
endpoint_uri (	B�AB
vpc_resource"�
TelemetryConfigL

log_format (28.google.cloud.metastore.v1beta.TelemetryConfig.LogFormat"=
	LogFormat
LOG_FORMAT_UNSPECIFIED 

LEGACY
JSON"�
MetadataManagementActivityL
metadata_exports (2-.google.cloud.metastore.v1beta.MetadataExportB�A=
restores (2&.google.cloud.metastore.v1beta.RestoreB�A"�
MetadataImportX
database_dump (2:.google.cloud.metastore.v1beta.MetadataImport.DatabaseDumpB�AH 
name (	B�A
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AG
state (23.google.cloud.metastore.v1beta.MetadataImport.StateB�A�
DatabaseDumpb
database_type (2G.google.cloud.metastore.v1beta.MetadataImport.DatabaseDump.DatabaseTypeB
gcs_uri (	
source_database (	BG
type (24.google.cloud.metastore.v1beta.DatabaseDumpSpec.TypeB�A"8
DatabaseType
DATABASE_TYPE_UNSPECIFIED 	
MYSQL"T
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED
UPDATING

FAILED:��A�
\'metastore.googleapis.com/MetadataImport\\projects/{project}/locations/{location}/services/{service}/metadataImports/{metadata_import}B

metadata"�
MetadataExport"
destination_gcs_uri (	B�AH 3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AG
state (23.google.cloud.metastore.v1beta.MetadataExport.StateB�AU
database_dump_type (24.google.cloud.metastore.v1beta.DatabaseDumpSpec.TypeB�A"U
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED
	CANCELLEDB
destination"�
Backup
name (	B�A4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A?
state (2+.google.cloud.metastore.v1beta.Backup.StateB�AE
service_revision (2&.google.cloud.metastore.v1beta.ServiceB�A
description (	
restoring_services (	B�A"a
State
STATE_UNSPECIFIED 
CREATING
DELETING

ACTIVE

FAILED
	RESTORING:q�An
metastore.googleapis.com/BackupKprojects/{project}/locations/{location}/services/{service}/backups/{backup}"�
Restore3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A@
state (2,.google.cloud.metastore.v1beta.Restore.StateB�A7
backup (	B\'�A�A!
metastore.googleapis.com/BackupE
type (22.google.cloud.metastore.v1beta.Restore.RestoreTypeB�A
details (	B�A"U
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED
	CANCELLED"H
RestoreType
RESTORE_TYPE_UNSPECIFIED 
FULL
METADATA_ONLY"�
ScalingConfigR
instance_size (29.google.cloud.metastore.v1beta.ScalingConfig.InstanceSizeH 
scaling_factor (H "q
InstanceSize
INSTANCE_SIZE_UNSPECIFIED 
EXTRA_SMALL	
SMALL

MEDIUM	
LARGE
EXTRA_LARGEB
scaling_model"�
ListServicesRequest8
parent (	B(�A�A" metastore.googleapis.com/Service
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"~
ListServicesResponse8
services (2&.google.cloud.metastore.v1beta.Service
next_page_token (	
unreachable (	"K
GetServiceRequest6
name (	B(�A�A"
 metastore.googleapis.com/Service"�
CreateServiceRequest8
parent (	B(�A�A" metastore.googleapis.com/Service

service_id (	B�A<
service (2&.google.cloud.metastore.v1beta.ServiceB�A

request_id (	B�A"�
UpdateServiceRequest4
update_mask (2.google.protobuf.FieldMaskB�A<
service (2&.google.cloud.metastore.v1beta.ServiceB�A

request_id (	B�A"g
DeleteServiceRequest6
name (	B(�A�A"
 metastore.googleapis.com/Service

request_id (	B�A"�
ListMetadataImportsRequest?
parent (	B/�A�A)\'metastore.googleapis.com/MetadataImport
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListMetadataImportsResponseG
metadata_imports (2-.google.cloud.metastore.v1beta.MetadataImport
next_page_token (	
unreachable (	"Y
GetMetadataImportRequest=
name (	B/�A�A)
\'metastore.googleapis.com/MetadataImport"�
CreateMetadataImportRequest?
parent (	B/�A�A)\'metastore.googleapis.com/MetadataImport
metadata_import_id (	B�AK
metadata_import (2-.google.cloud.metastore.v1beta.MetadataImportB�A

request_id (	B�A"�
UpdateMetadataImportRequest4
update_mask (2.google.protobuf.FieldMaskB�AK
metadata_import (2-.google.cloud.metastore.v1beta.MetadataImportB�A

request_id (	B�A"�
ListBackupsRequest7
parent (	B\'�A�A!metastore.googleapis.com/Backup
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"{
ListBackupsResponse6
backups (2%.google.cloud.metastore.v1beta.Backup
next_page_token (	
unreachable (	"I
GetBackupRequest5
name (	B\'�A�A!
metastore.googleapis.com/Backup"�
CreateBackupRequest7
parent (	B\'�A�A!metastore.googleapis.com/Backup
	backup_id (	B�A:
backup (2%.google.cloud.metastore.v1beta.BackupB�A

request_id (	B�A"e
DeleteBackupRequest5
name (	B\'�A�A!
metastore.googleapis.com/Backup

request_id (	B�A"�
ExportMetadataRequest 
destination_gcs_folder (	H 9
service (	B(�A�A"
 metastore.googleapis.com/Service

request_id (	B�AU
database_dump_type (24.google.cloud.metastore.v1beta.DatabaseDumpSpec.TypeB�AB
destination"�
RestoreServiceRequest9
service (	B(�A�A"
 metastore.googleapis.com/Service7
backup (	B\'�A�A!
metastore.googleapis.com/BackupM
restore_type (22.google.cloud.metastore.v1beta.Restore.RestoreTypeB�A

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
LocationMetadatao
!supported_hive_metastore_versions (2D.google.cloud.metastore.v1beta.LocationMetadata.HiveMetastoreVersion;
HiveMetastoreVersion
version (	

is_default ("E
DatabaseDumpSpec"1
Type
TYPE_UNSPECIFIED 	
MYSQL
AVRO"P
RemoveIamPolicyRequest
resource (	B	�A�A
*
asynchronous (B�A"*
RemoveIamPolicyResponse
success ("e
QueryMetadataRequest9
service (	B(�A�A"
 metastore.googleapis.com/Service
query (	B�A"4
QueryMetadataResponse
result_manifest_uri (	"�
ErrorDetailsI
details (28.google.cloud.metastore.v1beta.ErrorDetails.DetailsEntry.
DetailsEntry
key (	
value (	:8"�
MoveTableToDatabaseRequest9
service (	B(�A�A"
 metastore.googleapis.com/Service

table_name (	B�A
db_name (	B�A 
destination_db_name (	B�A"
MoveTableToDatabaseResponse"�
$AlterMetadataResourceLocationRequest9
service (	B(�A�A"
 metastore.googleapis.com/Service
resource_name (	B�A
location_uri (	B�A"\'
%AlterMetadataResourceLocationResponse2�%
DataprocMetastore�
ListServices2.google.cloud.metastore.v1beta.ListServicesRequest3.google.cloud.metastore.v1beta.ListServicesResponse"A���20/v1beta/{parent=projects/*/locations/*}/services�Aparent�

GetService0.google.cloud.metastore.v1beta.GetServiceRequest&.google.cloud.metastore.v1beta.Service"?���20/v1beta/{name=projects/*/locations/*/services/*}�Aname�
CreateService3.google.cloud.metastore.v1beta.CreateServiceRequest.google.longrunning.Operation"����;"0/v1beta/{parent=projects/*/locations/*}/services:service�Aparent,service,service_id�A:
Service/google.cloud.metastore.v1beta.OperationMetadata�
UpdateService3.google.cloud.metastore.v1beta.UpdateServiceRequest.google.longrunning.Operation"����C28/v1beta/{service.name=projects/*/locations/*/services/*}:service�Aservice,update_mask�A:
Service/google.cloud.metastore.v1beta.OperationMetadata�
DeleteService3.google.cloud.metastore.v1beta.DeleteServiceRequest.google.longrunning.Operation"����2*0/v1beta/{name=projects/*/locations/*/services/*}�Aname�AH
google.protobuf.Empty/google.cloud.metastore.v1beta.OperationMetadata�
ListMetadataImports9.google.cloud.metastore.v1beta.ListMetadataImportsRequest:.google.cloud.metastore.v1beta.ListMetadataImportsResponse"S���DB/v1beta/{parent=projects/*/locations/*/services/*}/metadataImports�Aparent�
GetMetadataImport7.google.cloud.metastore.v1beta.GetMetadataImportRequest-.google.cloud.metastore.v1beta.MetadataImport"Q���DB/v1beta/{name=projects/*/locations/*/services/*/metadataImports/*}�Aname�
CreateMetadataImport:.google.cloud.metastore.v1beta.CreateMetadataImportRequest.google.longrunning.Operation"����U"B/v1beta/{parent=projects/*/locations/*/services/*}/metadataImports:metadata_import�A)parent,metadata_import,metadata_import_id�AA
MetadataImport/google.cloud.metastore.v1beta.OperationMetadata�
UpdateMetadataImport:.google.cloud.metastore.v1beta.UpdateMetadataImportRequest.google.longrunning.Operation"����e2R/v1beta/{metadata_import.name=projects/*/locations/*/services/*/metadataImports/*}:metadata_import�Ametadata_import,update_mask�AA
MetadataImport/google.cloud.metastore.v1beta.OperationMetadata�
ExportMetadata4.google.cloud.metastore.v1beta.ExportMetadataRequest.google.longrunning.Operation"����G"B/v1beta/{service=projects/*/locations/*/services/*}:exportMetadata:*�AA
MetadataExport/google.cloud.metastore.v1beta.OperationMetadata�
RestoreService4.google.cloud.metastore.v1beta.RestoreServiceRequest.google.longrunning.Operation"����@";/v1beta/{service=projects/*/locations/*/services/*}:restore:*�Aservice,backup�A:
Restore/google.cloud.metastore.v1beta.OperationMetadata�
ListBackups1.google.cloud.metastore.v1beta.ListBackupsRequest2.google.cloud.metastore.v1beta.ListBackupsResponse"K���<:/v1beta/{parent=projects/*/locations/*/services/*}/backups�Aparent�
	GetBackup/.google.cloud.metastore.v1beta.GetBackupRequest%.google.cloud.metastore.v1beta.Backup"I���<:/v1beta/{name=projects/*/locations/*/services/*/backups/*}�Aname�
CreateBackup2.google.cloud.metastore.v1beta.CreateBackupRequest.google.longrunning.Operation"����D":/v1beta/{parent=projects/*/locations/*/services/*}/backups:backup�Aparent,backup,backup_id�A9
Backup/google.cloud.metastore.v1beta.OperationMetadata�
DeleteBackup2.google.cloud.metastore.v1beta.DeleteBackupRequest.google.longrunning.Operation"����<*:/v1beta/{name=projects/*/locations/*/services/*/backups/*}�Aname�AH
google.protobuf.Empty/google.cloud.metastore.v1beta.OperationMetadata�
RemoveIamPolicy5.google.cloud.metastore.v1beta.RemoveIamPolicyRequest6.google.cloud.metastore.v1beta.RemoveIamPolicyResponse"R���L"G/v1beta/{resource=projects/*/locations/*/services/*/**}:removeIamPolicy:*�
QueryMetadata3.google.cloud.metastore.v1beta.QueryMetadataRequest.google.longrunning.Operation"����F"A/v1beta/{service=projects/*/locations/*/services/*}:queryMetadata:*�AH
QueryMetadataResponse/google.cloud.metastore.v1beta.OperationMetadata�
MoveTableToDatabase9.google.cloud.metastore.v1beta.MoveTableToDatabaseRequest.google.longrunning.Operation"����L"G/v1beta/{service=projects/*/locations/*/services/*}:moveTableToDatabase:*�AN
MoveTableToDatabaseResponse/google.cloud.metastore.v1beta.OperationMetadata�
AlterMetadataResourceLocationC.google.cloud.metastore.v1beta.AlterMetadataResourceLocationRequest.google.longrunning.Operation"����F"A/v1beta/{service=projects/*/locations/*/services/*}:alterLocation:*�AX
%AlterMetadataResourceLocationResponse/google.cloud.metastore.v1beta.OperationMetadataL�Ametastore.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.metastore.v1betaBMetastoreProtoPZ?cloud.google.com/go/metastore/apiv1beta/metastorepb;metastorepb�Google\\Cloud\\Metastore\\V1beta�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}�Aa
!compute.googleapis.com/Subnetwork<projects/{project}/regions/{region}/subnetworks/{subnetwork}�AT
dataplex.googleapis.com/Lake4projects/{project}/locations/{location}/lakes/{lake}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

