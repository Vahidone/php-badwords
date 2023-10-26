
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- link BOOTSTRAP  -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col 6">
      <form action="landing-page-form-get.php" method="GET">
        <div class="mb-3">
          <label for="testo" class="form-label">Testo</label>
          <input type="text" class="form-control" id="testo" name="testo" placeholder="Scrivi un testo" aria-describedby="text">
         
        </div>
        <div class="mb-3">
          <label for="word" class="form-label">Parola proibita</label>
          <input type="text" class="form-control" name="word" placeholder="Scrivi la parola da censurare" id="word">
        </div>
      
        <button type="submit" class="btn btn-primary">Invio</button>
      </form>
      </div>
    </div>
  </div>
</body>
</html>