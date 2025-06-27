<?php
/**
 * Created by OrangBus
 * User email: orangbus40400@gmail.com
 * website: orangbus.cn
 * blog: doc.orangbus.cn
 * github: github.com/orangbus
 */

namespace App\Utils;

use App\Exceptions\BusinessException;

class AssertUtils
{
    /**
     * 判断条件是否成立
     * @param $result
     * @param $msg
     * @return void
     * @throws BusinessException
     */
    public static function isTrue(bool $result, string $msg = "error", $code = 202)
    {
        if ($result) {
            throw new BusinessException($msg, $code);
        }
    }

    /**
     * 判断条件是否成立
     * @param $result
     * @param $msg
     * @return void
     * @throws BusinessException
     */
    public static function isEmpty($result, string $msg = "error", $code = 202)
    {
        if (empty($result)) {
            throw new BusinessException($msg, $code);
        }
    }

    public static function isNull($result, string $msg = "error", $code = 202)
    {
        if (is_null($result)) {
            throw new BusinessException($msg, $code);
        }
    }

    public static function isNotNull($result, string $msg = "error", $code = 202)
    {
        if (!is_null($result)) {
            throw new BusinessException($msg, $code);
        }
    }
}
