/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var app=angular.module('FirstApp',[]);
app.controller('FirstController',function($scope){
    $scope.name="ajmal";
    $scope.firstnumber = 5;
    $scope.secondnumber = 6;
    
});