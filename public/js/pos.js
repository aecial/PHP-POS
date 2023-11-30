document.addEventListener("DOMContentLoaded", selectInp(`food`));

function selectInp(value) {
  const div = document.getElementById("data-div");
  function changeData() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `${value}.php`, true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        div.innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  }
  changeData();
}

function fetchVal(_button) {
  let btnName = _button.dataset.value1;
  let btnPrice = _button.dataset.value2;
  console.log({ name: btnName, price: btnPrice });
  alert(`${btnName}, ${btnPrice}`);
}
