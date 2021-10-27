
function displayPat() {
  var x = document.getElementById("pat");
  var y = document.getElementById("matt");
	var z = document.getElementById("cody");
  if (x.style.display === "none") {
    x.style.display = "block";
	  y.style.display = "none";
	  z.style.display = "none";
  } else {
	  x.style.display = "none";
	  
  }
}

function displayMatt() {
  var x = document.getElementById("matt");
	var y = document.getElementById("pat");
	var z = document.getElementById("cody");
  if (x.style.display === "none") {
    x.style.display = "block";
	  y.style.display = "none";
	  z.style.display = "none";
  } else {
    x.style.display = "none";
  }
}

function displayCody() {
  var x = document.getElementById("cody");
	var y = document.getElementById("pat");
	var z = document.getElementById("matt");
  if (x.style.display === "none") {
    x.style.display = "block";
	  y.style.display = "none";
	  z.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
