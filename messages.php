<?php

echo '<!DOCTYPE html>
<html>
   <head>
      <title>Page d`accueil 😸</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="assets/css/index.css" />
      <link rel="icon" href="https://media.discordapp.net/attachments/310821508874502146/796010502290538566/1609854066420.png" />
      
      <style>
        .type1 {
          border-radius:10px;
          border: 1px solid #eee;
          transition: .3s border-color;
          width: 100%;
        }
        .type1:hover {
          border: 1px solid #aaa;
        }
        .type1:focus {
            border: 1px solid #aaa;
            outline: none;
        }
        
        .button {
        
          /* remove default behavior */
          appearance:none;
          -webkit-appearance:none;
        
          /* usual styles */
          padding:10px;
          border:none;
          background-color:#3F51B5;
          color:#fff;
          font-weight:600;
          border-radius:5px;
          width:100%;
        
        }
        
        p{
            text-align: center;
        }
        
        </style>
      
   </head>
   <body>
   <div class="topnav">
         <p>Nicolas YouTube</p>
         <img src="https://media.discordapp.net/attachments/310821508874502146/790874141690822716/Projet_999.png?width=663&height=663">
       </div>';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo '
      <div class="main-content">
        <p>Ecrivez n`importe quoi, et je le recevrai ! </br>(vraiment)</p>
        <form action="messages.php" method="post">
          <input type="text" name="message" placeholder="Ecrivez votre message ici" class="type1">
          <input type="submit" value="Envoyer" class = "button">
        </form>        
      </div>';
} else {
    if ($_POST["message"] != "" && strlen($_POST["message"]) < 1000) {
        $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
        $file = fopen("messages.txt", "a");
        fwrite($file, $message.'    ');
        fclose($file);
    }
    echo '
      <div class="main-content">
        <p>Vous avez écrit </p> <p style="color: #73a6ff;font-size: x-large">' . $_POST["message"] . '</p>       
      </div>';
}

echo '<div class="botnav">
      <p>Liens utiles : <a href = "https://www.youtube.com/channel/UC0m_R1HkCjVpoS8M5ANSq6w" target="_blank">YouTube</a> - <a href = "https://www.instagram.com/nicolas.youtube/" target="_blank">Instagram</a> - <a href = "https://discord.gg/r3SFTTH" target="_blank">Discord</a> - <a href="https://github.com/Azuras03" target="_blank">GitHub</a></a></p>
    </div>
   </body>
</html>';