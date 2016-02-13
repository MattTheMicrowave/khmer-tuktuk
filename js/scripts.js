var image = new Array("../img/test1.jpg", "../img/test2.jpg", "../img/test3.jpg");

var image_number = 0;
var image_length = image.length - 1;

function change_image(num) {

image_number = image_number + num;
    
    if (image_number > image_length) {
    
    
    image_number = 0;
    
    };
    
    if (image_number < 0) {
    
    image_number = image_length;
    };

    
    document.carousel.src = image[image_number];
    
    return false;
    
};