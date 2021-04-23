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
