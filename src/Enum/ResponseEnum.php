<?php

namespace VendorName\Skeleton\Enum;

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
}
