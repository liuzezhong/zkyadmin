<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/15
 * Time: 13:57
 */

namespace Admin\Model;


use Think\Model;

class TeamuserModel extends Model
{
    /**
     * 功能：获取团队成员信息
     * @param int $team_id
     * @return mixed
     */
    public function listTeamUserByTeamID($team_id = 0) {
        if(!$team_id) {
            throw_exception('Weapp Model TeamuserModel getTeamUserByTeamID team_id is null');
        }
        $condition['team_id'] = $team_id;
        return $this->where($condition)->select();
    }
}