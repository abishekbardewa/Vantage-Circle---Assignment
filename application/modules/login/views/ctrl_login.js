app.controller('ctrl_login',function($scope,$http){
	$http.get('login/check_valid_session').success (function(data) {if(data!=1){window.location.assign('<?=site_url("login")?>');}});
	
	console.log("login")
	$scope.register_data=function(){
		$.ajax({
			type: "POST",
			url: "login/register",
			data: $("#register_form").serialize(),
			beforeSend: function()
			{
				$('#registerbtn').attr('disabled',true);
			},
			success: function(data){
				$('#result').html(data);
			}
		});
	}
	$scope.save_data=function(){
//		console.log("adad");
		$.ajax({
			type: "POST",
			url: "login/change_password_submit",
			data: $("#form1").serialize(),
			beforeSend: function()
			{
				$('#submitbtn').attr('disabled',true);
				$('#webprogress').css('display','inline');
			},
			success: function(data){
				$('#result').html(data);
				$('#form1').trigger("reset");
				$('#webprogress').css('display','none');
				$('#submitbtn').attr('disabled',false);
			}
		});
	}
});