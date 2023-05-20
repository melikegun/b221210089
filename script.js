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
