<?php

use Yaf\Controller_Abstract;

class ErrorController extends Controller_Abstract
{
    public function errorAction($exception)
    {
//		$this->getView()->assign("exception", $exception);
        return json(['code' => 500, 'msg' => $exception->getMessage()]);
    }
}
