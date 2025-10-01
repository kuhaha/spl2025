# PHPプログラミング勉強会（基礎編）

**関連リンク**
1. [Paiza.IO](https://paiza.io/ja/projects/new?language=php)　[Webプログラミング演習](http://www-dx.ip.kyusan-u.ac.jp/rs/site/r07wp/)
1. [PHPマニュアル](https://www.php.net/manual/ja/index.php)　[とほほPHP入門](https://www.tohoho-web.com/php/index.html)　 [とほほBoostrap入門](https://www.tohoho-web.com/bootstrap5/index.html)
1. [GitHub Desktop](https://docs.github.com/ja/desktop)　[Composer](https://getcomposer.org/download/)

## １．PHPとは

Webサーバの機能を拡張し、動的にWebページを生成するために用いられるプログラミング言語。以下の目的で利用されている。

1. HTMLに**動的な部分**を作成すること
2. **ビジネスロジック**を実現すること
3. 再利用可能な**ライブラリやパッケージ**を開発すること 

## ２．PHPプログラムの書き方

### 2.1. ファイルの分け方

**副作用のある処理**を記述するファイルと**副作用のない処理**を記述するファイルを分けて作ること。

- **副作用のない処理**：シンボル（クラス、関数、定数など）を宣言する
- **副作用のある処理**：出力の生成、`ini`設定の変更などを行う

### 2.2. コーディング規約

- **命名規則**：変数名、定数名、メソッド名、クラス名、フォルダ名、ファイル名に関する規則
- **改行やスペースに関する規則**：スペース、改行に関する規則
- **オートロードに関する規則**：クラス等の自動読み込みに関する規則

## 3. PHP基礎

###  文字列、変数
- HTML文書を**文字列**と見なせる
- **文字列**をPHPによって動的に生成することができる
- **文字列補間(interpolation)**: 変数を使って文字列を補完する
  - `.`連結演算子
  - `"AB{$変数}CD"`ダブルクォート文字列に埋め込む  ※変数を波括弧で囲む（トラブル回避のため）
  - `sprintf(),vsprintf()`文字列をフォマードする関数  ※ダブルクォート・シングルクォートを問わず使える
  - `implode()`配列要素を繋いで文字列にする
- **文字列の出力**
  - `<?=式?>`：　`<?php echo 式?>`の略式表記。HTMLに変数や計算式の結果を埋め込むに便利
  - `echo`文：`echo 式1,式2,式3,...;`
  - `print()`、`printf()`、`vprintf()`関数
- **定義済定数**
  - `PHP_EOL`：改行文字（通常OSに依存する）
  - `DIRECTORY_SEPARATOR`：ディレクトリの区切り文字（通常OSに依存する）
  - `E_ALL,E_ERROR, E_WARNING`：エラー報告に関する定数

### 配列、連想配列、多次元配列

- 初期化
  - 通常配列の初期化`array(要素,要素,...)`、`[要素,要素,...]`
  - 連想配列の初期化`array(キー=>要素,キー=>要素,...)`、`[キー=>要素,キー=>要素,...]`
  - 多次元配列`[[要素,要素,...],[要素,...],]`、`[キー=>[要素,要素,...],キー=>[要素,],..]`
- 要素の追加
  - 代入`$list[]='Alice'`末尾から追加
  - `array_push()`末尾から追加 
  - `array_unshift()`先頭から追加 
- 要素の削除
  - `unset()`任意の要素を削除
  - `array_pop()`末尾から削除
  - `array_shift()`先頭から削除 
- 配列の走査 ※`for`文よりも`foreach`を推奨
  - `foreach(配列 as $value){...}` 値を取得しながら走査する
  - `foreach(配列 as $key=>$value){...}` キーと値をペアでを取得しながら走査する

### 文字列に関する組み込み関数

- `explode()` 文字列を区切り文字で分けて配列にする
- `substr()` 部分文字列を返す
- `strlen()` 文字列の長さを返す
- `str_pad()` 文字列を固定長の他の文字列で埋める
- `sprintf()` フォーマットされた文字列を返す。通常の引数
- `vsprintf()` フォーマットされた文字列を返す。配列引数

### 配列に関する組み込み関数

- `implode()` 配列の要素を接続文字で繋いで文字列にする
- `print_r()` 配列を再帰的に出力する（`echo`や`print()`で配列を出力するとエラー）
- `array_keys()` 配列のキーとなる配列を返す
- `array_values()`配列の値となる配列を返す
- `array_merge()` 二つ以上の配列をマージする
- `sort()`/`rsort()` 値を基準に昇順/降順で配列をソートする
- `asort()`/`arsort()`  値を基準に昇順/降順で連想配列をソートする 
- `ksort()`/`krsort()`  キーを基準に昇順/降順で連想配列をソートする 
- `array_map()` 要素にコールバック関数を適用し、新しい配列を返す
- `array_reduce()` コールバック関数を適用し、配列をひとつの値にまとめる

### オブジェクト指向プログラミング
- クラス、プロパティ（変数や定数）、メソッド
- コンストラクタ`__construct()`
- アクセス修飾子`public, protected, private`, `static`
- クラス定数`const`
- 抽象クラスと抽象メソッド`abstract`
  - https://www.php.net/manual/ja/language.oop5.abstract.php
- クラスの継承`extends`
- インタフェースの宣言`interface`
- インタフェースの実装`implements`
- クラス内部における`static`メソッド・プロパティのアクセス`self::`
- クラス内部における通常メソッド・プロパティのアクセス`$this->`

### 関数型プログラミング
- 無名関数・クロージャ`$fun=function(){関数定義}`,`fn()=>式` 
  - https://www.php.net/functions.anonymous
- `array_filter()` コールバック関数を使用して配列の要素をフィルタリングする 
  - https://www.php.net/manual/ja/function.array-filter.php
- `array_map()` 配列の要素にコールバック関数を適用する
  - https://www.php.net/manual/ja/function.array-map.php
- `array_reduce()` 配列の値にコールバック関数を適用してひとつの値にまとめる
  - https://www.php.net/manual/ja/function.array-reduce.php
- `call_user_func()`最初の引数をコールバック関数として呼び出す。残りの引数はコールバック関数の引数
  - https://www.php.net/manual/ja/function.call-user-func.php
- `call_user_func_array()` 最初の引数をコールバック関数として呼び出す。二つ目の引数(配列)はコールバック関数の引数
  - https://www.php.net/function.call-user-func-array
