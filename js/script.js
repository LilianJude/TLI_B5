function press_key_enter() {
	$('#keyword').keydown(function() {
		if (event.keyCode == 13) {
			console.log(keyword);
			$('#formkeyword').submit();
		}
});
}
function search_by_keyword() {
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'patho.php');
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send('keyword=' + document.getElementById("keyword").value);
	return false;
}

$(function () {
$('#filters_patho').submit(function (e) {
	e.preventDefault();
	if (document.querySelector('input[type=radio][name=li1]:checked') !== null ){
		var inputMer = document.querySelector('input[type=radio][name=li1]:checked').id;
	}
	//if (typeof document.querySelector('input[type=radio][name=li2]:checked') !== 'undefined' || document.querySelector('input[type=radio][name=li2]:checked') !== null ){
	if (document.querySelector('input[type=radio][name=li2]:checked') !== null ){
		var inputPatho = document.querySelector('input[type=radio][name=li2]:checked').id;
	}

	$.ajax({
		url: 'submit.php',
		type: 'POST', 
		data: {inputMer: inputMer, inputPatho: inputPatho},
	}).done(function(data){ // if getting done then call.

	// show the response
	$('#result_from_filter').html(data);

	})
	.fail(function() { // if fail then getting message

	// just in case posting your form failed
	alert( "Posting failed." );

	});

	// to prevent refreshing the whole page page
	return false;

	});
});

$(function () {
$('#raz_radio_btn').click(function (e) {
	e.preventDefault();
	$('input[name=li1]').prop('checked',false);
	$('input[name=li2]').prop('checked',false);
		});
});