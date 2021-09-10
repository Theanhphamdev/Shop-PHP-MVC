<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die;
}

function uploadImage($image)
{
    $target_dir = BASE_MAIN . STORAGE_DIR;
    $name = $image['name'];
    $tmp = $image['tmp_name'];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION ));
    $name = uniqid() . '_' . $name;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($ext, $extensions) === false) {
//        throw new ErrorException("extension not allowed, please choose a JPEG or PNG file.");
    }

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    move_uploaded_file($tmp,"$target_dir/$name");
    return $name;
}

function getStorageLink($image = '')
{
    if (empty($image)) {
        return STORAGE_DIR . '/no-image.png';
    }

    return STORAGE_DIR . '/' . $image;
}
function checkAuthAdmin(){
    if (!isset($_SESSION['id_user'])){
        header('Location: /login');
        exit;
    }
}

function checkLoginCustomer(){
    if (!isset($_SESSION['id_customer'])){
        header('Location: /login-customer');
    }
}
function formatText($str){
    $str = html_entity_decode($str, ENT_QUOTES | ENT_XML1, 'UTF-8');
    $str = htmlspecialchars_decode($str);
    $str = html_entity_decode($str);
    $str = strip_tags($str);
    return $str;
}

function setSession($key, $value)
{
    $_SESSION[$key] = $value;
}

function getSession($key)
{
    return  empty($_SESSION[$key]) ? null : $_SESSION[$key];
}

function getAndRemoveSession($key)
{
    $value = empty($_SESSION[$key]) ? null : $_SESSION[$key];
    unset($_SESSION[$key]);
    return $value;
}

function sendMail($setSubject = NULL, $mailTo = NULL, $contentEmail = NULL) {
    $SENDGRID_API_KEY='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';

    $emailRequest = new \SendGrid\Mail\Mail();
    // Thông tin người gửi
    $emailRequest->setFrom('theanh01659726255@gmail.com', "Backend2");
    // Tiêu đề thư
    $emailRequest->setSubject($setSubject);
    // Thông tin người nhận
    $emailRequest->addTo($mailTo , $setSubject);
    // Soạn nội dung cho thư
    // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
    $emailRequest->addContent(
        "text/html", $contentEmail
    );

    // tiến hành gửi thư
    $sendgrid = new \SendGrid($SENDGRID_API_KEY);
    try {
        $response = $sendgrid->send($emailRequest);

        //--- mấy dòng print nàyích  thin ra thì in.
        // print $response->statusCode() . "\n";
        // print_r($response->headers());
        // print $response->body() . "\n";

    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
}