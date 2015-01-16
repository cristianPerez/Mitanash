
function zoom(){
    
    $('#ex1').zoom();
    
}

function updateImagePrincipal(name) {

    $('#principalImage').attr("src", "images/products/large/" + name);
    zoom();
}

$(document).ready(function () {
    zoom();
});



