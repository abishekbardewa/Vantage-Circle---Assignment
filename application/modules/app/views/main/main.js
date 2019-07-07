var app=angular.module('assignApp',['ui.router']);
app.config(function($stateProvider, $urlRouterProvider) 
{
    $urlRouterProvider.otherwise('/home');
    $stateProvider
    	.state
    	('home', {
	        url: '/home',
	        templateUrl: 'dashboard/admin',
	        controller: 'ctrl_dashboard'
    	})
    
	    .state
		('change_password', {
	        url: '/change_password',
	        templateUrl: 'login/change_password',
	        controller: 'ctrl_login'
	    })
	    
	    .state
		('imageupload', {
	        url: '/imageupload',
	        templateUrl: 'imageupload',
	        controller: 'ctrl_imageupload'
	    })
	 
});