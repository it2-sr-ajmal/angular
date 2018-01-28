 <!DOCTYPE html>
<html lang="en-US">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="angular.js"></script>
<body>

<div ng-app="FirstApp" ng-controller="FirstController" style="background-color:{{myCol}}">
  <p>Name : <input type="text" ng-model="name"></p>
  <h1>Hello {{name}}</h1>
  
  <p ng-bind="name"></p>
  <h1>Total : {{ firstnumber + secondnumber }}</h1>
  Enter my Color <input  ng-model="myCol" value="{{myCol}}">
</div>

</body>

</html> 