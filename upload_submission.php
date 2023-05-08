<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = "1042869685@qq.com";
$name = "kehu";
$huizhi = "<h1>测试发送/h1>";

$mial = new PHPMailer(true);
try {
// 邮件配置
$mail->CharSet = "UTF_8";
$mail->SMTPDebug = 0;
$mail->isSMTP();

$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; // 使用TLS加密
$mail->Host = 'smtp.qq.com'; // 邮箱服务器地址
$mail->Username = '1042869685@qq.com'; // 邮箱账号
$mail->Password = 'rjcwsvufospdbcgd'; // 邮箱密码   xtwmfynjsnrxbaje
$mail->setFrom('1042869685@qq.com', 'gg'); // 发件人信息
$mail->Port = 465; // 端口号

$mail->setFrom('1042869685@qq.com', 'check');
$mail->addAddress($email, $name);
$mail->addReplyTo('1042869685@qq.com', 'info');



// 接收者信息
// $to = "1042869685@qq.com";
// $method_name = $_POST['method_name'];
// $sender_email = $_POST['sender_email'];
// $checkbox_value = isset($_POST['checkbox_option']) ? "是" : "否";

// // 邮件内容
// $mail->addAddress($to);
$mail->isHTML(true);
$mail->Subject = '评估基准结果';
$mail->Body = $huizhi;
$mail->send();
echo '<br>'
// $mail->Body    = "方法名称: " . $method_name . "<br>" .
//                  "发送者邮箱: " . $sender_email . "<br>" .
//                  "是否选中复选框: " . $checkbox_value . "<br>";

// // 上传文件
// if(isset($_FILES['file'])) {
//     $uploadfile = basename($_FILES['file']['name']);
//     move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
//     $mail->addAttachment($uploadfile);
// }

// // 发送邮件
// if(!$mail->send()) {
//     echo '邮件发送失败: ' . $mail->ErrorInfo;
// } else {
//     echo '邮件发送成功';
// }

// // 删除文件
// if(isset($_FILES['file'])) {
//     unlink($uploadfile);
// }
}catch(Exception $e) {
    echo '邮件发送失败: ', $mail->ErrorInfo;
}

?>
