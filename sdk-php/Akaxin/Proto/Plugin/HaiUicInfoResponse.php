<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_uic_info.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.HaiUicInfoResponse</code>
 */
class HaiUicInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *更新的uic信息
     *
     * Generated from protobuf field <code>.core.UicInfo uic_info = 2;</code>
     */
    private $uic_info = null;

    public function __construct() {
        \GPBMetadata\Plugin\HaiUicInfo::initOnce();
        parent::__construct();
    }

    /**
     *更新的uic信息
     *
     * Generated from protobuf field <code>.core.UicInfo uic_info = 2;</code>
     * @return \Akaxin\Proto\Core\UicInfo
     */
    public function getUicInfo()
    {
        return $this->uic_info;
    }

    /**
     *更新的uic信息
     *
     * Generated from protobuf field <code>.core.UicInfo uic_info = 2;</code>
     * @param \Akaxin\Proto\Core\UicInfo $var
     * @return $this
     */
    public function setUicInfo($var)
    {
        GPBUtil::checkMessage($var, \Akaxin\Proto\Core\UicInfo::class);
        $this->uic_info = $var;

        return $this;
    }

}

