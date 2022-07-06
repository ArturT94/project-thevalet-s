<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CModule::IncludeModule("iblock");
$arFilter = ["IBLOCK_ID" => 8];
$arSelect = ["IBLOCK_ID", "ID", "IBLOCK_NAME", "NAME", "PROPERTY_FOTO", "PROPERTY_MARKA", "PROPERTY_GOSNOMER"];
$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
//$section = CIBlockSection::GetList([], ["IBLOCK_ID" => 19], false, ["ID", "NAME"]);
$blockText = $res->Fetch();

while ($result = $res->Fetch()) {
}
?>
<!--Весь фрейм автомобилей на экране совершения заказа-->
<section class="garage__on__order">
  <h2 class="chapter__title chapter__title__mobile"><?= $blockText['IBLOCK_NAME']; ?></h2>
  <!--Пагинация и навигация в слайдере-->
  <div class="nav_group nav_group-garage">
    <div class="swiper-button-prev sw-Btn-auto-Prev"></div>
    <div class="swiper-button-next sw-Btn-auto-Next"></div>
  </div>
  <!--Карточки автомобилей и кнопка добавления-->
  <div class="swiper garage">
    <div class="swiper-wrapper">
      <button class="swiper-slide auto">
        <a href="#car" class="order__popup__link user__popup__lvl__2__link">
          <div class="number__message__item">
            <div class="number__message">
              <p></p>
            </div>
          </div>
          <div class="auto_img">
            <img draggable=false src="<?= SITE_TEMPLATE_PATH ?>/img/test.png" alt="" style="width: 160px">
          </div>
          <div class="data__auto">
            <div class="data__model">Land Rover Defender</div>
            <div class="data__number">Р352НА710</div>
          </div>
        </a>
      </button>
      <?php foreach ($arResult['NEW_SECTION'] as $arItem) : ?>
        <?php //echo '<pre>' . print_r($arResult, true) . '</pre>'; 
        ?>
        <?php $carImgs = CFile::GetPath($arItem['PROPERTY_FOTO_VALUE']) ?>
        <button class="swiper-slide auto" onclick="getData({
                    'img':'<?= $carImgs ?>',
                    'name':'<?= $arItem['NAME'] ?>',
                    'gosNumber':'<?= $arItem['PROPERTY_GOSNOMER_VALUE'] ?>',
                    'year':'<?= $arItem['PROPERTY_GOD_VYPUSKA_VALUE'] ?>',
                    'probeg':'<?= $arItem['PROPERTY_PROBEG_VALUE'] ?>',
                    'osago':'<?= $arItem['PROPERTY_OSAGO_VALUE'] ?>',
                    'wheels':'<?= $arItem['PROPERTY_SHINY_VALUE'] ?>',
                    'vin':'<?= $arItem['PROPERTY_VIN_VALUE'] ?>',
                    })">
          <a href="#car" class="order__popup__link user__popup__lvl__2__link">
            <div class="number__message__item">
              <div class="number__message">
                <p></p>
              </div>
            </div>
            <div class="auto_img">
              <img draggable=false src="<?= $carImgs ?>" alt="" style="width: 160px">
            </div>
            <div class="data__auto">
              <div class="data__model"><?= $arItem['NAME'] ?></div>
              <div class="data__number"><?= $arItem['PROPERTY_GOSNOMER_VALUE'] ?></div>
            </div>
          </a>
        </button>
      <?php endforeach; ?>
      <a href="#brand" class="swiper-slide auto add__auto user__popup__lvl__2__link">
        <div class=" number__message__item">
          <div class="number__message">
            <p></p>
          </div>
        </div>
        <div class="auto_img">
          <img draggable=false src="<?= SITE_TEMPLATE_PATH ?>/img/data/add.png" alt="">
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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
  function getData(car) {
    $.ajax({
      url: '/sender.php',
      method: 'post',
      dataType: 'json',
      data: "param=" + JSON.stringify(car),
      success: function(res) {
        if (res) {
          $("#amenities__name").text(res.services);
          if ($("#amenities__name").text() === 'Припарковать') {
            $('#park').trigger('click');
          } else if ($("#amenities__name").text() === 'Помыть') {
            $('#wash').trigger('click');
          } else if ($("#amenities__name").text() === 'Заправить') {
            $('#refuel').trigger('click');
          }
          // Парсим json объект и записываем полученные данные в data
          // Например дана имеет такую структуру:
          // data = {
          // name: "Иван",
          // lastname: "Иванов"
          // }
          // тогда выбираем элемент, в который хотим поместить
          // значение data.name и data.lastname по классу либо по идентификатору
          $(".car__img").attr('src', res.img);
          $(".car__name").text(res.name);
          $(".car__model").text(res.gosNumber);
          $("#year").text(res.year);
          $("#probeg").text(res.probeg);
          $("#osago").text(res.osago);
          $("#wheels").text(res.wheels);
          $("#vin").text(res.vin);
          // данные должны отобразиться

        } else {
          console.err('Произошла ошибка')
        }

      }
    });
  }
</script>