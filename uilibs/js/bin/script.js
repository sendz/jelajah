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


	// Typeahead for Airport
	var airportIata = new Bloodhound({
		datumTokenizer: function(data){
			return Bloodhound.tokenizers.whitespace(data.iata)
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: base_url + index_page + '/api/airport/all'
	});

	var airportName = new Bloodhound({
		datumTokenizer: function(data){
			return Bloodhound.tokenizers.whitespace(data.name)
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: base_url + index_page + '/api/airport/all'
	});

	var airportCity = new Bloodhound({
		datumTokenizer: function(data){
			return Bloodhound.tokenizers.whitespace(data.city)
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: base_url + index_page + '/api/airport/all'
	});

	airportIata.initialize();
	airportName.initialize();
	airportCity.initialize();

	$('.typeahead').typeahead({
		hightlight: true
	},{
		name: 'airportCity'
		, displayKey: ['iata'||'city'||'name']
		, source: airportCity.ttAdapter()
		, templates: {
			empty: [
				'<ul class="dropdown-content">',
					'<li>Unable to find data</li>',
				'</ul>'
			].join('\n'),
			suggestion: Handlebars.compile('<div class="typeahead-content"><strong>{{iata}}</strong> - {{city}}, {{name}}</div>')
		}
	});

	// Typeahead for Airline
	var airlineIata = new Bloodhound({
		datumTokenizer: function(airlineData){
			return Bloodhound.tokenizers.whitespace(airlineData.iata)
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: base_url + index_page + '/api/airline/all'
	});

	var airlineIcao = new Bloodhound({
		datumTokenizer: function(airlineData){
			return Bloodhound.tokenizers.whitespace(airlineData.icao)
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: base_url + index_page + '/api/airline/all'
	});

	var airlineName = new Bloodhound({
		datumTokenizer: function(airlineData){
			return Bloodhound.tokenizers.whitespace(airlineData.name)
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: base_url + index_page + '/api/airline/all'
	});

	airlineIcao.initialize();
	airlineIata.initialize();
	airlineName.initialize();

	$('.airlinetypeahead').typeahead({
		hightlight: true

	},{
		name: 'airlineName'
		, displayKey: 'name'
		, source: airlineName.ttAdapter()
		, templates: {
			empty: [
				'<div class="empty-message">',
					'Unable to find data',
				'</div>'
			].join('\n'),
			suggestion: Handlebars.compile('<div class="content"><strong>{{name}}</strong></div>')
		}
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
