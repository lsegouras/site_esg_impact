<?php
  //Variáveis
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $mensagem = $_POST['message'];
  $submission_date = date('d/m/Y');
  $submission_time = date('H:i:s');

  $file = "
    <html>
      <p><b>Nome: </b>$name</p>
      <p><b>Sobrenome: </b>$surnname</p>
      <p><b>Empresa: </b>$company</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$message</p>
      <p>Este e-mail foi enviado em <b>$submission_date</b> às <b>$submission_time</b></p>
    </html>
  ";
  
  $destination = "lausegouras@gmail.com";
  $subject = "Contato pelo Site ESG Impact";

  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $name <$email>";


  mail($destination, $subject, $file, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>