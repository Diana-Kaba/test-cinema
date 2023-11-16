<?php
include 'db-actions.php';
?>

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
</div>

<!-- Hero Section end -->

<!-- Show films start  -->

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
        <div class="main-button">
          <?php
echo "<p class='direct'><i>{$str}</i></p>";
?>
          </div>
        </div>

  <?php
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

<!-- Show films end  -->

<!-- Sort & search films start -->

<div class="contact-page section" id="sort-and-search">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="row">
              <form id="contact-form" action="<?=$_SERVER['PHP_SELF']?>" method="POST" name="search">
                    <div class="col-lg-12">
                      <fieldset>
                      <label for="inputData" class="choose-sort"><h4>Введіть запит для пошуку:</h4></label>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="inputData" id="name" autocomplete="on" class="inp-search" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button btn-search" name="sendingSearch">Зберегти</button>
                      </fieldset>
                    </div>
              </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="right-content">
        <div class="row">
          <form id="contact-form" action="<?=$_SERVER['PHP_SELF']?>" method="POST" name="sort">
            <div class="col-lg-12">
              <fieldset>
                <label for="sort" class="choose-sort"><h4>Оберіть сортування карток:</h4></label>
                <select name="sort" class="sort">
                <option value="cmp_director" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "cmp_director") {
    echo "selected";
}
?>>Режисер</option>
                <option value="cmp_year" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "cmp_year") {
    echo "selected";
}
?>>Дата випуску</option>
                <option value="cmp_name" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "cmp_name") {
    echo "selected";
}
?>>Назва</option>
                <option value="cmp_genre" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "cmp_genre") {
    echo "selected";
}
?>>Жанр</option>
                <option value="cmp_rating" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "cmp_rating") {
    echo "selected";
}
?>>Рейтинг</option>
                <option value="cmp_studio" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "cmp_studio") {
    echo "selected";
}
?>>Кіностудія</option>
                <option value="cmp_sessions" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "cmp_sessions") {
    echo "selected";
}
?>>Сеанси</option>
                </select>
                </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button" name="sendingSort">Зберегти</button>
              </fieldset>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

<div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Результат пошуку:</h2>
          </div>
        </div>
        <div class="col-lg-6">
        </div>


        <?php
if (isset($_POST['sendingSearch'])) {
    global $str;
    $data = $_POST["inputData"];
    $res = search($movies, $data);
    if (!$res) {
        echo "<p class='empty'>На жаль, на Ваш запит інформація <b>відсутня</b>.</p>";
    } else {
        array_walk($res, "show");
    }
}
?>

      </div>
    </div>
  </div>
</div>

<!-- Sort & search films end  -->
