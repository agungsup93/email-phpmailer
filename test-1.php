<?php
include 'conn.php';
if (isset($_POST['save'])){
$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$email 		= $_POST['email'];
$query = mysqli_query ($koneksi, "INSERT INTO data (nama, alamat, email) VALUES ('".$nama."','".$alamat."','".$email."')");

if ($query) {
require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

    /* Server settings */
    $mail->isSMTP();                                            /* Send using SMTP */
    $mail->Host       = 'tls://smtp.gmail.com';                 /* Set the SMTP server to send through */
    $mail->SMTPAuth   = true;                                   /* Enable SMTP authentication */
    $mail->Username   = 'agungdwicahyadi93@gmail.com';          /* SMTP username */
    $mail->Password   = 'Cahyadi*93';							/* SMTP password */
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 587;


    /* Recipients */
    $mail->setFrom('agungdwicahyadi93@gmail.com', 'Agung Dwicahyadi');
	$mail->FromName		= "Agung"; // Nama pengirim
    $mail->addAddress($_POST['email']); //nama penerima

    /* Content */
    $mail->isHTML(true);                                  /* Set email format to HTML */
    $mail->Subject = 'Here is the subject';
    $mail->Body = $_POST['nama'] . 'Selamat anda terdaftar uang jutaan rupiah';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	if(!$mail->Send()) 
	     {
	        echo "Mailer Error: " . $mail->ErrorInfo;
	     } else {
	        echo "<script language = 'javascript'> alert ('Data Berhasil ditambahkan'); window.location='index.php'</script> ";
	     }
}else{
	echo "<script>window.alert('Data Cuti GAGAL di Input, silahkan diulang kembali')
   			window.location='#'</script>";
	 }
}
?>