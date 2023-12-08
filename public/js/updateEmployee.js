document.addEventListener("DOMContentLoaded", selectInp());
function selectInp() {
  const div = document.getElementById("data-div");
  function changeData() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `getEmployee.php`, false);
    xhr.onload = function () {
      if (xhr.status === 200) {
        div.innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  }
  changeData();
}
