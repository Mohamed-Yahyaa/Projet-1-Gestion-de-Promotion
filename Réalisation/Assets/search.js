
$('#search').on('input', function () {

	$.ajax({
		url: "../Data-Access/Search.php",
		method: "POST",
		data: { key: this.value },

		success: function (data) {
			$('#table').html(data);
		}
	});
});