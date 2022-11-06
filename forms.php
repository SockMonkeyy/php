<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PHP Forms</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="./home.html">WRM</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="/python/FlaskWebsite/templates/Portfolio.html"
                >Portfolio</a
              >
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <section
      class="d-flex align-items-center text-white"
      style="height: 100vh; background-color: black"
    >
      <div class="container text-center">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12">
            <h1>Embed in Html</h1>
            <p>
              <?php
                        echo "Hello World!";
                        ?>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section
      class="d-flex align-items-center text-white"
      style="height: 100vh; background-color: black"
    >
      <div class="container text-center">
        <div class="row">
          <div class="col-xl-6 col-md-6 col-sm-12">
            <img
              class="img-fluid"
              width="250px"
              src="/portfolio/assets/img/wrmlogo.svg"
              alt=""
            />
          </div>
          <div class="col-xl-6 col-md-6 col-sm-12">Column</div>
        </div>
      </div>
    </section>
    <script src="bs5.js"></script>
  </body>
</html>