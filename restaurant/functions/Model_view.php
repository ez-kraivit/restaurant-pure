<?php
class Model_view
{ 
    // View
    public function Titles()
    {
        $Show = [
            "index" => "Restaurant | หน้าแรก",
            "login" => "Restaurant | เข้าสู่ระบบผู้ใช้งาน",
            "register" => "Restaurant | ลงทะเบียนผู้ใช้งานในระบบ",
            "order" => "Restaurant | ชำระรายการ",
            "book-pay" => "Restaurant | ชำระรายการ การจองโต๊ะร้านอาหาร",
            "order-detail" => "Restaurant | ตรวจสอบรายการ",
        ];
        return $Show;
    }

    
}
?>