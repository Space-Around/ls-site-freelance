let form = document.querySelector(".form");

form.onsubmit = (event) => {

  event.preventDefault();


  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var address = document.querySelector("#email").value;
  if (reg.test(address) == false) {
    alert("Введите корректный e-mail");
  } else {

    let name = document.querySelector("#fname").value;
    let surname = document.querySelector("#lname").value;
    let email = document.querySelector("#email").value;
    let country = document.querySelector("#country").value;
    let message = document.querySelector("#message").value;
    

    let param = 'name=' + name + "&surname=" + surname + "&email=" + email + "&country=" + country + "&message=" + message;
    
    $.ajax({
        url: '/site2_1/php/validation.php',        
        method: 'post',            
        data: param,    
        success: function(data){  
            document.querySelector('#email').style.background = "white";
            document.querySelector('#fname').style.background = "white";
            document.querySelector('#lname').style.background = "white"

            if (data.indexOf("invalid_email") != -1) {
              document.querySelector('#email').style.background = "#ffb4b4";
            }

            if (data.indexOf("invalid_name") != -1) {
              document.querySelector('#fname').style.background = "#ffb4b4";
            }

            if (data.indexOf("invalid_surname") != -1) {
              document.querySelector('#lname').style.background = "#ffb4b4"
            }

            if (data.length == 0) {
              document.querySelector('#email').style.background = "white";
              document.querySelector('#fname').style.background = "white";
              document.querySelector('#lname').style.background = "white";

              alert("Данные успешно прошли проверку!");
            }
            
        }
    });
    alert("ФОРМА ОТПРАВЛЕНА!");

  }
  return false;
};
