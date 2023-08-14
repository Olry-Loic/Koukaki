const sidenav = document.getElementById("mySidenav");
const toggleBtn = document.getElementById("toggleBtn");
const links = document.querySelectorAll("nav li");

toggleBtn.onclick = toggleNav;

links.forEach(link => {
  link.addEventListener("click", closeNav);
});

document.addEventListener("scroll", closeNav);

function toggleNav() {
  sidenav.classList.toggle("active");
  toggleBtn.classList.toggle("active");
}

function closeNav() {
  sidenav.classList.remove("active");
  toggleBtn.classList.remove("active");
}
