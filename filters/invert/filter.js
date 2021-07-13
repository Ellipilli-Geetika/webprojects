var img = new Image();
img.src = "https://picsum.photos/450/250?random=1";

const canvasModel = document.getElementById("canvas_model");
const canvasEdited = document.getElementById("canvas_edited");

var ctx = canvasModel.getContext("2d");

img.onload = function () {
	ctx.drawImage(img, 0, 0);
	img.style.display = "none";
};

image = new MarvinImage();
image.load(img.src, imageLoaded);

function imageLoaded(n) {
	for (let i = 0; i < image.getWidth(); i++) {
		for (let j = 0; j < image.getHeight(); j++) {
			let rgb;
			let red = image.getIntComponent0(i, j);
			let green = image.getIntComponent1(i, j);
			let blue = image.getIntComponent2(i, j);

			if (n == 0) {
				rgb = inverted(red, green, blue, rgb);
			} else if (n == 1) {
				rgb = grayscale(red, green, blue, rgb);
			} else {
				rgb = normal(red, green, blue, rgb);
			}

			pintar(i, j, rgb);
		}
	}

	image.draw(canvasModel);
}

// Normal
function normal(r, g, b, rgb) {
	return (rgb = "rgb(" + r + ", " + g + ", " + b + ")");
}

// Inverted
function inverted(r, g, b, rgb) {
	return (rgb = "rgb(" + (255 - r) + ", " + (255 - g) + ", " + (255 - b) + ")");
}

// Grayscale
function grayscale(r, g, b, rgb) {
	let aux = (r + g + b) / 3;
	return (rgb = "rgb(" + aux + ", " + aux + ", " + aux + ")");
}

// Download image
download_img = function (el) {
	var image = canvasEdited.toDataURL("image/jpg");
	el.href = image;
};

imageLoaded();
function pintar(x, y, color) {
	if (canvasEdited.getContext) {
		let ctx = canvasEdited.getContext("2d");
		ctx.fillStyle = color;
		ctx.fillRect(x, y, 1, 1);
	}
}
