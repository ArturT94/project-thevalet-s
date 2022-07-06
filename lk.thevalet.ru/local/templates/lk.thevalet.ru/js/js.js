//Собираем переменные
const servicePopupLinks = document.querySelectorAll(".service__icon");
const body = document.querySelector("body");
const lockPadding = document.querySelectorAll(".lock-padding");
const userPopupLinks2 = document.querySelectorAll(".profile");
const doublePopupLinks = document.querySelectorAll(".double__popup__click");

let PopUpServiceUnlock = true;
let PopUpUserUnlock = true;
let PopUpOrderUnlock = true;
let PopUpUser2_windowUnlock = true;

const timeout = 3;

//Создаем событие на открытие информационного popup (инфо о услуге)
if (servicePopupLinks.length > 0) {
  for (let index = 0; index < servicePopupLinks.length; index++) {
    const servicePopupLink = servicePopupLinks[index];
    servicePopupLink.addEventListener("click", function (e) {
      const popupName = servicePopupLink.getAttribute("href").replace("#", "");
      const curentPopup = document.getElementById(popupName);
      popupOpen(curentPopup);
      e.preventDefault();
    });
  }
}
const popupCloseIcon = document.querySelectorAll(".service__close-popup");
if (popupCloseIcon.length > 0) {
  for (let index = 0; index < popupCloseIcon.length; index++) {
    const el = popupCloseIcon[index];
    el.addEventListener("click", function (e) {
      popupClose(el.closest(".popup"));
      e.preventDefault();
    });
  }
}
function popupOpen(curentPopup) {
  if (curentPopup && PopUpServiceUnlock) {
    const popupServiceActive = document.querySelector(".popup.open");
    if (popupServiceActive) {
      popupClose(popupServiceActive, false);
    }
    curentPopup.classList.add("open");
  }
}
function popupClose(popupServiceActive, PopUpServiceUnlock = true) {
  if (PopUpServiceUnlock) {
    popupServiceActive.classList.remove("open");
  }
}

//Создаем событие на открытие Меню (профиля)
if (userPopupLinks2.length > 0) {
  for (let index = 0; index < userPopupLinks2.length; index++) {
    const userPopupLink2 = userPopupLinks2[index];
    userPopupLink2.addEventListener("click", function (e) {
      const popupName = userPopupLink2.getAttribute("href").replace("#", "");
      const curentPopup2 = document.getElementById(popupName);
      popupOpen(curentPopup2);
      e.preventDefault();
    });
  }
}
const popupCloseIcon2 = document.querySelectorAll(".menu__close");
if (popupCloseIcon2.length > 0) {
  for (let index = 0; index < popupCloseIcon2.length; index++) {
    const el = popupCloseIcon2[index];
    el.addEventListener("click", function (e) {
      popupClose(el.closest(".user__popup"));
      e.preventDefault();
    });
  }
}

function popupOpen(curentPopup2) {
  if (curentPopup2 && PopUpUserUnlock) {
    const popupActive2 = document.querySelector(".user__popup.open");
    if (popupActive2) {
      popupClose(popupActive2, false);
    }
    curentPopup2.classList.add("open");
  }
}
function popupClose(popupActive2, PopUpUserUnlock = true) {
  if (PopUpUserUnlock) {
    document.querySelector(".Close__user__popup__lvl__2").click(); //закрываем прочие pop-up
    popupActive2.classList.remove("open");
  }
}

//Создаем событие на открытие Меню второго уровня (в профиле)
if (user__popup__lvl__2__links.length > 0) {
  for (let index = 0; index < user__popup__lvl__2__links.length; index++) {
    const user__popup__lvl__2__link = user__popup__lvl__2__links[index];
    user__popup__lvl__2__link.addEventListener("click", function (e) {
      const popupName4 = user__popup__lvl__2__link
        .getAttribute("href")
        .replace("#", "");
      const curentPopup4 = document.getElementById(popupName4);
      popupOpen(curentPopup4);
      e.preventDefault();
    });
  }
}
const popupCloseIcon4 = document.querySelectorAll(
  ".Close__user__popup__lvl__2"
);
if (popupCloseIcon4.length > 0) {
  for (let index = 0; index < popupCloseIcon4.length; index++) {
    const el = popupCloseIcon4[index];
    el.addEventListener("click", function (e) {
      popupClose(el.closest(".user__popup__lvl__2"));
      e.preventDefault();
    });
  }
}

function popupOpen(curentPopup4) {
  if (curentPopup4 && PopUpUser2_windowUnlock) {
    const popupActive4 = document.querySelector(".user__popup__lvl__2.open");
    if (popupActive4) {
      popupClose(popupActive4, false);
    }
    curentPopup4.classList.add("open");
  }
}
function popupClose(popupActive4, PopUpUser2_windowUnlock = true) {
  if (PopUpUser2_windowUnlock) {
    document.querySelector(".Close__user__popup__lvl__2").click(); //закрываем прочие pop-up
    popupActive4.classList.remove("open");
  }
}
//Создаем событие на открытие окна второго уровня
if (doublePopupLinks.length > 0) {
  for (let index = 0; index < doublePopupLinks.length; index++) {
    const doublePopupLink = doublePopupLinks[index];
    doublePopupLink.addEventListener("click", function (e) {
      const popupName = doublePopupLink.getAttribute("href").replace("#", "");
      const curentPopup3 = document.getElementById(popupName);
      popupOpen(curentPopup3);
      e.preventDefault();
    });
  }
}
const popupCloseIcon3 = document.querySelectorAll(".double__popup__close_icon");
if (popupCloseIcon3.length > 0) {
  for (let index = 0; index < popupCloseIcon3.length; index++) {
    const el = popupCloseIcon3[index];
    el.addEventListener("click", function (e) {
      popupClose(el.closest(".double__popup"));
      e.preventDefault();
    });
  }
}

function popupOpen(curentPopup3) {
  if (curentPopup3 && PopUpOrderUnlock) {
    const popupActive3 = document.querySelector(".double__popup.open");
    if (popupActive3) {
      popupClose(popupActive3, false);
    }
    curentPopup3.classList.add("open");
  }
}
function popupCloseDoublePopup(popupActive3, PopUpOrderUnlock = true) {
  if (PopUpOrderUnlock) {
    popupActive3.classList.remove("open");
  }
}

//Создаем событие на открытие popup в заказе
if (orderPopupLinks.length > 0) {
  for (let index = 0; index < orderPopupLinks.length; index++) {
    const orderPopupLink = orderPopupLinks[index];
    orderPopupLink.addEventListener("click", function (e) {
      const popupName = orderPopupLink.getAttribute("href").replace("#", "");
      const curentPopup = document.getElementById(popupName);
      popupOpen(curentPopup);
      e.preventDefault();
    });
  }
}
const popupCloseIcon = document.querySelectorAll(".service__close-popup");
if (popupCloseIcon.length > 0) {
  for (let index = 0; index < popupCloseIcon.length; index++) {
    const el = popupCloseIcon[index];
    el.addEventListener("click", function (e) {
      popupClose(el.closest(".popup"));
      e.preventDefault();
    });
  }
}
function popupOpen(curentPopup) {
  if (curentPopup && PopUpServiceUnlock) {
    const popupServiceActive = document.querySelector(".popup.open");
    if (popupServiceActive) {
      popupClose(popupServiceActive, false);
    }
    curentPopup.classList.add("open");
  }
}
function popupClose(popupServiceActive, PopUpServiceUnlock = true) {
  if (PopUpServiceUnlock) {
    popupServiceActive.classList.remove("open");
  }
}
