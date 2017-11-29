<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/18
 * Time: 12:03
 */

namespace Admin\Model;


use Think\Model;

class PayrecordsModel extends Model
{
    /**
     * 统计今日收入报名费用合计
     * @return mixed
     */
    public function sumTotalFeeToday() {
        $s_time = date('Y-m-d',time()) . ' 00:00:00';
        $e_time = date('Y-m-d',time()) . ' 23:59:59';
        $condition['gmt_create'] = array('BETWEEN',array($s_time,$e_time));
        return $this->where($condition)->sum('total_fee');
    }
}