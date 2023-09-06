<?php
require_once('./libs/vendor/autoload.php');

function requestLinks($page){
    $links = array(
        'all_movies'    =>  'https://api.themoviedb.org/3/discover/movie?include_adult=false&include_video=false&language=en-US&page=' . $page . ' &sort_by=popularity.desc',
    );
    return $links;
}
function getPopularMovies($qu, $request){
    $movies = array();
    for($i = 1; $i <= 2; $i++){
    $link = requestLinks($i);
    $client = new \GuzzleHttp\Client();

    $response = $client->request( $request, $link[$qu], [
      'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3ZWU5YThkZTYwYjM0NGY2ZjBiZmZmODljZGRiMGI4YyIsInN1YiI6IjY0Zjc2Yzc1ZmZjOWRlMDBhYzRmMjRkNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.HEpsZVBMQQYmIBdsHecNOvhOzJAIDhdI1frhDTCFoXQ',
        'accept' => 'application/json',
      ],
    ]);
    $moviesData = json_decode($response->getBody(), true);
    if(isset($moviesData['results'])){
        foreach($moviesData['results'] as $movie) {
            $movies[] = $movie;
        }
    }
}
    
    return  $movies;
}
function getGenres(){
    $data = array();
    $client = new \GuzzleHttp\Client();

    $response = $client->request('GET', 'https://api.themoviedb.org/3/genre/movie/list?language=en', [
      'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3ZWU5YThkZTYwYjM0NGY2ZjBiZmZmODljZGRiMGI4YyIsInN1YiI6IjY0Zjc2Yzc1ZmZjOWRlMDBhYzRmMjRkNyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.HEpsZVBMQQYmIBdsHecNOvhOzJAIDhdI1frhDTCFoXQ',
        'accept' => 'application/json',
      ],
    ]);
    $genreData = json_decode($response->getBody(), true);

    foreach($genreData['genres'] as $dd){
        $data[$dd['id']] = $dd['name'];
    }
    return $data;

}