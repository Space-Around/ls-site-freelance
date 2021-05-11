let items = document.querySelectorAll(".item a");

items.forEach((el) => {
  el.onmouseover = () => {
    el.style.color = "green";
  };
  el.onmouseout = () => {
    el.style.color = "white";
  };
});
