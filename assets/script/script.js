let iconBurger = document.querySelector(".icon-burger");

iconBurger.addEventListener("click", () => {
  console.log("tmbol di tekan");
  let asidenav = document.querySelector("#asideNav");
  let topnav = document.querySelector(".col-right");
  asidenav.classList.toggle("slideactive");
  topnav.classList.toggle("navtopActive")
});

