<!DOCTYPE html>
<html ng-app="example">
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Usage</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/autocomplete.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendor/css/font-awesome.min.css" >
    <link rel="stylesheet" href="/assets/vendor/css/bootstrap.min.css" >

    <!-- Required dependencies -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOWhg46NVJb_l7Hai19-3azEAhP1WTjOo&libraries=places&sensor=false&language=en"></script>
    <script src="/assets/vendor/js/angular.js"></script>

    <!-- Google Places Autocomplete directive -->
    <script src="/assets/js/autocomplete.js"></script>
    <script src="/assets/js/config.js"></script>
    <script src="/assets/vendor/js/jquery.min.js"></script>
    <script src="/assets/js/menu.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>    

    <script>
        angular.module('example', ['google.places'])

                // Setup a basic controller with a scope variable 'place'
                .controller('MainCtrl', function ($scope) {
                    $scope.origem = null;
                    $scope.destino = null;
                });
    </script>
    
</head>
<body ng-controller="MainCtrl">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Basic Usage</h1>

            <form class="form col-md-8">
                <label> Origem: </label>
                <input class="form-control" g-places-autocomplete ng-model="origem"/>
            </form>
            <form class="form col-md-8">
                <label> Destino: </label>
                <input class="form-control" g-places-autocomplete ng-model="destino"/>
            </form>
            
            
        </div>
    </div>
</div>
</body>
</html>