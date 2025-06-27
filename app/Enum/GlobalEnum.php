<?php
/**
 * Created by OrangBus
 * User email: orangbus40400@gmail.com
 * website: orangbus.cn
 * blog: doc.orangbus.cn
 * github: github.com/orangbus
 */

namespace App\Enum;

use App\Models\MerchantSetting;
use App\Service\MerchantService;

/**
 * 系统全局 枚举 定义
 * 【身份标识】：用户来源
 */
class GlobalEnum
{
    // 初始化账户的默认密码
    public const INIT_PASSWORD = '123456';
    // 注册用户【身份标识】
    public const RegisterUserProvider = "user";

    // 商户用户【身份标识】
    public const MerchantUserProvider = 'merchant';

    // 平台用户【身份标识】
    public const PlatformUserProvider = "platform";

    // 商户id标识,这是为了统一使用，数据库已经写死了
    public const MerchantFiled = "mer_id";

    // 用户信息异常
    public const UserInfoErrorCode = "418";
    public const UserInfoErrorMessage = "用户信息异常,请联系管理技术人员处理";
    public const UserInfoError_TYPE = 1;

    // 未授权登录
    public const AuthorizationErrorCode = 419;
    public const AuthorizationErrorMessage = "请登录";

    // token 时间
    public const TokenExpireTime = 7; // token时效时间 7天
    public const RefreshTokenExpireTime = 15; // 刷新token时间 15 天
    public const PersonalAccessTokenExpireTime = 7; // 个人访问token 时效时间 7太难
    public const SanctumExpireTime = 604800; //sanctum 令牌失效时间

    public const CREATE_SUCCESS_MESSAGE = "添加成功！";
    public const SAVE_SUCCESS_MESSAGE = "保存成功！";
    public const UPDATE_SUCCESS_MESSAGE = "更新成功！";
    public const DELETE_SUCCESS_MESSAGE = "删除成功";

    // 获取商户配置信息

    // 商户登录地址
    public static function MERCHANT_LOGIN_URL()
    {
        return MerchantService::getMerchantSetting()->mer_url . "/login";
    }

    // 商户自动登录地址
    public static function MERCHANT_AUTO_LOGIN_URL()
    {
        return MerchantService::getMerchantSetting()->mer_url . "/auto/login"; // /auto/login
    }

    // 平台登录地址
    public const PLATFORM_LOGIN_URL = '';
    // 自动登录有效时间范围
    public const MERCHANT_AUTO_LOGIN_TIME = 60;

    // 活码预览前端地址
    public static function LIVE_CODE_URL()
    {
        return route("liveCode");
    }

    // 线索报名地址
    public static function customerAppyUrl($uuid)
    {
        return route("customer.apply",["uuid"=>$uuid]);
    }
}

