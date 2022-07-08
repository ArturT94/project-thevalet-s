<?php
$userId = CUser::GetID();
$userGetParamsFromId = CUser::GetByID($userId);
$arUser = $userGetParamsFromId->Fetch();
$accountImg = CFile::GetPath($arUser['PERSONAL_PHOTO']);
GarbageDataByArtur::set('accountUser', $arUser);
GarbageDataByArtur::set('accountImg', $accountImg);
?>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/menu.css">

<section class="menu__section">
  <button class="menu__close"><img class="menu__close-icon" src="<?= SITE_TEMPLATE_PATH ?>/img/layout/close.png"></button>
  <div class="menu__con">
    <div class="menu__cont">
      <div class="menu__profile">
        <img class="profile__img" src="<?= $accountImg ?>">
        <div class="profile__name"><?= $arUser['NAME'] ?></div>
        <a class="profile__link user__popup__lvl__2__link" href="#personalaccount">Посмотреть профиль</a>
      </div>
      <ul class="menu__list">
        <li class="menu__item">
          <a class="menu__link user__popup__lvl__2__link" href="#garage">Мой гараж</a>
        </li>
        <li class="menu__item">
          <a class="menu__link user__popup__lvl__2__link" href="#systemPay">Оплата <span class="menu__comm">5555 5555 5555 5555</span></a>
        </li>
        <li class="menu__item">
          <a class="menu__link user__popup__lvl__2__link" href="#history">История заказов</a>
        </li>
        <li class="menu__item">
          <a class="menu__link user__popup__lvl__2__link" href="#favorites">Избранное</a>
        </li>
        <li class="menu__item">
          <a class="menu__link user__popup__lvl__2__link" href="#chat">Чат</a>
        </li>
      </ul>
      <div class="profile__exit">
        <a href="?logout=yes" class="profile__exit-link">выйти</a>
          <?php
          if($_GET['logout'] == 'yes'){
              $USER->Logout();
              header("Location: /");
          }
          ?>
      </div>
    </div>
  </div>
</section>