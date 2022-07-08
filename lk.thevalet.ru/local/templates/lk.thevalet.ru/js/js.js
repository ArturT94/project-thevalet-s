const betaBtn = document.querySelector(".beta_pop");
const betaPop = document.querySelector("#popup__beta");
const deleteCarBtn = document.querySelector(".img__trash");
const deleteCarPop = document.querySelector("#delete__car");

betaBtn.addEventListener("click", function (e) {
  betaPop.classList.add("open");
});
deleteCarBtn.addEventListener("click", function (e) {
  deleteCarPop.classList.add("open");
});
function getDataOfTheForm()
  {var data = new Object();
   $('ul.car__menu > .car__option > .option__top > .option__link[data-id]').each(function()
     {var $element;
      if(($element = $(this).parent().next()).hasClass('option__comm'))
        {data[$(this).attr('data-id')] = $element.html();        
        }
     });     
   return data;
  }
$('.global__car__profile2 > .btn__block > .user__popup__lvl__2__link[href="/"]').on('click', function()
  {goUploadAjax(window.brandId, window.brandName, window.modelName, window.vehicleNumber, getDataOfTheForm());    
  });
$(document).on('keydown', function(event)
  {var $element, keyIndex = undefined;
   if(((keyIndex = [13, 27].indexOf(event.which)) >= 0) && (($element = $('ul.car__menu > .car__option > .option__top > .option__link.editing')).length > 0))
     {switch(keyIndex)
        {case 0:
           var value = $element.children('.for-edit').children('input').val(), $parentElement, $valueElement = ($parentElement = $element.parents('.car__option')).children('.option__comm');
           if($valueElement.length == 0)
             {$valueElement = $('<div class="option__comm"></div>').appendTo($parentElement);               
             }
           $valueElement.html(value);
           break;        
        }
      $element.removeClass('editing');        
     }
  });
$('ul.car__menu > .car__option > .option__top > .option__link').on('click', function(event)
  {if(!$(this).hasClass('editing'))
     {$('ul.car__menu > .car__option > .option__top > .option__link').removeClass('editing');
      $(this).addClass('editing');
      $(this).find('input').focus();
     };
  });