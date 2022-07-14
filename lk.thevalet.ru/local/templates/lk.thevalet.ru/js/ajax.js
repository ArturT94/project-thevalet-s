let getExternalCar = '';
function getNewOrderData() {
      return {
          getExternalCar,
          services: getCheckboxesData(),
          money: document.querySelector('.result__money').innerText,
          time: document.querySelector('.result__time').innerText,
          planedTime: document.querySelector('#amenities__button > .order__popup__link').innerHTML
      };
  }

function getCheckboxesData() {
    let element = new Object();
   $('.extensions__list > .extensions__item > input[id]').each(function() {
         element[+ $(this).attr('id').split('_')[1]] = $(this).is(':checked');
     });
   return element;
  }
$('form#send-services > .user__popup__lvl__2__link').click(function() {
      $.post('/AjaxAddServicesCrm.php', getNewOrderData(), function(data) {
         console.log(data);
     }, 'json');
});

// $('a.order__popup__link.button_nextt').click(function () {
//     document.getElementById("changeLink").href="#orderPage.php";
// })
getData = (car) => {
    $.ajax({
        url: "/AjaxGarageInfoCars.php",
        method: "post",
        dataType: "json",
        data: "param=" + JSON.stringify(car),
        success: function (res) {
            if (res) {
                $(".car__img").attr("src", res.img);
                $(".car__name").text(res.name);
                $(".car__model").text(res.gosNumber);
                $("#year").text(res.year);
                $("#probeg").text(res.probeg);
                $("#osago").text(res.osago);
                $("#wheels").text(res.wheels);
                $("#vin").text(res.vin);
                getExternalCar = res.externalId;
            } else {
                console.err("Произошла ошибка");
            }
        },
    });
};



getDataServices = (service) => {
    $.ajax({
        url: "/AjaxAddServices.php",
        method: "post",
        dataType: "json",
        data: "services=" + JSON.stringify(service),
        success: function (res) {
            if(res){
                let amenities_item = $(".amenities__item"),
                    service = $("#service_" + res.id),
                    addHtml = true;

                if (amenities_item.length > 0) {
                    amenities_item.each((index, value) => {
                        if ($(value).data("id") == res.id) {
                            if (!service.is(":checked")) {
                                $(value).remove();
                            }
                            addHtml = false;
                        }
                    });
                }

                if (addHtml) {
                    service.prop("checked", true);
                    $("#amenities__list").append(
                        `<li class="amenities__item" data-id="${res.id}">
                              <div class="amenities__wrapper">
                                  <div class="amenities__name">${res.services.toUpperCase()}</div>
                              </div>
                          </li>`
                    );
                }
            }else{
                console.err("Произошла ошибка");
            }
        },
    });
};