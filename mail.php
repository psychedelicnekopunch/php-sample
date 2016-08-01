<?php
/**
 * メールが送れない場合、
 *
 * 1. to と from が 同じ
 * 2. sendmail, postfix などが正常に動いていない
 * 3. sendmail, postfix などは動いているけど、設定の見直しが必要
 * 4. VirtualBox からメールを送る時は gmail アカウントを設定してあげると楽 (但し、全てgmailのメアドでくるっぽい)
 * 5. alternativesコマンドとやらでMTAとやらを確認して、sendmail, postfix などどれを使ってるか見て思ったものを使ってなければ変更する
 **/

$to   = 'メールアドレス';
$from = 'メールアドレス';

mb_language("Ja") ;
mb_internal_encoding("UTF-8");
var_dump(mb_send_mail($to, 'subject: 件名', 'メッセージ本文', "From:{$from}"));
