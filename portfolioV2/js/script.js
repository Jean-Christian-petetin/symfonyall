/*
On change entre ajouter et suprimmer la class "responsive" avec "topnav",
quand l'utilisateur clique sur l'icon.
*/
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}


/* Sections */
function height(bloc){
	var hauteur;
  var nav;

	if( typeof( window.innerWidth ) == 'number' )
		hauteur = window.innerHeight;
	else if( document.documentElement && document.documentElement.clientHeight )
		hauteur = document.documentElement.clientHeight;

	document.getElementById(bloc).style.height = hauteur+"px";
}


//jquery
//topnav
$(document).ready(function(){
  var fenH = $(document).height();
  var navH = $(".topnav")[0];

  for(var i=0;i<  $("section").length;i++){
    var s = $("section")[i];
    $(s).height((fenH - $(navH).height()));
  }
});

$(window).resize(function(){
  var fenH = $(document).height();
  var navH = $(".topnav")[0];

  for(var i=0;i<  $("section").length;i++){
    var s = $("section")[i];
    $(s).height((fenH - $(navH).height()-10)+" px");
  }
});
