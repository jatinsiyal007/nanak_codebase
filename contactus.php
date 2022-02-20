
<?php


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
    if(!empty($_POST['name']) && !empty($_POST['email'] && !empty($_POST['message']))){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Kindly provide valid email.';
        } else{
            $body="Name: $name.\n"."Email: $email.\n"."Message: $message.\n";

            if(mail('jatin.rey619@gmail.com','website contact response',$body,'jatin.rey619@gmail.com')){
                ?>                <script>
                alert('Message Send Successfully');
                window.open('index.html','_self');
                </script>
                <?php
                // echo 'Message Send Successfully';
            }else{
                echo 'error. Please Try Agin';
            }
        }
    }else{
        echo 'All Fill Are Required';
    }
}else{
    echo 'Please Fill The All Details';
}



?>

