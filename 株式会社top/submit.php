<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$yourname = $_POST[$yourname];
$mail = $_POST[$mail];
$textarea = $_POST[$textarea];
	//メールの内容
	$body .= "お問い合わせいただきましてありがとうございます。下記の情報を受け取りました。\nこちらから折り返しご連絡させていただきます。\n\n";
	$body .= "お名前:".$yourname."\n";
	$body .= "メールアドレス:".$mail."\n";
	$body .= "お問い合わせ内容:\n".$textarea."\n\n";
	$body .= "▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼\n";
	$body .= "【Web担当者の作り方】\n";
	$body .= "メール:example@example.com\n";
	$body .= "URL:https://www.web-officer.com/\n";
	$body .= "▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼\n";

	//メールの送り先,メールの送り元,メールタイトル
	$flg = bSENDMAIL3($address,"example@example.com","【Web担当者の作り方】です。お問い合わせいただきましてありがとうございます！",$body);
	$flg = bSENDMAIL3("example@example.com","example@example.com","【Web担当者の作り方】です。お問い合わせいただきましてありがとうございます！",$body);

	if($flg == true) {
		$massage = "メールの送信が完了しました。<br />お問い合わせいただきましてありがとうございました！";
	} else {
		$massage = "メールの送信に失敗しました。<br />大変お手数ですが、もう一度やり直して下さい。";
	}
}

function bSENDMAIL3($to,$from,$sub,$body) {
	mb_language("uni");
	mb_internal_encoding("utf-8");//utf-8 or SJIS
	$Head="";
	$Head.="From: ".$from."\n";
	$Head.="Mime-Version: 1.0\n";
	$Head.="Reply-To: ".$from."\n";
	$Head.="X-Mailer: PHP/" . phpversion();
	$flg = mb_send_mail($to, $sub, $body,$Head);
	return $flg;
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
</head>

<body>
  <?=$massage?>
</body>
</html>