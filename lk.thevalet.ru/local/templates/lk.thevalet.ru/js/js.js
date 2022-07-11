const betaBtn = document.querySelector(".beta_pop");
const betaPop = document.querySelector("#popup__beta");
const deleteCarBtn = document.querySelectorAll(".img__trash");
const deleteCarBtnL = document.querySelectorAll(".img__trash-l");
const deleteCarPop = document.querySelector("#delete__car");

betaBtn.addEventListener("click", function (e) {
    betaPop.classList.add("open");
});

for (let i = 0; i < deleteCarBtn.length; i++) {
    deleteCarBtn[i].addEventListener("click", function (e) {
        deleteCarPop.classList.add("open");
    });
}
for (i = 0; i < deleteCarBtnL.length; i++) {
    deleteCarBtnL[i].addEventListener("click", function () {
        deleteCarPop.classList.add("open");
    });
}

$(document).ready(function () {
    $("#datepicker").datepicker({firstDay: 1});

    orderPlaning = (time) => {
        $('#amenities__button a').html(time);
    }

    planingInput = () => {
        $('.planing__list').addClass('d-none');
        $('.planing__picker').removeClass('d-none');
    }

    getData = (car) => {
        $.ajax({
            url: '/sender.php',
            method: 'post',
            dataType: 'json',
            data: "param=" + JSON.stringify(car),
            success: function (res) {
                console.log(res.deleteElement)
                if (res) {
                    let amenities_item = $(".amenities__item"),
                        service = $("#service_" + res.id),
                        addHtml = true;

                    if (amenities_item.length > 0) {
                        amenities_item.each((index, value) => {
                            if ($(value).data('id') == res.id) {
                                if (!service.is(':checked')) {
                                    $(value).remove();
                                }
                                addHtml = false;
                            }
                        });
                    }

                    if (addHtml) {
                        service.prop('checked', true);
                        $("#amenities__list").append(
                            `<li class="amenities__item" data-id="${res.id}">
                                <div class="amenities__wrapper">
                                    <div class="amenities__name">${res.services.toUpperCase()}</div>
                                </div>
                            </li>`
                        );
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
                $('#clickDel').on('click', function () {
                    var params = {
                        'IBLOCK_TYPE_ID': 'lists',
                        'IBLOCK_ID': '93',
                        'ELEMENT_ID': res.deleteElement,
                    };
                    BX24.callMethod(
                        'https://it-valet.ru/rest/1/9rdwqbwoy85dgv16/lists.element.delete.json',
                        params,
                        function (result) {
                            if (result.error())
                                alert("Error: " + result.error());
                            else
                                alert("Success: " + result.data());
                        }
                    );
                });

            }
        });
    }

    timepicker = () => {
        createCircleOfDivs = (num, radius, offsetX, offsetY, className, add, teilbar) => {
            var x, y;
            for (var n = 0; n < num; n++) {
                x = radius * Math.cos(n / num * 2 * Math.PI);
                y = radius * Math.sin(n / num * 2 * Math.PI);
                var div = document.createElement("div");
                div.className = className;
                if (teilbar == 1){
                    if (n+3 > 12){
                        div.textContent = n+3-12+add;
                    } else {
                        div.textContent = n+3+add;
                    }
                } else {
                    if (n % teilbar == 0) {
                        if (n+15 >= 60) {
                            div.setAttribute("data-value", n+15-60);
                            div.textContent = n+15-60+add;
                        } else {
                            div.setAttribute("data-value", n+15);
                            div.textContent = n+15+add;
                        }
                    } else {
                        if (n+15 >= 60) {
                            div.setAttribute("data-value", n+15-60);
                            div.textContent = "⋅";
                        } else {
                            div.setAttribute("data-value", n+15);
                            div.textContent = "\u00B7";
                        }
                    }
                }
                div.style.left = (x + offsetX) + "px";
                div.style.top = (y + offsetY) + "px";
                $(".timepicker .circle")[0].appendChild(div);
            }
        }

        var currentTime = new Date();
        selectHours = () => {
            $(".timepicker .circle").html("");
            createCircleOfDivs(12, 101, 105, 105, "hour",0,1);
            createCircleOfDivs(12, 64, 110, 110, "hour2",12,1);
            $(".timepicker .circle").append('<div class="mid"></div>');
            $(".timepicker .top .active").removeClass("active");
            $(".timepicker .top .h").addClass("active");
            $(".hour, .hour2").on("mouseup", function(){
                $(".timepicker .top .h").text(  ($(this).text().length > 1 ) ?  $(this).text() : "0"+$(this).text() );
                selectMinutes();
            });
        }

        selectMinutes = () => {
            $(".timepicker .circle").html("");
            $(".timepicker .top .active").removeClass("active");
            $(".timepicker .top .m").addClass("active");
            createCircleOfDivs(60, 101, 115, 115, "min",0,5);
            $(".timepicker .circle .min").on("mouseup", function(){
                $(".timepicker .top .m").text(  ($(this).attr("data-value").length > 1) ? $(this).attr("data-value") : "0"+$(this).attr("data-value")  );
            });
        }

        selectHours();
        $(".timepicker .top .h").text(currentTime.getHours());
        $(".timepicker .top .m").text(currentTime.getMinutes());

        $(".timepicker .top span").click(() => {
            if(!$(this).hasClass("active")){
                if ($(this).hasClass("h")) {
                    selectHours();
                } else {
                    selectMinutes();
                }
            }
        });

        $(".timepicker .action.ok").click(() => {
            var selectedTime = $(".timepicker .top .h").text()+":"+$(".timepicker .top .m").text();
            alert(selectedTime);
        });
    }
    timepicker();
});