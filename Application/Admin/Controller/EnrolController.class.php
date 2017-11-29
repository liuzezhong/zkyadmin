<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/14
 * Time: 15:54
 */

namespace Admin\Controller;


use Think\Exception;

class EnrolController extends BaseController
{
    /**
     * 报名信息列表
     */
    public function index() {
        // 获取所有赛事信息
        try {
            // 获取所有赛事信息
            $matchs = D('Match')->listAllMatchRecords();
            foreach($matchs as $key => $value) {
                $matchs[$key]['selected'] = 0;
            }
            // 获取页面get参数比赛ID
            $match_id = I('get.match_id',0,'intval');
            // 如果存在get参数的情况
            if($match_id) {
                // 获取赛事信息
                $this_match = D('Match')->getMatchByID($match_id);
                foreach($matchs as $key => $value) {
                    if($value['match_id'] == $this_match['match_id']) {
                        $matchs[$key]['selected'] = 1;
                    }else {
                        $matchs[$key]['selected'] = 0;
                    }
                }
                // 获取报名信息
                $registers = D('Register')->getRegisterByMatchID($match_id);

                foreach ($registers as $key => $value) {
                    // 获取比赛项目
                    $category = D('Category')->getCategoryByID($value['category_id']);
                    $registers[$key]['category_name'] = $category['category_name'];
                    $registers[$key]['money'] = $category['money'];

                    // 获取用户信息
                    $user = D('Wxuser')->getWxuserByID($value['user_id']);
                    $registers[$key]['user'] = $user;

                    if($value['team_id'] != 0) {
                        // 团队报名,获取团队信息
                        $team = D('Team')->getTeamByID($value['team_id']);
                        $registers[$key]['team'] = $team;

                        // 获取团队用户信息
                        $teamuser = D('Teamuser')->listTeamUserByTeamID($team['team_id']);
                        $registers[$key]['teamuser'] = $teamuser;
                    }
                }
            }
        } catch (Exception $exception) {
            throw_exception($exception->getMessage());
        }

        if($registers) {
            // 筛选数据
            $enrols = array();
            $index = 0;
            foreach ($registers as $key => $value) {
                if($value['team_id'] == 0) {
                    //个人报名
                    $enrols[$index]['register_id'] = $value['register_id'];
                    $enrols[$index]['gmt_sign'] = $value['gmt_sign'];
                    $enrols[$index]['sign_qrcode'] = $value['sign_qrcode'];
                    $enrols[$index]['gmt_create'] = $value['gmt_create'];
                    $enrols[$index]['gmt_complete'] = $value['gmt_complete'];
                    $enrols[$index]['payrecords_id'] = $value['payrecords_id'];
                    $enrols[$index]['team_id'] = $value['team_id'];
                    $enrols[$index]['category_name'] = $value['category_name'];
                    $enrols[$index]['money'] = $value['money'];

                    $enrols[$index]['real_name'] = $value['user']['real_name'];
                    $enrols[$index]['real_sex'] = $value['user']['real_sex'];
                    $enrols[$index]['id_card'] = $value['user']['id_card'];
                    $enrols[$index]['phone_number'] = $value['user']['phone_number'];
                    $index++;
                }else {
                    // 团队报名
                    foreach ($value['teamuser'] as $m => $n) {
                        $enrols[$index]['register_id'] = $value['register_id'];
                        $enrols[$index]['gmt_sign'] = $value['gmt_sign'];
                        $enrols[$index]['sign_qrcode'] = $value['sign_qrcode'];
                        $enrols[$index]['gmt_create'] = $value['gmt_create'];
                        $enrols[$index]['gmt_complete'] = $value['gmt_complete'];
                        $enrols[$index]['payrecords_id'] = $value['payrecords_id'];
                        $enrols[$index]['team_id'] = $value['team_id'];
                        $enrols[$index]['category_name'] = $value['category_name'];
                        $enrols[$index]['money'] = $value['money'];

                        $enrols[$index]['team_name'] = $value['team']['team_name'];
                        $enrols[$index]['real_name'] = $n['real_name'];
                        $enrols[$index]['real_sex'] = $n['real_sex'];
                        $enrols[$index]['id_card'] = $n['id_card'];
                        $enrols[$index]['phone_number'] = $n['phone_number'];
                        $index++;

                    }
                }

            }
        }


        $this->assign(array(
            'matchs' => $matchs,
            'enrols' => $enrols,
            'this_match' => $this_match,
        ));
        $this->display();
    }


