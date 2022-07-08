const serviceButton = document.querySelectorAll(".serv-button");
const serviceButtonSecond = document.querySelectorAll(".serv-button-second");
const vltButton = document.querySelectorAll(".vlt-heit-btn");
const buttonNext = document.querySelector(".button_nextt");

if (serviceButton) {
  for (let i = 0; i < serviceButton.length; i++) {
    btnFlag = false;
    serviceButton[i].addEventListener("click", function () {
      flag = false;
      for (let j = 0; j < serviceButtonSecond.length; j++) {
        if (serviceButtonSecond[j].classList.contains("active")) {
          alert("Следует выбрать одну или ряд ислуг из ОДНОГО раздела ;)");
          flag = true;
        }
      }
      if (!flag) {
        if (serviceButton[i].classList.contains("active")) {
          serviceButton[i].classList.remove("active");
          if (!document.querySelector(".serv-button.active")) {
            buttonNext.innerHTML = "выберите услугу";
          }
        } else {
          serviceButton[i].classList.add("active");
          buttonNext.innerHTML = "далее";
        }
      }
    });
  }

  for (let i = 0; i < serviceButtonSecond.length; i++) {
    btnFlag = false;
    serviceButtonSecond[i].addEventListener("click", function () {
      flag = false;
      for (let j = 0; j < serviceButton.length; j++) {
        if (serviceButton[j].classList.contains("active")) {
          alert("Следует выбрать одну или ряд ислуг из ОДНОГО раздела ;)");
          flag = true;
        }
      }
      if (!flag) {
        if (serviceButtonSecond[i].classList.contains("active")) {
          serviceButtonSecond[i].classList.remove("active");
          if (!document.querySelector(".serv-button-second.active")) {
            buttonNext.innerHTML = "выберите услугу";
          }
        } else {
          serviceButtonSecond[i].classList.add("active");
          buttonNext.innerHTML = "далее";
        }
      }
    });
  }
}

if (vltButton) {
  for (let i = 0; i < vltButton.length; i++) {
    vltButton[i].addEventListener("click", function (e) {
      vltButton[i].classList.toggle("active");
    });
  }
}
