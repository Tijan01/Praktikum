<?php
session_start();
require 'connect.php';

if(isset($_POST['delete_praktikum112']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['delete_praktikum112']);

    $query = "DELETE FROM praktikum112 WHERE id='$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Berhasil di Hapus";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Tidak Berhasil di Hapus";
        header("Location: index.php");
        exit(0);
    }
}



if(isset($_POST['save_data']))
{
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address= mysqli_real_escape_string($con, $_POST['address']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    $query = "INSERT INTO praktikum112 (nama,email,address,gender,position,status) VALUES ('$nama','$email','$address','$gender','$position','$status')";
    

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Berhasil diInput";
        header("Location: karyawan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Tidak Berhasil di Input";
        header("Location: karyawan.php");
        exit(0);
    }
}

if(isset($_POST['update_employee']))
{
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);

    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address= mysqli_real_escape_string($con, $_POST['address']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $status = mysqli_real_escape_string($con, $_POST['status']);


    $query = " UPDATE praktikum112 SET nama = '$nama', email ='$email'  ,address = '$address' ,gender = '$gender',position = '$position', status = '$status' WHERE id = '$employee_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Berhasil di Perbaharui";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Tidak Berhasil di Perbaharui";
        header("Location: index.php");
        exit(0);
    }

}


?>