    // 导出表格信息
    public function export() {
        // 获取页面get参数比赛ID
        $match_id = I('get.match_id',0,'intval');
        // 如果存在get参数的情况
        if($match_id) {
            // 获取赛事信息
            $match = D('Match')->getMatchByID($match_id);

            // 获取报名信息
            $registers = D('Register')->getRegisterByMatchID($match_id);

            foreach ($registers as $key => $value) {
                // 获取比赛项目
                $category = D('Category')->getCategoryByID($value['category_id']);
                $registers[$key]['category_name'] = $category['category_name'];
                $registers[$key]['money'] = $category['money'];

                // 获取用户信息
                $user = D('Wxuser')->getWxuserByID($value['user_id']);
                $registers[$key]['user'] = $user;

                if($value['team_id'] != 0) {
                    // 团队报名,获取团队信息
                    $team = D('Team')->getTeamByID($value['team_id']);
                    $registers[$key]['team'] = $team;

                    // 获取团队用户信息
                    $teamuser = D('Teamuser')->listTeamUserByTeamID($team['team_id']);
                    $registers[$key]['teamuser'] = $teamuser;
                }
            }

            if($registers) {
                // 筛选数据
                $enrols = array();
                $index = 0;
                foreach ($registers as $key => $value) {
                    if($value['team_id'] == 0) {
                        //个人报名
                        $enrols[$index]['id'] = $index +1 ;
                        //参赛项目
                        $enrols[$index]['category_name'] = $value['category_name'];
                        //真实姓名
                        $enrols[$index]['real_name'] = $value['user']['real_name'];
                        // 真实性别
                        $enrols[$index]['real_sex'] = ($value['user']['real_sex'] = 0) ? '未知' : (($value['user']['real_sex'] = 1) ? '男' : '女') ;
                        // 身份证号码
                        $enrols[$index]['id_card'] = $value['user']['id_card'];
                        // 电话号码
                        $enrols[$index]['phone_number'] = $value['user']['phone_number'];
                        // 参赛方式
                        $enrols[$index]['team_name'] = '个人参赛';
                        // 参赛费用
                        $enrols[$index]['money'] = $value['money'].'元';
                        // 签到时间
                        if(!$value['gmt_sign']) {
                            $enrols[$index]['gmt_sign'] = '未签到';
                        }else {
                            $enrols[$index]['gmt_sign'] = $value['gmt_sign'];
                        }
                        // 报名时间
                        $enrols[$index]['gmt_create'] = $value['gmt_create'];
                        $index++;
                    }else {
                        // 团队报名
                        foreach ($value['teamuser'] as $m => $n) {
                            $enrols[$index]['id'] = $index +1 ;
                            //参赛项目
                            $enrols[$index]['category_name'] = $value['category_name'];
                            //真实姓名
                            $enrols[$index]['real_name'] = $n['real_name'];
                            // 真实性别
                            $enrols[$index]['real_sex'] = ($n['real_sex'] = 0) ? '未知' : (($n['real_sex'] = 1) ? '男' : '女') ;
                            // 身份证号码
                            $enrols[$index]['id_card'] = $n['id_card'];
                            // 电话号码
                            $enrols[$index]['phone_number'] = $n['phone_number'];
                            // 参赛方式
                            $enrols[$index]['team_name'] = $value['team']['team_name'] . '队';
                            // 参赛费用
                            $enrols[$index]['money'] = $value['money'].'元';
                            // 签到时间
                            if(!$value['gmt_sign']) {
                                $enrols[$index]['gmt_sign'] = '未签到';
                            }else {
                                $enrols[$index]['gmt_sign'] = $value['gmt_sign'];
                            }
                            // 报名时间
                            $enrols[$index]['gmt_create'] = $value['gmt_create'];
                            $index++;
                        }
                    }
                }
            }
        }
        $xlsName  = $match['match_title'];
        $xlsCell  = array(
            array('id','序号'),
            array('category_name','参赛项目'),
            array('real_name','真实姓名'),
            array('real_sex','真实性别'),
            array('id_card','身份证号码'),
            array('phone_number','电话号码'),
            array('team_name','参赛方式'),
            array('gmt_sign','签到时间'),
            array('gmt_create','报名时间'),
        );

        $xlsData = $enrols;
        $excel = new PhpexcelController();
        $excel->exportExcel($xlsName,$xlsCell,$xlsData);
    }

    /**
     * 删除报名记录
     */
    public function delete() {
        $register_id = I('post.id',0,'intval');
        if(!$register_id) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '报名ID不存在'
            ));
        }

        try {
            $deleteRegister = D('Register')->deleteRegister($register_id);
            if(!$deleteRegister) {
                $this->ajaxReturn(array(
                    'status' => 0,
                    'message' => '删除失败'
                ));
            }
            $this->ajaxReturn(array(
                'status' => 1,
                'message' => '删除成功'
            ));
        }catch (Exception $exception) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => $exception->getMessage(),
            ));
        }
    }
}