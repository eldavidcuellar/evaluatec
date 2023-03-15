
const navbarColorInput = document.getElementById('navbar-color');
const header = document.querySelector('header');

navbarColorInput.addEventListener('change', function() {
  header.style.backgroundColor = navbarColorInput.value;


});
document.querySelector('#logo-upload').addEventListener('change', updateLogo);
function updateLogo() {
  const file = document.querySelector('#logo-upload').files[0];
  const reader = new FileReader();
  reader.addEventListener('load', function () {
    document.querySelector('.logo img').src = reader.result;
  }, false);
  if (file) {
    reader.readAsDataURL(file);
  }
}
const backgroundColorPicker = document.getElementById("backgroundColorPicker");
    
backgroundColorPicker.addEventListener("input", () => {
  document.body.style.backgroundColor = backgroundColorPicker.value;
});



