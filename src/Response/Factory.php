<?php
namespace Wubuze\ThinkJwt\Response;

/**
 * @author   Wu Buze <wubuze@gmail.com>
 * @link     https://github.com/wubuze/think-jwt
 */


//暂时无用
class Factory{


    public function resSuccess($msg='', $dat=null)
    {
        return $this->resOutput(1, $msg, $dat);
    }


    public function resAlert($msg='', $dat=null)
    {
        return $this->resOutput(0, $msg, $dat);
    }


    public function resFail($msg='', $dat=null)
    {
        return $this->resOutput(-1, $msg, $dat);
    }


    protected function resOutput( $res, $msg='', $dat=null)
    {
        return $this->resOutputJson([
            'res' => $res,
            'msg' => $msg,
            'dat' => $dat
        ]);
    }

    protected function resOutputJson($data, $code=200)
    {
        return json($data, $code);
        //return response()->json($data, $code)->header('Content-Type', 'application/javascript');
    }

}