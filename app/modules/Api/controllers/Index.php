<?php


use Yaf\Controller_Abstract;
use Yaf\Dispatcher;

class IndexController extends Controller_Abstract
{
    public function indexAction()
    {

        $db = MysqlDb::getDb();
        $arr = $db->get('ptcms_novelsearch_chapter_0', 100); //contains an Array 10 users
        return json(['code' => 2, 'msg' => $arr]);
    }

    public function testAction()
    {
        $request = Dispatcher::getInstance()->getRequest();
        $user = $request->getParam('userInfo');
        return json(['code' => 2, 'msg' => $user]);
    }

}