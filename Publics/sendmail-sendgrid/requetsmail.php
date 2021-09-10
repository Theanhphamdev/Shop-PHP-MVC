<?php
 header("Access-Control-Allow-Origin: *");
//1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
// website nhỏ thì dùng tài khoản miễn phí ok
// tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
// trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
$SENDGRID_API_KEY='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';

require 'vendor/autoload.php';
$email = new \SendGrid\Mail\Mail(); 
///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
// Thông tin người gửi
$email->setFrom("theanh01659726255@gmail.com", "MRS"); 
// Tiêu đề thư
$email->setSubject("Sending with SendGrid is Fun");
// Thông tin người nhận
$email->addTo("khanhduy3110@gmail.com", "SonDT32"); 
// Soạn nội dung cho thư
// $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
$email->addContent(
    "text/html", "<h2>Nội dung có sử dụng thẻ html</h2>"
);

// tiến hành gửi thư
$sendgrid = new \SendGrid($SENDGRID_API_KEY);
try {
    $response = $sendgrid->send($email);

    //--- mấy dòng print nàyích  thin ra thì in.
    print $response->statusCode() . "\n";
    // print_r($response->headers());
    // print $response->body() . "\n";

} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
 