
function displayPat() {
  var x = document.getElementById("pat");
  var y = document.getElementById("matt");
  var z = document.getElementById("cody");
  var a = document.getElementById("abguy2");
  if (x.style.display === "none") {
    x.style.display = "block";
	  y.style.display = "none";
	  z.style.display = "none";
	  a.style.display = "none";
  } else {
	  x.style.display = "none";
	  a.style.display = "block";
  }
}

function displayMatt() {
  var x = document.getElementById("matt");
  var y = document.getElementById("pat");
  var z = document.getElementById("cody");
  var a = document.getElementById("abguy2");
  if (x.style.display === "none") {
    x.style.display = "block";
	  y.style.display = "none";
	  z.style.display = "none";
	  a.style.display = "none";
  } else {
    x.style.display = "none";
	a.style.display = "block";
  }
}

function displayCody() {
  var x = document.getElementById("cody");
  var y = document.getElementById("pat");
  var z = document.getElementById("matt");
  var a = document.getElementById("abguy2");
  if (x.style.display === "none") {
    x.style.display = "block";
	  y.style.display = "none";
	  z.style.display = "none";
	  a.style.display = "none";
  } else {
    x.style.display = "none";
	a.style.display = "block";
  }
}
