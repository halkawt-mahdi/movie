<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/feature_flags.proto

namespace GPBMetadata\Google\Bigtable\V2;

class FeatureFlags
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
&google/bigtable/v2/feature_flags.protogoogle.bigtable.v2"i
FeatureFlags
reverse_scans (
mutate_rows_rate_limit ("
last_scanned_row_responses (B�
com.google.bigtable.v2BFeatureFlagsProtoPZ:google.golang.org/genproto/googleapis/bigtable/v2;bigtable�Google.Cloud.Bigtable.V2�Google\\Cloud\\Bigtable\\V2�Google::Cloud::Bigtable::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

