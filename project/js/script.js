function shownews(i) {
  document.getElementById(i).style.visibility='visible';
  window.scrollTo({top: 0, behavior: 'smooth'});
}
function hidenews(i) {
  document.getElementById(i).style.visibility='hidden';
  document.getElementById('nieuws1').scrollIntoView({behavior: 'smooth'});
}