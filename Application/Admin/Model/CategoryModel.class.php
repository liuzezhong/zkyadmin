<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/15
 * Time: 13:53
 */

namespace Admin\Model;


use Think\Model;

class CategoryModel extends Model
{
    /**
     * 根据类目ID获取类目信息
     * @param int $category_id
     * @return mixed
     */
    public function getCategoryByID($category_id = 0) {
        if($category_id == 0) {
            throw_exception('Admin Model CategoryModel getCategoryOfMatch category_id is null');
        }
        $condition['category_id'] = $category_id;
        return $this->where($condition)->find();
    }

    /**
     * 新增项目信息
     * @param array $data
     * @return mixed
     */
    public function addCategory($data = array()) {
        if(!$data) {
            throw_exception('Admin Model CategoryModel addCategory data is null');
        }
        return $this->add($data);
    }

    /**
     * 根据赛事ID更新赛事信息
     * @param int $match_id
     * @param array $data
     * @return bool
     */
    public function updateCategoryByMatchID($match_id = 0,$data = array()) {
        if(!$match_id) {
            throw_exception('Admin Model CategoryModel updateCategoryByMatchID match_id is null');
        }
        if(!$data) {
            throw_exception('Admin Model CategoryModel updateCategoryByMatchID data is null');
        }
        $condition['match_id'] = $match_id;
        return $this->where($condition)->save($data);
    }

    /**
     * 根据赛事ID列出所有赛事项目信息
     * @param int $match_id
     * @return mixed
     */
    public function listCategoryBYMatchID($match_id = 0) {
        if(!$match_id) {
            throw_exception('Admin Model CategoryModel listCategoryBYMatchID match_id is null');
        }
        $condition['match_id'] = $match_id;
        return $this->where($condition)->select();
    }

    /**
     * 删除赛事信息
     * @param int $match_id
     * @return mixed
     */
    public function deleteCategory($match_id = 0) {
        if(!$match_id) {
            throw_exception('Admin Model CategoryModel deleteCategory match_id is null');
        }
        $condition['match_id'] = $match_id;
        return $this->where($condition)->delete();
    }
}