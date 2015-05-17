$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();
	$('.parallax').parallax();
	$('.button-collapse').sideNav();
	$('.dropdown-button').dropdown();
	$('select').material_select();
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
