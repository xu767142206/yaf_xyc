<?php

use Yaf\Request_Abstract;
use Yaf\Response_Abstract;
use Yaf\Plugin_Abstract;

class SamplePlugin extends Plugin_Abstract
{

    public function routerStartup(Request_Abstract $request, Response_Abstract $response)
    {

    }

    public function routerShutdown(Request_Abstract $request, Response_Abstract $response)
    {
        if ($request->getModuleName() == "Api" && $request->getControllerName() != "Login") {
            if (($auth = $request->getServer('HTTP_AUTHORIZATION')) != null) {
                if ($user = JwtEncrypt::decode($auth)) {
                    $request->setParam('userInfo', $user);
                    return 0;
                }
            }
            return json(['code' => 401, 'msg' => '无权限'], 401);
        }
    }

    public function dispatchLoopStartup(Request_Abstract $request, Response_Abstract $response)
    {

    }

    public function preDispatch(Request_Abstract $request, Response_Abstract $response)
    {

    }

    public function postDispatch(Request_Abstract $request, Response_Abstract $response)
    {

    }

    public function dispatchLoopShutdown(Request_Abstract $request, Response_Abstract $response)
    {

    }
}
