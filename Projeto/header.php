<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
      href="css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
      crossorigin="anonymous">
    <link rel="Stylesheet" href="css/style.css" type="text/css">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-dark  bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" 
          width="35" 
          height="35" 
          alt="">Lets
      </a>
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" 
                href="#" 
                id="home-tab" 
                data-toggle="tab" 
                href="#home" 
                role="tab" 
                aria-controls="home" 
                aria-selected="true"
                >Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" 
                href="#" 
                id="about-tab" 
                data-toggle="tab" 
                href="#about" 
                role="tab" 
                aria-controls="about" 
                aria-selected="true"
                >About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" 
                href="#" 
                id="gallery-tab" 
                data-toggle="tab" 
                href="#gallery" 
                role="tab" 
                aria-controls="gallery" 
                aria-selected="true"
                >Gallery
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" 
                href="#" 
                id="contact-tab" 
                data-toggle="tab" 
                href="#contact" 
                role="tab" 
                aria-controls="contact" 
                aria-selected="true"
                >Contact
              </a>
            </li>    
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
          <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">...</div>
          <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
    </nav>
    