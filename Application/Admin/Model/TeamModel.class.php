<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/15
 * Time: 13:56
 */

namespace Admin\Model;


use Think\Model;

class TeamModel extends Model
{
    /**
     * 功能：根据团队ID获取团队信息
     * @param int $team_id
     * @return mixed
     */
    public function getTeamByID($team_id = 0) {
        if(!$team_id) {
            throw_exception('Weapp Model TeamModel getTeamByID team_id is null');
        }
        $condition['team_id'] = $team_id;
        return $this->where($condition)->find();
    }
}