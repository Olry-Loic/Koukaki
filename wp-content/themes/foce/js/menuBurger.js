const sidenav = document.getElementById("mySidenav");
const toggleBtn = document.getElementById("toggleBtn");
const links = sidenav.querySelectorAll("a");
const body = document.body;

toggleBtn.onclick = toggleNav;

for (const link of links) {
  link.addEventListener("click", () => {
    closeNav();
  });
}

function toggleNav() {
  const isActive = sidenav.classList.toggle("active");
  toggleBtn.classList.toggle("active");

  if (isActive) {
    body.style.overflow = "hidden";
    body.addEventListener("wheel", preventScroll);
  } else {
    body.style.overflow = "";
    body.removeEventListener("wheel", preventScroll);
  }
}

function closeNav() {
  sidenav.classList.remove("active");
  toggleBtn.classList.remove("active");
  body.style.overflow = "";
  body.removeEventListener("wheel", preventScroll);
}

function preventScroll(event) {
  event.preventDefault();
}


/*const sidenav = document.getElementById("mySidenav");
const toggleBtn = document.getElementById("toggleBtn");

toggleBtn.onclick = toggleNav;

function toggleNav() {
  sidenav.classList.toggle("active");
  toggleBtn.classList.toggle("active");
}*/