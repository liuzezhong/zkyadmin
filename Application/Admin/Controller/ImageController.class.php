<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/11/16
 * Time: 15:39
 */

namespace Admin\Controller;


class ImageController extends BaseController
{
    public function ajaxUploadImage() {
        $res = D("UploadImage")->imagesUpload();
        if($res===false) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '图片上传失败',
                'res' => $res,
            ));
        }else{
            $this->ajaxReturn(array(
                'status' => 1,
                'message' => '图片上传成功',
                'res' => $res,
            ));
        }
    }
}