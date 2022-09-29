<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css">

    <title>T1-PROFIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-3 mb-2 bg-primary text-white">CONTACT</div>

    <h1>CONTACT ME !</h1>
    <p class="lead">
        For further information about the service please contact me
      </p>

{{-- bagian isi nama --}}
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Your Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your name">
  </div>

{{-- bagian isi email --}}
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
  </div>

{{-- button send --}}
<nav class="navbar bg-light">
    <div class="container-fluid">
      <form class="d-flex" role="search">
        <button class="btn btn-outline-success" type="submit">Send</button>

        {{-- button cancel --}}
        <div class="container-fluid">
            <form class="d-flex" role="cancel">
              <button class="btn btn-outline-success" type="cancel">Cancel</button>
            </form>
          </div>
      </form>

    </div>
  </nav>

<br>
{{-- bagian button pilih halaman --}}
<nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/">Previous</a></li>
      <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/">1</a></li>
      <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/portofolio">2</a></li>
    </ul>
  </nav>

</body>
</html>
