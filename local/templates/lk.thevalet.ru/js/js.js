const betaBtn = document.querySelectorAll(".beta_pop");
const betaPop = document.querySelector("#popup__beta");
const deleteCarBtn = document.querySelectorAll(".img__trash");
const deleteCarBtnL = document.querySelectorAll(".img__trash-l");
const deleteCarPop = document.querySelector("#delete__car");
const hearthIcon = document.querySelectorAll(".cls-1");
const hearthIconSecond = document.querySelectorAll(".cls-2");

for (let i = 0; i < hearthIcon.length; i++) {
  hearthIcon[i].addEventListener("click", function (e) {
    hearthIcon[i].classList.toggle("favourite");
  });
}

for (let i = 0; i < betaBtn.length; i++) {
  betaBtn[i].addEventListener("click", function (e) {
    betaPop.classList.add("open");
  });
}

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
  $("#datepicker").datepicker($.datepicker.regional["ru"]);

  $("#datepicker").change(function () {
    dropDateTime();
  });

  //Функции на преобразование даты
  padTo2Digits = (num) => {
    return num.toString().padStart(2, "0");
  };
  formatDate = (date) => {
    return (
      [
        padTo2Digits(date.getDate()),
        padTo2Digits(date.getMonth() + 1),
        date.getFullYear(),
      ].join(".") +
      " " +
      [
        padTo2Digits(date.getHours()),
        padTo2Digits(date.getMinutes()),
        padTo2Digits(date.getSeconds()),
      ].join(":")
    );
  };

  orderPlaning = (time) => {
    console.log(typeof time == "number");
    if (typeof time == "number") {
      let now = new Date();
      let date = new Date(now.getTime() + time * 60000);
      $("#amenities__button a").html(formatDate(date));
    } else {
      $("#amenities__button a").html(time);
    }
   $('#planning').removeClass('open');
  };

  planingInput = () => {
    $(".planing__list").addClass("d-none");
    $(".planing__picker").removeClass("d-none");
  };

  /*Эдуардовский циферблат*/
  timepicker = () => {
    createCircleOfDivs = (
      num,
      radius,
      offsetX,
      offsetY,
      className,
      add,
      teilbar
    ) => {
      var x, y;
      for (var n = 0; n < num; n++) {
        x = radius * Math.cos((n / num) * 2 * Math.PI);
        y = radius * Math.sin((n / num) * 2 * Math.PI);
        var div = document.createElement("div");
        div.className = className;
        if (teilbar == 1) {
          if (n + 3 > 12) {
            div.textContent = n + 3 - 12 + add;
          } else {
            div.textContent = n + 3 + add;
          }
        } else {
          if (n % teilbar == 0) {
            if (n + 15 >= 60) {
              div.setAttribute("data-value", n + 15 - 60);
              div.textContent = n + 15 - 60 + add;
            } else {
              div.setAttribute("data-value", n + 15);
              div.textContent = n + 15 + add;
            }
          } else {
            if (n + 15 >= 60) {
              div.setAttribute("data-value", n + 15 - 60);
              div.textContent = "⋅";
            } else {
              div.setAttribute("data-value", n + 15);
              div.textContent = "\u00B7";
            }
          }
        }
        div.style.left = x + offsetX + "px";
        div.style.top = y + offsetY + "px";
        $(".timepicker .circle")[0].appendChild(div);
      }
    };

    var currentTime = new Date();
    selectHours = () => {
      $(".timepicker .circle").html("");
      createCircleOfDivs(12, 101, 105, 105, "hour", 0, 1);
      createCircleOfDivs(12, 64, 110, 110, "hour2", 12, 1);
      $(".timepicker .circle").append('<div class="mid"></div>');
      $(".timepicker .top .active").removeClass("active");
      $(".timepicker .top .h").addClass("active");
      $(".hour, .hour2").on("mouseup", function () {
        $(".timepicker .top .h").text(
          $(this).text().length > 1 ? $(this).text() : "0" + $(this).text()
        );
        selectMinutes();
      });
    };

    selectMinutes = () => {
      $(".timepicker .circle").html("");
      $(".timepicker .top .active").removeClass("active");
      $(".timepicker .top .m").addClass("active");
      createCircleOfDivs(60, 101, 115, 115, "min", 0, 5);
      $(".timepicker .circle .min").on("mouseup", function () {
        $(".timepicker .top .m").text(
          $(this).attr("data-value").length > 1
            ? $(this).attr("data-value")
            : "0" + $(this).attr("data-value")
        );
      });
    };

    selectHours();
    $(".timepicker .top .h").text(currentTime.getHours());
    $(".timepicker .top .m").text(currentTime.getMinutes());

    $(".timepicker__default").click(() => {
      dropDateTime();
      $(".planing__list").removeClass("d-none");
      $(".planing__picker").addClass("d-none");
    });

    // $(".timepicker .top span").click(() => {
    //   if (!$(this).hasClass("active")) {
    //     if ($(this).hasClass("h")) {
    //       selectHours();
    //     } else {
    //       selectMinutes();
    //     }
    //   }
    // });
  };
  timepicker();

  dropDateTime = () => {
    if (!$(".timepicker .top .h").hasClass("active")) {
      selectHours();
      let date = new Date();
      $(".timepicker .top .h").text(date.getHours());
      $(".timepicker .top .m").text(date.getMinutes());
      $("#amenities__button a").text("Запланировать");
    }
  };
});
function getCookie(name, defaultValue) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  let result = matches ? decodeURIComponent(matches[1]) : defaultValue;
  try
    {let convertedResult = JSON.parse(result);
     result = convertedResult;
    }
  catch(e)
    {
    }
  return result;
}
function setCookie(name, value, options) {
if(typeof options == 'number')
  {options = {'max-age': options};
  }
if(options === undefined)
{
  options = {
    path: '/',
    // при необходимости добавьте другие значения по умолчанию
  };
  }

  if (options.expires instanceof Date) {
    options.expires = options.expires.toUTCString();
  }
  if(value instanceof Object)
    {value = JSON.stringify(value);       
    }
  let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

  for (let optionKey in options) {
    updatedCookie += "; " + optionKey;
    let optionValue = options[optionKey];
    if (optionValue !== true) {
      updatedCookie += "=" + optionValue;
    }
  }

  document.cookie = updatedCookie;
}
function unsetCookie(name) {
  setCookie(name, "", {
    'max-age': -1
  })
}
window.Favorites = new Object();
window.Favorites.CACHE_ID = '--fav';
window.Favorites.get = function()
  {return getCookie(this.CACHE_ID, new Array());    
  }
