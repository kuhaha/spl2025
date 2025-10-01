<?php
require_once(MODEL_DIR . "User.php");

list($uid, $upass) = [$_POST['uid'], $_POST['upass']];
$user = (new User())->login($uid, $upass);

if ($user) {
    echo '<h3 class="text-success">ログイン成功！</h3>';
    print_r($user);
} else{
    echo '<h3 class="text-danger">ユーザIDかパスワードが間違いました！</h3>';
    print_r($_POST);
}
