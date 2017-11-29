<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/13
 * Time: 15:48
 */

namespace Admin\Controller;


use Think\Controller;

class BaseController extends Controller
{
    /**
     * 构造方法
     * CommonController constructor.
     */
    public function __construct() {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct();
        $this->_init();  //调用初始化方法
    }
    /**
     * 初始化
     * @return
     */
    private function _init() {
        //1.1 如果已经登录
        $isLogin = $this->isLogin();
        if($isLogin) {
            $user = D('Admin')->getAdminByID($_SESSION['adminUser']['user_id']);
            if(!$user) {
                //1.2 跳转到登录页面
                redirect(U('admin/login/index'));
            }
        }
        if(!$isLogin) {
            //1.2 跳转到登录页面
            redirect(U('admin/login/index'));
        }
    }
    /**
     * 获取登录用户信息
     * @return array
     */
    public function getLoginUser() {
        return session("adminUser");
    }
    /**
     * 判定是否登录
     * @return boolean
     */
    public function isLogin() {
        $user = $this->getLoginUser();
        if($user && is_array($user)) {
            return true;
        }
        return false;
    }
}