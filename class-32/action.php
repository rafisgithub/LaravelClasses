<?php
require_once 'vendor\autoload.php';
use App\classes\Home;
use App\classes\Student;
if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include 'pages\home.php';
    }
}else if($_POST){
    if($_POST['submit']){
        $student=new Student($_POST);
       $message= $student->newStudent();
//       $studentInfos=$student->getAllStudentInfo();
//        include "pages\student-list.php";

    }
}
?>