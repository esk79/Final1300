
<?php
$result = '';
$name = (isset($_POST['name']) ) ? $_POST['name'] : '';
$from = (isset($_POST['email']) ) ? $_POST['email'] : '';
$to = 'esk79@cornell.edu'; //will change to their presidents email
$subject = (isset($_POST['subject']) ) ? $_POST['subject'] : '';
$message = (isset($_POST['message']) ) ? $_POST['message'] : '';

$body = <<<FILTER_VALIDATE_EMAIL
Dear The School Girl Project,

$message

Thanks,
$name
FILTER_VALIDATE_EMAIL;

if($_POST){
    if ($to != '' && $body != '' && $subject != '' && $from != ''){
        mail($to, $subject, $body, $from);
        $result = "Thanks " .$name ." for the email!";
    }else{
        $result = "Please fill out all sections of the form";
    }
}
?>
