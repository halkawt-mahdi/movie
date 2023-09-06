<?php
require_once("includes/header.php");
// $movies = getPopularMovies('all_movies', 'GET', null);
$genres = getGenres();
$movies = getPopularMovies('all_movies', 'GET');
$genresNames = getGenres();
?>
<div class="container">
  <div class="row" data-grid>
    <div class="col-md-3 mt-2 mb-2">

      <input type="text" data-grid-control="text-filter" class="form-control" data-path=".title" placeholder="Search through movie titles ...">
    </div>
    <div class="col-md-3 mt-2 mb-2">
      <input type="text" data-grid-control="text-filter" class="form-control" data-path=".year" placeholder="Search through movie release year ...">
      </div>
    <div class="col-md-3 mt-2 mb-2">
      <input type="text" data-grid-control="text-filter" class="form-control" data-path=".rating" placeholder="Search through movie rating ...">
      </div>
    <div class="col-md-3 mt-2 mb-2">
      <select name="genre" class="form-select" data-grid-control="select-filter">
        <option value="all">All Genres</option>

        <?php
        foreach ($genres as $key => $value) {
        ?>
          <option value="<?php echo $key; ?>" data-path=".<?php echo $value; ?>"><?php echo $value; ?></option>
        <?php
        }
        ?>
      </select>

  </div>
  <hr>
  <?php
  foreach ($movies as $movie) {
  ?>
    <div class="col-6 col-md-3 " data-grid-item>
      <a href="#" onclick="getMovieDetails('<?php echo $movie['id']; ?>', '<?php echo $genresNames[$movie['genre_ids'][0]]; ?>')" data-bs-toggle="modal" data-bs-target="#movieDetails">

        <div class="card mb-2 ">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/original/<?php echo $movie['poster_path']; ?>" alt="<?php if (isset($movie['name'])) {
                                                                                                                          echo $movie['name'];
                                                                                                                        } else {
                                                                                                                          echo $movie['title'];
                                                                                                                        } ?>" style="width:100%">
          <div class="card-body special-card-body">
            <h5 class="card-title title"><?php if (isset($movie['name'])) {
                                            echo $movie['name'];
                                          } else {
                                            echo $movie['title'];
                                          } ?></h5>
            <div class="other-details">


              <div class="rating float-left"><?php if (isset($movie['vote_average'])) {
                                                echo $movie['vote_average'];
                                              } ?></div>
              <?php if (isset($movie['release_date'])) {
                $the_date = explode('-', $movie['release_date']);
              ?>
                <div class="year float-right <?php echo $the_date[0]; ?>"><?php echo $the_date[0]; ?></div>

              <?php

              } ?>
              <div class="genre">
                <span class="genree <?php
                                    echo $genresNames[$movie['genre_ids'][0]];
                                    ?>"><?php
                  echo $genresNames[$movie['genre_ids'][0]];
                  ?></span>
              </div>

            </div>
            <p class="card-text d-none"><?php echo $movie['overview']; ?></p>
            <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
          </div>
        </div>
      </a>

    </div>
  <?php
  }
  ?>

</div>
<div class="row">
  <div class="col-md-12">
    <nav aria-label="pagination" data-grid-control="pagination" data-prev="&laquo;" data-next="&raquo;" data-first="First" data-last="Last"></nav>
  </div>
</div>
</div>
<?php
require_once("includes/footer.php");
?>