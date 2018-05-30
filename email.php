<?php
   
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $to='parthidhanamsab@gmail.com';
        $email_subject="web page contact form:$name";
        $emailbody="Name:$name\n\n"."email:$email\n\n"."Message:$msg\n\n";
        $headers="From:webpage@domain.com";
        $headers.="Reply-To:$email";
        if(mail($to,$email_subject,$emailbody,$headers))
        {
               echo "mail send successfulll.......";
        }
        else{
            echo "Mail Sending Failed";
        }

    ?>