window.Favorites.set = function(value)
  {return setCookie(this.CACHE_ID, value);    
  }
window.Favorites.isIn = function(id)
  {return this.get().indexOf(id) >= 0;     
  }
window.Favorites.removeIn = function(id)
  {$('#favorites .swiper-wrapper .swiper-slide[data-id="' + id + '"]').remove();     
  }
window.Favorites.showIn = function(id)
  {$('.swiper-slide[data-id="' + id + '"]').filter(function(element)
     {return $(element).parents('#favorites').length == 0;        
     }).clone(true).appendTo($('#favorites .swiper-wrapper'));     
  }
window.Favorites.shift = function(id)
  {let result;
   if(result = this.isIn.apply(this, arguments))
     {let ids = this.get();
      ids.splice(ids.indexOf(id), 1);
      this.set(ids);
      this.removeIn(id);
     }
   return result;     
  }
window.Favorites.push = function(id)
  {let result;
   if(result = !this.isIn.apply(this, arguments))
     {this.set(this.get().concat([id]));
      this.showIn(id);  
     }
   return result;
  }
window.Favorites.init = function()
  {this.get().forEach(this.showIn.bind(this)); 
  }
function processNew(cssSelector, processFunctio)
  {const FUNCTION = arguments.callee;
   document.querySelectorAll(cssSelector).forEach(function(element)
     { if(!element.classList.contains(FUNCTION.NAME_OF_THE_CLASS))
         {processFunctio.call(element);
          element.classList.add(FUNCTION.NAME_OF_THE_CLASS);      
         }        
     });     
  }
processNew.NAME_OF_THE_CLASS = '--binded';
function updateView()
  {processNew('body', function()
     {window.Favorites.init();        
     });
   processNew('[file-to]', function()
     {this.addEventListener('click', function(event)
        {const ELEMENT = event.target;
         var input = document.createElement('input');
         input.addEventListener('change', function(event)
           {const FILE = event.target.files[0];
            if(FILE.type.indexOf('image/') == 0)
              {const READER = new FileReader();
               READER.addEventListener('load', function(event)
                 {const REQUEST = new XMLHttpRequest();
                  REQUEST.open('POST', '/server.php?action=file-to&target=' + ELEMENT.getAttribute('file-to'));
                  REQUEST.setRequestHeader('Content-Type', FILE.type);
                  REQUEST.addEventListener('loadend', function()
                    {if(REQUEST.status == 200)
                       {                          
                       }
                    });
                  REQUEST.send(event.target.result);
                 });
               READER.addEventListener('error', function(event)
                 {let result = event.target.result;
                 });
               READER.readAsBinaryString(FILE);           
              }               
           });
         input.type = 'file';
         input.click();
        });        
     });
   processNew('div.hearth__icon', function()
     {this.addEventListener('click', function(event)
        {var $button = $(event.target).parents('.swiper-slide').eq(0), id = $button.get(0).dataset.id, nameOfTheMethod = ($button.parents('#favorites').length > 0) ? 'shift' : 'push';
         if(Favorites[nameOfTheMethod](id))
           {$button.clone(true).appendTo($('#favorites .swiper-wrapper'));              
           }
        });
     });
  }
updateView();
/*/Эдуардовский циферблат*/
