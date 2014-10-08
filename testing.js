function get_records(data){
	$.ajax({
		url: "http://www.json-generator.com/j/bYOgRKBShu?indent=4",
		dataType: "JSON"
	}).done(function (data) {
			$.each(data, function () {
				alert(this.schoolName);
		});

	});
}