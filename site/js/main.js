//GRID INITIALISATION
Grid.init( {
	transition : true,
	speed : 250,
	delay: 5
} );

//CREATION  DES VARIABLES 
var position=0;
var menuBottom = document.getElementById( 'cbp-spmenu-s4' );
var body = body = document.body;

//INITIALISATION DU CAROUSSEL
$('.carousel').carousel({
	interval: 2000 //changes the speed
});


$('html').on ('mousewheel', function (e) {
	var delta = e.originalEvent.wheelDelta;
	
	if (delta < 0) { //IF SCROLL DOWN
		if(position==0){
			$("#mozaic").click();
			$.ajax({
				url: 'grid-first-element.html',
				dataType: 'html',
				success: function(html) {
					$("#grid-first-element").replaceWith(html);
					$('#grid-first-element').addClass("third-size");
					$(".logo").toggle();
					
				},
				error : function(){
					alert("erreur");
				}
			});
		}else if(position==7){
			classie.toggle( menuBottom, 'cbp-spmenu-open' );
			classie.toggle( body, 'cbp-spmenu-push-totop' );
			
		}
		position = position+1;
	} else if (delta > 0) { //IF SCROLL UP
		if(position==5){
			$.ajax({
				url: 'carousel.html',
				dataType: 'html',
				success: function(html) {
					$("#grid-first-element").replaceWith(html);
					$('#grid-first-element').addClass("full-size");
					$(".logo").toggle();
					
				},
				error : function(){
					alert("erreur");
				}
			});
			
			$("#carousel").click();
		}else if(position==7){
			classie.toggle( menuBottom, 'cbp-spmenu-open' );
			classie.toggle( body, 'cbp-spmenu-push-totop' );
			
		}
		position = position-1;
	}
});