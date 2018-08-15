<?php
namespace Wubuze\Api\Facades;

use think\Facade;

/**
 * @author   Wu Buze <wubuze@gmail.com>
 * @link     https://github.com/wubuze/think-jwt
 */
class JWT extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Wubuze\Api\JWT\Factory';
    }

}