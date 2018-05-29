<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_user_search.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.HaiUserSearchResponse</code>
 */
class HaiUserSearchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *需要查找的用户
     *
     * Generated from protobuf field <code>repeated .core.SimpleUserProfile user_profile = 1;</code>
     */
    private $user_profile;

    public function __construct() {
        \GPBMetadata\Plugin\HaiUserSearch::initOnce();
        parent::__construct();
    }

    /**
     *需要查找的用户
     *
     * Generated from protobuf field <code>repeated .core.SimpleUserProfile user_profile = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserProfile()
    {
        return $this->user_profile;
    }

    /**
     *需要查找的用户
     *
     * Generated from protobuf field <code>repeated .core.SimpleUserProfile user_profile = 1;</code>
     * @param \Akaxin\Proto\Core\SimpleUserProfile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserProfile($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Akaxin\Proto\Core\SimpleUserProfile::class);
        $this->user_profile = $arr;

        return $this;
    }

}

