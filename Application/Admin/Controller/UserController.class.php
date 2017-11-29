<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/14
 * Time: 15:57
 */

namespace Admin\Controller;


class UserController extends BaseController
{
    /**
     * 微信用户
     */
    public function wxuser() {
        $this->display();
    }

    /**
     * 签到用户页面
     */
    public function scanuser() {
        $this->display();
    }

    /**
     * 后台用户页面
     */
    public function adminuser() {
        $this->display();
    }
}