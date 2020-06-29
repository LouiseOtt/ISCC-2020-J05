<!DOCTYPE html>
<html>
<head>
    <link href="style/vitrine.css" rel="stylesheet">
    <meta charset="utf-8"/>
    <title>Contact</title>
</head>
<header>
    <?php
    include'header.php'
    ?>
</header>
<body>
    <h2>CONTACT</h2>

    
    <div class = "formulaire">
        <input type="text" size = 30 placeholder="Votre Nom" /><br />

        <input type="text" size = 30 placeholder="Votre email"><br />

        <textarea name="comments" row="5" cols="40" placeholder="Comment ameliorer mon site ? "></textarea>
        

        <p id="buttons">
            <button>Envoyer</button> 
        </p>
        <footer>
           <?php 
           include'footer.php'
           ?> 
       </footer>

   </div>


</body>



</html>