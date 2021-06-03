<?php
function checkEmpty($name,$password) {
    if(empty($name)) {
        echo "ユーザー名が未入力です。";
    } elseif(empty($password)) {
        echo "パスワードが未入力です。";
    }
}
function loginCheck() {
    session_start();
    if(empty($_SESSION['user_id']) || empty($_SESSION['user_name'])) {
        $errorMsg = 'ログインしてください。';
        header("Location: login.php?errorMsg=".$errorMsg);
    }
}
?>