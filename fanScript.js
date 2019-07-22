    $.get("weather2j.php?UserN=already","", function (response) {
      //$.get("jane.php","", function (response) {
        var jane = JSON.parse (response);
       var slide=document.getElementById("slide");
       var searchbar = document.getElementById("searchbar");
       var search= document.getElementById("pict");
       var array1=["location", "year", "state", "country","description"];
        
       search.addEventListener("click", function(){
           thumb.innerHTML = "";
            slide.innerHTML="";
            value=searchbar.value;
            for (var j=0; j<array1.length; j++){
            for (i = 0; i < jane.length; i++){
                element=array1[j];
    
            if (element!="description"){
               
            if( value === jane[i][element]){
                
               var thumbnail = document.createElement("img");
                    thumbnail.setAttribute("src", jane[i].link);
                    thumbnail.setAttribute("height", "89");
                    thumbnail.setAttribute("width", "89");
                    //thumbnail.setAttribute("class", input.id);
                    thumb.appendChild(thumbnail);
                    
                    link=jane[i].link;
                    var fullpict = document.createElement("img");
                    fullpict.setAttribute("src", jane[i].link);
                    fullpict.setAttribute("height", "400");
                    fullpict.setAttribute("width", "600");
                    var div= document.createElement("div");
                    slide.appendChild(div);
                    
                        thumbnail.addEventListener('click', (function(link) {
                            return function() {
                             bigpict(link);
                            }
                          })(link))
            }
            
            }else{
             if (jane[i].description){
                for(k=0;k<=[jane[i].discription].length;k++){
                 if( value === jane[i].description[k]){
                
               var thumbnail = document.createElement("img");
                               thumbnail.setAttribute("src", jane[i].link);
                               thumbnail.setAttribute("height", "89");
                               thumbnail.setAttribute("width", "89");
                               //thumbnail.setAttribute("class", input.id);
                               thumb.appendChild(thumbnail);
                    
                               link=jane[i].link;
                               var fullpict = document.createElement("img");
                               fullpict.setAttribute("src", jane[i].link);
                               fullpict.setAttribute("height", "400");
                               fullpict.setAttribute("width", "600"); 
                            var div= document.createElement("div");
                             slide.appendChild(div);
                    
                            thumbnail.addEventListener('click', (function(link) {
                            return function() {
                             bigpict(link);
                            }
                          })(link))
            }
                
                    }
                }
            }
            
            }
             
             
         }
            if (slide.innerHTML==""){
                alert("No Images match your search");
            }
        function bigpict(link){
                    $("#big").hide();
                     big.src=link ;
                     $("#big").fadeIn("slow");
                        
                        }
        
       })
       
       
       
       
       
       
       
       
       
       
       
       
       
       
   
      var thumb=document.getElementById("thumb");
     var demo=document.getElementById("demo");
    var year=document.getElementById("year");
    var state=document.getElementById("state");
    var location=document.getElementById("location");
    var big=document.getElementById("big");
     var years=[];
  var states=[];
  var countries=[];
  var locations=[];
  
    state.addEventListener("click",function(){
       demo.innerHTML = "";
       thumb.innerHTML = "";
       slide.innerHTML="";
        getvars("state",states);
    })
    year.addEventListener("click",function(){
       demo.innerHTML = "";
       thumb.innerHTML = "";
       slide.innerHTML= "";
        getvars("year",years);
    })
    country.addEventListener("click",function(){
       demo.innerHTML = "";
       thumb.innerHTML = "";
       slide.innerHTML= "";
        getvars("country",countries);
    })
     location.addEventListener("click",function(){
       demo.innerHTML = "";
       thumb.innerHTML = "";
       slide.innerHTML= "";
        getvars("location",locations);
    })
    var big=document.getElementById("big");
   
     var submit=document.getElementById("submit");
      var shearchbar=document.getElementById("shearchbar");
  
  //jane=[{ "year":"2017", "link":"images/baldyFromCopper.jpg","state":"ma" },{"year":"2017" ,"link":"images/startOfTrail.jpg", "state":"ma"},{"year":"2019" , "link":"images/upTheCanyon.jpg"}];
 
 
 
  function getvars(name,names){
 
 num=0
  for (i = 0; i < jane.length; i++) {
    if (jane[i][name] && names.indexOf(jane[i][name])==-1){
        names[num]=jane[i][name];
        num++;
    }
    
    
}
 
names.sort();
 
 


var i;
var demo=document.getElementById("demo");
for (i = 0; i < names.length; i++) {
    
    var input = document.createElement("input");
    input.type = "checkbox";
     if (name=="year"){
    input.id = "y"+years[i]; // set the CSS class
    }else{
    input.id=names[i];
    }
    
    demo.appendChild(input);
    var label = document.createElement("label");
    var br = document.createElement("br");
    var text= document.createTextNode(names[i])
    demo.appendChild(label);
    label.appendChild(text);
    

     input.addEventListener('click', (function(input,name) {
     return function() {
      checkclicky(input,name)
     }
   })(input,name));
}
}





function checkclicky(input,name) {
        if (input.checked==true){
        for (i = 0; i < jane.length; i++) {
        
                 if(((name=="year" && "y"+jane[i].year==input.id)||jane[i][name]==input.id)){
                          var thumbnail = document.createElement("img");
                               thumbnail.setAttribute("src", jane[i].link);
                               thumbnail.setAttribute("height", "89");
                               thumbnail.setAttribute("width", "89");
                               thumbnail.setAttribute("class", input.id);
                               thumbnail.setAttribute("class", "picture");
                               thumb.appendChild(thumbnail);
                    
                               link=jane[i].link;
                               var fullpict = document.createElement("img");
                               fullpict.setAttribute("src", jane[i].link);
                               fullpict.setAttribute("height", "400");
                               fullpict.setAttribute("width", "600"); 
                            var div= document.createElement("div");
                            div.className=input.id;
                             slide.appendChild(div);
                             div.appendChild(fullpict);
                               
                            thumbnail.addEventListener('click', (function(link) {
                            return function() {
                             bigpict(link);
                            }
                          })(link))
                         
                        }
             }
             }
             else{
                
                var elements = thumb.getElementsByClassName(input.id);
                while (elements[0]) {
                    elements[0].parentNode.removeChild(elements[0]);
                    }
                var slides = slide.getElementsByClassName(input.id);
                while (slides[0]) {
                    slides[0].parentNode.removeChild(slides[0]);
                    }
             }
}
function bigpict(link){
                    $("#big").hide();
                     big.src=link ;
                     $("#big").fadeIn("slow");
                        
                        }
                              })
//-----------------


//-----------------

   







    