<?php   

session_start();
   if(!isset($_SESSION['user']))
    {
        header('Location:index.php');
        die();
    }
    ?>


<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <title>Quiz </title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="./style.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <div id="quiz">
      <h1><span>C</span>ode (Permis B, ACC)  <i class="fas fa-car-alt"></i> </h1>

      <h2 id="question"></h2>
        
      <h3 id="score"></h3>

      <div class="choices">
        <button id="guess0" class="btn">        
          <p id="choice0"></p>
        </button>

        <button id="guess1" class="btn">
          <p id="choice1"></p>
        </button>
          
        <button id="guess2" class="btn">
          <p id="choice2"></p>
        </button>
          
        <button id="guess3" class="btn">
          <p id="choice3"></p>
        </button>
      </div>

      <p id="progress"></p>

    </div>
  </div>
   
  <script src="./script.js" type="text/javascript" ></script>
</body>



</html>
