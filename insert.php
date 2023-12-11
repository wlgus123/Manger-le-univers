<?php
include('./db_conn.php');

$name = $_POST['u_id'];
$nickname = $_POST['u_nickname'];
$id = $_POST['u_id'];
$pass = $_POST['u_pass'];
$pass_chk = $_POST['u_pass_chk'];
$gender = $_POST['u_gender'];
$email = $_POST['u_email'];

$sql = "INSERT INTO restaurant_user(name, nickname, id, pass, gender, email) values('$name', '$nickname', '$id', '$pass', '$gender', '$email')";

if ($pass == $pass_chk) {
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('회원가입을 완료하였습니다.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.html'>";
    } else {
        echo $sql . "<br>" . mysqli_error($conn);  // 에러 출력
    }
} else {
    echo "<script>alert('비밀번호가 틀렸습니다.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=joinus.html'>";
}
mysqli_close($conn);
?>