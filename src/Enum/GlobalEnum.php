<?php
/**
 * Created by OrangBus
 * User email: orangbus40400@gmail.com
 * website: orangbus.cn
 * blog: doc.orangbus.cn
 * github: github.com/orangbus
 */

namespace VendorName\Skeleton\Enum;

/**
 * 系统全局 枚举 定义
 * 【身份标识】：用户来源
 */
enum GlobalEnum:string
{
    // 初始化账户的默认密码
    case INIT_PASSWORD = "123456";
    // 注册用户【身份标识】
    case RegisterUserProvider = "user";

    // 商户用户【身份标识】
    case MerchantUserProvider = 'merchant';

    case CREATE_SUCCESS_MESSAGE = "添加成功！";
    case SAVE_SUCCESS_MESSAGE = "保存成功！";
    case UPDATE_SUCCESS_MESSAGE = "更新成功！";
    case DELETE_SUCCESS_MESSAGE = "删除成功";

    /**
     * @return string
     */
    public function getName(): string
    {
        return match ($this) {
            self::RegisterUserProvider => '用户',
            self::MerchantUserProvider => '商户',
            default => $this->name,
        };
    }
}

