<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/add__pay__card.css">
<div class="app__window">
  <div class="conteiner">
    <div class="global__payment">
      <div class="global__payment1">
        <div class="form__card__payment">
          <form action="#" class="form">
            <div class="nomber__card">
              Номер карты
              <input type="text" class="form-card__input" placeholder="5555 5555 5555 5555">
            </div>
            <div class="card__details">
              <div class="date__card">
                Срок действия
                <div class="number__and__date">
                  <input type="number" class="date" placeholder="05">
                  <div class="slash">/</div>
                  <input type="number" class="date" placeholder="22">
                </div>
              </div>
              <div class="code">
                Код
                <input type="text" class="date" placeholder="...">
              </div>
            </div>
            <div class="recept__block">
              <div class="recept__and__checkmarc">
                <input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes">
                <label for="happy"></label>
                <div class="recept">Нужна квитанция</div>
              </div>
              <input type="mail" class="form-card__input" placeholder="e-mail">
            </div>
          </form>
        </div>
      </div>
      <div class="global__payment2">
        <section class="order-button">
          <button type="button" class="button__order button__order js-button-order" disabled>
            <a href="#systemPay" class="user__popup__lvl__2__link">Добавить карту</a>
          </button>
          <button type="button" class="button__order js-button-order button__hide js-button-next">далее</button>
        </section>
      </div>
    </div>
  </div>
</div>