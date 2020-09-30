<?php

declare(strict_types=1);

namespace App\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 */
class ErrorCode extends AbstractConstants
{
    /**
     * @Message("Server Error！")
     */
    const SERVER_ERROR = 50000;

    /**
     * @Message("Token 已失效")
     */
    const TOKEN_INVALID = 40004;

    /**
     * @Message("越权操作")
     */
    const OPERATION_INVALID = 40001;

    /**
     * @Message("参数非法")
     */
    const PARAMS_INVALID = 10000;

    /**
     * @Message("图片验证失败")
     */
    const CAPTCHA_INVALID = 10001;

    /**
     * @Message("短信验证失败")
     */
    const SMS_INVALID = 10002;

    /**
     * @Message("用户不存在")
     */
    const USER_NOT_EXISTS = 11000;


}
