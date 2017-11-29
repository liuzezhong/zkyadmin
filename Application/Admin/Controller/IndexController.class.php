<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/14
 * Time: 14:52
 */

namespace Admin\Controller;


use Think\Exception;

class IndexController extends BaseController
{
    /**
     * 后台首页
     */
    public function index() {
        try {
            //进行中的赛事数
            $matchCount = D('Match')->countUnfinishMatch();
            // 今日报名数
            $registerCount = D('Register')->countRegisterToday();
            // 平台用户总数
            $wxuserCount = D('Wxuser')->countWxuser();
            // 今日报名费用
            $moneyCount = D('Payrecords')->sumTotalFeeToday();
            if(!$moneyCount) {
                $moneyCount = '0.00';
            }
            $this->assign(array(
                'matchCount' => $matchCount,
                'registerCount' => $registerCount,
                'wxuserCount' => $wxuserCount,
                'moneyCount' => $moneyCount,
            ));
        }catch (Exception $exception) {
            throw_exception($exception->getMessage());
        }
        $this->display();
    }
}