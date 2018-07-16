const GREYBUTTON = document.querySelector('#button');
const S = document.querySelector('#faq-select');

let options = ["#option1", "#option2", "#option3"];


function changeColour(){
    options.forEach(function(element){
       foo = document.querySelector(element).classList;
        if (!foo.contains("hidden")){
            foo.remove("show");
            foo.add("hidden");
        }
    });

    foo = S.value;
    detail = document.querySelector("#" + foo).classList;
    if (detail.contains("hidden")){
        detail.add("show");
        detail.remove("hidden");
    }
}

GREYBUTTON.addEventListener('click', changeColour, false);