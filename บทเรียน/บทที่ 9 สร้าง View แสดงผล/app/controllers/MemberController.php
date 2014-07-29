<?php
class MemberController extends BaseController {
    public function indexAction(){ // ชื่อ Action
        return View::make('member/index'); // member ชื่อโฟล์เดอร์ และ index ชื่อไฟล์ index.blade.php
    }
 
}