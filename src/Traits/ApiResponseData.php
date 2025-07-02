<?php

/**
 * Created by OragBus
 * User email: orangbus40400@gmail.com
 * website: orangbus.cn
 * blog: doc.orangbus.cn
 * github: github.com/orangbus
 */

namespace VendorName\Skeleton\Traits;

use VendorName\Skeleton\Enum\ResponseEnum;

trait ApiResponseData
{
    /**
     * 成功返回消息
     *
     * @param  array  $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function success(string $msg = 'ok', $data = [], int $code = ResponseEnum::SuccessCode)
    {
        if (! empty($data)) {
            return response()->json(['code' => $code, 'data' => $data, 'msg' => $msg]);
        }

        return response()->json(['code' => $code, 'msg' => $msg]);
    }

    /**
     * 失败返回消息
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function error(string $msg = '请求错误', int $code = ResponseEnum::ErrorCode)
    {
        return response()->json(['code' => $code, 'msg' => $msg]);
    }

    /**
     * 数据返回
     *
     * @param  array  $data
     * @param  string  $count
     * @return \Illuminate\Http\JsonResponse
     */
    public function resData($data = [], $total = '', string $msg = 'success', int $code = ResponseEnum::SuccessCode)
    {
        if (empty($total)) {
            return response()->json(['code' => $code, 'msg' => $msg, 'data' => $data]);
        }

        return response()->json(['code' => $code, 'data' => $data, 'total' => $total, 'msg' => $msg]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function successData($data, string $msg = 'success', int $code = ResponseEnum::SuccessCode)
    {
        return response()->json(['code' => $code, 'data' => $data, 'msg' => $msg]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function addSuccess(string $msg = '添加成功', array $data = [], int $code = ResponseEnum::SuccessCode)
    {
        if ($data) {
            return response()->json(['code' => $code, 'data' => $data, 'msg' => $msg]);
        }

        return response()->json(['code' => $code, 'msg' => $msg]);
    }

    /**
     * @param  array  $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateSuccess(string $msg = '修改成功', $data = [], int $code = ResponseEnum::SuccessCode)
    {
        if ($data) {
            return response()->json(['code' => $code, 'data' => $data, 'msg' => $msg]);
        }

        return response()->json(['code' => $code, 'msg' => $msg]);
    }

    /**
     * @param  array  $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSuccess(string $msg = '删除成功', $data = [], int $code = ResponseEnum::SuccessCode)
    {
        if ($data) {
            return response()->json(['code' => $code, 'data' => $data, 'msg' => $msg]);
        }

        return response()->json(['code' => $code, 'msg' => $msg]);
    }
}
