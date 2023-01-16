var slider = document.getElementById("range-slider__range");
var output = document.getElementById("range-slider__value");

output.innerHTML = slider.value;

// This function input current value in span and add progress colour in range
slider.oninput = function() {

  output.innerHTML = this.value;

  var value = (this.value-this.min)/(this.max-this.min)*5;
  
  this.style.background = 'linear-gradient(to right, #82CFD0 0%, #82CFD0 ' + value + '%, #d7dcdf ' + value + '%, #d7dcdf 100%)'
}