<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of network adapters and settings.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.MachineNetworkDetails</code>
 */
class MachineNetworkDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The primary IP address of the machine.
     *
     * Generated from protobuf field <code>string primary_ip_address = 1;</code>
     */
    protected $primary_ip_address = '';
    /**
     * The public IP address of the machine.
     *
     * Generated from protobuf field <code>string public_ip_address = 2;</code>
     */
    protected $public_ip_address = '';
    /**
     * MAC address of the machine.
     * This property is used to uniqly identify the machine.
     *
     * Generated from protobuf field <code>string primary_mac_address = 3;</code>
     */
    protected $primary_mac_address = '';
    /**
     * List of network adapters.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkAdapterList adapters = 4;</code>
     */
    protected $adapters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $primary_ip_address
     *           The primary IP address of the machine.
     *     @type string $public_ip_address
     *           The public IP address of the machine.
     *     @type string $primary_mac_address
     *           MAC address of the machine.
     *           This property is used to uniqly identify the machine.
     *     @type \Google\Cloud\MigrationCenter\V1\NetworkAdapterList $adapters
     *           List of network adapters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * The primary IP address of the machine.
     *
     * Generated from protobuf field <code>string primary_ip_address = 1;</code>
     * @return string
     */
    public function getPrimaryIpAddress()
    {
        return $this->primary_ip_address;
    }

    /**
     * The primary IP address of the machine.
     *
     * Generated from protobuf field <code>string primary_ip_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_ip_address = $var;

        return $this;
    }

    /**
     * The public IP address of the machine.
     *
     * Generated from protobuf field <code>string public_ip_address = 2;</code>
     * @return string
     */
    public function getPublicIpAddress()
    {
        return $this->public_ip_address;
    }

    /**
     * The public IP address of the machine.
     *
     * Generated from protobuf field <code>string public_ip_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_ip_address = $var;

        return $this;
    }

    /**
     * MAC address of the machine.
     * This property is used to uniqly identify the machine.
     *
     * Generated from protobuf field <code>string primary_mac_address = 3;</code>
     * @return string
     */
    public function getPrimaryMacAddress()
    {
        return $this->primary_mac_address;
    }

    /**
     * MAC address of the machine.
     * This property is used to uniqly identify the machine.
     *
     * Generated from protobuf field <code>string primary_mac_address = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryMacAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_mac_address = $var;

        return $this;
    }

    /**
     * List of network adapters.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkAdapterList adapters = 4;</code>
     * @return \Google\Cloud\MigrationCenter\V1\NetworkAdapterList|null
     */
    public function getAdapters()
    {
        return $this->adapters;
    }

    public function hasAdapters()
    {
        return isset($this->adapters);
    }

    public function clearAdapters()
    {
        unset($this->adapters);
    }

    /**
     * List of network adapters.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkAdapterList adapters = 4;</code>
     * @param \Google\Cloud\MigrationCenter\V1\NetworkAdapterList $var
     * @return $this
     */
    public function setAdapters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\NetworkAdapterList::class);
        $this->adapters = $var;

        return $this;
    }

}

