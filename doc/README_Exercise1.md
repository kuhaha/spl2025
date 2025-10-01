## 1. 変数と文字列 

```php
<?php
# 文字列補間: 変数を使って文字列を補完する
    
$title = '複合AIシステム';
// $title変数を使って以下のように出力
// 研究分野:「複合AIシステム」

echo '研究分野:「', $title, '」', PHP_EOL; // echo文で複数文字列を出力
echo '研究分野:「'. $title. '」'. PHP_EOL; // echo文で繋いだ文字列を出力
echo "研究分野:「{$title}」".PHP_EOL; // echo文で変数を埋め込んで（ダブルクォート文字列）出力する
/*出力：
 研究分野:「複合AIシステム」
 研究分野:「複合AIシステム」
 研究分野:「複合AIシステム」
*/

# sprintf(), printf(): フォマードされた文字列の生成と出力
printf('研究分野:「%s」'. PHP_EOL, $title);
printf("研究分野:「%s」". PHP_EOL, $title);
/*出力：
 研究分野:「複合AIシステム」
 研究分野:「複合AIシステム」
*/

printf('研究分野:"%s"'. PHP_EOL, $title);
printf("研究分野:'%s'". PHP_EOL, $title);
/*出力例：
 研究分野:"複合AIシステム"
 研究分野:'複合AIシステム'
*/

# vprintf() : 配列を引数としてフォーマットされた文字列を出力
$people = [
	'name'=>'名前',
	'address' => '住所',
	'tel'=>'電話番号',
	'birthday'=>'誕生日',
];

// %s:　文字列(string)としてフォーマット
// %d: 十進制の整数(decimal)としてフォーマット, 
// %03d: 3桁の整数にして不足の桁数はゼロ「0」で足す
// %f: 小数(float)としてフォーマット, 
// %.3f: 小数点以下3桁の小数にして不足の桁数はゼロ「0」で足す
 
$pattern = "<th>%s</th><th>%s</th><th>%s</th><th>%s</th>". PHP_EOL;
$en_fields = array_keys($people); //配列のキーを配列にして受け取る 
$ja_fields = array_values($people); //配列の値を配列にして受け取る
vprintf($pattern, $en_fields);
vprintf($pattern, $ja_fields);
/*出力：
 <th>name</th><th>address</th><th>tel</th><th>birthday</th>
 <th>名前</th><th>住所</th><th>電話番号</th><th>誕生日</th>
*/

# implode(): 要素を繋いで配列を文字列にする
echo implode(', ', $en_fields), PHP_EOL;
echo implode(', ', $ja_fields), PHP_EOL;
/*出力：
 name, address, tel, birthday 
 名前, 住所, 電話番号, 誕生日
*/

# implode(): 要素を繋いで配列を文字列にする
echo '<th>',implode('</th><th>', $en_fields),'</th>', PHP_EOL;
echo '<th>',implode('</th><th>', $ja_fields),'</th>',PHP_EOL;
/*出力：
 <th>name</th><th>address</th><th>tel</th><th>birthday</th>
 <th>名前</th><th>住所</th><th>電話番号</th><th>誕生日</th>
*/

```

## 2. 配列

