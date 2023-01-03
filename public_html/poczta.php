<?php
mail('patrykk1797@gmail.com',$subject,$message);
?>
 

<?php
    mail('adres@interia.pl','temat','tresc');
    if (!isset($_POST["submit"]))
     {
?>        
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>  ">
    temat: <input type="text" name="subject" value="temacik" size="50"><br>
    wiadomość:<br> <textarea rows="1" cols="40" name="message"></textarea> <br>
    <input type="submit" name="submit" value="naciśnij, żeby wysłać">
     </form>
<?php
     }
else
  {
  if (isset($_POST["message"]) or isset($_POST["subject"]))
    {
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $message = wordwrap($message, 70);
        mail('patrykk1797@gmail.com',$subject,$message);
    echo '<p style="color:red;"> Wiadomość wysłana </p>';
    }
  }
?>