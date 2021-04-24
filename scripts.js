const updateProgress = () => {
  let sumOfCheckBox = document.querySelectorAll('input[type="checkbox"]')
    .length;
  let countChecked = document.querySelectorAll('input[type="checkbox"]:checked')
    .length;
  let progress = (100 / sumOfCheckBox) * countChecked;
  document
    .getElementById("progress-bar")
    .setAttribute("aria-valuenow", progress);
  document.getElementById("progress-bar").style.width = progress + "%";
};
const showPassword = () => {
  let x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
};
const addClass = () => {
  let div = document.createElement("div");
  div.innerHTML = document.getElementById("blockOfStuff").innerHTML;
  document.getElementById("targetElement").appendChild(div);
  document.getElementById("id").innerHTML =
    "Lớp: " + document.getElementById("classId").value;
  document.getElementById("name").innerHTML = document.getElementById(
    "className"
  ).value;
};
let lessonNumber = 1;
const addLesson = () => {
  let li = document.createElement("li");
  li.setAttribute("class", "list-group-item");
  let str = "Buổi " + lessonNumber + ": ";
  li.innerHTML = str.bold() + document.getElementById("lesson").value;
  document.getElementById("ul").appendChild(li);
  lessonNumber++;
};
