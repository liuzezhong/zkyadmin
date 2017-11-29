<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/14
 * Time: 15:51
 */

namespace Admin\Controller;


use Think\Exception;

class MatchController extends BaseController
{
    /**
     * 赛事列表页面
     */
    public function index() {
        try {
            // 获取所有赛事信息
            $matchs = D('Match')->listAllMatchRecords();

            if($matchs) {
                foreach ($matchs as $key => $value) {
                    // 查找类别信息
                    if($value['event_id']) {
                        $event = D('Event')->getEventByID($value['event_id']);
                        if($event) {
                            $matchs[$key]['event_name'] = $event['name'];
                        }else {
                            $matchs[$key]['event_name'] = '其它';
                        }
                    }
                    if($value['user_id']) {
                        $user =  D('Admin')->getAdminByID($value['user_id']);
                        if($user) {
                            $matchs[$key]['user_name'] = $user['username'];
                        }else {
                            $matchs[$key]['user_name'] = '管理员';
                        }
                    }
                }
            }

            $this->assign(array(
                'matchs' => $matchs,
            ));
        } catch (Exception $exception) {
            throw_exception($exception->getMessage());
        }
        $this->display();
    }

    /**
     * 赛事发布页面
     */
    public function create() {
        try {
            // 获取所有运动类别
            $events = D('Event')->getAllEnrols();
        }catch (Exception $exception ){
            throw_exception($exception->getMessage());
        }
        $this->assign(array(
            'events' => $events,
        ));
        $this->display();
    }

