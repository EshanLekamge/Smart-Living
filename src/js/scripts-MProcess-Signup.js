
function checkPassword(){

 var a = document.getElementById("pwd").value;
 var b = document.getElementById("pwdreturn").value;
 
  if(a == b)
  {
    alert("Matched");
	return true;
  }
  else 
  {
   alert("Mis-matched");
   return false;
  }
}

function enableButton() {
 
 if(document.getElementById("check").checked)
 {
    document.getElementById("sbmt").disabled=false;
 }  
 else
 {
  document.getElementById("sbmt").disabled=true;
 }
}



var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}










