<?php

$destinataires = "nom@nom_de_domaine.ext, nom2@nom_de_domaine.ext";
$subject = "text";
 
$expediteur = "From : expediteur@nom_de_domaine.ext\n";
 
mail($destinataires, $subject, "Le message\nligne2", $expediteur);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style/style.css">
    <title>form_yaz</title>
  </head>
  <body>
     
    <div class="container col-md-10">
      <div class="formulaire col-md-7">
        <br><br>
     <div class="titre"><h2>FORMULAIRE DE MESSAGE</h2></div><br>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="POST" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group col-md-6">
                  <label for="name">Recipient's mail</label>
                  <input type="email" class="form-control" name="des_mail" id="des_mail" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" placeholder="text" required></textarea>
              </div>
              <div class="my-3">
                <div class="error-message"></div>
              </div>
              <div class="text-center"><button type="submit" id="valider" class="btn btn-danger">Send Message</button></div><br><br>
               <div class="reponse" id="reponse"></div>

               <?php
                 echo "Votre message a été envoyé avec succès!!!";
               ?>
               <br><br><br>
            </form>

          </div>
          </div>
          </div>