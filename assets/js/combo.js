$("#provinsi").on("change", function () {
	let provinsiId = $("#provinsi").val();
	let base_url = window.location.origin;
	$("#kota").empty();
	if (provinsiId !== "") {
		$.getJSON(`${base_url}/provinsi/${provinsiId}`, function (data) {
			$.each(data, function (key, val) {
				$("#kota").append(`<option value=${val.id}>${val.name}</option>`);
			});
		});
	}
});
