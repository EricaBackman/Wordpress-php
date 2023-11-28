const mobileMenu = document.querySelector(".mobile-menu");
const navList = document.querySelector(".nav-list");

mobileMenu.addEventListener("click", () => {

  /* Toggle active class */
  mobileMenu.classList.toggle("active");
  navList.classList.toggle("active");

  /* Toggle aria-expanded value */
  let menuOpen = navList.classList.contains("active");
  console.log(menuOpen)
  let newMenuOpenStatus = menuOpen;
  mobileMenu.setAttribute("aria-expanded", newMenuOpenStatus);
})

// close mobile menu
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  mobileMenu.classList.remove("active");
  navList.classList.remove("active");
//   Need to add Toggle aria-expanded value here as well because it stays as true when you click a menu item
}))
