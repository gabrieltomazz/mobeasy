@extends('layouts.logged')

@section('content')
<div class="container" ng-controller="DashboardController">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
               
            <h4 style="color: #3097b2">Confirme sua viagem</h4>
            <hr>   
            <div >
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col" style="color: #3097b2">Modo</th>
                      <th scope="col" style="color: #3097b2">Tempo</th>
                      <th scope="col" style="color: #3097b2">Custo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>A PÉ</td>
                      <td>5 min</td>
                      <td>R$  -- </td>
                    </tr>
                    <tr>
                        <td>Bike</td>
                        <td>15 min</td>
                        <td>R$ --  </td>
                    </tr>
                    <tr>
                        <td>Metrô</td>
                        <td>52 min</td>
                        <td>R$  5,00 </td>
                    </tr>

                    <tr>
                        <td>Uber X</td>
                        <td>14 min</td>
                        <td>R$  12,00 </td>
                    </tr>
                    <tr>
                          <th scope="col" style="color: #3097b2">Total</th>
                          <th scope="col" style="color: #3097b2">1hr 26min</th>
                          <th scope="col" style="color: #3097b2">R$ 17</th>
                    </tr>

                  </tbody>
                </table>
                <div >
                    <a type="button"  class="btn btn-primary"  href = "/choose"  >Voltar</a>
                    <a type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Confirmar</a>
                </div>

            </div>    

            <!-- <div class="panel panel-primary" >

                <div class="panel-body" >
                            
                </div>
            </div>   -->

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" >Forma de Pagamento</h4>     
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal" >
                            <div class="form-group">    
                                <div class = "col-md-8">
                                    <div class="container">
                                        <h4 style="color: #3097b2; float: center;">Uber X</h4>
                                        <hr> 
                                        <table class="table table-striped">
                                          <tbody>
                                            <tr>
                                              <td><input type="radio" name="optradio"></td>
                                              <td>PAY-PAL </td>
                                              <td><span class="glyphicon glyphicon-phone"></span></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="optradio"></td>
                                                <td>Visa - XXXX-XXXX-XXX-5467</td>
                                                <td><span class="glyphicon glyphicon-credit-card"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="optradio"></td>
                                                <td>Dinheiro</td>
                                                <td><span class="glyphicon glyphicon-usd"></td>
                                            </tr>

                                          </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="modal-footer">
                      <a type="button" class="btn btn-primary" data-dismiss="modal" ng-click="redirect2()" >Pagar</a>
                    </div>
                  </div>
                  
                </div>
            </div>           
        </div>
    </div>
</div>

@endsection
