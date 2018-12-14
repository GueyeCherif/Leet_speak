<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <h1>LeetSpeak</h1>
      <textarea name="sans_leet" id="sans_leet" rows="8" cols="40"></textarea><br>
      <input type="submit" name="" value="leet" onClick="leet();">
    </form>
    <style media="screen">
      input{
        color: white;
        height: 50px;
        width: 300px;
        background-color: #2aa5d6;
        border-radius: 10px;
        font-family: sans-serif;
        font-size: 25px;
        cursor: pointer;
      }
      textarea{
        border: 2px solid #2aa5d6;
        height: 150px;
        width: 300px;
        color: #010202;
        font-size: 25px;
      }
      form{
        text-align: center;
        margin-top: 3%;
      }
    </style>
    <script type="text/javascript">

      function leet(){
      var mot = document.getElementById("sans_leet").value;
      var motLeet = "";
      for(var i = 0 ; i < mot.length ; i++){
      if (mot[i].toLowerCase() === "e"){motLeet += "3";}
      else if(mot[i].toLowerCase() === "a"){motLeet += "4";}
      else if (mot[i].toLowerCase() === "o"){motLeet += "O"}
      else if (mot[i].toLowerCase() === "t"){motLeet += "7"}
      else if (mot[i].toLowerCase() === "b"){motLeet += "8"}
      else if (mot[i].toLowerCase() === "c"){motLeet += "("}
      else if (mot[i].toLowerCase() === "k"){motLeet += "x"}
      else if (mot[i].toLowerCase() === "s"){motLeet += "5"}
      else if (mot[i].toLowerCase() === "r"){motLeet += "2"}
      else if (mot[i].toLowerCase() === "i"){motLeet += "1"}
      else if (mot[i].toLowerCase() === "g"){motLeet += "6"}
      else if (mot[i].toLowerCase() === "h"){motLeet += "#"}
      else if (mot[i].toLowerCase() === "u"){motLeet += "µ"}
      else if (mot[i].toLowerCase() === "f"){motLeet += "ƒ"}
      else if (mot[i].toLowerCase() === "j"){motLeet += "¿"}
      else if (mot[i].toLowerCase() === "d"){motLeet += "[)"}
      else {motLeet += mot[i].toLowerCase();}
      }
      alert(motLeet);
      // console.log(mot + " s'écrit " + motLeet + " en LeetSpeak.");
  }
    </script>
  </body>
</html>
