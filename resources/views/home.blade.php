@extends('layouts.app')

@section('content')

    <div id="section1" class="container bg-dark text-white text-center" style="padding:100px;">
        <h1>Welcome to Bioxy Website</h1>
        <br>
        <p class= "alert alert-dark">This place where you can knows everything about Biology and improve your with aesthetic standard visual design!</p>
    </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4">
        <h2 class="mt-4">Bioxy Access</h2>
        <p>You can access our website with this link</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item btn btn-dark">
            <a class="nav-link" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">123</a>
          </li>
          <br>
          <li class="nav-item btn btn-dark">
            <a class="nav-link "  >123</a>
          </li>
          <br>
          <li class="nav-item btn btn-dark">
            <a class="nav-link "  >123</a>
          </li>
        </ul>
        <hr class="d-sm-none">

        <br><br><br><br>

        <h2>About us</h2>
        <h5>Photo of our Students:</h5>
        <img src="/img/female.jpg" width="300px" height="350px">
        <p>Picture of one of our students in Univesity of California Los Angeles.</p>
      </div>

      <div class="col-sm-8">
        <h2>Achievement</h2>
        <h5>Description</h5>
        <img src="/img/scientist.jpg" width="750px" height="300px">
        <p>Description</p>
        <p>Description. </p>
  
        <h2 class="mt-5">Achievement</h2>
        <h5>Description</h5>
        <img src="/img/gathering.jpg" width="750px" height="300px">
        <p>Description</p>
        <p>Description. </p>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-start" id="demo">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title">Bioxy's Story</h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <p class="colorp">Bioxy.</p>
    </div>
  </div>

  <div class="mt-5">
    <h3>Bioxy Short Story</h3>
    <p>Short story about how we can build some eCommerce like Bioxy</p>
    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
      Open Story
    </button>
  </div>

@endsection