document.addEventListener("DOMContentLoaded", selectInp(`food`));
document.addEventListener("DOMContentLoaded", fetchOrders());
document.addEventListener("DOMContentLoaded", getSum());
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
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "posLogic.php");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`name=${btnName}&price=${btnPrice}`);
  getSum();
}
function fetchOrders() {
  const div = document.getElementById("data-order");
  function changeData() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `orderTable.php`, true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        div.innerHTML = xhr.responseText;
      }
    };
    xhr.send();
    // setInterval(fetchOrders, 1000);
  }
  changeData();
}
function deleteItem(_button) {
  let btnName = _button.dataset.value1;
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "deleteItem.php");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`name=${btnName}`);
  getSum();
}

function getSum() {
  const div = document.getElementById("text-sum");
  function changeData() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `total.php`, true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        div.innerText = xhr.responseText;
      }
    };
    xhr.send();
    // setInterval(fetchOrders, 1000);
  }
  changeData();
}
