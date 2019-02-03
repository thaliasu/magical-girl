<!--Contact form's background code-->
<?php
  session_start();

  if( isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['email'])&&isset($_POST['textarea1']) ) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $textarea1 = $_POST['textarea1'];


  if(!empty($first_name)&&!empty($last_name)&&!empty($email)&&!empty($textarea1)) {
    $to = 'thalia989231@knights.ucf.edu';
    $subject = 'Contact form submitted.';
    $body = $first_name . " " . $last_name . "\n" . $textarea1;
    $headers = 'From: ' . $email;

    if(@mail($to, $subject, $body, $headers)) {
      header("Location: contact.php?message=success");
      $_SESSION['success'] = '';
      $_SESSION['user_message'] = 'Thank you, ' .$first_name. '. An email has been sent, and Thalia will get back to you shortly. ';
    } else {
      header("Location: contact.php?message=error");
      $_SESSION['user_message'] = 'Sorry, an error occurred. Please try again later.';
    }

  } else {
    header("Location: contact.php?message=empty");
    $_SESSION['user_message'] = 'All fields are required.';
  }
}
?>
