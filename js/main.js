var slider = document.getElementById("range-slider__range");
var output = document.getElementById("range-slider__value");
var stance = document.getElementById("stance");

const stances = ["Ungültig", "Ich bin Krank", "Ich bin Krank", "Ich bin Gesund", "Ich bin Gesund", "Ich bin Wunschlos Glücklich"];

stance.innerHTML = `<b>${stances[slider.value]}</b>`;
output.innerHTML = slider.value;

// This function input current value in span and add progress colour in range
slider.oninput = function() {

  output.innerHTML = this.value;
  stance.innerHTML = `<b>${stances[this.value]}</b>`;

  var value = (this.value-this.min)/(this.max-this.min)*100;
  
  this.style.background = 'linear-gradient(to right, #82CFD0 0%, #82CFD0 ' + value + '%, #d7dcdf ' + value + '%, #d7dcdf 100%)'
}