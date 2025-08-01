<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/configdelivery/v1beta/config_delivery.proto

namespace Google\Cloud\ConfigDelivery\V1beta\FleetPackage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The target defines different ways to target set of kubernetes clusters.
 *
 * Generated from protobuf message <code>google.cloud.configdelivery.v1beta.FleetPackage.Target</code>
 */
class Target extends \Google\Protobuf\Internal\Message
{
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ConfigDelivery\V1beta\Fleet $fleet
     *           The GKE fleet information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Configdelivery\V1Beta\ConfigDelivery::initOnce();
        parent::__construct($data);
    }

    /**
     * The GKE fleet information.
     *
     * Generated from protobuf field <code>.google.cloud.configdelivery.v1beta.Fleet fleet = 1;</code>
     * @return \Google\Cloud\ConfigDelivery\V1beta\Fleet|null
     */
    public function getFleet()
    {
        return $this->readOneof(1);
    }

    public function hasFleet()
    {
        return $this->hasOneof(1);
    }

    /**
     * The GKE fleet information.
     *
     * Generated from protobuf field <code>.google.cloud.configdelivery.v1beta.Fleet fleet = 1;</code>
     * @param \Google\Cloud\ConfigDelivery\V1beta\Fleet $var
     * @return $this
     */
    public function setFleet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ConfigDelivery\V1beta\Fleet::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}


