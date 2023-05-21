document.addEventListener('DOMContentLoaded', function() {
  var contactForm = document.getElementById('contactForm');
  var clearButton = document.getElementById('clearButton');
  var submitButton = document.getElementById('submitButton');
  
  // Temizle butonuna tıklama olayı
  clearButton.addEventListener('click', function() {
    contactForm.reset();
  });
  
  // Gönder butonuna tıklama olayı
  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Formun otomatik olarak gönderilmesini engelle
    
    // İsim kontrolü
    var isimInput = document.getElementById('isim');
    if (isimInput.value.trim() === '') {
      alert('İsim alanı boş olamaz');
      return;
    }
    
    // Soyad kontrolü
    var soyadInput = document.getElementById('soyad');
    if (soyadInput.value.trim() === '') {
      alert('Soyad alanı boş olamaz');
      return;
    }
    
    // E-posta kontrolü
    var emailInput = document.getElementById('email');
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
      alert('Geçerli bir e-posta adresi giriniz');
      return;
    }
    
    // Telefon kontrolü
    var numaraInput = document.getElementById('numara');
    var numaraRegex = /^\d{3}-\d{3}-\d{4}$/;
    if (numaraInput.value.trim() !== '' && !numaraRegex.test(numaraInput.value.trim())) {
      alert('Geçerli bir telefon numarası giriniz (XXX-XXX-XXXX)');
      return;
    }
    
    // Gönder
    showSubmittedData();
  });
  
  // Gönderilen verileri göster
  function showSubmittedData() {
    var submittedDataDiv = document.getElementById('submittedData');
    submittedDataDiv.style.display = 'block';
    
    var isimOutput = document.getElementById('isimOutput');
    isimOutput.textContent = 'İsim: ' + document.getElementById('isim').value;
    
    var soyadOutput = document.getElementById('soyadOutput');
    soyadOutput.textContent = 'Soyad: ' + document.getElementById('soyad').value;
    
    var emailOutput = document.getElementById('emailOutput');
    emailOutput.textContent = 'E-posta: ' + document.getElementById('email').value;
    
    var mesajOutput = document.getElementById('mesajOutput');
    mesajOutput.textContent = 'Mesaj: ' + document.getElementById('mesaj').value;
    
    var numaraOutput = document.getElementById('numaraOutput');
    numaraOutput.textContent = 'Telefon: ' + document.getElementById('numara').value;
    
    var cinsiyetOutput = document.getElementById('cinsiyetOutput');
    cinsiyetOutput.textContent = 'Cinsiyet: ' + document.getElementById('cinsiyet').value;
    
    var tarihOutput = document.getElementById('tarihOutput');
    tarihOutput.textContent = 'Doğum Tarihi: ' + document.getElementById('tarih').value;
    
    var sehirOutput= document.getElementById('sehirOutput');
    sehirOutput.textContent = 'Şehir: ' + document.getElementById('sehir').value;
  }
});
