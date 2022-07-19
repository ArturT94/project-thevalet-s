const inputBtnGosN = document.querySelector(".enter__gosnumber");
const submitBtn = document.querySelector(".get-gosnumber");

function goUploadAjax(brandId, brandName, modelId, modelName, gosNumber, extraData) {
  $.ajax({
    url: "/AjaxAddCars.php",
    type: "POST",
    dataType: "html",
    data: Object.assign(
      {
        brandId: brandId,
        modelid: modelId,
        brandName: brandName,
        modelName: modelName,
        gosNumber: gosNumber,
      },
      ["object"].indexOf(typeof extraData) >= 0 ? extraData : new Object()
    ),
    success: function (html) {
      console.log(brandId, brandName, modelId, modelName, gosNumber, extraData);
      $("#model .user__popup__lvl__2__content").html(html);
    },
    error: function (err) {
      console.log(err);
    },
  });
}
