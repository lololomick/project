function shownews(i) {
  document.getElementById(i).style.visibility='visible';
  window.scrollTo({top: 0, behavior: 'smooth'});
}
function hidenews(i) {
  document.getElementById(i).style.visibility='hidden';
  document.getElementById('nieuws1').scrollIntoView({behavior: 'smooth'});
}

function hidecontact() {
  setTimeout(function(){ 
    window. location. reload(); 
  }, 5000);
}

function hidepopup() {
  document.getElementById("popupcontact").style.visibility='hidden';
}
function showpopup() {
  document.getElementById("popupcontact").style.visibility='visible';
}