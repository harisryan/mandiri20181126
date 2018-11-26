$(document).ready(function() {

	$('.revamp-home-content.active').show();

	$('.revamp-home-pb').on('click',function(e){
		e.preventDefault();
		var target = $(this).data('target');
		$('.revamp-home-content').hide();
		$('#'+target).show();

		if($('#separate').hasClass('bisnis')){
			$('#separate').removeClass('bisnis');
			$('#separate').addClass('personal');
		}else{
			$('#separate').removeClass('personal');
			$('#separate').addClass('bisnis');
		}

	});

	$(".revamp-slider.owl-carousel").owlCarousel({
		navigation : false, // Show next and prev buttons
		items:3,		
        itemsDesktop : [767,1],
  	});

  // 	$(".product-matrix-manfaat.owl-carousel").owlCarousel({
		// navigation : false, // Show next and prev buttons
		// items:5,		
  //       itemsDesktop : [767,1],
  // 	});
  	
  	$(".product-matrix-manfaat.owl-carousel").owlCarousel({
		navigation : false, // Show next and prev buttons
		items:5,		
        itemsDesktop : [767,1],
        afterInit:function(){
        	$(".product-matrix-manfaat.owl-carousel").find('.owl-wrapper').each(function(){
        		var w = $(this).width() / 2;
        		$(this).width(w);
        		$(this).css('margin','0 auto');
        	})
        },
        afterUpdate: function() {
        	$(".product-matrix-manfaat.owl-carousel").find('.owl-wrapper').each(function(){
        		var w = $(this).width() / 2;
        		$(this).width(w);
        		$(this).css('margin','0 auto');
        	})
        }

  	});


  	$('.open-modal').on('click',function(e){
  		e.preventDefault();
		$('#'+$(this).data('target')).show();
	});

	$('.close-modal').on('click',function(e){
		e.preventDefault();
		$('#'+$(this).data('id')).hide();
		$('.ajax-loader').css('visibility', 'hidden');
		$('.cap_sukses').hide().html('');
		$('.cap_status').hide().html('');

		$('input[aria-required=true]').each( function( key, value ) {
			$(this).removeClass('error');				  
		});

		$('form').each(function(k,v){
			$(this)[0].reset();
		});
	});	

});

function ButtonArrow( el ) {
	this.$el = el
	this.init()
}

ButtonArrow.prototype = {
	init: function () {
		this.isArrowAnimated = this.$el.classList.contains( 'arrow-animated' )
		if( this.isArrowAnimated ) {

			this.duplicateArrow()

			this.$el.addEventListener( 'mouseenter', this.onEnter.bind(this), false)
			this.$el.addEventListener( 'mouseleave', this.onLeave.bind(this), false)
			
			this.$el.addEventListener( 'touchstart', this.onEnter.bind(this), false)
			this.$el.addEventListener( 'touchend', this.onEnter.bind(this), false)
			
		}
	},
	onEnter: function() {
		TweenMax.set( this.svgs[0], {x: 0, opacity: 1} )
		TweenMax.set( this.svgs[1], {x: -15, opacity: 0} )
		
		TweenMax.to( this.svgs[0], 0.3, { x: 15, opacity: 0 }  )
		TweenMax.to( this.svgs[1], 0.3, {x: 0, opacity: 1 }  )
	},
	onLeave: function() {
		TweenMax.set( this.svgs[0], {x: -15, opacity: 0} )
		TweenMax.set( this.svgs[1], {x: 0, opacity: 1} )

		TweenMax.to( this.svgs[0], 0.3, {x: 0, opacity: 1 }  )
		TweenMax.to( this.svgs[1], 0.3, { x: 15, opacity: 0 }  )
	},
	duplicateArrow: function() {
		var svg = this.$el.querySelector( 'svg' )
		var dsvg = svg.cloneNode( true )
		this.$el.querySelector( '.icon' ).appendChild( dsvg )
		this.svgs = this.$el.querySelectorAll( 'svg' )
	}
}

window.addEventListener( 'DOMContentLoaded', function() {

	var arrowButtons = document.querySelectorAll( '.cbutton.arrow' )
	for (var i = 0; i < arrowButtons.length; i++) {
		new ButtonArrow( arrowButtons[i] )
	}

}, false )