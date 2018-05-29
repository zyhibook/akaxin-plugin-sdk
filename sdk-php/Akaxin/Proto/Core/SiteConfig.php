<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/config.proto

namespace Akaxin\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 站点配置信息
 *
 * Generated from protobuf message <code>core.SiteConfig</code>
 */
class SiteConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *站点ip
     *
     * Generated from protobuf field <code>string site_address = 1;</code>
     */
    private $site_address = '';
    /**
     *站点地址
     *
     * Generated from protobuf field <code>int32 site_port = 2;</code>
     */
    private $site_port = 0;
    /**
     *站点名称
     *
     * Generated from protobuf field <code>string site_name = 3;</code>
     */
    private $site_name = '';
    /**
     *站点logo
     *
     * Generated from protobuf field <code>string site_logo = 4;</code>
     */
    private $site_logo = '';
    /**
     *站点版本
     *
     * Generated from protobuf field <code>string site_version = 5;</code>
     */
    private $site_version = '';
    /**
     *站点介绍
     *
     * Generated from protobuf field <code>string site_introduction = 6;</code>
     */
    private $site_introduction = '';
    /**
     *站点是否需要实名
     *
     * Generated from protobuf field <code>.core.RealNameConfig real_name_config = 7;</code>
     */
    private $real_name_config = 0;
    /**
     *支持图片大小（width x length）
     *
     * Generated from protobuf field <code>string pic_size = 8;</code>
     */
    private $pic_size = '';
    /**
     *站点状态
     *
     * Generated from protobuf field <code>.core.SiteStatusConfig site_status_config = 9;</code>
     */
    private $site_status_config = 0;
    /**
     *站点状态说明，一般关闭站点情况使用
     *
     * Generated from protobuf field <code>string site_status_info = 10;</code>
     */
    private $site_status_info = '';
    /**
     *二人消息加密状态
     *
     * Generated from protobuf field <code>.core.U2EncryptionConfig u2_encryption_config = 11;</code>
     */
    private $u2_encryption_config = 0;
    /**
     *站点注册是否需要邀请码
     *
     * Generated from protobuf field <code>.core.InviteCodeConfig invite_code_config = 12;</code>
     */
    private $invite_code_config = 0;

    public function __construct() {
        \GPBMetadata\Core\Config::initOnce();
        parent::__construct();
    }

    /**
     *站点ip
     *
     * Generated from protobuf field <code>string site_address = 1;</code>
     * @return string
     */
    public function getSiteAddress()
    {
        return $this->site_address;
    }

    /**
     *站点ip
     *
     * Generated from protobuf field <code>string site_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_address = $var;

        return $this;
    }

    /**
     *站点地址
     *
     * Generated from protobuf field <code>int32 site_port = 2;</code>
     * @return int
     */
    public function getSitePort()
    {
        return $this->site_port;
    }

    /**
     *站点地址
     *
     * Generated from protobuf field <code>int32 site_port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSitePort($var)
    {
        GPBUtil::checkInt32($var);
        $this->site_port = $var;

        return $this;
    }

    /**
     *站点名称
     *
     * Generated from protobuf field <code>string site_name = 3;</code>
     * @return string
     */
    public function getSiteName()
    {
        return $this->site_name;
    }

    /**
     *站点名称
     *
     * Generated from protobuf field <code>string site_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteName($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_name = $var;

        return $this;
    }

    /**
     *站点logo
     *
     * Generated from protobuf field <code>string site_logo = 4;</code>
     * @return string
     */
    public function getSiteLogo()
    {
        return $this->site_logo;
    }

    /**
     *站点logo
     *
     * Generated from protobuf field <code>string site_logo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteLogo($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_logo = $var;

        return $this;
    }

    /**
     *站点版本
     *
     * Generated from protobuf field <code>string site_version = 5;</code>
     * @return string
     */
    public function getSiteVersion()
    {
        return $this->site_version;
    }

    /**
     *站点版本
     *
     * Generated from protobuf field <code>string site_version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_version = $var;

        return $this;
    }

    /**
     *站点介绍
     *
     * Generated from protobuf field <code>string site_introduction = 6;</code>
     * @return string
     */
    public function getSiteIntroduction()
    {
        return $this->site_introduction;
    }

    /**
     *站点介绍
     *
     * Generated from protobuf field <code>string site_introduction = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteIntroduction($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_introduction = $var;

        return $this;
    }

    /**
     *站点是否需要实名
     *
     * Generated from protobuf field <code>.core.RealNameConfig real_name_config = 7;</code>
     * @return int
     */
    public function getRealNameConfig()
    {
        return $this->real_name_config;
    }

    /**
     *站点是否需要实名
     *
     * Generated from protobuf field <code>.core.RealNameConfig real_name_config = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRealNameConfig($var)
    {
        GPBUtil::checkEnum($var, \Akaxin\Proto\Core\RealNameConfig::class);
        $this->real_name_config = $var;

        return $this;
    }

    /**
     *支持图片大小（width x length）
     *
     * Generated from protobuf field <code>string pic_size = 8;</code>
     * @return string
     */
    public function getPicSize()
    {
        return $this->pic_size;
    }

    /**
     *支持图片大小（width x length）
     *
     * Generated from protobuf field <code>string pic_size = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPicSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->pic_size = $var;

        return $this;
    }

    /**
     *站点状态
     *
     * Generated from protobuf field <code>.core.SiteStatusConfig site_status_config = 9;</code>
     * @return int
     */
    public function getSiteStatusConfig()
    {
        return $this->site_status_config;
    }

    /**
     *站点状态
     *
     * Generated from protobuf field <code>.core.SiteStatusConfig site_status_config = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSiteStatusConfig($var)
    {
        GPBUtil::checkEnum($var, \Akaxin\Proto\Core\SiteStatusConfig::class);
        $this->site_status_config = $var;

        return $this;
    }

    /**
     *站点状态说明，一般关闭站点情况使用
     *
     * Generated from protobuf field <code>string site_status_info = 10;</code>
     * @return string
     */
    public function getSiteStatusInfo()
    {
        return $this->site_status_info;
    }

    /**
     *站点状态说明，一般关闭站点情况使用
     *
     * Generated from protobuf field <code>string site_status_info = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSiteStatusInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_status_info = $var;

        return $this;
    }

    /**
     *二人消息加密状态
     *
     * Generated from protobuf field <code>.core.U2EncryptionConfig u2_encryption_config = 11;</code>
     * @return int
     */
    public function getU2EncryptionConfig()
    {
        return $this->u2_encryption_config;
    }

    /**
     *二人消息加密状态
     *
     * Generated from protobuf field <code>.core.U2EncryptionConfig u2_encryption_config = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setU2EncryptionConfig($var)
    {
        GPBUtil::checkEnum($var, \Akaxin\Proto\Core\U2EncryptionConfig::class);
        $this->u2_encryption_config = $var;

        return $this;
    }

    /**
     *站点注册是否需要邀请码
     *
     * Generated from protobuf field <code>.core.InviteCodeConfig invite_code_config = 12;</code>
     * @return int
     */
    public function getInviteCodeConfig()
    {
        return $this->invite_code_config;
    }

    /**
     *站点注册是否需要邀请码
     *
     * Generated from protobuf field <code>.core.InviteCodeConfig invite_code_config = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setInviteCodeConfig($var)
    {
        GPBUtil::checkEnum($var, \Akaxin\Proto\Core\InviteCodeConfig::class);
        $this->invite_code_config = $var;

        return $this;
    }

}

