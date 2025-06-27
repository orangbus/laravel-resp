<?php

namespace App\Enum;

enum ResponseEnum
{
    // 返回成功状态码
    public const SuccessCode=200;

    // 返回失败错误状态码
    public const ErrorCode=202;

    // 默认返回成功消息提示
    public const SuccessMessage="ok";

    //默认失败返回消息提示
    public const ErrorMessage="error";

    // 保存成功提示
    public const SaveMessage="保存成功！";

    // 删除成功提示
    public const DeleteMessage="删除成功！";
}
