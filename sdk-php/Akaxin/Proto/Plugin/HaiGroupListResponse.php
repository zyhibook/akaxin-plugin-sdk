<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_group_list.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.HaiGroupListResponse</code>
 */
class HaiGroupListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *用户的群列表
     *
     * Generated from protobuf field <code>repeated .core.SimpleGroupProfile group_profile = 1;</code>
     */
    private $group_profile;

    public function __construct() {
        \GPBMetadata\Plugin\HaiGroupList::initOnce();
        parent::__construct();
    }

    /**
     *用户的群列表
     *
     * Generated from protobuf field <code>repeated .core.SimpleGroupProfile group_profile = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupProfile()
    {
        return $this->group_profile;
    }

    /**
     *用户的群列表
     *
     * Generated from protobuf field <code>repeated .core.SimpleGroupProfile group_profile = 1;</code>
     * @param \Akaxin\Proto\Core\SimpleGroupProfile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupProfile($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Akaxin\Proto\Core\SimpleGroupProfile::class);
        $this->group_profile = $arr;

        return $this;
    }

}

