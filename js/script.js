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