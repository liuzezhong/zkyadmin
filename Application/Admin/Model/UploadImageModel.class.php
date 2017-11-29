<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/16
 * Time: 15:42
 */

namespace Admin\Model;


use Think\Model;

class UploadImageModel extends Model
{
    private $_uploadObj = '';
    const UPLOAD = 'Uploads';    //定义上传文件夹
    public function __construct() {
        $this->_uploadObj = new  \Think\Upload();
        $this->_uploadObj->rootPath = './'.self::UPLOAD.'/';
        $this->_uploadObj->subName = date(Y) . '/' . date(m) .'/' . date(d);
    }
    public function imageUpload() {
        $res = $this->_uploadObj->upload();
        if($res) {
            return '/' . self::UPLOAD . '/' . $res['file']['savepath'] . $res['file']['savename'];
        }else{
            return false;
        }
    }
    public function imagesUpload() {
        $res = $this->_uploadObj->upload();
        if($res) {
            return $res;
        }else{
            return false;
        }
    }
}