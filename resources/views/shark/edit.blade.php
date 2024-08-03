<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shark App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">SharkApp</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Shark Alert</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <br>
    
       
            <h1>Shark Create Page</h1>
            <form action="{{ route('sharks.update', $shark->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" value="{{ $shark->name }}" name="name" class="form-control" id="nameShark" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" value="{{ $shark->email }}" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select name="shark_level" id="level">
                        <option value="{{ $shark->shark_level }}"></option>
                        <option value="1">Sees Sunlight</option>    
                        <option value="2">Foosball Fanatic</option>
                        <option value="3">Basement Dweller</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>