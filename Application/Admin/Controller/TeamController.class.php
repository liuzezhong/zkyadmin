<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/14
 * Time: 15:55
 */

namespace Admin\Controller;


class TeamController extends BaseController
{
    /**
     * 团队列表页面
     */
    public function index() {
        $this->display();
    }

    /**
     * 创建团队
     */
    public function create() {
        $this->display();
    }
}