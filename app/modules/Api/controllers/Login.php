<?php


use Yaf\Controller_Abstract;
use Yaf\Dispatcher;

class LoginController extends Controller_Abstract
{

    public function loginAction()
    {
        $user = [
            'id' => 1
        ];
        $token = JwtEncrypt::encode($user,1);
//        $db = MysqlDb::getDb();
//        $arr = $db->get('oil_city', 10); //contains an Array 10 users
        return json(['code' => 2, 'msg' => $token]);
    }

}