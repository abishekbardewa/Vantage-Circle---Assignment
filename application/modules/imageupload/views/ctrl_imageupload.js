app.controller('ctrl_imageupload', function($scope, $http) {
	$http.get('login/check_valid_session').success(function(data) {
		if (data != 1) {
			window.location.assign('<?=site_url("login")?>');
		}
	});

	$scope.save_data = function(x) {
		$('#imageform').ajaxForm(
				{
					type : "POST",
					url : "imageupload/save_image",
					beforeSend : function() {
						$('#submitbtn').attr('disabled', true);
						$('#webprogress').css('display', 'inline');
					},
					success : function(data) {
						console.log(data);
						if (data == "1") {
							messages("success", "Success!",
									"Image Saved Successfully", 3000);
						} else if (data == "0") {
							messages("warning", "Info!", "No Data Affected",
									3000);
						} else {
							messages("danger", "Warning!", data, 4000);
						}
						$('#webprogress').css('display', 'none');
						$('#submitbtn').attr('disabled', false);
					}
				});
	}

});