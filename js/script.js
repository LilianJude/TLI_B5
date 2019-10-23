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

	//inputMer = document.querySelector("input[name=li1]:checked").id;

$(function () {
    $('#filters_patho').on('submit', function (e) {
		e.preventDefault();// using this page stop being refreshing 
		var inputMer = document.querySelector("input[name=li1]:checked").id;
		var inputPatho = document.querySelector("input[name=li2]:checked").id;
		var dataString = 'inputMer='+inputMer + '&inputPatho='+ inputPatho;
		

		  $.ajax({
			type: 'POST',
			url: 'patho.php',
			data: dataString,
		  });

		});
		return false;
});

function SubmitFormData(){
	var inputMer = document.querySelector("input[name=li1]:checked").id;
	var inputPatho = document.querySelector("input[name=li2]:checked").id;
	$.post("submit.php",{ inputMer: inputMer, inputPatho: inputPatho},
   function(data) {
		$('#result_from_filter').html(data);
   });
}
