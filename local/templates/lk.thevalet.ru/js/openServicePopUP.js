const lockPadding = document.querySelectorAll(".lock-padding");
const servicePopupLinks = document.querySelectorAll(".service__icon");
const userPopupMenuLinks = document.querySelectorAll(".profile");
const userPopup2MenuLinks = document.querySelectorAll(
  ".user__popup__lvl__2__link"
);
const userPopupDouble = document.querySelectorAll(".user__pop_btn_doubleclick");
const orderPopupLinks = document.querySelectorAll(".order__popup__link");

let unlockPopupUserMenuLink = true;
let unlockPopup2MenuLinks = true;
let unlockservicePopupLinks = true;
let PopupOrderLinksUnlock = true;

const timeout = 3;
//Создаем событие на открытие popup в заказе
if (orderPopupLinks.length > 0) {
  for (let index = 0; index < orderPopupLinks.length; index++) {
    const orderPopupLink = orderPopupLinks[index];
    orderPopupLink.addEventListener("click", function (e) {
      const popupName = orderPopupLink.getAttribute("href").replace("#", "");
      const curentPopup = document.getElementById(popupName);
      popupOpenOrder(curentPopup);
      e.preventDefault();
    });
  }
}
const popupCloseIcon = document.querySelectorAll(".close__order__popup");
if (popupCloseIcon.length > 0) {
  for (let index = 0; index < popupCloseIcon.length; index++) {
    const el = popupCloseIcon[index];
    el.addEventListener("click", function (e) {
      popupCloseOrder(el.closest(".order__popup"));
      e.preventDefault();
    });
  }
}
function popupOpenOrder(curentPopup) {
  if (curentPopup && PopupOrderLinksUnlock) {
    const popupServiceActive = document.querySelector(".order__popup.open");
    if (popupServiceActive) {
      popupCloseOrder(popupServiceActive, false);
    }
    curentPopup.classList.add("open");
  }
}
function popupCloseOrder(popupServiceActive, PopupOrderLinksUnlock = true) {
  if (PopupOrderLinksUnlock) {
    popupServiceActive.classList.remove("open");
  }
}

//Открываем и закрываем меню второго уровня из бургера
if (userPopup2MenuLinks.length > 0) {
  for (let index = 0; index < userPopup2MenuLinks.length; index++) {
    const userPopup2MenuLink = userPopup2MenuLinks[index];
    userPopup2MenuLink.addEventListener("click", function (e) {
      const popupName = userPopup2MenuLink
        .getAttribute("href")
        .replace("#", "");
      const curentPopup = document.getElementById(popupName);
      popupOpenUser(curentPopup);
      e.preventDefault();
    });
  }
}
if (userPopupDouble.length > 0) {
  for (let index = 0; index < userPopupDouble.length; index++) {
    const userPopup2MenuLink = userPopupDouble[index];
    var touchtime = 0;
    $(userPopup2MenuLink).on("click", function (e) {
      const btnActive = document.querySelectorAll(".auto");
      for (let i = 0; i < btnActive.length; i++) {
        if (btnActive[i].classList.contains("active")) {
          btnActive.forEach((e) => {
            e.classList.remove("active");
          });
          userPopup2MenuLink.parentNode.classList.add("active");
        } else {
          userPopup2MenuLink.parentNode.classList.add("active");
        }
      }
      if (touchtime == 0) {
        // set first click
        touchtime = new Date().getTime();
      } else {
        // compare first click to this click and see if they occurred within double click threshold
        if (new Date().getTime() - touchtime < 800) {
          // double click occurred

          const popupName = userPopup2MenuLink
            .getAttribute("href")
            .replace("#", "");
          const curentPopup = document.getElementById(popupName);
          popupOpenUser(curentPopup);
          e.preventDefault();
          touchtime = 0;
        } else {
          // not a double click so set as a new first click
          touchtime = new Date().getTime();
        }
      }
    });
    // userPopup2MenuLink.addEventListener("dblclick", function (e) {});
  }
}
const ClosePopup2UserMenuLink = document.querySelectorAll(
  ".Close__user__popup__lvl__2"
);
if (ClosePopup2UserMenuLink.length > 0) {
  for (let index = 0; index < ClosePopup2UserMenuLink.length; index++) {
    const el = ClosePopup2UserMenuLink[index];
    el.addEventListener("click", function (e) {
      popupCloseUser(el.closest(".user__popup__lvl__2"));
      e.preventDefault();
    });
  }
}

