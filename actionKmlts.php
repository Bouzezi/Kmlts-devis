<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use PHPMailer\PHPMailer\SMTP; 


require_once __DIR__ . '/vendor/autoload.php';
$Francais=file_get_contents("./i18n/de.json");
$json= json_decode($Francais,true);
 
  
        $kmltsQ1=$_POST['kmltsQ1'];


        $kmltsQ2R1=$_POST['kmltsQ2R1'];
        $kmltsQ2R2=$_POST['kmltsQ2R2'];

        $kmltsQ3=$_POST['kmltsQ3'];
        $kmltsQ3text=$_POST['kmltsQ3text']; 
        
      
       $kmltsQ4Q1R1=$_POST['kmltsQ4Q1R1']; 
     
      $kmltsQ4Q1R2=$_POST['kmltsQ4Q1R2'];

      $kmltsQ4Q1R3=$_POST['kmltsQ4Q1R3'];

     // $kmltsQ4Q2=$_POST['kmltsQ4Q2'];
      $kmltsQ5text=$_POST['kmltsQ5text'];

      //$kmltsQ4Q3=$_POST['kmltsQ4Q3'];
      $kmltsQ6text=$_POST['kmltsQ6text'];


      
       $name=$_POST['name'];
       $vorname=$_POST['vorname'];
       $unternehmens=$_POST['unternehmens'];
       $Telefon=$_POST['Telefon'];
       $Email=$_POST['Email'];
       $adresse=$_POST['adresse']; 
  

 

$mpdf=new \Mpdf\Mpdf();
//var_dump($mpdf)

//create pdf
$data='';
$data .=  '<h1 style="text-align:center">' .$json['kmlts']. '</h1>' .'<br/>' ;
$data .=  '<h3>1) ' .$json['kmltsQ1']. '</h3>' ;
$data .=   $json[$kmltsQ1] ; 

$data .=  '<h3>2) ' .$json['kmltsQ2']. '</h3>' ;
$data .=   $kmltsQ2R1 ; 
$data .=   $kmltsQ2R2 ; 

$data .=  '<h3>3) ' .$json['kmltsQ3']. '</h3>' ;

if($kmltsQ3text == ""){
    $data .=   $json[$kmltsQ3] ;
    } 
    else{
      $data .=   $kmltsQ3text ; 
    }
    

$data .=  '<h3>4) ' .$json['kmltsQ4']. '</h3>' ;

$data .=   '<b>' .$json['kmltsQ4Q1R1']. ': ' . '</b> '. $kmltsQ4Q1R1. '<br/>' ;
$data .=   '<b>' .$json['kmltsQ4Q1R2']. ': ' . '</b>'. $kmltsQ4Q1R2. '<br/>' ;
$data .=   '<b>' .$json['kmltsQ4Q1R3']. ': ' . '</b>'. $kmltsQ4Q1R3. '<br/>' ;



$data .=  '<h3>5) ' .$json['kmltsQ4Q2']. '</h3>' ;
$data .=  $kmltsQ5text;


$data .=  '<h3>6) ' .$json['kmltsQ4Q3']. '</h3>' ;
$data .=   $kmltsQ6text; 

$data .=  '<h3>7) ' .$json['globalQ12']. '</h3>' ;
$data .=   '<b>' .$json['name']. '</b>'. $name. '<br/>' ;
$data .=   '<b>' .$json['vorname']. '</b>'. $vorname. '<br/>' ;
$data .=   '<b>' .$json['NomCompagnie']. '</b>'. $unternehmens. '<br/>' ;
$data .=   '<b>' .$json['telefon']. '</b>'. $Telefon. '<br/>' ;
$data .=   '<b>' .$json['email']. '</b>'. $Email. '<br/>' ;
$data .=   '<b>' .$json['adresse']. '</b>'. $adresse. '<br/>' ;


$mpdf->WriteHTML($data);
$pdf=$mpdf->Output('','S');


//mail

$enquirydata =
[
 /*  $json['HomePage'],
  'homeQ1' => $homeQ1 */
];


//echo $recipicient;
sendEmail($pdf,$enquirydata);

function sendEmail($pdf,$enquirydata){
  //  $recipicient='hatemjmai.1920@gmail.com';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'hatemjmai.1920@gmail.com';                     // SMTP username
        $mail->Password   = 'yazidboubou1234';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('hatemjmai.1920@gmail.com', 'jmai hatem');
        $mail->addAddress('hatemjmai.1920@gmail.com', 'recipicient');     // Add a recipient
        $mail->addAddress('bouzeziahmed5@gmail.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        // Attachments
        $mail->addStringAttachment($pdf,('Anfrage KMlts.pdf'));
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'KWA Devis';
        $mail->Body    = 'This is the PDF for your devis</>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
       
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



}










?>