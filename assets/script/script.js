let iconBurger = document.querySelector(".icon-burger");

iconBurger.addEventListener("click", () => {
  console.log("tmbol di tekan");
  let asidenav = document.querySelector("#asideNav");
  let topnav = document.querySelector(".col-right");
  let cardContent = document.querySelector(".container-card-content");
  asidenav.classList.toggle("slideactive");
  topnav.classList.toggle("navtopActive")
  cardContent.classList.toggle("flexActive");
});


let wrapTop = document.querySelector(".wraper-nav-content");
document.querySelector(".content-nav-top").addEventListener("click", () => {
  wrapTop.classList.toggle("activeCntn");
})
