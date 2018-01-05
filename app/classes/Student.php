<?php

namespace App\classes;


class Student
{
    public function putStudentInfo($data){
        $link=mysqli_connect('localhost','root','','maruf-71');
        $sql="INSERT INTO students(first_name,last_name,mobile_number,email_address,address)
              VALUES ('$data[first_name]','$data[last_name]','$data[mobile_number]',
              '$data[email_address]','$data[address]')";

        if(mysqli_query($link,$sql)){
            $massage="Data successfully save to database";
            return $massage;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }









    public function getStudentInfo(){
        $link=mysqli_connect('localhost','root','','maruf-71');
        $sql="SELECT * FROM students";

        if(mysqli_query($link,$sql)){
            $queryResult=mysqli_query($link,$sql);
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }
}