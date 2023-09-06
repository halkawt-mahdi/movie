# movie

This is a simple script to retirve 100 movies from The Movie DB through an API, and reviews throught Firebase. 

To configure this script:
A- Configuring The Movie DB
1- Create an account on The Movie DB and retirve teh API key and Access Token Auth
2- In Functions.php update getPopularMovies() function (Change teh bearer to yours)
3- In footer.php update the api_key to yours

B- Configuring Firebase
1- Create a project on firebase 
2- create an app for web and replace teh config details to yours on header.php
3- Enable gRPC since I have used Google Cloud Library
4- Updgarde your PHP version to latest 8.1.X