```php

# array()関数で配列初期化
$arr1 = array('理工学部','建築都市工学部','生命科学部',);//最後にコンマがついている
$arr2 = array('理工学部','建築都市工学部','生命科学部'); //最後にコンマがついてない
echo '$arr1 = '; 
print_r($arr1);
echo '$arr2 = ';
print_r($arr2);
/*出力：
$arr1 = Array
(
    [0] => 理工学部
    [1] => 建築都市工学部
    [2] => 生命科学部
)
$arr2 = Array
(
    [0] => 理工学部
    [1] => 建築都市工学部
    [2] => 生命科学部
)
*/

### []で配列初期化
$arr3 = ['理工学部','建築都市工学部','生命科学部',];
$arr4 = ['理工学部','建築都市工学部','生命科学部'];
echo '$arr3 = ';
print_r($arr3);
echo '$arr4 = ';
print_r($arr4);
/*出力：
$arr3 = Array
(
    [0] => 理工学部
    [1] => 建築都市工学部
    [2] => 生命科学部
)
$arr4 = Array
(
    [0] => 理工学部
    [1] => 建築都市工学部
    [2] => 生命科学部
)
*/

# 添え字が指定された場合
$arr5 = ['理工学部',2=>'建築都市工学部','生命科学部',];
$arr6 = ['理工学部',2=>'建築都市工学部','生命科学部'];
echo '$arr5 = ';
print_r($arr5);
echo '$arr6 = ';
print_r($arr6);
/*出力：
$arr5 = Array
(
    [0] => 理工学部
    [2] => 建築都市工学部
    [3] => 生命科学部
)
$arr6 = Array
(
    [0] => 理工学部
    [2] => 建築都市工学部
    [3] => 生命科学部
)
*/

### 要素の追加 
echo '代入による要素追加', PHP_EOL;
$arr4[] = 'データサイエンス学部';
print_r($arr4);
/*出力：
代入による要素追加
Array
(
    [0] => 理工学部
    [1] => 建築都市工学部
    [2] => 生命科学部
    [3] => データサイエンス学部
)
*/

array_push($arr4, '人工知能学部','人間学部');
echo 'array_push()：末尾から追加', PHP_EOL;
print_r($arr4);
/*出力：
array_push()：末尾から追加
Array
(
    [0] => 理工学部
    [1] => 建築都市工学部
    [2] => 生命科学部
    [3] => データサイエンス学部
    [4] => 人工知能学部
    [5] => 人間学部
)
*/

array_unshift($arr4, 'X学部');
echo 'array_unshift()：先頭から追加', PHP_EOL;
print_r($arr4);
/*出力：
array_unshift()：先頭から追加
Array
(
    [0] => X学部
    [1] => 理工学部
    [2] => 建築都市工学部
    [3] => 生命科学部
    [4] => データサイエンス学部
    [5] => 人工知能学部
    [6] => 人間学部
)
*/

### 要素の削除

unset($arr4[0]);
echo 'unset(): 特定の要素を削除', PHP_EOL;
print_r($arr4);
/*出力：
unset(): 特定の要素を削除
Array
(
    [1] => 理工学部
    [2] => 建築都市工学部
    [3] => 生命科学部
    [4] => データサイエンス学部
    [5] => 人工知能学部
    [6] => 人間学部
)
*/

array_pop($arr4);
echo 'array_pop(): 末尾から削除', PHP_EOL;
print_r($arr4);
/*出力：
array_pop(): 末尾から削除
Array
(
    [1] => 理工学部
    [2] => 建築都市工学部
    [3] => 生命科学部
    [4] => データサイエンス学部
    [5] => 人工知能学部
)
*/

array_shift($arr4);
echo 'array_shift(): 先頭から削除', PHP_EOL;
print_r($arr4);
/*出力：
array_shift(): 先頭から削除
Array
(
    [0] => 建築都市工学部
    [1] => 生命科学部
    [2] => データサイエンス学部
    [3] => 人工知能学部
)
*/
```

## 3.  組み込み関数

### 3.1. 文字列の関数

```php


$hobbies = "キャンプ,登山,読書,ゲーム";
$email = "k23gjk18@st.kyusan-u.ac.jp";

$array1 = explode(',', $hobbies);
print_r($array1);
/*出力例：
Array
(
    [0] => キャンプ
    [1] => 登山
    [2] => 読書
    [3] => ゲーム
)
*/

$array2 = explode('@', $email);
print_r($array2);
/*出力：
Array
(
    [0] => k23gjk18
    [1] => st.kyusan-u.ac.jp
)
*/

$array3 = explode('.', $array2[1]);
print_r($array3);
/*出力：
Array
(
    [0] => st
    [1] => kyusan-u
    [2] => ac
    [3] => jp
)
*/

echo "$email = '{$email}'", PHP_EOL;
echo '$emailの長さ：', strlen($email), PHP_EOL;
echo '$emailの最初の8文字：', substr($email,0,8), PHP_EOL;
echo '$emailの9文字目以降の部分：', substr($email,9), PHP_EOL;

/*出力：
$email = 'k23gjk18@st.kyusan-u.ac.jp'
$emailの長さ：26
$emailの最初の8文字：k23gjk18
$emailの9文字目以降の部分：st.kyusan-u.ac.jp
*/

$i = 12;
$str1 = str_pad($i, 4, '0', STR_PAD_LEFT);
$str2 = sprintf('%04d', $i);
echo '$i = 12', PHP_EOL;
echo 'str_pad(): ', $str1, PHP_EOL;
echo 'sprintf(): ', $str2, PHP_EOL;
/*出力
$i = 12
str_pad(): 0012
sprintf(): 0012
*/
```

### 3.2. 配列の関数

```php

$number = [3.14, 1.87,2.43,4.22];
$gpa = ['Alice'=>3.14, 'Tom'=>1.87,'Jack'=>2.43,'Ketty'=>4.22];

echo '(',implode(',', $number), ')', PHP_EOL;
echo implode('/', array_keys($gpa)), PHP_EOL;
/*出力
(3.14,1.87,2.43,4.22)
Alice/Tom/Jack/Ketty
*/

$number_sorted = $number;
sort($number_sorted);
echo 'origin: (',implode(',', $number), ')', PHP_EOL;
echo '昇順  : (',implode(',', $number_sorted), ')', PHP_EOL;
/*出力
origin: (3.14,1.87,2.43,4.22)
昇順  : (1.87,2.43,3.14,4.22)
*/

$number_sorted = $number;
rsort($number_sorted);
echo 'origin: (',implode(',', $number), ')', PHP_EOL;
echo '降順:   (',implode(',', $number_sorted), ')', PHP_EOL;
/*出力
origin: (3.14,1.87,2.43,4.22)
降順:   (4.22,3.14,2.43,1.87)
*/

// 配列の値の昇順でソートする
$gpa_sorted = $gpa;
asort($gpa_sorted);
print_r($gpa_sorted);
/*出力
Array
(
    [Tom] => 1.87
    [Jack] => 2.43
    [Alice] => 3.14
    [Ketty] => 4.22
)
*/
// 配列を値の降順でソートする
$gpa_sorted = $gpa;
arsort($gpa_sorted);
print_r($gpa_sorted);
/*出力
Array
(
    [Ketty] => 4.22
    [Alice] => 3.14
    [Jack] => 2.43
    [Tom] => 1.87
)
*/

// 配列をキーの昇順でソートする
$gpa_sorted = $gpa;
ksort($gpa_sorted);
print_r($gpa_sorted);
/*出力：
Array
(
    [Alice] => 3.14
    [Jack] => 2.43
    [Ketty] => 4.22
    [Tom] => 1.87
)
*/
// 配列をキーの降順でソートする
$gpa_sorted = $gpa;
krsort($gpa_sorted);
print_r($gpa_sorted);
/*出力例：
Array
(
    [Tom] => 1.87
    [Ketty] => 4.22
    [Jack] => 2.43
    [Alice] => 3.14
)
*/
```

