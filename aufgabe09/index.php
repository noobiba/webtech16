<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <title>Webtechnologien 2016/2017</title>
</head>
<body>
  <div class="wrapper">
    <h1>Aufgabe 9</h1>
    <h1>Mausereignisse behandeln mit JavaScript</h1>
    
    <div><a href="../index.html">Home</a></div>
    <p></p>

    <div id="demo" 
      style="width:200px; height:200px; background-color:red;"
      onclick="document.getElementById('demo').style.backgroundColor = 'green'"
      ondblclick="document.getElementById('demo').style.lineHeight ='200px'
                  document.getElementById('demo').innerHTML ='Doppelklick'
                  document.getElementById('demo').style.textAlign ='center'"
      onmouseenter="toggleDivSize(this)"      
      onmouseleave="document.getElementById('demo').style.width ='200px'
                    document.getElementById('demo').style.height ='200px'""></div>


    <script>
      function toggleDivSize(){
        var klein = document.getElementById('demo').style.height ='200px';


          if (klein) {
            document.getElementById('demo').style.width ='300px';
            document.getElementById('demo').style.height ='300px';
          }else{
            document.getElementById('demo').style.width ='200px';
            document.getElementById('demo').style.height ='200px';
          }
      }
    </script>

    <p></p>
    <hr/>
    <p></p>

    <h1>Tastaturereignisse behandeln mit JavaScript</h1>

    <input type="text" id="textfeld" value="" name="" size="20" onkeyup="zeigeWert()" />
    <p></p>
    <div id="inhalt"></div>


    <script>
       function zeigeWert(){
          var wert = document.getElementById('textfeld').value;
          document.getElementById('inhalt').innerHTML = "Eingegeben wurde: " + wert;
       }
    </script>
   
  </div>
</body>
</html>