function popupOpenUser(curentPopup) {
  if (curentPopup && unlockPopup2MenuLinks) {
    const popupActive = document.querySelector(".user__popup__lvl__2.open");
    if (popupActive) {
      popupCloseUser(popupActive, false);
    }
    let popup3 = document.querySelectorAll(".Close__user__popup__lvl__2");
    for (let index = 0; index < popup3.length; index++) {
      popup3[index].click();
    }
    curentPopup.classList.add("open");
  }
}
function popupCloseUser(popupActive, unlockPopup2MenuLinks = true) {
  if (unlockPopup2MenuLinks) {
    popupActive.classList.remove("open");
  }
}

//Открываем и закрываем меню из бургера
if (userPopupMenuLinks.length > 0) {
  for (let index = 0; index < userPopupMenuLinks.length; index++) {
    const userPopupMenuLink = userPopupMenuLinks[index];
    userPopupMenuLink.addEventListener("click", function (e) {
      const popupName = userPopupMenuLink.getAttribute("href").replace("#", "");
      const curentPopup = document.getElementById(popupName);
      popupOpenMenu(curentPopup);
      e.preventDefault();
    });
  }
}
const ClosePopupUserMenuLink = document.querySelectorAll(".menu__close");
if (ClosePopupUserMenuLink.length > 0) {
  for (let index = 0; index < ClosePopupUserMenuLink.length; index++) {
    const el = ClosePopupUserMenuLink[index];
    el.addEventListener("click", function (e) {
      popupCloseMenu(el.closest(".user__popup"));
      e.preventDefault();
    });
  }
}

function popupOpenMenu(curentPopup) {
  if (curentPopup && unlockPopupUserMenuLink) {
    const popupActive = document.querySelectorAll(".user__popup.open");
    if (popupActive) {
      popupCloseMenu(popupActive, false);
    }

    curentPopup.classList.add("open");
  }
}
function popupCloseMenu(popupActive, unlockPopupUserMenuLink = true) {
  if (unlockPopupUserMenuLink) {
    let popup3 = document.querySelectorAll(".Close__user__popup__lvl__2");
    for (let index = 0; index < popup3.length; index++) {
      popup3[index].click();
    }
    popupActive.classList.remove("open");
  }
}

//Создаем событие на открытие информационного popup (инфо о услуге)
if (servicePopupLinks.length > 0) {
  for (let index = 0; index < servicePopupLinks.length; index++) {
    const servicePopupLink = servicePopupLinks[index];
    servicePopupLink.addEventListener("click", function (e) {
      const popupName = servicePopupLink.getAttribute("href").replace("#", "");
      const curentPopup = document.getElementById(popupName);
      popupOpenService(curentPopup);
      e.preventDefault();
    });
  }
}
const CloseServicePopupLinks = document.querySelectorAll(
  ".service__close-popup"
);
if (CloseServicePopupLinks.length > 0) {
  for (let index = 0; index < CloseServicePopupLinks.length; index++) {
    const el = CloseServicePopupLinks[index];
    el.addEventListener("click", function (e) {
      popupCloseService(el.closest(".popup"));
      e.preventDefault();
    });
  }
}
function popupOpenService(curentPopup) {
  if (curentPopup && unlockservicePopupLinks) {
    const popupServiceActive = document.querySelector(".popup.open");
    if (popupServiceActive) {
      popupCloseService(popupServiceActive, false);
    }
    curentPopup.classList.add("open");
  }
}
function popupCloseService(popupServiceActive, unlockServicePopupLinks = true) {
  if (unlockServicePopupLinks) {
    popupServiceActive.classList.remove("open");
  }
}

//Выделяем пункт меню в бургере, по которому был произведен клик
const tabsBtn = document.querySelectorAll(".menu__link");
tabsBtn.forEach(onTabClick);

function onTabClick(item) {
  item.addEventListener("click", function () {
    let currentBtn = item;
    let tabId = currentBtn.getAttribute("data-tab");

    if (!currentBtn.classList.contains("active")) {
      tabsBtn.forEach(function (item) {
        item.classList.remove("active");
      });

      currentBtn.classList.add("active");
    }
  });
}

function goBackPop(id) {
  const popupses = document.querySelectorAll(".user__popup__lvl__2");
  const popapus = document.getElementById(id); // тут можно будет передавать id, если окон будет больше
  popupses.forEach((element) => {
    element.classList.remove("open");
  });
  popapus.classList.add("open");
}

function goNextPop(id) {
  const popupses = document.querySelectorAll(".user__popup__lvl__2__link");
  const popapus = document.getElementById(id); // тут можно будет передавать id, если окон будет больше
  popupses.forEach((element) => {
    element.classList.remove("open");
  });
  popapus.classList.add("open");
}
