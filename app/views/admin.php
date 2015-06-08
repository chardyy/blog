<!doctype html>
<html lang="en">
<head>
<title>Blog Administration</title>
	<!--css-->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
</head>
<body ng-app="blogApp">

<!-- div for view -->
<div id="wrapper">
	<!-- rendering partial view -->
	 <div class="container" id="view" ng-view>
	 
	 </div>
 </div>


<!--js-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 
<!--angular-->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular-route.js"></script>

</body>
</html>