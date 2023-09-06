<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/web_security_scanner.proto

namespace GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta;

class WebSecurityScanner
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
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\CrawledUrl::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\Finding::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\FindingTypeStats::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanConfig::initOnce();
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanRun::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�-
Agoogle/cloud/websecurityscanner/v1beta/web_security_scanner.proto&google.cloud.websecurityscanner.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto8google/cloud/websecurityscanner/v1beta/crawled_url.proto4google/cloud/websecurityscanner/v1beta/finding.proto?google/cloud/websecurityscanner/v1beta/finding_type_stats.proto8google/cloud/websecurityscanner/v1beta/scan_config.proto5google/cloud/websecurityscanner/v1beta/scan_run.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateScanConfigRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectL
scan_config (22.google.cloud.websecurityscanner.v1beta.ScanConfigB�A"]
DeleteScanConfigRequestB
name (	B4�A�A.
,websecurityscanner.googleapis.com/ScanConfig"Z
GetScanConfigRequestB
name (	B4�A�A.
,websecurityscanner.googleapis.com/ScanConfig"�
ListScanConfigsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project

page_token (	
	page_size ("�
UpdateScanConfigRequestL
scan_config (22.google.cloud.websecurityscanner.v1beta.ScanConfigB�A4
update_mask (2.google.protobuf.FieldMaskB�A"|
ListScanConfigsResponseH
scan_configs (22.google.cloud.websecurityscanner.v1beta.ScanConfig
next_page_token (	"Y
StartScanRunRequestB
name (	B4�A�A.
,websecurityscanner.googleapis.com/ScanConfig"T
GetScanRunRequest?
name (	B1�A�A+
)websecurityscanner.googleapis.com/ScanRun"�
ListScanRunsRequestD
parent (	B4�A�A.
,websecurityscanner.googleapis.com/ScanConfig

page_token (	
	page_size ("s
ListScanRunsResponseB
	scan_runs (2/.google.cloud.websecurityscanner.v1beta.ScanRun
next_page_token (	"U
StopScanRunRequest?
name (	B1�A�A+
)websecurityscanner.googleapis.com/ScanRun"�
ListCrawledUrlsRequestA
parent (	B1�A�A+
)websecurityscanner.googleapis.com/ScanRun

page_token (	
	page_size ("|
ListCrawledUrlsResponseH
crawled_urls (22.google.cloud.websecurityscanner.v1beta.CrawledUrl
next_page_token (	"T
GetFindingRequest?
name (	B1�A�A+
)websecurityscanner.googleapis.com/Finding"�
ListFindingsRequestA
parent (	B1�A�A+
)websecurityscanner.googleapis.com/ScanRun
filter (	B�A

page_token (	
	page_size ("r
ListFindingsResponseA
findings (2/.google.cloud.websecurityscanner.v1beta.Finding
next_page_token (	"`
ListFindingTypeStatsRequestA
parent (	B1�A�A+
)websecurityscanner.googleapis.com/ScanRun"t
ListFindingTypeStatsResponseT
finding_type_stats (28.google.cloud.websecurityscanner.v1beta.FindingTypeStats2�
WebSecurityScanner�
CreateScanConfig?.google.cloud.websecurityscanner.v1beta.CreateScanConfigRequest2.google.cloud.websecurityscanner.v1beta.ScanConfig"Q���6"\'/v1beta/{parent=projects/*}/scanConfigs:scan_config�Aparent,scan_config�
DeleteScanConfig?.google.cloud.websecurityscanner.v1beta.DeleteScanConfigRequest.google.protobuf.Empty"6���)*\'/v1beta/{name=projects/*/scanConfigs/*}�Aname�
GetScanConfig<.google.cloud.websecurityscanner.v1beta.GetScanConfigRequest2.google.cloud.websecurityscanner.v1beta.ScanConfig"6���)\'/v1beta/{name=projects/*/scanConfigs/*}�Aname�
ListScanConfigs>.google.cloud.websecurityscanner.v1beta.ListScanConfigsRequest?.google.cloud.websecurityscanner.v1beta.ListScanConfigsResponse"8���)\'/v1beta/{parent=projects/*}/scanConfigs�Aparent�
UpdateScanConfig?.google.cloud.websecurityscanner.v1beta.UpdateScanConfigRequest2.google.cloud.websecurityscanner.v1beta.ScanConfig"b���B23/v1beta/{scan_config.name=projects/*/scanConfigs/*}:scan_config�Ascan_config,update_mask�
StartScanRun;.google.cloud.websecurityscanner.v1beta.StartScanRunRequest/.google.cloud.websecurityscanner.v1beta.ScanRun"?���2"-/v1beta/{name=projects/*/scanConfigs/*}:start:*�Aname�

GetScanRun9.google.cloud.websecurityscanner.v1beta.GetScanRunRequest/.google.cloud.websecurityscanner.v1beta.ScanRun"A���42/v1beta/{name=projects/*/scanConfigs/*/scanRuns/*}�Aname�
ListScanRuns;.google.cloud.websecurityscanner.v1beta.ListScanRunsRequest<.google.cloud.websecurityscanner.v1beta.ListScanRunsResponse"C���42/v1beta/{parent=projects/*/scanConfigs/*}/scanRuns�Aparent�
StopScanRun:.google.cloud.websecurityscanner.v1beta.StopScanRunRequest/.google.cloud.websecurityscanner.v1beta.ScanRun"I���<"7/v1beta/{name=projects/*/scanConfigs/*/scanRuns/*}:stop:*�Aname�
ListCrawledUrls>.google.cloud.websecurityscanner.v1beta.ListCrawledUrlsRequest?.google.cloud.websecurityscanner.v1beta.ListCrawledUrlsResponse"Q���B@/v1beta/{parent=projects/*/scanConfigs/*/scanRuns/*}/crawledUrls�Aparent�

GetFinding9.google.cloud.websecurityscanner.v1beta.GetFindingRequest/.google.cloud.websecurityscanner.v1beta.Finding"L���?=/v1beta/{name=projects/*/scanConfigs/*/scanRuns/*/findings/*}�Aname�
ListFindings;.google.cloud.websecurityscanner.v1beta.ListFindingsRequest<.google.cloud.websecurityscanner.v1beta.ListFindingsResponse"U���?=/v1beta/{parent=projects/*/scanConfigs/*/scanRuns/*}/findings�Aparent,filter�
ListFindingTypeStatsC.google.cloud.websecurityscanner.v1beta.ListFindingTypeStatsRequestD.google.cloud.websecurityscanner.v1beta.ListFindingTypeStatsResponse"V���GE/v1beta/{parent=projects/*/scanConfigs/*/scanRuns/*}/findingTypeStats�AparentU�A!websecurityscanner.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
*com.google.cloud.websecurityscanner.v1betaBWebSecurityScannerProtoPZZcloud.google.com/go/websecurityscanner/apiv1beta/websecurityscannerpb;websecurityscannerpb�&Google.Cloud.WebSecurityScanner.V1Beta�&Google\\Cloud\\WebSecurityScanner\\V1beta�)Google::Cloud::WebSecurityScanner::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

