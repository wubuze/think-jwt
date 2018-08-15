<?php
namespace Wubuze\ThinkJwt\Http;


trait Response{


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


    protected function resSuccess($msg='', $dat=null)
    {
        return $this->resOutput(1, $msg, $dat);
    }


    protected function resAlert($msg='', $dat=null)
    {
        return $this->resOutput(0, $msg, $dat);
    }


    protected function resFail($msg='', $dat=null)
    {
        return $this->resOutput(-1, $msg, $dat);
    }

}