<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_uic_create.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.HaiUicCreateResponse</code>
 */
class HaiUicCreateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *成功生成的个数
     *
     * Generated from protobuf field <code>int32 success_number = 1;</code>
     */
    private $success_number = 0;

    public function __construct() {
        \GPBMetadata\Plugin\HaiUicCreate::initOnce();
        parent::__construct();
    }

    /**
     *成功生成的个数
     *
     * Generated from protobuf field <code>int32 success_number = 1;</code>
     * @return int
     */
    public function getSuccessNumber()
    {
        return $this->success_number;
    }

    /**
     *成功生成的个数
     *
     * Generated from protobuf field <code>int32 success_number = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->success_number = $var;

        return $this;
    }

}

