<!-- Hero Section start -->

<div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to the rex</h6>
            <h2>BEST MOVIES SITE EVER!</h2>
            <p>The Rex is a cinema in the town of Berkhamsted, Hertfordshire, England. Designed in the art deco style by David Evelyn Nye in 1936, the cinema opened to the public in 1938. After 50 years of service, the cinema closed in 1988 and became derelict. The building was listed Grade II by English Heritage, and following a campaign to save the Rex by a local entrepreneur, the cinema re-opened to the public in 2004.</p>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/banner-rex.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Hero Section end -->

<!-- Sort films start  -->
<div class="section trending" id="trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Наразі</h6>
            <h2>У кіно</h2>
          </div>
        </div>
        <div class="col-lg-6">
        <!-- <div class="main-button">
        // echo "<p><i>$str</i></p>";
            <a href="shop.html">View All</a>
          </div> -->
        </div>

  <?php
    include('db-movies.php');
    include('db-actions.php');

    if (isset($_POST["sort"])) {
      $how_to_sort = $_POST["sort"];
      sorting($how_to_sort);
    }
    array_walk($movies, "show");
  ?>

      </div>
    </div>
  </div>
</div>

<!-- Sort films end  -->
