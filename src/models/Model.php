<?php
// namespace spl2024\models;

abstract class Model
{
    const CODE = [
        'urole'=>[1=>'学生', 2=>'教員', 9=>'管理者'],
    ];

    protected static $users = [
        ['uid'=>'admin', 'uname'=>'管理者',    'upass'=>'5678', 'urole'=>9],
        ['uid'=>'staff', 'uname'=>'教員',      'upass'=>'3456', 'urole'=>2],
        ['uid'=>'s0001', 'uname'=>'斎藤 唯人', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0002', 'uname'=>'谷口 志穂', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0003', 'uname'=>'吉村 琉翔', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0004', 'uname'=>'永井 涼平', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0005', 'uname'=>'内田 真之介', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0006', 'uname'=>'村上 まゆみ', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0007', 'uname'=>'古川 凛太朗', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0008', 'uname'=>'安田 遙斗', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0009', 'uname'=>'内田 結奈', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0010', 'uname'=>'片山 玲音', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0011', 'uname'=>'川口 耕平', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0012', 'uname'=>'伊藤 亮平', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0013', 'uname'=>'菊池 英寿', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0014', 'uname'=>'横田 駿太', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0015', 'uname'=>'増田 隼翔', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0016', 'uname'=>'今井 隆一', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0017', 'uname'=>'濱田 陽斗', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0018', 'uname'=>'阿部 絢', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0019', 'uname'=>'柴田 智貴', 'upass'=>'1234', 'urole'=>1],
        ['uid'=>'s0020', 'uname'=>'望月 陽菜子', 'upass'=>'1234', 'urole'=>1],
    ];
}
