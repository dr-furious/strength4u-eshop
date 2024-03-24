document.addEventListener("DOMContentLoaded", () => {
  const userBtn = document.getElementById("user-btn"); // get user icon button
  const userNav = document.getElementById("user-nav"); // get user-nav, which is hidden by default

  userBtn.addEventListener("click", () => {
    userNav.classList.toggle("hidden"); // display and hide the user-nav
  });

  const showMobileNavBtn = document.getElementById("show-mobile-nav-btn");
  const hideMobileNavBtn = document.getElementById("hide-mobile-nav-btn");
  const mobileNav = document.getElementById("mobile-nav");
  const showNavLi = document.getElementById("show-nav-li");
  const hideNavLi = document.getElementById("hide-nav-li");

  showMobileNavBtn.addEventListener("click", () => {
    showNavLi.classList.add("hidden");
    mobileNav.classList.toggle("max-h-0");
    mobileNav.classList.toggle("max-h-[20rem]");
    hideNavLi.classList.remove("hidden");
  });

  hideMobileNavBtn.addEventListener("click", () => {
    hideNavLi.classList.add("hidden");
    mobileNav.classList.toggle("max-h-0");
    mobileNav.classList.toggle("max-h-[20rem]");
    showNavLi.classList.remove("hidden");
  });
});
