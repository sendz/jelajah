// Initialize
var base_url = 'http://localhost/jelajah/';
var index_page = 'index.php';

$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();
	$('.parallax').parallax();
	$('.button-collapse').sideNav();
	$('.dropdown-button').dropdown();
	$('select').material_select();
	$('.collapsible').collapsible({
    accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
  });
	$('.tooltipped').tooltip({delay: 50});
	$('.datepicker').pickadate({
		  selectMonths	: true
		, selectYears		: 5
	});
	$('.timepicker').pickatime();

	// Add Flight
	$('#form-add-trip').on('submit', function(event) {
		event.preventDefault();
			//alert("Ready to submit");
			data = $(this).serialize();

			$.ajax({
				  type: "POST"
				, url: base_url + index_page + "/api/trip/addtrip"
				, data: data
			}).done(function(msg){
				$('#form-add-trip')[0].reset();
				$('#add-trip').closeModal();
				Materialize.toast('New trip successfuly added',3000);
				setTimeout(function(){
					location.reload();
				},3500);
			});
	});

});
	function deleteThisThing(id)
	{
		$('#confirm-delete').openModal();
		$('#delete-button').attr("onclick","deleteThisItem("+id+")");
	}

	function addTrip()
	{
		$('#add-trip').openModal();
	}

	function deleteThisItem(id)
	{
		window.location = "port/delete/"+id;
	}
