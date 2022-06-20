<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
CModule::IncludeModule("iblock");
$arFilter = ["IBLOCK_ID" => 93];
$arSelect = ["IBLOCK_ID", "ID", "IBLOCK_NAME", "NAME", "PROPERTY_FOTO", "PROPERTY_MARKA", "PROPERTY_GOSNOMER"];
$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
$section = CIBlockSection::GetList([], ["IBLOCK_ID" => 19], false, ["ID", "NAME"]);
$blockName = $res->GetNext();
GarbageDataByArtur::set('test', $blockName);


?>

<!--Весь фрейм автомобилей на экране совершения заказа-->
<section class="garage__on__order">
    <h2 class="chapter__title chapter__title__mobile"><?=$blockName['IBLOCK_NAME']?></h2>
    <!--Пагинация и навигация в слайдере-->
    <div class="nav_group nav_group-garage">
        <div class="swiper-button-prev sw-Btn-auto-Prev"></div>
        <div class="swiper-button-next sw-Btn-auto-Next"></div>
    </div>
    <!--Карточки автомобилей и кнопка добавления-->
    <div class="swiper garage">
        <div class="swiper-wrapper">
<?php while($ar_fields = $res->GetNext()): ?>
            <button class="swiper-slide auto">
                <a href="car" class="order__popup__link user__popup__lvl__2__link" id="clickCar">
                    <div class="number__message__item">
                        <div class="number__message"><p>2</p></div>
                    </div>
                    <div class="auto_img">
                            <?php $urlImg = CFile::GetPath($ar_fields['PROPERTY_FOTO_VALUE']); ?>
                        <img draggable=false src="<?=$urlImg?>" alt="" style="width: 160px">
    <?php
GarbageDataByArtur::set('section', $urlImg);
    ?>
                    </div>
                    <div class="data__auto">
                        <?php while($blockSection = $section->GetNext()):
                        $blockSections[] = $blockSection; ?>
                        <?php endwhile; ?>
                        <?php foreach($blockSections as $sections): ?>
                        <?php if($sections["ID"] === $ar_fields['PROPERTY_MARKA_VALUE']): ?>
                        <div class="data__model"><?= $sections['NAME']?></div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <div class="data__number"><?=$ar_fields['PROPERTY_GOSNOMER_VALUE']?></div>
                    </div>
                </a>
            </button>
            <?php endwhile; ?>
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
    //$("document").ready(function () {
    //    $("#clickCar").on("click", function () {
    //        $.ajax({
    //            url: "/car.php",
    //            method: 'post',
    //            dataType: 'html',
    //            data: {
    //                'text': "<?php //$blockName; ?>//",
    //                                        },
    //            success: function (data) {
    //                console.log(data);
    //            }
    //        });
    //    });
    //});

    let arrData = {
        "test": "<?= $sections['NAME']?>"
    }

    let jsonStr = JSON.stringify(arrData);

    $.ajax({
                url: "/car.php",
                method: 'post',
                dataType: 'html',
                data: {'dataQuery': jsonStr},
                success: function (data) {
                    console.log(data);
                }
            });
</script>