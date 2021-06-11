<?php
/*
เราสามารถกำหนดเวลาให้ ตัวแปร SESSION หมดอายุได้ ด้วย ฟังก์ชัน
ini_set(session.gc_maxlifetime, 1800);
1800 คือจำนวนวินาทีของตัวแปร SESSION ว่าต้องการ
ให้ตัวแปร SESSION นั้นอยู่ได้นานแค่ไหน
หาก ฟังก์ชันข้างต้นไม่สามารถทำงานได้ เราสามารถ
สร้างฟังก์ชันไว้ใช้งานเองแบบง่ายๆ ได้ ดังนี้
*/
function setSessionTime($_timeSecond){
 if(!isset($_SESSION['ses_time_life'])){
  $_SESSION['ses_time_life']=time();
 }
 if(isset($_SESSION['ses_time_life']) && time()-$_SESSION['ses_time_life']>$_timeSecond){
  if(count($_SESSION)>0){
   foreach($_SESSION as $key=>$value){
    unset($$key);
    unset($_SESSION[$key]);
   }
  }
 }
}
// การใช้งาน
setSessionTime(10);
// 10 คือจำนวนวินาทีที่ต้องการให้ตัวแปร SESSION หมดอายุ
// สามารถกำหนดเป็น 30*60
// หมายถึงกำหนดให้ตัวแปร SESSION หมดอายุภายใน 30 นาที
// เช่น  setSessionTime(30*60);
// ฟังก์ชันนี้สามารถนำไปใช้ในการกำหนดเวลาว่าให้ user ต้องทำการล็อกอิน
// ใหม่ทุกๆ กี่นาทีหรือกี่วินาที หรือกี่ชั่วโมงก็ได้
?>