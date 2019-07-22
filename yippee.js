	login=document.getElementById("login");
     logout=document.getElementById("logout");
	 
	$(document).ready(function(){
    $("a").click(function(event){
        event.preventDefault();
		alert("This feature can't be used until you log in")
    });
});
	
$("#submit").click(function() {
   // Get the ZIP code from the text field
   var username = $("#user").val();
   var password=$("#pass").val();

   //alert (zip);
   // Make an Ajax request to weather.php with the entered ZIP code
   var notNeeded;
   $.get("weather2j.php?UserN="+username+ "&passW="+password, notNeeded, function (response) {
      var myObj = JSON.parse (response);
     
      if (myObj!="") {
		login.style.visibility = "hidden";
		 $('a').off('click');

      } else {
         alert("This is not a vaild username and password!");
      }
   });
});

	 	
    
     
     logout.addEventListener("click",function(){
          login.style.visibility = "visible";
		  $("a").click(function(event){
        event.preventDefault();
		alert("This feature can't be used until you log in")
    });
          
     })