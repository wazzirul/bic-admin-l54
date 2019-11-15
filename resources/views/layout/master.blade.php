<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin BIC - @yield('judul-halaman')</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/assets/css/jquery.dataTables.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/buttons.dataTables.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
	<div class="wrapper">
        @include('layout/main-header')
        
        @include('layout/sidebar')

        @yield('content')
	</div>
</body>
<script src="{{ asset('assets/js/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.modal.min.js') }}"></script>
<script src="{{ asset('assets/js/ready.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>


<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#program').DataTable( {
		} );
		$('#pengumuman').DataTable( {
		} );
		$('#beasiswa').DataTable( {
		} );
		$('#grade').DataTable( {
		} );
		$('#admin').DataTable( {
		} );
		$('#profil-user').DataTable( {
		} );
	} );
</script>

<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function($) {
		
		$(document).on('click', "#detail-item", function() {
		  $(this).addClass('detail-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
	  
		  var options = {
			'backdrop': 'static'
		  };
		  $('#detail-modal').modal(options)
		})
	  
		// on modal show
		$('#detail-modal').on('show.bs.modal', function() {
		  var el = $(".detail-item-trigger-clicked"); // See how its usefull right here? 
		  var row = el.closest(".data-row");
	  
		  // get the data
		  var title = row.children(".title").text();
		  var subtitle = row.children(".subtitle").text();
		  var description = row.children(".description").text();
		  var price = row.children(".price").text();
		  var dp = row.children(".dp").val();
	  
		  // fill the data in the input fields
		  $("#modal-title").text(title);
		  $("#modal-subtitle").text(subtitle);
		  $("#modal-description").text(description);
		  $("#modal-price").text(price);
		  $("#modal-dp").text(dp);
	  
		})
	  
		// on modal hide
		$('#detail-modal').on('hide.bs.modal', function() {
		  $('.detail-item-trigger-clicked').removeClass('detail-item-trigger-clicked')
		})
	  



		//////////////////////////////////////////////////////////////////////////////////////////////
		//DELETE MODAL DELETE MODAL DELETE MODAL
		//////////////////////////////////////////////////////////////////////////////////////////////
		$(document).on('click', "#delete-item", function() {
		  $(this).addClass('delete-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
	  
		  var options = {
			'backdrop': 'static'
		  };
		  $('#delete-modal').modal(options)
		})
	  
		// on modal show
		$('#delete-modal').on('show.bs.modal', function() {
		  var el = $(".delete-item-trigger-clicked"); // See how its usefull right here? 
		  var row = el.closest(".data-row");
	  
		  // get the data
		  var id = row.children(".id").val();
	  
		  // fill the data in the input fields
		  $("#modal-delete-id").val(id);
	  
		})
	  
		// on modal hide
		$('#delete-modal').on('hide.bs.modal', function() {
		  $('.delete-item-trigger-clicked').removeClass('delete-item-trigger-clicked')
		  $("#delete-form").trigger("reset");
		})













		//////////////////////////////////////////////////////////////
		$('.btn-close').click(function(){
			$('.mfp-close').click();
		});

		$('.open-popup-detail').magnificPopup({
		removalDelay: 500,
  		mainClass: 'mfp-fade',
		type:'inline',
		midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		
		
		});
		$('.open-popup-delete').magnificPopup({
		removalDelay: 500,
  		mainClass: 'mfp-fade',
		type:'inline',
		midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		
		
		});

		$('.ajax-popup-link').magnificPopup({
		type: 'ajax'
		});


		$('.open-popup-resetpw').magnificPopup({
		removalDelay: 500,
  		mainClass: 'mfp-fade',
		type:'inline',
		midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		
		
		});





		////////////////////////////////////////////////////////////////////////////////
		//TinyMCE


		tinymce.init({
			selector:'textarea.description',
			width: 900,
			height: 300
		});
});

</script>



</html>