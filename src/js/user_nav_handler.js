document.addEventListener("DOMContentLoaded", () => {
  const userBtn = document.getElementById("user-btn"); // get user icon button
  const userNav = document.getElementById("user-nav"); // get user-nav, which is hidden by default

  userBtn.addEventListener("click", () => {
    userNav.classList.toggle("hidden"); // display and hide the user-nav
  });
});
