<?php
$accountUser = GarbageDataByArtur::get('accountUser');
$imgUser = GarbageDataByArtur::get('accountImg');
?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/personalaccount.css">
    <div class="app__window">
        <div class="conteiner">
<!--            <button class="car__close Close__user__popup__lvl__2"><img class="car__close-icon" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/layout/arrow-right.png"></button>-->
            <div class="global__mobile__block1">
                <div class="menu__profile2">
                    <img class="profile__img2" src="<?=$imgUser?>">
                    <div class="profile__name2"><?=$accountUser['NAME']?></div>
                    <?php if(!empty($accountUser['PERSONAL_MOBILE'])):?>
                    <div class="profile__name2"><?=$accountUser['PERSONAL_MOBILE']?></div>
                    <?php else: ?>
                        <div class="profile__name2">Телефон не заполнен</div>
                    <?php endif;?>
                    <div class="profile__name2"><?=$accountUser['EMAIL']?></div>
<!--                    <div class="favourites">Избранное</div>-->
<!--                    <div class="favourites__profile__name">-->
<!--                         Добавить домашний адрес-->
<!--                        <img class="icon__add__address" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/layout/home__address.svg" alt="home__address">-->
<!--                    </div>-->
<!--                    <div class="favourites__profile__name">-->
<!--                        Добавить рабочий адрес-->
<!--                        <img class="icon__add__address" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/layout/icon-briefcase.svg" alt="home__address">-->
<!--                    </div>-->
<!--                    <div class="favourites__profile__name">-->
<!--                        Добавить другой адрес-->
<!--                        <img class="icon__add__address" src="--><?//=SITE_TEMPLATE_PATH?><!--/img/layout/+_add.svg" alt="home__address">-->
<!--                    </div>  -->
<!--                    <div class="displayed_information">-->
<!--                        <div class="driver__chat">-->
<!--                            <div class="displayed_information__driver">Только избранные водители</div>-->
<!--                            <label class="switch">-->
<!--                                <input type="checkbox">-->
<!--                                <span class="slider round"></span>-->
<!--                            </label>-->
<!--                        </div>-->
                        <div class="driver__chat">
                            <div class="displayed_information__driver">Только чат</div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div> 