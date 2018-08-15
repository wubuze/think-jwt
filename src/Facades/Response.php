<?php
namespace Wubuze\ThinkJwt\Facades;

use think\Facade;

/**
 * @author   Wu Buze <wubuze@gmail.com>
 * @link     https://github.com/wubuze/think-jwt
 */

//暂时无用  测试Facades
class Response extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Wubuze\ThinkJwt\Response\Factory';
    }

}