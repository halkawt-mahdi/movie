<!-- Modal -->
<div class="modal fade" id="movieDetails"  data-bs-keyboard="true" tabindex="-1" aria-labelledby="movieDetails" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body p-0">
        <span class="d-none" id="movieid"></span>
        <div class="row p-0">
            <div class="col-md-4">
                <img src="" id="moviePoster" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
                <h1 id="movieTitle" class="pt-2"></h1>
                <ul class="movieLi p-0">
                    <li id="movieRating"></li>
                    <li id="movieGenre"></li>
                    <li id="movieYear"></li>
                </ul>
                <hr>
                <p id="movieDesc"></p>
                <hr>
                <h4 class="pt-2">Reviews</h4>
                <ul id="reviews" style="height: 230px; overflow: overlay" class="p-0">

                </ul>

            </div>
            <div class="col-md-12 ">
                <form>
                <div class="row mt-2 p-2">
                    <div class="col-md-6">
                        <input type="text" id="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-6 mb-2">
                    <input type="email"  id="email" class="form-control" placeholder="Email" required>

                    </div>
                    <div class="col-md-12">
                    <textarea id="review" class="form-control mb-2"  cols="30" rows="2" required></textarea>
                    <button type="button" id="submitBtn" class="btn btn-success form-control">Submit</button>
                    </div>
                    </div>
            </div>
            
        </div>
        </form>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/datagrid.min.js"></script>
<script>
     function truncateText(text, maxWords) {
    var words = text.split(' ');
    if (words.length > maxWords) {
      return words.slice(0, maxWords).join(' ') + '...'; // Add ellipsis if truncated
    }
    return text;
  }
    datagrid({
        currentPage: 0,
        pageSize: 12,
        pagesRange: 10
    });
    function getMovieDetails(id, g){
        $.ajax({
        url: "https://api.themoviedb.org/3/movie/" + id + "?api_key=7ee9a8de60b344f6f0bfff89cddb0b8c",
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            $('#moviePoster').attr('src', 'https://image.tmdb.org/t/p/original/' + res.poster_path);
            $('#movieTitle').text(res.title);
            $('#movieDesc').text(res.overview);
            $('#movieRating').text(res.vote_average);
            $('#movieid').text(res.id);
            $('#movieYear').text(res.release_date);
            $('#movieGenre').text(g);
            console.log(res);
            // alert(res);
        }
    });
    //bring API's reviews
    $.ajax({
        url: "https://api.themoviedb.org/3/movie/" + id + "/reviews?api_key=7ee9a8de60b344f6f0bfff89cddb0b8c",
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            var ul = $('#reviews');

      // Loop through the data and create <li> elements
      var i = 0;
      $.each(res.results, function (index, item) {
        if(i < 4){
           
      
        var li = $('<li>'); // Assuming 'text' is the property containing the item's text
        // Create a heading (e.g., <h2>) inside the <li>
        var heading = $('<h5>').text(item.author); // Replace 'headingText' with the actual property name
        li.append(heading);

        // Create a paragraph (e.g., <p>) inside the <li>
        var paragraph = $('<p>').text(truncateText(item.content,25)); // Replace 'paragraphText' with the actual property name
        li.append(paragraph);
        ul.append(li); // Append the <li> to the <ul>
    }
        i++;
        
      });
            console.log(res);
        }
    });

    //Bring local reviews
    $.ajax({
        url: "includes/reviewsHandler.php?movieID=" + $('#movieid').text(),
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            var ul = $('#reviews');

      // Loop through the data and create <li> elements
      $.each(res, function (index, item) {
           
      
        var li = $('<li>'); // Assuming 'text' is the property containing the item's text
        // Create a heading (e.g., <h2>) inside the <li>
        var heading = $('<h5>').text(item.name); // Replace 'headingText' with the actual property name
        li.append(heading);

        // Create a paragraph (e.g., <p>) inside the <li>
        var paragraph = $('<p>').text(truncateText(item.review,25)); // Replace 'paragraphText' with the actual property name
        li.append(paragraph);
        ul.append(li); // Append the <li> to the <ul>

        
      });
            console.log(res);
        }
    });
    
  
    }
</script>

</body>
</html>