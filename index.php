<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <body>
<form action="" method="POST">
<input type="radio" name="test" value="1">1
<input type="radio" name="test" value="2">2
<input type="submit">
</form>
<?php
$test = filter_input(INPUT_POST, 'test');
if (isset($test)) {
// 入力値を表示
echo $test;
// テキストとしてファイルに書き出す
file_put_contents('out.dat', $test);
}
</body>
</html>