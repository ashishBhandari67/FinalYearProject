var close = document.getElementById('close');
var help = document.getElementById('helpBox');
var openx = document.getElementById('open');

close.onclick = function(){
        help.style.display = "none";
    
}
openx.onclick = function(){
    help.style.display = "block";

}


window.addEventListener("dblclick", function(event) {
    if (event.target == help) {
        help.style.display = "none";
    }
});

//for dashboard menu

