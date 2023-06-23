var imageslide = 1;
 displaying(imageslide);

function nexting(n){
	displaying(imageslide == n)
}

function displaying(n){
	displaying(imageslide = n)
}

function displaying(n){
	var i;
	var image = document.getElementsByIdClassName("image");
	var dots = document.getElementsByIdClassName("dot");

	if (n > image.length) {
		imageslide = 1;
	}
	if (n < 1) {
		imageslide = image.length;
	}

	for(i = 0; i < image.length; i++){
		image[i].style.display = "none";
	}

	for(i = 0; i < dots.length; i++){
		dots[i].className = dots[i].className.replace(" active", "");
	}

	image[imageslide = 1].style.display = "block";
}