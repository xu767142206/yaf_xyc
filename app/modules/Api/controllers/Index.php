<?php


use Yaf\Controller_Abstract;
use Yaf\Dispatcher;

class IndexController extends Controller_Abstract
{
    public function indexAction()
    {

//        $db = MysqlDb::getDb();
//        $arr = $db->get('oil_city', 10); //contains an Array 10 users
        return json(['code' => 2, 'msg' => "请求不是post"]);
    }

    public function testAction()
    {
        $request = Dispatcher::getInstance()->getRequest();
        $user = $request->getParam('userInfo');
        return json(['code' => 2, 'msg' => $user]);
    }

}