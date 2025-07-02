<?php
/**
 * Created by OrangBus
 * User email: orangbus40400@gmail.com
 * website: orangbus.cn
 * blog: doc.orangbus.cn
 * github: github.com/orangbus
 */

namespace VendorName\Skeleton\Enum;
enum MsgEnum:string
{
    case Success = "操作成功";
    case SaveSuccess = "保存成功";
    case SaveFail = "保存失败";
    case UpdateSuccess = "更新成功";
    case UpdateFail = "更新失败";
    case DeleteSuccess = "删除成功";
    case DeleteFail = "删除失败";
    case UserNotExist = "当前用户不存在";
    case RecordNotExist = "当前记录不存在";

}
