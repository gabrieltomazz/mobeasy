@extends('layouts.logged')

@section('content')
<div class="container" ng-controller="DashboardController">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary" >
                
                <div class="panel-heading" >Escolha sua rota:</div>
                
                <div class="panel-body" >
                    <div class=" row">
                        <label for="origem" class="col-md-4 control-label">Origem:</label>Asa Norte SQN 206 - Asa Norte 
                    </div>
                    <div class="row">
                        <label for="destino" class="col-md-4 control-label">Destino:</label>Rua 35 Sul, Residencial Sevilla - Águas Claras
                    </div>
                </div>
            </div>

            <div class="panel panel-primary" >

                <div class="panel-body" >
                    <a href="">
                        <div class="row">
                            <div class="form-group">

                                <div class=" col-xs-3">
                                    <img src="assets/img/icones/run.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:80%;" ><b> Caminhada:</b> 10 min </p>
                                </div>
                                <div class="col-sm-4 col-xs-3">
                                    <img src="assets/img/icones/bus.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:82%;"><b>Linha: </b> 102.5 <b>Tempo: </b> 20 minutos <b>Custo:  </b>  R$3.50</p>
                                </div>
                                <div class="col-sm-4 col-xs-3">
                                    <img src="assets/img/icones/subway.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:82%;"><b>Linha :     </b>SUL-SD <b>Tempo: </b> 30 minutos <b>Custo:  </b>  R$5.00</p>
                                </div>
                                <div class="col-sm-4 col-xs-3">
                                    <img src="assets/img/icones/run.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:80%;" ><b> Caminhada:</b> 10 min </p>
                                </div>

                            </div>
                        </div>
                    </a>         
                </div>
            </div>  

            <div class="panel panel-primary" >

                <div class="panel-body" >
                    <a href="#" data-toggle="modal" data-target="#myModal" >
                        <div class="row">
                            <div class="form-group ">

                                <div class="col-sm-4 col-xs-3">
                                    <img src="assets/img/icones/run.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:80%;" ><b> Caminhada:</b> 5 min </p>
                                </div>
                                <div class="col-sm-4 col-xs-3">
                                    <img src="assets/img/icones/bike.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:82%;"><b>Bike Share:</b> 15 minutos <b>Custo:  </b>  R$10.00</p>
                                </div>
                                <div class="col-sm-4 col-xs-3">
                                    <img src="assets/img/icones/subway.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:82%;"><b>Linha :     </b>Central-Smb <b>Tempo: </b> 52 minutos <b>Custo:  </b>  R$5.00</p>
                                </div>
                                <div class="col-sm-4 col-xs-3">
                                    <img src="assets/img/icones/car.png" style="border:0px;margin: 0 35px 20px 0;float:left;" alt="run" width="50" height="50">
                                    <p class="margin-top-20" style="font-size:75%;" ><b>Car Sharing:</b><b> Tempo: </b> 10 minutos <b>Custo:  </b>  R$12.00 </p>
                                </div>

                            </div>
                        </div> 
                    </a>          
                </div>
            </div>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" >Car Sharing</h4>     
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal" >
                            <div class="form-group">    
                                <div class = "col-md-8">
                                    <div class="form-group">
                                        <div class = "col-md-4">    
                                            <label for="steps" class="control-label">Empresa</label> 
                                        
                                            <select id = "steps" class = "form-control" ng-model = "empresa" required autofocus>
                                                <option ng-value ="3" >Uber</option>
                                                <option ng-value ="4" >Cabify</option>
                                                <option ng-value ="5" >99 Táxi</option>
                                            </select>
                                        </div>   
                                    </div>
                                </div>
                                <div class = "col-md-8">
                                    <div class="form-group">
                                        <div class = "col-md-4">    
                                            <label for="servico" class="control-label">Serviço</label> 
                                        
                                            <select id = "servico" class = "form-control" ng-model = "servico" required autofocus>
                                                <option ng-value ="1" >Pool   - R$ 8 - 10 min</option>
                                                <option ng-value ="2" >Uber X - R$ 12 - 4 min</option>
                                                <option ng-value ="6" >Black  - R$ 20 - 8 min</option>
                                            </select>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="modal-footer">
                      <a type="button" class="btn btn-primary" data-dismiss="modal" ng-click="redirect()" >Escolher</a>
                    </div>
                  </div>
                  
                </div>
            </div>           
        </div>
    </div>
</div>

@endsection
