<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/15
 * Time: 13:55
 */

namespace Admin\Model;


use Think\Model;

class WxuserModel extends Model
{
    /**
     * 功能：根据用户ID查找用户信息
     * @param int $user_id
     * @return mixed
     */
    public function getWxuserByID($user_id = 0) {
        if(!$user_id) {
            throw_exception('Admin Model WxuserModel getWxuserByID user_id is null');
        }
        $condition['user_id'] = $user_id;
        return $this->where($condition)->find();
    }

    /**
     * 统计小程序用户数量
     * @return mixed
     */
    public function countWxuser() {
        $condition['is_status'] = array('eq',1);
        return $this->where($condition)->count();
    }
}