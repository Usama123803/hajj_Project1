@extends('layout/default')
@section('content')
  <!-- Main content -->
    <div class="content flex-row-fluid " id="kt_content" style="background-color: #72777c;;">
      <!--begin::Index-->
      <div class="card card-page" style="padding: 50px;">
        <!--begin::Card body-->
        <div class="card-body">
          <h1>Transaction Invoice</h1>
          <hr>

          <div class="card card-default">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6" style="float: left;">
                  <div class="form-group">
                    <h4>Recieve</h4>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div style="float: right;">
                      <button onClick="window.print()"><i class="fa fa-print"></i> Print</button>
                      <button><i class="fa fa-ellipsis-v"></i> More Options</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card card-default">
              
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6" style="float: left;">
                    <div class="form-group">
                      <!-- <img style="width: 100px;height: 100px" src="https://i.insider.com/601c27acee136f00183aa4f5?width=600&format=jpeg&auto=webp"> -->
                      <img src="https://haramaynltd.co.uk/wp-content/uploads/2022/05/AL-HIJAZ-LOGO.png" width="100" height="100">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="invoice-address">
                        <address style="float: right;">
                          <strong>{{$data->company}}</strong><br>
                          {{$data->street1}}<br>
                          {{$data->street2}}<br>
                          {{$data->city}}<br>
                          {{$data->provinceState}}
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
                <hr>

                <!-- <div class="card-body"> -->
                <div class="row">
                  <div class="col-sm-12" style="float: left;">
                    <div class="form-group">
                      <h4>Payment Details : </h4>
                    </div>
                  </div>
                  <div class="col-sm-6" style="float: left;">
                    <div class="form-group">
                      <div class="invoice-address">
                        <address style="float: left;">
                          <strong>Pyament From :</strong><br>
                            {{$data->firstName}}
                          <br>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                   <table class="invoice-info" style="float: right;">
                    <tr>
                      <th>Voucher No:</th> 
                      <td>{{$data->id}}</td>
                    </tr> 
                    <tr>
                      <th>Transaction Date:</th> 
                      <td>{{$data->transactionDate}}</td>
                    </tr> 
                    <tr>
                      <th>Created At:</th> 
                      <td>{{$data->dueDate}}
                      </td>
                    </tr> 
                    <tr>
                      <th>Deposit To:</th> 
                      <td>aa</td>
                    </tr> 
                    <tr>
                      <th>Transaction Charge:</th> 
                      <td>£0.00</td>
                    </tr>
                  </table>
                  </div>
                </div>
                <!-- </div> -->
                <hr>

                <!-- <div class="card-body"> -->
                <div class="row">  
                  <table style="margin-left: 10px;">
                    <thead style="background-color: #a2a2f5;height: 40px; text-align: center;">
                      <tr>
                        <th>SL.</th>
                        <th>Invoice ID</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align: center;">
                          <td style="width: 270px;">1</td>
                          <td style="width: 270px;">{{$data->id}}</td>
                          <td style="width: 270px;">{{$data->totalAmount}}</td>
                          <td>
                        </tr>
                    </tbody>
                  </table>
                </div>                      
                <!-- </div> -->
                <hr>

                <!-- <div class="card-body"> -->
                <div class="row">
                  <div class="container">
                     <div class="row">
                      <div class="col-sm"></div>
                      <div class="col-sm" style="padding-top: 13px;">
                        <span style="height: 30px;margin: 0px 35px 0px 0px;float: right;"></span>
                      </div>
                      <div class="col-sm">
                          <div style="display: flex;align-items: center;">
                            <span style="height: 30px;margin: 0px 35px 0px 0px;float: right;">Total</span>
                            <input id="totalAmount" value="{{$data->totalAmount}}" name="totalAmount" style="margin: 10px 15px 15px 0px" type="text" placeholder="£0.00" readonly>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>                   
                <!-- </div> -->
                <hr>

                <!-- <div class="card-body"> -->
                <div class="row" style="margin-left: 10px;">
                  <label for="exampleInputEmail1">Particulars</label>
                  <!-- <textarea name="particulars" style="width: 100%; height: 100px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="particulars"></textarea> -->
                  <p style="margin-left:10px;">Invoice receipt created with voucher no 
                      {{$id}}
                  </p>    
                  <!-- </div> -->
                </div>
                <hr>

                <!-- <div class="card-body"> -->
                <div class="row" style="margin-left: 10px;">
                  <div style="display: flex;align-items: center;flex-wrap: wrap; margin-top: 30px;">
                      <label class="col--attachement" style="margin-right: 10px;">Attachment</label>
                      <input type="text" name="" value="{{$data->file}}" readonly>
                  </div>                      
                </div>

              </div>

            </div>

          </form>

        </div>
      </div>
    </div>
  <!-- /.content -->

  @endsection
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
