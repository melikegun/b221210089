$(document).ready(function() {
    var apiKey = '0b9d0edbdf222fd3de1d5c3c9a7fe274'; // TMDb API anahtarınızı buraya girin
  
    $.ajax({
        url: 'https://api.themoviedb.org/3/movie/popular',
        data: {
            api_key: apiKey
        },
        success: function(response) 
        {
            var movies = response.results;
  
            // Filmleri döngüyle gezerek görsel ve başlık olarak görüntüleyebilirsiniz
            movies.forEach(function(movie) 
            {
                var imageUrl = 'https://image.tmdb.org/t/p/w200' + movie.poster_path;
                var title = movie.title;
  
                // HTML'e film görselini ve başlığını ekleyin
                var movieElement = '<div class="movie">' +
                    '<img src="' + imageUrl + '">' +
                    '<p>' + title + '</p>' +
                    '</div>';
  
                $('.sayfaArkaplan').append(movieElement);
            });
        }
    });
  });