const inputBtnGosN = document.querySelector(".enter__gosnumber");
const submitBtn = document.querySelector(".get-gosnumber");

function goUploadAjax(brandId, brandName, modelName, gosNumber) {
  $.ajax({
    url: "/sender2.php",
    type: "POST",
    dataType: "html",
    data: {
      brandId: brandId,
      brandName: brandName,
      modelName: modelName,
      gosNumber: gosNumber,
    },
    success: function (html) {
      console.log(brandId, brandName, modelName, gosNumber);
      $("#model .user__popup__lvl__2__content").html(html);
    },
    error: function (err) {
      console.log(err);
    },
  });
}
