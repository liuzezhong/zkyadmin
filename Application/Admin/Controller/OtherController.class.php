<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/14
 * Time: 16:00
 */

namespace Admin\Controller;


class OtherController extends BaseController
{
    /**
     * 赛事类别管理页面
     */
    public function event() {
        $this->display();
    }

    /**
     * 比赛类目管理页面
     */
    public function category() {
        $this->display();
    }

    /**
     * 图片管理页面
     */
    public function image() {
        $this->display();
    }
}