<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Formular</title>
    </head>
    <body>
    <?php if(!(isset($_GET['submit']))){  ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            Vorname <br />
            <input maxlength="50" name="vorname" size="45" type="text" /> <br />
   
        
            Nachname <br />
            <input name="nachname" size="45" type="text" /> <br />
     
     
                Mitteilung <br />
            <textarea cols="30" rows="5" name="mitteilung">Ihre Mitteilung</textarea> <br />
   
            <br />
            <input type="submit" value="abschicken" name="submit"/>
 
        </form>
        
    <?php } ?>
    <?php    
    if(isset($_GET['submit'])){
        echo "<h1>Ihre Eingabe</h1>";
        echo "Vorname:" . htmlspecialchars($_GET[vorname]) . "<br />";
        echo "Nachname:" . htmlspecialchars($_GET[nachname]) . "<br />";
        echo "Mitteilung:" . htmlspecialchars($_GET[mitteilung]) . "<br />";
    }    
    ?>
    
    </body>
</html>