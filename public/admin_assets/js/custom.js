//wow js
    //new WOW().init();

//bootstrap dropdown
$('.dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(150).slideDown();
}, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(50).slideUp()
});

//tooltip
    $('[data-toggle="tooltip"]').tooltip();

//bootstrap carousel
    $('.carousel').carousel();


    ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );
         

		//alert
		function confirmDelete() {
			{
				var x = confirm("Are you sure you want to delete?");
				if (x)
					return true;
				else
				  return false;
			  }
		  }