    /**
     * 修改赛事状态
     */
    public function changeStatus() {
        // 获取post信息
        $match_id = I('post.id',0,'intval');
        $is_finish = I('post.status',0,'intval');
        if(!$match_id) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '赛事ID不存在',
            ));
        }
        try {
            // 数据库修改信息
            $finishMatch = D('Match')->updateMatchByID($match_id,array('is_finish' => $is_finish,'gmt_modified' => date('Y-m-d H:i:s',time())));
            // 返回结果
            if(!$finishMatch) {
                $this->ajaxReturn(array(
                    'status' => 0,
                    'message' => '状态修改失败',
                ));
            }
            $this->ajaxReturn(array(
                'status' => 1,
                'message' => '状态修改成功',
            ));
        }catch (Exception $exception) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => $exception->getMessage(),
            ));
        }

    }

    /**
     * 删除赛事信息
     */
    public function deleteMatch() {
        $match_id = I('post.id',0,'intval');
        if(!$match_id) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '赛事ID不存在',
            ));
        }
        try {
            // 数据库修改信息
            $finishMatch = D('Match')->updateMatchByID($match_id,array('is_finish' => -1,'gmt_modified' => date('Y-m-d H:i:s',time())));
            // 返回结果
            if(!$finishMatch) {
                $this->ajaxReturn(array(
                    'status' => 0,
                    'message' => '删除失败',
                ));
            }

            // 删除比赛项目信息
            $matchCategory = D('Category')->updateCategoryByMatchID($match_id,array('status' => -1,'gmt_modified' => date('Y-m-d H:i:s',time())));
            // 删除图片信息
            $matchImage = D('Image')->updateImageByMatchID($match_id,array('status' => -1,'gmt_modified' => date('Y-m-d H:i:s',time())));
            $this->ajaxReturn(array(
                'status' => 1,
                'message' => '删除成功',
            ));
        }catch (Exception $exception) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => $exception->getMessage(),
            ));
        }
    }

    /**
     * 检查赛事创建信息
     */
    public function createCheck() {
        $match_title = I('post.match_title','','trim,string');
        $event_id = I('post.event_id',0,'intval');
        $sponsor = I('post.sponsor','','trim,string');
        $undertake = I('post.undertake','','trim,string');
        $leader = I('post.leader','','trim,string');
        $leader_tel = I('post.leader_tel','','trim,string');
        $headcount = I('post.headcount',0,'intval');
        $register_max = I('post.register_max',0,'intval');
        $match_time = I('post.match_time','','');
        $enrol_time = I('post.enrol_time','','');
        $match_detail = I('post.match_detail','','trim,string');
        $address = I('post.address','','trim,string');
        $category = I('post.category','','trim,string');
        $valArr = I('post.valArr');

        if(!$match_title) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事名称',
            ));
        }
        if($event_id == 0) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请选择赛事类型',
            ));
        }
        if(!$sponsor) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事主办方名称',
            ));
        }
        if(!$undertake) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事承办方名称',
            ));
        }
        if(!$leader) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事负责人姓名',
            ));
        }
        if(!$leader_tel) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事负责人手机号码',
            ));
        }
        if($headcount == 0) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入最大参赛人数',
            ));
        }
        if(!$match_time) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入比赛开始截止时间',
            ));
        }
        if(!$enrol_time) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入报名开始截止时间',
            ));
        }
        if(!$match_detail) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入详细的赛事规程',
            ));
        }
        if(!$address) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入比赛地址',
            ));
        }
        if(!$category) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入比赛项目及报名费用',
            ));
        }
        if(!$valArr) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入至少上传一张封面图片',
            ));
        }

        // 将2017-11-17 12:30:00 至 2017-11-25 15:30:20
        // 分解为
        // 2017-11-17 12:30:00
        // 2017-11-25 15:30:20
        $enrol_stime = substr($enrol_time,0,19);
        $enrol_etime = substr($enrol_time,0,19);
        $match_stime = substr($match_time,0,19);
        $match_etime = substr($match_time,24,19);

        // 将'男女混双-10-0,男子单打-5-1,女子单打-0-1,特殊人群-20-0'字符串转为以逗号分隔的数组
        // array(0=>'男女混双-10-0',1=>'男子单打-5-1',2=>'女子单打-0-1')
        $categoryArray = explode(",",$category);
        foreach($categoryArray as $key => $item) {
            // 将'男女混双-10-0'
            // 转化为
            // array(0=>'男女混双',1=>'10',2=>'0')
            $detail = explode("-",$item);
            $newCategory[] = $detail;
        }

        // 修改
        foreach ($valArr as $key => $item) {
            $valArr[$key] = 'http://' . $_SERVER['HTTP_HOST'] . '/Uploads' . $item;
        }

        $matchData = array(
            'match_title' => $match_title,
            'event_id' => $event_id,
            'sponsor' => $sponsor,
            'undertake' => $undertake,
            'leader' => $leader,
            'leader_tel' => $leader_tel,
            'headcount' => $headcount,
            'register_max' => $register_max,
            'match_stime' => $match_stime,
            'match_etime' => $match_etime,
            'enrol_stime' => $enrol_stime,
            'enrol_etime' => $enrol_etime,
            'match_detail' => $match_detail,
            'address' => $address,
            'match_kb' => 100,
            'is_finish' => 0,
            'user_id' => $_SESSION['adminUser']['user_id'],
            'gmt_create' => date('Y-m-d H:i:s',time()),
        );

        try{
            // 写入赛事信息
            $match_id = D('Match')->addMatch($matchData);
            if(!$match_id) {
                $this->ajaxReturn(array(
                    'status' => 0,
                    'message' => '赛事信息创建失败',
                ));
            }

            // 写入赛事项目信息
            foreach ($newCategory as $key => $value) {
                // 费用
                if($value[1]) {
                    $money = $value[1];
                }else {
                    $money = 0;
                }
                //类型，个人报名，还是团队报名
                if($value[2]) {
                    $type = $value[2];
                }else {
                    $type = 0;
                }

                $categoryData = array(
                    'match_id' => $match_id,
                    'category_name' => $value[0],
                    'money' => $money,
                    'type' => $type,
                    'gmt_create' => date('Y-m-d H:i:s',time()),
                );
                $addCategory = D('Category')->addCategory($categoryData);
                if(!$addCategory) {
                    $this->ajaxReturn(array(
                        'status' => 0,
                        'message' => '赛事项目信息创建失败',
                    ));
                }
            }

            // 写入赛事图片信息
            foreach ($valArr as $key => $value) {
                $imageData = array(
                    'match_id' => $match_id,
                    'image_url' => $value,
                    'gmt_create' => date('Y-m-d H:i:s',time()),
                    'is_status' => 1,
                );
                $addImage = D('Image')->addImage($imageData);
                if(!$addImage) {
                    $this->ajaxReturn(array(
                        'status' => 0,
                        'message' => '赛事图片信息创建失败',
                    ));
                }
            }
            $this->ajaxReturn(array(
                'status' => 1,
                'message' => '创建成功',
            ));
        }catch (Exception $exception) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => $exception->getMessage(),
            ));
        }
        $this->ajaxReturn($matchData);
    }

    /**
     * 编辑赛事信息
     */
    public function edit() {

        $match_id = I('get.match_id',0,'intval');
        if($match_id) {
            try {
                // 获取赛事信息;
                $match = D('Match')->getMatchByID($match_id);
                $match['match_time'] = $match['match_stime'] . ' 至 ' .$match['match_etime'];
                $match['enrol_time'] = $match['enrol_stime'] . ' 至 ' .$match['enrol_etime'];

                // 获取赛事项目
                $categorys = D('Category')->listCategoryBYMatchID($match_id);
                $category = '';
                foreach ($categorys as $key => $value) {
                    $category = $category . $value['category_name'] . '-' . $value['money'] . '-' . $value['type'] . ',';
                }
                $match['category'] = $category;

                // 获取所有运动类别
                $events = D('Event')->getAllEnrols();
                foreach ($events as $key => $value) {
                    if($value['event_id'] == $match['event_id']) {
                        $events[$key]['selected'] = 1;
                    }else {
                        $events[$key]['selected'] = 0;
                    }

                }
            }catch (Exception $exception) {
                throw_exception($exception->getMessage());
            }
        }
        $this->assign(array(
            'match' => $match,
            'events' => $events,
        ));
        $this->display();
    }

    public function editCheck() {
        $match_id = I('post.match_id',0,'intval');
        $match_title = I('post.match_title','','trim,string');
        $event_id = I('post.event_id',0,'intval');
        $sponsor = I('post.sponsor','','trim,string');
        $undertake = I('post.undertake','','trim,string');
        $leader = I('post.leader','','trim,string');
        $leader_tel = I('post.leader_tel','','trim,string');
        $headcount = I('post.headcount',0,'intval');
        $register_max = I('post.register_max',0,'intval');
        $match_time = I('post.match_time','','');
        $enrol_time = I('post.enrol_time','','');
        $match_detail = I('post.match_detail','','trim,string');
        $address = I('post.address','','trim,string');
        $category = I('post.category','','trim,string');

        if(!$match_id) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '赛事ID不存在',
            ));
        }
        if(!$match_title) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事名称',
            ));
        }
        if($event_id == 0) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请选择赛事类型',
            ));
        }
        if(!$sponsor) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事主办方名称',
            ));
        }
        if(!$undertake) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事承办方名称',
            ));
        }
        if(!$leader) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事负责人姓名',
            ));
        }
        if(!$leader_tel) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入赛事负责人手机号码',
            ));
        }
        if($headcount == 0) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入最大参赛人数',
            ));
        }
        if(!$match_time) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入比赛开始截止时间',
            ));
        }
        if(!$enrol_time) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入报名开始截止时间',
            ));
        }
        if(!$match_detail) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入详细的赛事规程',
            ));
        }
        if(!$address) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入比赛地址',
            ));
        }
        if(!$category) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '请输入比赛项目及报名费用',
            ));
        }

        // 将2017-11-17 12:30:00 至 2017-11-25 15:30:20
        // 分解为
        // 2017-11-17 12:30:00
        // 2017-11-25 15:30:20
        $enrol_stime = substr($enrol_time,0,19);
        $enrol_etime = substr($enrol_time,0,19);
        $match_stime = substr($match_time,0,19);
        $match_etime = substr($match_time,24,19);

        // 将'男女混双-10-0,男子单打-5-1,女子单打-0-1,特殊人群-20-0'字符串转为以逗号分隔的数组
        // array(0=>'男女混双-10-0',1=>'男子单打-5-1',2=>'女子单打-0-1')
        $categoryArray = explode(",",$category);
        foreach($categoryArray as $key => $item) {
            // 将'男女混双-10-0'
            // 转化为
            // array(0=>'男女混双',1=>'10',2=>'0')
            $detail = explode("-",$item);
            $newCategory[] = $detail;
        }

        $matchData = array(
            'match_title' => $match_title,
            'event_id' => $event_id,
            'sponsor' => $sponsor,
            'undertake' => $undertake,
            'leader' => $leader,
            'leader_tel' => $leader_tel,
            'headcount' => $headcount,
            'register_max' => $register_max,
            'match_stime' => $match_stime,
            'match_etime' => $match_etime,
            'enrol_stime' => $enrol_stime,
            'enrol_etime' => $enrol_etime,
            'match_detail' => $match_detail,
            'address' => $address,
            'match_kb' => 100,
            'is_finish' => 0,
            'user_id' => $_SESSION['adminUser']['user_id'],
            'gmt_modified' => date('Y-m-d H:i:s',time()),
        );

        try{
            // 写入赛事信息
            $updateMatch = D('Match')->updateMatchByID($match_id,$matchData);

            // 删除项目信息
            $deleteCate = D('Category')->deleteCategory($match_id);
            // 写入赛事项目信息
            foreach ($newCategory as $key => $value) {
                // 费用
                if($value[1]) {
                    $money = $value[1];
                }else {
                    $money = 0;
                }
                //类型，个人报名，还是团队报名
                if($value[2]) {
                    $type = $value[2];
                }else {
                    $type = 0;
                }

                $categoryData = array(
                    'match_id' => $match_id,
                    'category_name' => $value[0],
                    'money' => $money,
                    'type' => $type,
                    'gmt_create' => date('Y-m-d H:i:s',time()),
                );
                $addCategory = D('Category')->addCategory($categoryData);
                if(!$addCategory) {
                    $this->ajaxReturn(array(
                        'status' => 0,
                        'message' => '赛事项目信息创建失败',
                    ));
                }
            }

            $this->ajaxReturn(array(
                'status' => 1,
                'message' => '赛事信息修改成功',
            ));
        }catch (Exception $exception) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => $exception->getMessage(),
            ));
        }
        $this->ajaxReturn($matchData);
    }
}