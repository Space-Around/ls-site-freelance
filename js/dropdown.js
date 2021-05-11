let music = document.querySelector(".dropbtn");
let content = document.querySelector(".dropdown-content");
let show = false;

music.onmouseover = () => {
  content.style.display = "flex";
};
content.onmouseover = () => {
  content.style.display = "flex";
};
music.onmouseout = () => {
  content.style.display = "none";
};
content.onmouseout = () => {
  content.style.display = "none";
};
