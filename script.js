document.addEventListener("DOMContentLoaded", function() {
  var clearButton = document.getElementById("clearButton");
  var submitButton = document.getElementById("submitButton");

  clearButton.addEventListener("click", clearForm);
  submitButton.addEventListener("click", validateForm);
});

function clearForm() {
  document.getElementById("contactForm").reset();
}

function validateForm() {
  var isim = document.getElementById("isim").value;
  var soyad = document.getElementById("soyad").value;
  var email = document.getElementById("email").value;
  var mesaj = document.getElementById("mesaj").value;
  var numara = document.getElementById("numara").value;
  var cinsiyet = document.getElementById("cinsiyet").value;
  var tarih = document.getElementById("tarih").value;
  var sehir = document.getElementById("sehir").value;
  

  if (isim && email && mesaj) {
    if (isValidEmail(email)) {
      document.getElementById("isimOutput").textContent = "İsim: " + isim;
      document.getElementById("soyadOutput").textContent = "Soyad: " + soyad;
      document.getElementById("emailOutput").textContent = "E-posta: " + email;
      document.getElementById("mesajOutput").textContent = "Mesaj: " + mesaj;
      document.getElementById("numaraOutput").textContent = "Telefon: " + numara;
      document.getElementById("cinsiyetOutput").textContent = "Cinsiyet: " + cinsiyet;
      document.getElementById("tarihOutput").textContent = "Doğum Tarihi: " + tarih;
      document.getElementById("sehirOutput").textContent = "Şehir: " + sehir;
      document.getElementById("submittedData").style.display = "block";
    } else {
      alert("Geçerli bir e-posta adresi giriniz.");
    }
  } else {
    alert("Tüm alanları doldurunuz.");
  }
}

function isValidEmail(email) {
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}


$(document).ready(function() {
  var apiKey = '0b9d0edbdf222fd3de1d5c3c9a7fe274'; // TMDb API anahtarınızı buraya girin

  $.ajax({
      url: 'https://api.themoviedb.org/3/movie/popular',
      data: {
          api_key: apiKey
      },
      success: function(response) {
          var movies = response.results;

          // Filmleri döngüyle gezerek görsel ve başlık olarak görüntüleyebilirsiniz
          movies.forEach(function(movie) {
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