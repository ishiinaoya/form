<?php

$tel = $_POST['tel'];
$list = array(
    $_POST['name01'],
    $_POST['name02'],
    $_POST['email'],
    '="' . $tel . '"',
    $_POST['gender'],
    $_POST['zip'],
    $_POST['address1'],
    $_POST['address2'],
    $_POST['address3'],
    $_POST['how'],
    implode(',', $_POST['function']),
    $_POST['contact'],
    $_POST['agreement'],
    date("Y-m-d H:i:s"),
);
mb_convert_variables('SJIS', 'UTF-8', $list); //文字コードをUTF-8からShiftJISに変更
$csv = fopen('file.csv', 'a'); //csvファイルと書き込みモードを指定
fputcsv($csv, $list); //変換した配列をcsvファイルに書き込み実行
foreach ($list as $fields) {
    fputcsv($csv, $fields);
}
fclose($csv); //csvファイルを閉じる
