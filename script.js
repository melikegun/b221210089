document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('contactForm');
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Sayfa yenilenmesini engelle
  
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;
      var gender = document.getElementById('gender').value;
      // Diğer form elemanlarından değerleri al
  
      displaySubmittedData(name, email, phone, gender);
      form.reset(); // Formu sıfırla
    });


    function displaySubmittedData(name, email, phone, gender, birthdate, newsletter, avatar, message) {
        var nameOutput = document.getElementById('nameOutput');
        var emailOutput = document.getElementById('emailOutput');
        var phoneOutput = document.getElementById('phoneOutput');
        var genderOutput = document.getElementById('genderOutput');
        var birthdateOutput = document.getElementById('birthdateOutput');
        var newsletterOutput = document.getElementById('newsletterOutput');
        var avatarOutput = document.getElementById('avatarOutput');
        var messageOutput = document.getElementById('messageOutput');
      
        nameOutput.textContent = 'İsim: ' + name;
        emailOutput.textContent = 'E-posta: ' + email;
        phoneOutput.textContent = 'Telefon: ' + phone;
        genderOutput.textContent = 'Cinsiyet: ' + gender;
        birthdateOutput.textContent = 'Doğum Tarihi: ' + birthdate;
        newsletterOutput.textContent = 'Bülten Aboneliği: ' + (newsletter ? 'Evet' : 'Hayır');
        avatarOutput.textContent = 'Avatar: ' + avatar;
        messageOutput.textContent = 'Mesaj: ' + message;
      
        document.getElementById('submittedData').style.display = 'block';
      }
  });