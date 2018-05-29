<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/core.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *普通群地理位置消息
 *
 * Generated from protobuf message <code>core.GroupMap</code>
 */
class GroupMap extends \Google\Protobuf\Internal\Message
{
    /**
     *消息id
     *
     * Generated from protobuf field <code>string msg_id = 1;</code>
     */
    private $msg_id = '';
    /**
     *from
     *
     * Generated from protobuf field <code>string site_user_id = 2;</code>
     */
    private $site_user_id = '';
    /**
     *to（群id）
     *
     * Generated from protobuf field <code>string site_group_id = 3;</code>
     */
    private $site_group_id = '';
    /**
     *经度
     *
     * Generated from protobuf field <code>string lng = 4;</code>
     */
    private $lng = '';
    /**
     *纬度
     *
     * Generated from protobuf field <code>string lat = 5;</code>
     */
    private $lat = '';
    /**
     *消息时间，单位ms
     *
     * Generated from protobuf field <code>int64 time = 6;</code>
     */
    private $time = 0;

    public function __construct() {
        \GPBMetadata\Core\Core::initOnce();
        parent::__construct();
    }

    /**
     *消息id
     *
     * Generated from protobuf field <code>string msg_id = 1;</code>
     * @return string
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     *消息id
     *
     * Generated from protobuf field <code>string msg_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMsgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg_id = $var;

        return $this;
    }

    /**
     *from
     *
     * Generated from protobuf field <code>string site_user_id = 2;</code>
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     *from
     *
     * Generated from protobuf field <code>string site_user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_user_id = $var;

        return $this;
    }

    /**
     *to（群id）
     *
     * Generated from protobuf field <code>string site_group_id = 3;</code>
     * @return string
     */
    public function getSiteGroupId()
    {
        return $this->site_group_id;
    }

    /**
     *to（群id）
     *
     * Generated from protobuf field <code>string site_group_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_group_id = $var;

        return $this;
    }

    /**
     *经度
     *
     * Generated from protobuf field <code>string lng = 4;</code>
     * @return string
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     *经度
     *
     * Generated from protobuf field <code>string lng = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLng($var)
    {
        GPBUtil::checkString($var, True);
        $this->lng = $var;

        return $this;
    }

    /**
     *纬度
     *
     * Generated from protobuf field <code>string lat = 5;</code>
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     *纬度
     *
     * Generated from protobuf field <code>string lat = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLat($var)
    {
        GPBUtil::checkString($var, True);
        $this->lat = $var;

        return $this;
    }

    /**
     *消息时间，单位ms
     *
     * Generated from protobuf field <code>int64 time = 6;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *消息时间，单位ms
     *
     * Generated from protobuf field <code>int64 time = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

}

