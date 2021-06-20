var slider = document.getElementById("slide1");
var output = document.getElementById("value1");
output.innerHTML = slider.value;
slider.oninput = function() {
  output.innerHTML = this.value;
}

var slider1 = document.getElementById("slide2");
var output1 = document.getElementById("value2");
output1.innerHTML = slider1.value;
slider1.oninput = function() {
  output1.innerHTML = this.value;
}

var slider2 = document.getElementById("slide3");
var output2 = document.getElementById("value3");
output2.innerHTML = slider2.value;
slider2.oninput = function() {
  output2.innerHTML = this.value;
}

var slider3 = document.getElementById("slide4");
var output3 = document.getElementById("value4");
output3.innerHTML = slider3.value;
slider3.oninput = function() {
  output3.innerHTML = this.value;
}

var slider4 = document.getElementById("slide5");
var output4 = document.getElementById("value5");
output4.innerHTML = slider4.value;
slider4.oninput = function() {
  output4.innerHTML = this.value;
}

var slider5 = document.getElementById("slide6");
var output5 = document.getElementById("value6");
output5.innerHTML = slider5.value;
slider5.oninput = function() {
  output5.innerHTML = this.value;
}