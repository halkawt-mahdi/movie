<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job.proto

namespace Google\Cloud\Talent\V4\Job;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Application related details of a job posting.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.Job.ApplicationInfo</code>
 */
class ApplicationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Use this field to specify email address(es) to which resumes or
     * applications can be sent.
     * The maximum number of allowed characters for each entry is 255.
     *
     * Generated from protobuf field <code>repeated string emails = 1;</code>
     */
    private $emails;
    /**
     * Use this field to provide instructions, such as "Mail your application
     * to ...", that a candidate can follow to apply for the job.
     * This field accepts and sanitizes HTML input, and also accepts
     * bold, italic, ordered list, and unordered list markup tags.
     * The maximum number of allowed characters is 3,000.
     *
     * Generated from protobuf field <code>string instruction = 2;</code>
     */
    private $instruction = '';
    /**
     * Use this URI field to direct an applicant to a website, for example to
     * link to an online application form.
     * The maximum number of allowed characters for each entry is 2,000.
     *
     * Generated from protobuf field <code>repeated string uris = 3;</code>
     */
    private $uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $emails
     *           Use this field to specify email address(es) to which resumes or
     *           applications can be sent.
     *           The maximum number of allowed characters for each entry is 255.
     *     @type string $instruction
     *           Use this field to provide instructions, such as "Mail your application
     *           to ...", that a candidate can follow to apply for the job.
     *           This field accepts and sanitizes HTML input, and also accepts
     *           bold, italic, ordered list, and unordered list markup tags.
     *           The maximum number of allowed characters is 3,000.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $uris
     *           Use this URI field to direct an applicant to a website, for example to
     *           link to an online application form.
     *           The maximum number of allowed characters for each entry is 2,000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Use this field to specify email address(es) to which resumes or
     * applications can be sent.
     * The maximum number of allowed characters for each entry is 255.
     *
     * Generated from protobuf field <code>repeated string emails = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Use this field to specify email address(es) to which resumes or
     * applications can be sent.
     * The maximum number of allowed characters for each entry is 255.
     *
     * Generated from protobuf field <code>repeated string emails = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->emails = $arr;

        return $this;
    }

    /**
     * Use this field to provide instructions, such as "Mail your application
     * to ...", that a candidate can follow to apply for the job.
     * This field accepts and sanitizes HTML input, and also accepts
     * bold, italic, ordered list, and unordered list markup tags.
     * The maximum number of allowed characters is 3,000.
     *
     * Generated from protobuf field <code>string instruction = 2;</code>
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Use this field to provide instructions, such as "Mail your application
     * to ...", that a candidate can follow to apply for the job.
     * This field accepts and sanitizes HTML input, and also accepts
     * bold, italic, ordered list, and unordered list markup tags.
     * The maximum number of allowed characters is 3,000.
     *
     * Generated from protobuf field <code>string instruction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstruction($var)
    {
        GPBUtil::checkString($var, True);
        $this->instruction = $var;

        return $this;
    }

    /**
     * Use this URI field to direct an applicant to a website, for example to
     * link to an online application form.
     * The maximum number of allowed characters for each entry is 2,000.
     *
     * Generated from protobuf field <code>repeated string uris = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * Use this URI field to direct an applicant to a website, for example to
     * link to an online application form.
     * The maximum number of allowed characters for each entry is 2,000.
     *
     * Generated from protobuf field <code>repeated string uris = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

}