##  4. 関数型プログラミング
```php

$fields = [
	'name'=>'名前',
	'address' => '住所',
	'tel'=>'電話番号',
	'birthday'=>'誕生日',
];

$ja_fileds = array_values($fields);
$en_fileds = array_keys($fields);

# 関数を変数に代入したり、関数を引数として使う

// 無名関数を引数として渡す:function() - $itemにタグをつける
$map1 = array_map(function($item){
	return '<th>' . $item . '</th>';
}, $ja_fileds);
echo implode('', $map1), PHP_EOL;
/*出力
<th>名前</th><th>住所</th><th>電話番号</th><th>誕生日</th>
*/

$fun1 = function($item){
    return '<th>' . $item. '</th>';
};

$map2 = array_map($fun1, $en_fields);
print_r($map2);
echo implode('',$map2), PHP_EOL;
/*出力
<th>name</th><th>address</th><th>tel</th><th>birthday</th>
*/

// 無名関数を引数として渡す:fn() - $itemにタグをつける
$map3 = array_map(fn($item)=>'<th>'.$item.'</th>', $ja_fileds);
echo implode('', $map3), PHP_EOL;
/*出力
<th>名前</th><th>住所</th><th>電話番号</th><th>誕生日</th>
*/

$number = [3.14, 1.87,2.43,4.22];
$sum = function($x, $y){
	return $x + $y;
};
echo array_reduce($number, $sum), PHP_EOL;

echo array_reduce($number, fn($x, $y)=>$x+$y), PHP_EOL;
/*出力
11.66
11.66
*/

echo '10!=';
echo array_reduce(range(1,10),fn($a, $b)=>$a*$b, 1);
echo PHP_EOL;
/*出力
10!=3628800
*/
```

## 5. オブジェクト指向プログラミング 

```php

class Tag
{
	protected $name;
	protected $attribute;
	protected $content;
	protected $void = false;//閉じタグがない場合、true

	function __construct($name, $content=null)
	{
		$this->name = $name;
		$this->content = $content;
		$this->attribute = [];
	}

	function setContent($content)
	{
		$this->content = $content;
		return $this;
	}

	function setVoid($void)
	{
		$this->void = $void;
		return $this;
	}
	function addAttribute($att)
	{
		$this->attribute = array_merge($this->attribute, $att);
		return $this;
	}

	function __toString()
	{
		$str = '<' . $this->name;
		foreach ($this->attribute as $key=>$val){
		    $str .= sprintf(' %s="%s"', $key, $val);
		}
		$str .= '>' . $this->content;
		
		if ($this->void) return $str;
		return $str . '</' .$this->name. '>';
	}
}

$tag = new Tag('input');
echo $tag, PHP_EOL;
/*出力
<input></input>
*/

$tag->setVoid(true)->addAttribute(['type'=>'text','name'=>'uid']);
echo $tag, PHP_EOL;
/*出力
<input type="text" name="uid">
*/

$tag->addAttribute(['class'=>'form-control']);
echo $tag, PHP_EOL;
/*出力
<input type="text" name="uid" class="form-control">
*/

$tag1 = $tag;
$tag1->addAttribute(['type'=>'hidden','name'=>'pid']);
echo $tag1, PHP_EOL;
/*出力
<input type="hidden" name="pid" class="form-control">
*/

$tag2 = $tag;
$tag2->addAttribute(['type'=>'submit','name'=>'s', 'value'=>'登録']);
$tag2->addAttribute(['class'=>'btn btn-primary']);
echo $tag2, PHP_EOL;
/*出力
<input type="submit" name="s" class="btn btn-primary" value="登録">
*/

$tag3 = new Tag('textarea');
echo $tag3->setContent('楽しかったです'), PHP_EOL;
echo $tag3->addAttribute(['name'=>'kanso']), PHP_EOL;
echo $tag3->addAttribute(['rows'=>3,'cols'=>20]), PHP_EOL;
/*出力
<textarea>楽しかったです</textarea>
<textarea name="kanso">楽しかったです</textarea>
<textarea name="kanso" rows="3" cols="20">楽しかったです</textarea>
*/

```

