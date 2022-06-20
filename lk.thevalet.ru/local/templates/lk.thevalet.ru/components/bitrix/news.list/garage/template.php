<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule("iblock");
$arFilter = ["IBLOCK_ID" => 93];
$arSelect = ["IBLOCK_ID", "ID", "IBLOCK_NAME", "NAME", "PROPERTY_FOTO", "PROPERTY_MARKA", "PROPERTY_GOSNOMER"];
$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
//$section = CIBlockSection::GetList([], ["IBLOCK_ID" => 19], false, ["ID", "NAME"]);
$blockText = $res->Fetch();

while ($result = $res->Fetch()){

}
?><!--Весь фрейм автомобилей на экране совершения заказа-->
<section class="garage__on__order">
    <h2 class="chapter__title chapter__title__mobile"><?=$blockText['IBLOCK_NAME'];?></h2>
    <!--Пагинация и навигация в слайдере-->
    <div class="nav_group nav_group-garage">
        <div class="swiper-button-prev sw-Btn-auto-Prev"></div>
        <div class="swiper-button-next sw-Btn-auto-Next"></div>
    </div>
    <!--Карточки автомобилей и кнопка добавления-->
    <div class="swiper garage">
        <div class="swiper-wrapper">
            <?php foreach($arResult['ITEMS'] as $arItem): ?>
            <button class="swiper-slide auto">
                <a href="#car" onclick="return false" id="clickCar" class="order__popup__link user__popup__lvl__2__link">
                    <div class="number__message__item">
                        <div class="number__message"><p>2</p></div>
                    </div>
                    <div class="auto_img">
                        <?php foreach($arItem['PROPERTIES']['FOTO']['VALUE'] as $img): ?>
                        <?php $urlImg = CFile::GetPath($img); ?>
                        <img draggable=false src="<?=$urlImg?>" alt=""  style="width: 160px">
                        <?php endforeach; ?>
                    </div>
                    <div class="data__auto">
                        <div class="data__model"><?= $arItem['NAME'] ?></div>
<!--            --><?php //echo '<pre>' . print_r($arItem, true) . '</pre>'; ?>
                        <div class="data__number"><?= $arItem['PROPERTIES']['GOSNOMER']['VALUE'] ?></div>
                    </div>
                </a>
            </button>
            <?php endforeach; ?>
            <a href="#car1" class="swiper-slide auto add__auto user__popup__lvl__2__link">
                <div class="number__message__item">
                    <div class="number__message "><p>2</p></div>
                </div>
                <div class="auto_img">
                    <img draggable=false src="<?=SITE_TEMPLATE_PATH?>/img/data/add.png" alt="">
                </div>
                <div class="data__auto">
                    <div class="data__model"></div>
                    <div class="data__number">Добавить авто</div>
                </div>
            </a>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
        $("#clickCar").on("click", function () {
            $.ajax({
                url: '/car.php',
                method: 'get',
                dataType: 'html',
                data: {"test": "<?= $arItem['NAME'] ?>"},
                success: function (data) {
                    console.log(data);
                }
            })
        });
</script>