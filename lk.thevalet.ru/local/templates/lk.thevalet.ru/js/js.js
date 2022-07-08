const betaBtn = document.querySelector(".beta_pop");
const betaPop = document.querySelector("#popup__beta");
const deleteCarBtn = document.querySelector(".img__trash");
const deleteCarPop = document.querySelector("#delete__car");

betaBtn.addEventListener("click", function (e) {
  betaPop.classList.add("open");
});
deleteCarBtn.addEventListener("click", function (e) {
  deleteCarPop.classList.add("open");
});
