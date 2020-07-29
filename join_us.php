<?php 
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    /* $busStop = $_POST['busStop']; */
    $sex = $_POST['sex'];
   /*  $quantity = $_POST['quantity']; */
    /* $message = $_POST['otherInformation']; */
    $orderContent = "From: $name \n Phone Number: $phone \n Address: $address \n Age: $age \n Gender: $sex";
    $recipient = "volunteer@eagleflightchaplain.org";
    $subject = "New member registration";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $orderContent, $mailheader) or die("Error!");
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Join us - Eagle flight chaplain</title>
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                background:linear-gradient(#e66465, #9198e5);
            }
            .contact_img{
                position:absolute;
                top:0;
                left:0;
                width:100%;
                height:100vh;
            }
            .contact_img img{
                width:100%;
                height:100%;
            }
            .contact_img:after{
                content:'';
                position:absolute;
                top:0;
                left:0;
                width:100%;
                height:100vh;
                background:rgba(145, 152, 229, .8)
            }
            .contact_success{
                position:absolute;
                top:20vh;
                background:green;
                color:#fff;
                padding:20px;
                box-shadow:2px 2px 2px #c4c4c4;
                font-size:1.2rem;
                text-align:center;
                animation:1s zoomOut 1;
            }
            @keyframes zoomOut{
                0%{
                    opacity:0;
                    transform:scale(0);
                }
                100%{
                    opacity:1;
                    transform:scale(1);
                }
            }
            .contact_success button{
                background:#fff;
                margin-top:10px;
                tranistion:.5s all;
                border:none;
                padding:10px;
            }
            .contact_success button a{
                color:#000;
                text-decoration:none;
                padding:10px;
            }
            .contact_success button:hover{
                background:red;
            }
            .contact_success button a:hover{
                color:#fff;
            }
        </style>
    </head>
    <body>
        <div class='contact_img'>
            <img src='images/efc_photo5.png' alt='eagle flight chaplain'>
        </div>
        <div class='contact_success'>
            <p>Your registration is completed!<br>
            Further information will be sent to your mail</p>
            <button><a href='index.html'>Ok</a></button>
        </div>
    </body>
    </html>";

   

?>