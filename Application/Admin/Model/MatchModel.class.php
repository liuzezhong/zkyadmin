<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/15
 * Time: 10:03
 */

namespace Admin\Model;


use Think\Model;

class MatchModel extends Model
{
    /**
     * 获取所有赛事信息
     * @return mixed
     */
    public function listAllMatchRecords() {
        // 剔除已经删除的数据
        $condition['is_finish'] = array('neq',-1);
        return $this->where($condition)->order('gmt_create desc')->select();
    }

    /**
     * 根据比赛ID更新比赛信息
     * @param int $match_id
     * @param array $data
     * @return bool
     */
    public function updateMatchByID($match_id = 0, $data = array()) {
        if(!$match_id) {
            throw_exception('Admin Model MatchModel updateMatchByID match_id is null');
        }
        if(!$data) {
            throw_exception('Admin Model MatchModel updateMatchByID data is null');
        }
        $condition['match_id'] = $match_id;
        return $this->where($condition)->save($data);
    }

    /**
     * 根据赛事ID获取赛事信息
     * @param int $match_id
     * @return mixed
     */
    public function getMatchByID($match_id = 0) {
        if(!$match_id) {
            throw_exception('Admin Model MatchModel updateMatchByID match_id is null');
        }
        $condition['match_id'] = $match_id;
        return $this->where($condition)->find();
    }

    /**
     * 创建赛事信息
     * @param $data
     * @return mixed
     */
    public function addMatch($data) {
        if(!$data) {
            throw_exception('Admin Model MatchModel addMatch data is null');
        }
        return $this->add($data);
    }

    /**
     * 计算正在进行中赛事数
     * @return mixed
     */
    public function countUnfinishMatch() {
        $condition['is_finish'] = array('eq','0');
        return $this->where($condition)->count();
    }
}