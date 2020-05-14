<?php include("header.php");?>
<body>
    <div class="container">
        <h1 class="text-right"><a href="index.php">My Website</a></h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="section1.php">Section 1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="section2.php">Section 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="section3.php">Section 3</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="section4.php">Section 4</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Cooming Soon</a>
                  </li>
            </div>
        </nav>
        <div class="jumbotron">
          <h1 class="display-4">Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </div>
        <?php include("footer.php");?>
    </div>
</body>
</html>