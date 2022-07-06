function goUploadAjax(numberOfBrand, nameModel) {
  $.ajax({
    url: "/sender2.php",
    type: "POST",
    dataType: "html",
    data: {
      model: nameModel,
      brand: numberOfBrand,
    },
    success: function (html) {
      console.log(numberOfBrand, nameModel);
      $("#model .user__popup__lvl__2__content").html(html);
    },
    error: function (err) {
      console.log(err);
    },
  });
}

function sendModel(numberOfModel) {
  $.ajax({
    url: "/sender2.php",
    type: "POST",
    dataType: "html",
    data: {
      model: numberOfModel
    },
    success: function (html) {
      console.log(numberOfModel)
      $("#model .user__popup__lvl__2__content").html(html);
    },
    error: function (err) {
      console.log(err);
    },
  });
}

  $('#sendNumber').on("submit", function () {
    let dataForm = $(this).serialize();

  $.ajax({
    url: "/sender2.php",
    type: "POST",
    dataType: "html",
    data: dataForm,
    success: function (data) {
      console.log(data)
    },
    error: function (err) {
      console.log(err);
    },
  });
  });
