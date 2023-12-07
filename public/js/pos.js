document.addEventListener("DOMContentLoaded", selectInp(`food`));
document.addEventListener("DOMContentLoaded", fetchOrders());
document.addEventListener("DOMContentLoaded", getSum());

function selectInp(value) {
  const div = document.getElementById("data-div");
  function changeData() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `${value}.php`, false);
    xhr.onload = function () {
      if (xhr.status === 200) {
        div.innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  }
  changeData();
}
function fetchOrders() {
  const div = document.getElementById("data-order");
  const xhr = new XMLHttpRequest();
  function changeData() {
    xhr.open("GET", `orderTable.php`, false);
    xhr.onload = function () {
      div.innerHTML = xhr.responseText;
    };
    xhr.send();
  }
  changeData();
}
function fetchVal(_button) {
  let btnName = _button.dataset.value1;
  let btnPrice = _button.dataset.value2;
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "posLogic.php", false);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`name=${btnName}&price=${btnPrice}`);
  getSum();
  fetchOrders();
}

function deleteItem(_button) {
  let btnName = _button.dataset.value1;
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "deleteItem.php", false);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`name=${btnName}`);
  getSum();
  fetchOrders();
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
function removeOrders() {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", `cancel.php`, false);
  xhr.send();
  fetchOrders();
  getSum();
}
function done() {
  let total = Number(document.getElementById("text-sum").innerText);
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "done.php", false);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`total=${total}`);
  removeOrders();
}
