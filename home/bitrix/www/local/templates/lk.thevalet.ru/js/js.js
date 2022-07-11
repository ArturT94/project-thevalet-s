const betaBtn = document.querySelector(".beta_pop");
const betaPop = document.querySelector("#popup__beta");
const deleteCarBtn = document.querySelectorAll(".img__trash");
const deleteCarBtnL = document.querySelectorAll(".img__trash-l");
const deleteCarPop = document.querySelector("#delete__car");

betaBtn.addEventListener("click", function (e) {
  betaPop.classList.add("open");
});

for (let i = 0; i < deleteCarBtn.length; i++) {
  deleteCarBtn[i].addEventListener("click", function (e) {
    deleteCarPop.classList.add("open");
  });
}
for (i = 0; i < deleteCarBtnL.length; i++) {
  deleteCarBtnL[i].addEventListener("click", function () {
    deleteCarPop.classList.add("open");
  });
}
