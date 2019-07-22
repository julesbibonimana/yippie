// Get the modal
var modal = document.getElementById('myModal');
var slide=document.getElementById("slide");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
 var  myslider=$('#slide').bxSlider();
// When the user clicks the button, open the modal 
btn.onclick = function() {
    if (slide.innerHTML==""){
                 alert("There are no thumbnails open to put in slideshow!");
            }
            else{
 
    modal.style.display = "block";
     setTimeout(function (){
     myslider.reloadSlider();},200);
}

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}