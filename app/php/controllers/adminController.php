<?php

/**
 * Created by PhpStorm.
 * User: Yxm
 * Date: 2017/5/16
 * Time: 23:44
 */
class adminController extends \core\lib\BaseController{
    public function index(){
        $adminService = new app\php\service\AdminService();
        $listUserInfo = $adminService->listUserInfo();
        $index = 1;
        $currentLv = 0;
        foreach ($listUserInfo as $key){
            if($currentLv != $key['lv']){
                $currentLv = $key['lv'];
                out('LV:'.$currentLv);
                $index = 1;
            }
            out($index++.$key['real_name']);
        }
    }


}