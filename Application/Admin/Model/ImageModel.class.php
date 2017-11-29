<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/17
 * Time: 13:56
 */

namespace Admin\Model;


use Think\Model;

class ImageModel extends Model
{
    /**
     * 新增赛事图片信息
     * @param array $data
     * @return mixed
     */
    public function addImage($data = array()) {
        if(!$data) {
            throw_exception('Admin Model ImageModel addImage data is null');
        }
        return $this->add($data);
    }

    /**
     * 根据赛事ID更新图片信息
     * @param int $match_id
     * @param array $data
     * @return bool
     */
    public function updateImageByMatchID($match_id = 0,$data = array()) {
        if(!$match_id) {
            throw_exception('Admin Model ImageModel updateImageByMatchID match_id is null');
        }
        if(!$data) {
            throw_exception('Admin Model ImageModel updateImageByMatchID data is null');
        }
        $condition['match_id'] = $match_id;
        return $this->where($condition)->save($data);
    }
}