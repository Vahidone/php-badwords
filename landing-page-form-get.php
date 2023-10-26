<?php 

$testo = $_GET["testo"];
$word = isset($_GET["word"]) ? $_GET["word"] : "La parola $word non è presente nel testo";

$str_replace = str_replace($word, '***' , $testo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- link BOOTSTRAP  -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form in GET</title>
</head>
<body>
  <div class="container mt-5 p-5 ">
   
     
    <p>Il paragrafo è il seguente: <span class="bg-warning fs-4"><?php echo $testo ?>.</span> </p>
    <h3>Il paragrafo è lungo: <span class="text-success fs-2"><?php echo strlen($testo) ?></span> caratteri.</h3>
    <p>La parola da censurare è: <span class="fw-bold fs-3 text-danger"><?php echo $word ?></span></p>

    <p>Il paragrafo censurato è il seguente: <span class="bg-danger text-white fs-4"><?php echo $str_replace ?>.</span></p>
    
        
    
  </div>
</body>
</html>