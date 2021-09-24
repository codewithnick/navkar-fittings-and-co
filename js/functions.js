function loginalert(params) {
    window.alert(params);
}

function collapser(){
var coll = document.getElementById("collapse");
var ul = document.getElementById("collapseul");
var hidden=document.getElementsByClassName("active");
var display=document.getElementsByClassName("nilactive");
var i;
coll.addEventListener("click", function() {
    ul.classList.toggle("flex-col");
    
    for (let i = 0; i < display.length; i++) {
        const element = display[i];
        element.classList.toggle("hidden");
    }
    for (let i = 0; i < hidden.length; i++) {
        const element = hidden[i];
        element.classList.toggle("inactive");
    }
});

}