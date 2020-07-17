<?php

namespace App\Aspect;

use App\Controller\IndexController;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

/**
 * @Aspect
 */
class BaseAspect extends AbstractAspect
{

    public $classes = [
//        IndexController::class,
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        // 切面切入后，执行对应的方法会由此来负责
        // $proceedingJoinPoint 为连接点，通过该类的 process() 方法调用原方法并获得结果
        // 在调用前进行某些处理
        $result = $proceedingJoinPoint->process();
        // 在调用后进行某些处理
        return $result + 5;
    }
}