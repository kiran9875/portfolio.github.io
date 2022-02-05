<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
  die("Connection failed: " . $conn->connect_error);
}
else 
{
    $sql = "select * from customer";
    $r= mysqli_query($conn,$sql);
    // print_r($r);
    // echo " success"; exit;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="style1.css">

</head>

<body>
    <section class="contact">
        <div class="content">
            <h2>Contact me</h2>
            <p>Hello this is kiran choudhary fjew kfal fjalfkj kjakr kgjra</p>

        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-street-view"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>North sunderwas udaipur Rajasthan</p>


                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>9875768121</p>


                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>kiranchoudhary256@gmail.com</p>


                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-long-arrow-left"></i></div>
                    <div class="text">
                        
                        <a href="index.php" target="blank" class="btn" style="width:100px;background:#062225;color: #fff;height:60px;font-size:27px;font-weight:600;">Back</a>


                    </div>
                </div>
            
            </div>
            <div class="contactform">
                <form action="" method="post" role="form" class="php-email-form">
                    <h2>Send Your Details</h2>
                    <div class="inputbox">
                        <input type="text" name="Name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="Number" required="required">
                        <span>Contact Number</span>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="Email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                        <textarea name="message" name="Message" required="required" ></textarea>
                         <span>Type your Message here.....</span>
                     </div>
                     <div class="inputbox" >
                         <!-- <button type = "submit" name = "login" style ="bac">Send </button> -->
                         <input type="submit" name="login" value="Send" style="width: auto" ></a>
                         <!-- <input type="submit" name="" value="Update" style="width: auto;margin-left:25px;" > -->
                         <!-- <input type="submit" name="" value="Delete" style="width: auto;margin-left:25px;" > -->
                         </div>
                     
                     
                </form>
 

                
            </div>
        </div>


    <div class="container mt-5 ">
        <div class="jumbotron">
        <div class="card" style="width:1000px;">
         <div class="card-header">Show Details</div>
         <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <table class = "table table-dark">
              <thead>
                  <th scope ="col">Id</th>
                  <th scope ="col">Time</th>
                  <th scope ="col">Name   </th>
                  <th scope ="col">Contact Number</th>
                  <th scope ="col">Email</th>
                  <th scope ="col">Message</th>
              </thead>
              <tbody>
                  <?php
                      while($row = $r->fetch_assoc()){
                          

                      
                  ?>
                  <tr>
                      <td> <?php  echo $row["id"]; ?></td> 
                      <td> <?php  echo date('d-M-Y h:i a',strtotime($row["date_time"])); ?></td> 
                      <td> <?php  echo $row["name"]; ?></td> 
                      <td> <?php  echo $row["number"]; ?></td> 
                      <td> <?php  echo $row["email"]; ?></td> 
                      <td> <?php  echo $row["message"]; ?></td> 
                      
                      

                  </tr>
                   <?php   }  ?>
             </tbody>

          </table>

         
  </div>
</div>
</div>
    </div>
        
            

    </section>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/PHPMailer.php');
    

    if(isset($_POST['login']))
    {
        $name = $_POST['Name'];
        $num = $_POST['Number'];
        $email = $_POST['Email'];
        $msg = $_POST['message'];
        $mail = new PHPMailer(true);
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'kiranchoudhary.muskowl@gmail.com';                     //SMTP username
            $mail->Password   = 'Kiran@9875';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('kiranchoudhary.muskowl@gmail.com', 'Kiran Choudhary');
            $mail->addAddress('kiranchoudhary.muskowl@gmail.com', 'Kiran Choudhary');     //Add a recipient
            
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Contact us';
            $mail->Body    = "Name : $name <br> Number :$num <br> Email : $email <br> message : $msg";
            $mail->send();
            echo '<script> alert ("Message has been sent")</script>';
          }
         catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
    ?>

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>


</html>