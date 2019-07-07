app.controller('ctrl_dashboard',function($scope,$http){
	$http.get('login/check_valid_session').success (function(data) {if(data!=1){window.location.assign('<?=site_url("login")?>');}});
	
	$scope.start = 0;
	$scope.limit = 3;
	$scope.datadb=[];
	
	$scope.loader=function()
	{
		$http.get("imageupload/view_data?limit="+$scope.limit+"&start="+$scope.start).success(function(data){
			if(data.length>0)
				$scope.datadb=data;
		})
	}
	$scope.loader();
	$(window).scroll(function(){
		if($(window).scrollTop() == $(document).height() - $(window).height())
		{
			$scope.start +=$scope.limit;
			$http.get("imageupload/view_data?limit="+$scope.limit+"&start="+$scope.start).success(function(data){
				if(data.length>0)
				{
					var total=data.length;
					for(var i=0;i<total;i++)
						$scope.datadb.push(data[i]);
				}
					
			})
		}
			
	});
});