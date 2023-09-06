<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/application.proto

namespace GPBMetadata\Google\Appengine\V1;

class Application
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

%google/appengine/v1/application.protogoogle.appengine.v1"�
Application
name (	

id (	<
dispatch_rules (2$.google.appengine.v1.UrlDispatchRule
auth_domain (	
location_id (	
code_bucket (	<
default_cookie_expiration	 (2.google.protobuf.DurationF
serving_status
 (2..google.appengine.v1.Application.ServingStatus
default_hostname (	
default_bucket (	
service_account (	@
iap (23.google.appengine.v1.Application.IdentityAwareProxy

gcr_domain (	D
database_type (2-.google.appengine.v1.Application.DatabaseTypeJ
feature_settings (20.google.appengine.v1.Application.FeatureSettings�
IdentityAwareProxy
enabled (
oauth2_client_id (	
oauth2_client_secret (	#
oauth2_client_secret_sha256 (	R
FeatureSettings
split_health_checks ("
use_container_optimized_os ("U
ServingStatus
UNSPECIFIED 
SERVING
USER_DISABLED
SYSTEM_DISABLED"z
DatabaseType
DATABASE_TYPE_UNSPECIFIED 
CLOUD_DATASTORE
CLOUD_FIRESTORE!
CLOUD_DATASTORE_COMPATIBILITY"@
UrlDispatchRule
domain (	
path (	
service (	B�
com.google.appengine.v1BApplicationProtoPZ;cloud.google.com/go/appengine/apiv1/appenginepb;appenginepb�Google.Cloud.AppEngine.V1�Google\\Cloud\\AppEngine\\V1�Google::Cloud::AppEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

