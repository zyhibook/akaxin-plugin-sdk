<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/core.proto

namespace Akaxin\Proto\Core;

/**
 *以下内容为共用消息内容
 *消息类型
 *
 * Protobuf enum <code>Core\MsgType</code>
 */
class MsgType
{
    /**
     *系统通知
     *
     * Generated from protobuf enum <code>NOTICE = 0;</code>
     */
    const NOTICE = 0;
    /**
     *每条发送的消息，发送一个消息状态的回执
     *
     * Generated from protobuf enum <code>MSG_STATUS = 1;</code>
     */
    const MSG_STATUS = 1;
    /**
     *二人文本消息
     *
     * Generated from protobuf enum <code>TEXT = 3;</code>
     */
    const TEXT = 3;
    /**
     *加密二人文本消息
     *
     * Generated from protobuf enum <code>SECRET_TEXT = 4;</code>
     */
    const SECRET_TEXT = 4;
    /**
     *群聊文本消息
     *
     * Generated from protobuf enum <code>GROUP_TEXT = 5;</code>
     */
    const GROUP_TEXT = 5;
    /**
     *群聊加密文本消息(暂未使用)
     *
     * Generated from protobuf enum <code>GROUP_SECRET_TEXT = 6;</code>
     */
    const GROUP_SECRET_TEXT = 6;
    /**
     *二人图片消息
     *
     * Generated from protobuf enum <code>IMAGE = 7;</code>
     */
    const IMAGE = 7;
    /**
     *二人加密图片消息
     *
     * Generated from protobuf enum <code>SECRET_IMAGE = 8;</code>
     */
    const SECRET_IMAGE = 8;
    /**
     *群图片消息
     *
     * Generated from protobuf enum <code>GROUP_IMAGE = 9;</code>
     */
    const GROUP_IMAGE = 9;
    /**
     *群加密图片(暂未使用)
     *
     * Generated from protobuf enum <code>GROUP_SECRET_IMAGE = 10;</code>
     */
    const GROUP_SECRET_IMAGE = 10;
    /**
     *二人语音消息
     *
     * Generated from protobuf enum <code>VOICE = 11;</code>
     */
    const VOICE = 11;
    /**
     *二人加密语音
     *
     * Generated from protobuf enum <code>SECRET_VOICE = 12;</code>
     */
    const SECRET_VOICE = 12;
    /**
     *群语音
     *
     * Generated from protobuf enum <code>GROUP_VOICE = 13;</code>
     */
    const GROUP_VOICE = 13;
    /**
     *群加密语音(暂未使用)
     *
     * Generated from protobuf enum <code>GROUP_SECRET_VOICE = 14;</code>
     */
    const GROUP_SECRET_VOICE = 14;
    /**
     *二人地图
     *
     * Generated from protobuf enum <code>U2_MAP = 15;</code>
     */
    const U2_MAP = 15;
    /**
     *二人加密地图消息
     *
     * Generated from protobuf enum <code>U2_SECRET_MAP = 16;</code>
     */
    const U2_SECRET_MAP = 16;
    /**
     *群地图
     *
     * Generated from protobuf enum <code>GROUP_MAP = 17;</code>
     */
    const GROUP_MAP = 17;
    /**
     *群加密地图消息
     *
     * Generated from protobuf enum <code>GROUP_SECRET_MAP = 18;</code>
     */
    const GROUP_SECRET_MAP = 18;
    /**
     *二人：消息中的通知消息
     *
     * Generated from protobuf enum <code>U2_NOTICE = 19;</code>
     */
    const U2_NOTICE = 19;
    /**
     *群：消息中的通知消息
     *
     * Generated from protobuf enum <code>GROUP_NOTICE = 20;</code>
     */
    const GROUP_NOTICE = 20;
    /**
     *二人撤回消息
     *
     * Generated from protobuf enum <code>U2_RECALL = 21;</code>
     */
    const U2_RECALL = 21;
    /**
     *群撤回消息
     *
     * Generated from protobuf enum <code>GROUP_RECALL = 22;</code>
     */
    const GROUP_RECALL = 22;
    /**
     *二人：消息中的WEB内嵌消息
     *
     * Generated from protobuf enum <code>U2_WEB = 23;</code>
     */
    const U2_WEB = 23;
    /**
     *群：消息中的WEB内嵌消息
     *
     * Generated from protobuf enum <code>GROUP_WEB = 24;</code>
     */
    const GROUP_WEB = 24;
    /**
     *二人：内嵌WEB通知消息
     *
     * Generated from protobuf enum <code>U2_WEB_NOTICE = 25;</code>
     */
    const U2_WEB_NOTICE = 25;
    /**
     *群：内嵌WEB通知消息
     *
     * Generated from protobuf enum <code>GROUP_WEB_NOTICE = 26;</code>
     */
    const GROUP_WEB_NOTICE = 26;
}

