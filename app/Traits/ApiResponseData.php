<?php
/**
 * Created by OragBus
 * User email: orangbus40400@gmail.com
 * website: orangbus.cn
 * blog: doc.orangbus.cn
 * github: github.com/orangbus
 */
namespace App\Traits;

use App\Enum\ResponseEnum;

trait ApiResponseData{
    /**
     * 成功返回消息
     * @param string $msg
     * @param array $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function success(string $msg="ok",$data=[],$code=ResponseEnum::SuccessCode){
        if (!empty($data)) return response()->json(["code"=>$code,"data"=>$data,"msg"=>$msg]);
        return response()->json(["code"=>$code,"msg"=>$msg]);
    }
    /**
     * 失败返回消息
     * @param string $msg
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function error(string $msg="请求错误",$code=ResponseEnum::ErrorCode){
        return response()->json(["code"=>$code,"msg"=>$msg]);
    }

    /**
     * 数据返回
     * @param array $data
     * @param string $count
     * @param string $msg
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function resData($data=[],$total = '',$msg="success",$code=ResponseEnum::SuccessCode){
        if (empty($total)) return response()->json(["code"=>$code,"msg"=>$msg,"data"=>$data]);
        return response()->json(["code"=>$code,"data"=>$data,"total"=>$total,"msg"=>$msg]);
    }

    /**
     * @param $data
     * @param string $msg
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successData($data,$msg="success",$code=ResponseEnum::SuccessCode){
        return response()->json(["code"=>$code,"data"=>$data,"msg"=>$msg]);
    }

    /**
     * @param string $msg
     * @param array $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function addSuccess($msg="添加成功",$data=[],$code=ResponseEnum::SuccessCode){
        if ($data)return response()->json(["code"=>$code,"data"=>$data,"msg"=>$msg]);
        return response()->json(["code"=>$code,"msg"=>$msg]);
    }

    /**
     * @param string $msg
     * @param array $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateSuccess($msg="修改成功",$data=[],$code=ResponseEnum::SuccessCode)
    {
        if ($data)return response()->json(["code"=>$code,"data"=>$data,"msg"=>$msg]);
        return response()->json(["code"=>$code,"msg"=>$msg]);
    }

    /**
     * @param string $msg
     * @param array $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSuccess($msg="删除成功",$data=[],$code=ResponseEnum::SuccessCode)
    {
        if ($data)return response()->json(["code"=>$code,"data"=>$data,"msg"=>$msg]);
        return response()->json(["code"=>$code,"msg"=>$msg]);
    }

}
