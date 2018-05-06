app.controller("DashboardController", ['$scope','$http','$window','$timeout', function ($scope, $http,$window,$timeout) {

	$scope.rating = false;
	$scope.part1 = false;
	$scope.part2 = false;
	$scope.part3 = false;
	$scope.part4 = false;
	$scope.part5 = false;

	$scope.cities =$scope.cities = [
'Asa Sul SQS 407 - Asa Sul, Brasília - DF',
'Asa Sul SQS 409 - Asa Sul, Brasília - DF',
'Asa Sul SQS 406 - Asa Sul, Brasília - DF',
'Asa Sul SQS 408 - Asa Sul, Brasília - DF',
'Asa Sul SQS 410 - Asa Sul, Brasília - DF',
'Asa Sul SQS 207 - Asa Sul, Brasília - DF',
'Asa Sul SQS 209 - Asa Sul, Brasília - DF',
'Asa Sul SQS 206 - Asa Sul, Brasília - DF',
'Asa Sul SQS 208 - Asa Sul, Brasília - DF',
'Asa Sul SQS 210 - Asa Sul, Brasília - DF',
'Asa Sul SQS 107 - Asa Sul, Brasília - DF',
'Asa Sul SQS 109 - Asa Sul, Brasília - DF',
'Asa Sul SQS 106 - Asa Sul, Brasília - DF',
'Asa Sul SQS 108 - Asa Sul, Brasília - DF',
'Asa Sul SQS 110 - Asa Sul, Brasília - DF',
'Asa Norte SQN 102 - Asa Norte, Brasília - DF',
'Asa Norte SQN 104 - Asa Norte, Brasília - DF',
'Asa Norte SQN 106 - Asa Norte, Brasília - DF',
'Asa Norte SQN 108 - Asa Norte, Brasília - DF',
'Asa Norte SQN 110 - Asa Norte, Brasília - DF',
'Asa Norte SQN 202 - Asa Norte, Brasília - DF',
'Asa Norte SQN 204 - Asa Norte, Brasília - DF',
'Asa Norte SQN 206 - Asa Norte, Brasília - DF',
'Asa Norte SQN 208 - Asa Norte, Brasília - DF',
'Asa Norte SQN 210 - Asa Norte, Brasília - DF',
'Asa Norte SQN 402 - Asa Norte, Brasília - DF',
'Asa Norte SQN 404 - Asa Norte, Brasília - DF',
'Asa Norte SQN 406 - Asa Norte, Brasília - DF',
'Asa Norte SQN 408 - Asa Norte, Brasília - DF',
'Asa Norte SQN 410 - Asa Norte, Brasília - DF',
'Guará II Qe 30 Conjunto K - Guará II QE 30 - Guará, Brasília - DF',
'Guará I QE 4 - Guará, Brasília - DF',
'Guará I QE 10 - Guará, Brasília - DF',
'Guará I QE 12 - Guará, Brasília - DF',
'Guará I QE 14 - Guará, Brasília - DF',
'Guará I QE 16 - Guará, Brasília - DF',
'Rodoviária do Plano Piloto - Eixo Rodoviário de Brasília - Brasília, DF',
'UnB - Brasília, DF',
'Estação Arniqueiras - Avenida Parque Águas Claras - Águas Claras, Brasília - DF',
'Estação Samambaia Sul - Qr 112 Conjunto 5 - Samambaia Sul, Brasília - DF',
'Esplanada dos Ministérios - Brasília, DF',
'Setor Sudoeste SQSW 305 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Setor Sudoeste SQSW 304 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Setor Sudoeste SQSW 303 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Setor Sudoeste SQSW 306 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Setor Sudoeste SQSW 105 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Setor Sudoeste SQSW 104 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Setor Sudoeste SQSW 103 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Setor Sudoeste SQSW 106 - Cruzeiro / Sudoeste / Octogonal, Brasília - DF',
'Aeroporto Internacional de Brasília (BSB) - Lago Sul, Brasília - DF',
'Setor de Habitações Individuais Norte CA 7 Indie Warehouse Coworking - Lago Norte, Brasília - DF',
'Rua 35 Sul, Residencial Sevilla - Águas Claras, Brasília - DF'];
	

	$scope.redirect = function(){

        $window.location.href = '/checkout';
  	};

  	$scope.redirect2 = function(){

        $window.location.href = '/way';
  	};
  	$timeout(function(){
    	$scope.part1 = true;

  	},2000);
  	$timeout(function(){
    	$scope.part2 = true;

  	},3000);
  	$timeout(function(){
    	$scope.part3 = true;

  	},4000);
  	$timeout(function(){
    	$scope.part4= true;

  	},5000);
  	$timeout(function(){
    	$scope.part5 = true;

  	},6000);
  	$timeout(function(){
    	$scope.part6 = true;

  	},7000);

  	$timeout(function(){
    	$scope.rating = true;

  	},8000);
 

}]);