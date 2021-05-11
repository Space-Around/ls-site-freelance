let form = document.querySelector(".form");

form.onsubmit = (form) => {
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var address = form.target.elements.email.value;
  if (reg.test(address) == false) {
    alert("Введите корректный e-mail");
  } else {
    alert("ФОРМА ОТПРАВЛЕНА!");
  }
  return false;
};
