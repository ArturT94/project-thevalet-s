document.addEventListener("DOMContentLoaded", function () {
  let numberCarInput = document.querySelectorAll("input[data-number-input]");
  let activeBtn = document.querySelector("a[data-active-btn]");

  let getLettersInputValue = function (input) {
    return input.value.replace(/[^АВЕКМНОРСТУХ]/gi, "");
  };
  let getNumbersInputValue = function (input) {
    return input.value.replace(/\D/g, "");
  };

  let onNumberInput = function (e) {
    let input = e.target,
      inputLettersValue = getLettersInputValue(input),
      inputNumbersValue = getNumbersInputValue(input),
      formatedInputValue = "";

    if (!inputLettersValue) {
      return (input.value = "");
    }
    if (input.value.length > 0)
      formatedInputValue =
        inputLettersValue[0] + inputNumbersValue.substring(0, 3);

    if (input.value.length >= 4)
      formatedInputValue += inputLettersValue.substring(1, 3);

    if (input.value.length >= 6)
      formatedInputValue += inputNumbersValue.substring(3, 6);
    if (input.value.length >= 8) {
      activeBtn.style.background = "black";
      activeBtn.style.pointerEvents = "all";
    } else {
      activeBtn.style.background = "gray";
      activeBtn.style.pointerEvents = "none";
    }
    input.value = formatedInputValue;
  };

  for (i = 0; i < numberCarInput.length; i++) {
    numberCarInput[i].addEventListener("input", onNumberInput);
  }
});
