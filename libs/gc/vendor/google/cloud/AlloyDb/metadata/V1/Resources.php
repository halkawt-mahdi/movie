<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace GPBMetadata\Google\Cloud\Alloydb\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
�M
\'google/cloud/alloydb/v1/resources.protogoogle.cloud.alloydb.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/dayofweek.protogoogle/type/timeofday.proto".
UserPassword
user (	
password (	"�
MigrationSource
	host_port (	B�A
reference_id (	B�AV
source_type (2<.google.cloud.alloydb.v1.MigrationSource.MigrationSourceTypeB�A"E
MigrationSourceType%
!MIGRATION_SOURCE_TYPE_UNSPECIFIED 
DMS"(
EncryptionConfig
kms_key_name (	"�
EncryptionInfoJ
encryption_type (2,.google.cloud.alloydb.v1.EncryptionInfo.TypeB�AJ
kms_key_versions (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersion"\\
Type
TYPE_UNSPECIFIED 
GOOGLE_DEFAULT_ENCRYPTION
CUSTOMER_MANAGED_ENCRYPTION"�
	SslConfigA
ssl_mode (2*.google.cloud.alloydb.v1.SslConfig.SslModeB�AC
	ca_source (2+.google.cloud.alloydb.v1.SslConfig.CaSourceB�A"�
SslMode
SSL_MODE_UNSPECIFIED 
SSL_MODE_ALLOW
SSL_MODE_REQUIRE
SSL_MODE_VERIFY_CA#
ALLOW_UNENCRYPTED_AND_ENCRYPTED
ENCRYPTED_ONLY"<
CaSource
CA_SOURCE_UNSPECIFIED 
CA_SOURCE_MANAGED"�
AutomatedBackupPolicyX
weekly_schedule (2=.google.cloud.alloydb.v1.AutomatedBackupPolicy.WeeklyScheduleH a
time_based_retention (2A.google.cloud.alloydb.v1.AutomatedBackupPolicy.TimeBasedRetentionHi
quantity_based_retention (2E.google.cloud.alloydb.v1.AutomatedBackupPolicy.QuantityBasedRetentionH
enabled (H�0
backup_window (2.google.protobuf.DurationI
encryption_config (2).google.cloud.alloydb.v1.EncryptionConfigB�A
location (	J
labels (2:.google.cloud.alloydb.v1.AutomatedBackupPolicy.LabelsEntryk
WeeklySchedule+
start_times (2.google.type.TimeOfDay,
days_of_week (2.google.type.DayOfWeekI
TimeBasedRetention3
retention_period (2.google.protobuf.Duration\'
QuantityBasedRetention
count (-
LabelsEntry
key (	
value (	:8B

scheduleB
	retentionB

_enabled"�
ContinuousBackupConfig
enabled (H �
recovery_window_days (D
encryption_config (2).google.cloud.alloydb.v1.EncryptionConfigB

_enabled"�
ContinuousBackupInfoE
encryption_info (2\'.google.cloud.alloydb.v1.EncryptionInfoB�A5
enabled_time (2.google.protobuf.TimestampB�A-
schedule (2.google.type.DayOfWeekB�AA
earliest_restorable_time (2.google.protobuf.TimestampB�A"c
BackupSource

backup_uid (	B�A:
backup_name (	B%�A�A
alloydb.googleapis.com/Backup"f
ContinuousBackupSource
cluster (	B�A6
point_in_time (2.google.protobuf.TimestampB�A"�
ClusterC
backup_source (2%.google.cloud.alloydb.v1.BackupSourceB�AH I
migration_source (2(.google.cloud.alloydb.v1.MigrationSourceB�AH 
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A<
labels (2,.google.cloud.alloydb.v1.Cluster.LabelsEntry:
state (2&.google.cloud.alloydb.v1.Cluster.StateB�AG
cluster_type (2,.google.cloud.alloydb.v1.Cluster.ClusterTypeB�AG
database_version	 (2(.google.cloud.alloydb.v1.DatabaseVersionB�A7
network
 (	B&�A�A 
compute.googleapis.com/Network
etag (	F
annotations (21.google.cloud.alloydb.v1.Cluster.AnnotationsEntry
reconciling (B�A@
initial_user (2%.google.cloud.alloydb.v1.UserPasswordB�AO
automated_backup_policy (2..google.cloud.alloydb.v1.AutomatedBackupPolicy:

ssl_config (2".google.cloud.alloydb.v1.SslConfigBI
encryption_config (2).google.cloud.alloydb.v1.EncryptionConfigB�AE
encryption_info (2\'.google.cloud.alloydb.v1.EncryptionInfoB�AV
continuous_backup_config (2/.google.cloud.alloydb.v1.ContinuousBackupConfigB�AR
continuous_backup_info (2-.google.cloud.alloydb.v1.ContinuousBackupInfoB�AJ
secondary_config (20.google.cloud.alloydb.v1.Cluster.SecondaryConfigK
primary_config (2..google.cloud.alloydb.v1.Cluster.PrimaryConfigB�A/
SecondaryConfig
primary_cluster_name (	5
PrimaryConfig$
secondary_cluster_names (	B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 	
READY
STOPPED	
EMPTY
CREATING
DELETING

FAILED
BOOTSTRAPPING
MAINTENANCE
	PROMOTING	"G
ClusterType
CLUSTER_TYPE_UNSPECIFIED 
PRIMARY
	SECONDARY:b�A_
alloydb.googleapis.com/Cluster:projects/{project}/locations/{location}/clusters/{cluster}RB
source"�
Instance
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A=
labels (2-.google.cloud.alloydb.v1.Instance.LabelsEntry;
state (2\'.google.cloud.alloydb.v1.Instance.StateB�AJ
instance_type	 (2..google.cloud.alloydb.v1.Instance.InstanceTypeB�AG
machine_config
 (2/.google.cloud.alloydb.v1.Instance.MachineConfigM
availability_type (22.google.cloud.alloydb.v1.Instance.AvailabilityType
gce_zone (	L
database_flags (24.google.cloud.alloydb.v1.Instance.DatabaseFlagsEntryB
writable_node (2&.google.cloud.alloydb.v1.Instance.NodeB�A:
nodes (2&.google.cloud.alloydb.v1.Instance.NodeB�A\\
query_insights_config (2=.google.cloud.alloydb.v1.Instance.QueryInsightsInstanceConfigJ
read_pool_config (20.google.cloud.alloydb.v1.Instance.ReadPoolConfig

ip_address (	B�A
reconciling (B�A
etag (	G
annotations (22.google.cloud.alloydb.v1.Instance.AnnotationsEntry"
MachineConfig
	cpu_count (>
Node
zone_id (	

id (	

ip (	
state (	�
QueryInsightsInstanceConfig$
record_application_tags (H �"
record_client_address (H�
query_string_length (#
query_plans_per_minute (H�B
_record_application_tagsB
_record_client_addressB
_query_plans_per_minute$
ReadPoolConfig

node_count (-
LabelsEntry
key (	
value (	:84
DatabaseFlagsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 	
READY
STOPPED
CREATING
DELETING
MAINTENANCE

FAILED
BOOTSTRAPPING
	PROMOTING	"X
InstanceType
INSTANCE_TYPE_UNSPECIFIED 
PRIMARY
	READ_POOL
	SECONDARY"N
AvailabilityType!
AVAILABILITY_TYPE_UNSPECIFIED 	
ZONAL
REGIONAL:x�Au
alloydb.googleapis.com/InstanceOprojects/{project}/locations/{location}/clusters/{cluster}/instances/{instance}R"�	
Backup
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A;
labels (2+.google.cloud.alloydb.v1.Backup.LabelsEntry9
state (2%.google.cloud.alloydb.v1.Backup.StateB�A2
type (2$.google.cloud.alloydb.v1.Backup.Type
description	 (	
cluster_uid (	B�A<
cluster_name
 (	B&�A�A 
alloydb.googleapis.com/Cluster
reconciling (B�AI
encryption_config (2).google.cloud.alloydb.v1.EncryptionConfigB�AE
encryption_info (2\'.google.cloud.alloydb.v1.EncryptionInfoB�A
etag (	E
annotations (20.google.cloud.alloydb.v1.Backup.AnnotationsEntry

size_bytes (B�A4
expiry_time (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"Q
State
STATE_UNSPECIFIED 	
READY
CREATING

FAILED
DELETING"J
Type
TYPE_UNSPECIFIED 
	ON_DEMAND
	AUTOMATED

CONTINUOUS:_�A\\
alloydb.googleapis.com/Backup8projects/{project}/locations/{location}/backups/{backup}R"�
SupportedDatabaseFlag`
string_restrictions (2A.google.cloud.alloydb.v1.SupportedDatabaseFlag.StringRestrictionsH b
integer_restrictions (2B.google.cloud.alloydb.v1.SupportedDatabaseFlag.IntegerRestrictionsH 
name (	
	flag_name (	L

value_type (28.google.cloud.alloydb.v1.SupportedDatabaseFlag.ValueType
accepts_multiple_values (G
supported_db_versions (2(.google.cloud.alloydb.v1.DatabaseVersion
requires_db_restart (,
StringRestrictions
allowed_values (	u
IntegerRestrictions.
	min_value (2.google.protobuf.Int64Value.
	max_value (2.google.protobuf.Int64Value"U
	ValueType
VALUE_TYPE_UNSPECIFIED 

STRING
INTEGER	
FLOAT
NONE:g�Ad
,alloydb.googleapis.com/SupportedDatabaseFlag4projects/{project}/locations/{location}/flags/{flag}B
restrictions"�
User
name (	B�A
password (	B�A
database_roles (	B�A>
	user_type (2&.google.cloud.alloydb.v1.User.UserTypeB�A"Q
UserType
USER_TYPE_UNSPECIFIED 
ALLOYDB_BUILT_IN
ALLOYDB_IAM_USER:l�Ai
alloydb.googleapis.com/UserGprojects/{project}/locations/{location}/clusters/{cluster}/users/{user}R*^
InstanceView
INSTANCE_VIEW_UNSPECIFIED 
INSTANCE_VIEW_BASIC
INSTANCE_VIEW_FULL*g
ClusterView
CLUSTER_VIEW_UNSPECIFIED 
CLUSTER_VIEW_BASIC"
CLUSTER_VIEW_CONTINUOUS_BACKUP*Y
DatabaseVersion 
DATABASE_VERSION_UNSPECIFIED 
POSTGRES_13
POSTGRES_14B�
com.google.cloud.alloydb.v1BResourcesProtoPZ5cloud.google.com/go/alloydb/apiv1/alloydbpb;alloydbpb�Google.Cloud.AlloyDb.V1�Google\\Cloud\\AlloyDb\\V1�Google::Cloud::AlloyDB::V1�A�
(cloudkms.googleapis.com/CryptoKeyVersionzprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

