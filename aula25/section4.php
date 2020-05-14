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
                  <li class="nav-item active">
                    <a class="nav-link" href="section4.php">Section 4</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Cooming Soon</a>
                  </li>
            </div>
        </nav>
<!--This is section 4-->
<section class="card border-top-0 border-right-0 border-left-0 mb-2">
            <div class="card-body">
                <h5 class="card-title">Section 4</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta velit nihil voluptatum praesentium, itaque quas quis id officiis consequuntur quasi, numquam, distinctio facilis nulla odio fugiat cupiditate vitae odit vel.</p>
            </div>
</section>
<?php include("footer.php");?>
    </div>
</body>
</html>