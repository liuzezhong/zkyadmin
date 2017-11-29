<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/15
 * Time: 10:18
 */

namespace Admin\Model;


use Think\Model;

class EventModel extends Model
{
    /**
     * 功能：根据运动类别ID查找运动项目名称
     * @param int $event_id
     * @return mixed
     */
    public function getEventByID ($event_id = 0) {
        if($event_id == 0) {
            throw_exception('Weapp Model EventModel getEventName event_id is null');
        }
        $condition['event_id'] = $event_id;
        return $this->where($condition)->field('name')->find();
    }

    /**
     * 获取所有运动类别
     * @return mixed
     */
    public function getAllEnrols() {
        $condition['status'] = array('neq',1);
        return $this->where($condition)->select();
    }
}