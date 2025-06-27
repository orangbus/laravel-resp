<?php
/**
 * Created by OrangBus
 * User email: orangbus40400@gmail.com
 * website: orangbus.cn
 * blog: doc.orangbus.cn
 * github: github.com/orangbus
 */

namespace App\Enum;

use Illuminate\Support\Str;

/**
 * 提示
 * 常量只能定义发送短信的类型，不能定义其它类型的变量
 */
class MsgEnum
{
    public const Success = "操作成功";
    public const SaveSuccess = "保存成功";
    public const SaveFail = "保存失败";
    public const UpdateSuccess = "更新成功";
    public const UpdateFail = "更新失败";
    public const DeleteSuccess = "删除成功";
    public const DeleteFail = "删除失败";
    public const UserNotExist = "当前用户不存在";
    public const RecordNotExist = "当前记录不存在";

}
