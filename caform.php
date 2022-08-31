<?php
// session_start();

// if(isset($_POST['s'])){
//          $a= $_POST['username'];
//          $b=$_POST['contact'];
//          $c=$_POST['email'];
//          $d=$_POST['op'];
//          $e=$_POST['m'];
             
//  }
//          else
//          {
//             echo "error";
                
            
//          }
//           $receiver = "ds8184339@gmail.com";//camwelsolution@gmail.com,camwelbis@gmail.com,raviranjancamwel@gmail.com
//          $subject = "COSTUMER ENQUIRY"; 
//          $body = "<html>
//          <head><title>Enquiry Data</title></head>
//          <body>
//          <table>
//              <tr>
//              <td>Name</td>
//              <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
//              <td> $a</td>
//              </tr>
//              <tr>
//              <td>contact number</td>
//              <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
//              <td> $b</td>
//              </tr>
//              <tr>
//              <td>email</td>
//              <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
//              <td> $c</td>
//              </tr>
//              <tr>
//              <td>services selected for enquiry</td>
//              <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
//              <td> $d/td>
//              </tr>
//              <tr>
//              <td>message for us</td>
//              <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
//              <td> $e</td>
//              </tr>
//          </table>
//          </body>
//          </html>";
//          // $headers =  'MIME-Version: 1.0' . "\r\n"; 
//          // $headers .= 'From: hms.com' . "\r\n";
//          // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//          $sender = "$c";

//          if(mail($receiver, $subject, $body, $sender))
//          {
          
//             $_SESSION["camwel"]="<h3>Dear <span class='text-info'>$a</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span> +91
//              9028388889/+91 9572852742</span></span></p>
//              <p>Thank You!</p></blockquote>";
//              header("location:thanks.php");
          
            
//              }
//          else
//          {
//             $_SESSION["response"]="<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone'></i><i class='fa fa-whatsapp'></i><span><a href='tel:+91 9919126111'>+91 9919126111 (CLIA),</a><a href='tel:+91 9984576098'> +91 9984576098 (Office),</a> <a href='tel:+91 7571860211'> +91 7571860211 (FM)</a></span></span></p>
//             <p>Please, try again!</p><p>Thank You!</p></blockquote>";  

//             header("location:thanks.php");
//          }

session_start();



if(isset($_POST['s'])){
    $name     = ($_POST["username"]);
    $email    = ($_POST["email"]);
    $mobile   = ($_POST["contact"]);
    $message  = ($_POST["m"]);
    $c=($_POST["op"]);

    $to = "camwelbis@gmail.com,raviranjancamwel@gmail.com,camwelsolution@gmail.com";
    $subject = "Enquiry From caplus ";
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: caplus' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $full_message = "<html>
                    <head><title>Enquiry Data</title></head>
                    <body>
                    <table>
                        <tr>
                        <td>Name</td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                        <td> $name</td>
                        </tr>
                        <tr>
                        <td>Email Id</td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                        <td> $email</td>
                        </tr>
                        <tr>
                        <td>Mobile No</td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                        <td> $mobile</td>
                        </tr>
                        <tr>
                        <td>services choosed</td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                        <td> $c</td>
                        </tr>
                        <tr>
                        <td>Message for us</td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                        <td> $message</td>
                        </tr>
                    </table>
                    </body>
                    </html>";
    $user=$email;
    $user_subject= "Thank You $name";
    $user_headers= 'From: caplus.com' . "\r\n";
    $user_message="Dear $name.\nWelcome to caplus/\n We have got your query.We will reach you soon.\nThank You!";
        if(mail($to,$subject,$full_message,$headers)){
           mail($user,$user_subject,$user_message,$user_headers);
            $_SESSION["camwel"]="<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone'><a href='tel:+91 9028388889'> +91 9028388889 (FM)</a></i>  <i class='fa fa-whatsapp' aria-hidden='true'></i><span><a href='tel:+91 9955442169'>+91 9955442169 (CLIA),</a></span></span></p>
            <p>Thank You!</p></blockquote>";
            header("Location:thanks.php");
        } 
        else{
            $_SESSION["response"]="<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone'></i><i class='fa fa-whatsapp'></i><span><a href='tel:+91 9955442169'>+91 9955442169  (CLIA),</a><a href='tel:+91 9955442169'> +91 9955442169 (Office),</a> <a href='tel:+91 9028388889'> +91 9028388889 (FM)</a></span></span></p>
            <p>Please, try again!</p><p>Thank You!</p></blockquote>";
        }
    header("Location:thanks.php");
}
   
      ?>    