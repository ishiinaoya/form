<?php

// 変数の初期化
$page_flag = 0;
$error = array();

if (!empty($_POST['btn_confirm'])) {
    $page_flag = 1;

    // セッションの書き込み
    session_start();
    $_SESSION['page'] = true;
} elseif (!empty($_POST['btn_submit'])) {

    session_start();
    if (!empty($_SESSION['page']) && $_SESSION['page'] === true) {

        // セッションの削除
        unset($_SESSION['page']);

        $page_flag = 2;

        // 変数とタイムゾーンを初期化
        $header = null;
        $body = null;
        $admin_body = null;
        $auto_reply_subject = null;
        $auto_reply_text = null;
        $admin_reply_subject = null;
        $admin_reply_text = null;
        date_default_timezone_set('Asia/Tokyo');

        //日本語の使用宣言
        mb_language("ja");
        mb_internal_encoding("UTF-8");

        $contact = preg_replace("/\{(.*)\}/", '', $_POST['contact']);

        ////////////////////////////////////////////////////////////申込者用////////////////////////////////////////////////////////////

        $header01 = "MIME-Version: 1.0\n";
        $header01 = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
        $header01 .= "From: test@adfaces.co.jp\n";

        // 件名を設定
        $auto_reply_subject = '【申込者用フォームテスト】';

        // 本文を設定
        $auto_reply_text .= "これはテスト送信のサンプルです" . "\n\n\n";

        $auto_reply_text .= "お名前[漢字]：" . h($_POST['name01']) . "\n";
        $auto_reply_text .= "お名前[かな]：" . h($_POST['name02']) . "\n";
        $auto_reply_text .= "メールアドレス：" . h($_POST['email']) . "\n";
        $auto_reply_text .= "電話番号：" . h($_POST['tel']) . "\n";

        if (h($_POST['gender']) === "男性") {
            $auto_reply_text .= "性別：男性\n";
        } elseif (h($_POST['gender']) === "女性") {
            $auto_reply_text .= "性別：女性\n";
        } else {
            $auto_reply_text .= "その他\n";
        }

        $auto_reply_text .= "ご住所：" . "〒" . h($_POST['zip']) . "\n" . h($_POST['address1'])  . h($_POST['address2']) . h($_POST['address3']) . "\n";

        if (($_POST['how'])) {
            $auto_reply_text .= "【セレクトテスト】" . "\n" . h($_POST['how']) . "\n\n";
        }

        if ($_POST['function']) {
            $auto_reply_text .= "【チェックテスト】\n";
        }
        foreach ($_POST['function'] as $function_val) {
            $auto_reply_text .=  h($function_val) . ",";
        }

        $auto_reply_text .= "\n";

        if (!empty($_POST['contact'])) {
            $auto_reply_text .= "テキストテスト：" . h($contact)  . "\n\n\n";
        }

        // テキストメッセージをセット
        $body = "--__BOUNDARY__\n";
        $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
        $body .= $auto_reply_text . "\n";
        $body .= "--__BOUNDARY__\n";

        //メール本文エンコーディング
        $body = mb_convert_encoding($body, 'ISO-2022-JP-MS');

        // 自動返信メール送信
        mb_send_mail($_POST['email'], $auto_reply_subject, $body, $header01);


        ////////////////////////////////////////////////////////////管理者用////////////////////////////////////////////////////////////

        $header02 = "MIME-Version: 1.0\n";
        $header02 = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
        $header02 .= "From:" . h($_POST['name01']) . "<" . h($_POST['email']) . ">" . "\n";

        // 運営側へ送るメールの件名
        $admin_reply_subject = "【管理者用フォームテスト】";

        // 本文を設定
        $admin_reply_text = "これはテスト送信のサンプルです。\n\n\n";
        $admin_reply_text .= "お名前[漢字]：" . h($_POST['name01']) . "\n";
        $admin_reply_text .= "お名前[かな]：" . h($_POST['name02']) . "\n";
        $admin_reply_text .= "メールアドレス：" . h($_POST['email']) . "\n";
        $admin_reply_text .= "電話番号：" . h($_POST['tel']) . "\n";

        if (h($_POST['gender']) === "男性") {
            $admin_reply_text .= "性別：男性\n";
        } elseif (h($_POST['gender']) === "女性") {
            $admin_reply_text .= "性別：女性\n";
        } else {
            $admin_reply_text .= "その他\n";
        }

        $admin_reply_text .= "ご住所：" . "〒" . h($_POST['zip']) . "\n" . h($_POST['address1'])  . h($_POST['address2']) . h($_POST['address3']) . "\n";

        if (($_POST['how'])) {
            $admin_reply_text .= "【セレクトテスト】" . "\n" . h($_POST['how']) . "\n\n";
        }

        if ($_POST['function']) {
            $admin_reply_text .= "【チェックテスト】\n";
        }
        foreach ($_POST['function'] as $function_val) {
            $admin_reply_text .=  h($function_val) . ",";
        }

        $admin_reply_text .= "\n";

        if (!empty($_POST['contact'])) {
            $admin_reply_text .= "テキストテスト：" . h($contact) . "\n\n";
        }

        // テキストメッセージをセット
        $body = "--__BOUNDARY__\n";
        $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
        $body .= $admin_reply_text . "\n";
        $body .= "--__BOUNDARY__\n";

        //メール本文エンコーディング
        $body = mb_convert_encoding($body, 'ISO-2022-JP-MS');

        // 管理者へメール送信
        // mb_send_mail('jema@adfaces.co.jp', $admin_reply_subject, $body, $header02);
        mb_send_mail('toyomura@adfaces.co.jp', $admin_reply_subject, $body, $header02);
    }
} else {
    $page_flag = 0;
}



function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, "UTF-8");
}
