<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg text-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">clubp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">edit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">delete</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="/contact" method="POST">
    @csrf
        <label>namep</label></br>
        <input type="text" name="namep" id="namep" class="form-control"></br>
        <label>emailp</label></br>
        <input type="text" name="emailp" id="emailp" class="form-control"></br>
        <label>numbp</label></br>
        <input type="text" name="numbp" id="numbp" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
</div>
</div>
</div>