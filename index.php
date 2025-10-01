<?php
define("VIEW_DIR", "src/views/");
define("MODEL_DIR", "src/models/");

include(VIEW_DIR . "pg_header.php");
// URLパターン「?to=xxx&do=yyy」は「"xxx"に対して"yyy"という操作を行う」を
//  意味し"xxx_yyy.php"というファイルを読み込む 
$to = isset($_GET['to']) ? $_GET['to'] : 'usr';
$do = isset($_GET['do']) ? $_GET['do'] : "list";
include(VIEW_DIR . "{$to}_{$do}.php");

include(VIEW_DIR . "pg_footer.php");
