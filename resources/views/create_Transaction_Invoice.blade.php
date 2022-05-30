@extends('layout/default')
@section('content')
  <!-- Main content -->
    <div class="content flex-row-fluid " id="kt_content" >
      <!--begin::Index-->
      <div class="card card-page">
        <!--begin::Card body-->
        <div class="card-body">
          <h1>New Invoice</h1>
          <hr>
          <form action="{{URL::to('add_Transaction_Invoice')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card card-default">
              <div class="card-body">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Customer</label>
                        <select name="firstName" id="select_firstName" class="form-control" id="exampleInputEmail1">
                          <option>Choose Customer</option>
                          @foreach ($data as $value)
                          <option attr_data= "{{ $value->id }}" value="{{ $value->firstName }}">{{ $value->firstName }}</option>
                          @endforeach
                        </select>
                        <input type="hidden" id="user_id" value="" name="user_id">
                      <button data-toggle="modal" data-target="#exampleModalCenter" class="wperp-selected-option" type="button" 
                      style="color: #1a9ed4;text-decoration: none;background-color: transparent; border: transparent;">
                        <i class="fa fa-plus"></i>
                        Add new
                      </button>
                      <!-- <a data-toggle="modal" data-target="#exampleModalCenter" style="color: #1a9ed4;text-decoration: none;background-color: transparent;"><i class="fa fa-plus"></i>Add new
                      </a> -->
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Transaction Date</label>
                      <input name="transactionDate" type="date" class="form-control" id="exampleInputEmail1" placeholder="Transaction Date">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Due Date</label>
                      <input name="dueDate" type="date" class="form-control" id="exampleInputEmail1" placeholder="Due Date">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Billing Address</label>
                      <textarea name="billingaddress" style="width: 50%; height: 100px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="Billing Address"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card card-default">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table>
                    <thead style="background-color: #a2a2f5;height: 40px; text-align: center;">
                      <tr>
                        <th style="padding-left: 15px;">Delete Row</th>
                        <th style="padding: 13px 40px 13px 25px;">Products/Services</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                        <th style="padding: 10px 30px 10px 10px;">Tax</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="text-align: center;">
                        <td><input type="checkbox" name="record"></td>
                        <td>
                          <select id="productServices" style="width: 350px;margin: 15px 20px 0px 0px;" name="productServices" class="form-control">
                            <option id="">Choose Service</option>
                            <option unitprice="9000" value="Makkah">Makkah</option>
                            <option unitprice="7500" value="Madinah">Madinah</option>
                          </select>
                        </td>
                        <td><input style="width: 50px;margin: 20px 15px 0px 0px;" type="number" value="1" id="qty" name="qty"></td>
                        <td><input style="width: 90px;margin: 20px 15px 0px 0px;" type="text" value="" id="unitprice" name="unitprice"></td>
                        <td><input style="width: 160px;margin: 20px 15px 0px 0px;" type="text" value="" id="amount" name="amount" readonly></td>
                        <td>
                          <input type="checkbox" id="checkbox" name="checkbox">
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <button class="add-row" type="button" style="color: white;text-decoration: none;background-color: #1a9ed4;height: 30px;width: 100px;border: 2px;padding: 5px;margin-top: 30px;">
                    <i class="fa fa-plus"></i>Add Line
                  </button>
                  <button class="delete-row" type="button" style="color: white;text-decoration: none;background-color: #1a9ed4;height: 30px;width: 100px;border: 2px;padding: 5px;margin-top: 30px;"></i>Delete
                  </button>

                  <div class="container">
                     <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                           <select name="discount" id="discount" style="width: 155px;height: 30px;margin: 0px 25px 0px 0px;float: right;">
                             <option>Enter Amount</option>
                             <option value="£0.00%">Discount percent</option> 
                             <option value="£0.00">Discount value</option>
                           </select>
                        </div>
                        <div class="col-sm">
                           <div style="display: flex;align-items: center;">
                             <input name="discounts" id="discounts" placeholder="Enter Discount" style="margin: 0px 15px 15px 0px" type="text">
                             <!-- <div id="div1"><em>%</em></div> -->
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="container">
                     <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                        <select name="salesTax" style="width: 155px;height: 30px;margin: 10px 25px 15px 0px;float: right;">
                          <option value="sales-tax">Select Sales tax</option>
                        </select>
                        </div>
                        <div class="col-sm">
                        <div style="display: flex;align-items: center;">
                          <input name="salesTax" id="salesTax" style="margin: 10px 15px 15px 0px" type="text" placeholder="£0.00">
                        </div>
                        </div>
                     </div>
                  </div>

                  <div class="container">
                     <div class="row">
                      <div class="col-sm"></div>
                      <div class="col-sm" style="padding-top: 13px;">
                        <span style="height: 30px;margin: 0px 35px 0px 0px;float: right;">Total Amount = </span>
                     </div>
                     <div class="col-sm">
                        <div style="display: flex;align-items: center;">
                          <input id="totalAmount" value="" name="totalAmount" style="margin: 10px 15px 15px 0px" type="text" placeholder="£0.00" readonly>
                        </div>
                      </div>
                    </div>
                  </div> 
                  
                  <label for="exampleInputEmail1">Particulars</label>
                  <textarea name="particulars" style="width: 100%; height: 100px;" type="text" class="form-control" id="exampleInputEmail1" placeholder="particulars"></textarea>
                     
                  <div style="display: flex;align-items: center;flex-wrap: wrap; margin-top: 30px;">
                      <label class="col--attachement" style="margin-right: 10px;">Attachment</label> 
                      <form data-v-a00ede16="" enctype="multipart/form-data" novalidate="novalidate">
                        <div style="border: solid black 2px;padding: 20px;background-color: #c39898;"> To attach
                          <!-- <input data-v-a00ede16="" type="file" id="attachment" multiple="multiple" accept="image/*,.jpg,.png,.doc,.pdf" name="attachments[]" class="display-none">  -->
                          <label style="color: #243136;text-decoration: underline;padding: 0 7px;cursor: pointer;" 
                          for="attachment"><input type="file" name="file"></label>
                        </div>
                      </form>
                  </div>                        
                  <button style="float: right;margin-top: 20px;background-color: #1a9ed4;padding: 5px 40px 5px 40px;" type="submit" class="btn-fake">Save</button>                        

                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!-- /.content -->

  <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{URL::to('')}}/add_Customers" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              @csrf
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Customer</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name" required>
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone" required>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="company">Company</label>
                        <input name="company" type="text" class="form-control" id="company" placeholder="Enter Company Name" required>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="file">File input</label>
                        <input name="file" type="file" class="form-control" id="file" placeholder="Choose File" required>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" id="formButton">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                          <p>Show More</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="display:none;" id="form1">
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Mobile">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label for="website">Website</label>
                        <input name="website" type="text" class="form-control" id="website" placeholder="Website">
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="fax">Fax</label>
                        <input name="fax" type="text" class="form-control" id="fax" placeholder="Fax">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label for="street1">Street 1</label>
                        <input name="street1" type="text" class="form-control" id="street1" placeholder="Street 1">
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="street2">Street 2</label>
                        <input name="street2" type="text" class="form-control" id="street2" placeholder="Street 2">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label for="city">City</label>
                        <input name="city" type="text" class="form-control" id="city" placeholder="City">
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <input name="country" type="text" class="form-control" id="country" placeholder="Country">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label for="provinceState">Province/State</label>
                        <input name="provinceState" type="text" class="form-control" id="provinceState" placeholder="Province/State">
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="postCode">Post Code</label>
                        <input name="postCode" type="text" class="form-control" id="postCode" placeholder="Post Code">
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="note">Note</label>
                        <textarea name="note" type="text" class="form-control" id="note" placeholder="Note"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Add new</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!-- /.Modal --> 

  @endsection
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

      //Show more tags of form
      $("#formButton").click(function(){
            $("#form1").toggle();
      });

      $('#productServices').on('change',function() {
        var unitprice = $('option:selected', this).attr('unitprice');
        $('#unitprice').val(unitprice);
        var qty = $('#qty').val();
        var amount = parseInt(unitprice) * parseInt(qty)
        $('#amount').val(amount);
        $('#totalAmount').val(amount);
      });

      $('#select_firstName').on('change',function() {
        var id = $('option:selected', this).attr('attr_data');
        $('#user_id').val(id);        
      });

      $('#qty').on('change',function() {
         var unitprice = $('#unitprice').val();
         var qty = $('#qty').val();
         var amount = parseInt(unitprice) * parseInt(qty)
         $('#amount').val(amount);
         $('#totalAmount').val(amount);
      });

      $('#discounts').on('change',function() {
         var discounts  = (this.value);
         var amount = $('#totalAmount').val();
         var dis = $('#discount').val();

         if (dis == "£0.00") {
            var totalAmount = parseInt(amount) - parseFloat(discounts);
            $('#totalAmount').val(totalAmount);
         }
         if(dis == "£0.00%"){
         var perc = parseFloat(amount) / 100 * parseFloat(discounts);
         var totalAmount = parseInt(amount) - parseFloat(perc);
         $('#totalAmount').val(totalAmount);
         }
      });

      $('#salesTax').on('change',function() {
         var salesTax  = (this.value);
         var a = $('#totalAmount').val();
         var totalAmount = parseInt(a) - parseFloat(salesTax);
         $('#totalAmount').val(totalAmount);
      });

      $('#discount').on('change',function() {
         var discount  = (this.value);
         // alert(discount);
         var discounts = $('#discounts').val(discount);
      });

      var productServicesID = 0;
      $(".add-row").click(function(){      
        var markup ='<tr style="text-align: center;"><td><input type="checkbox" name="record"></td><td><select id="productServicesID_'+ productServicesID +'" style="width: 350px;margin: 20px 10px 0px 0px;" name="productServices" class="form-control"><option id="">Choose Service</option><option qty="1" unitprice="9000" amount="5000" value="Makkah">Makkah</option><option qty="1" unitprice="7500" amount="4000" value="Madinah">Madinah</option></select></td><td><input style="width: 50px;margin: 20px 15px 0px 0px;" type="text" value="" id="qty" name="qty"></td><td><input style="width: 90px;margin: 20px 15px 0px 0px;" type="text" value="" id="unitprice" name="unitprice"></td><td><input style="width: 160px;margin: 20px 15px 0px 0px;" type="text" value="" id="amount" name="amount" readonly></td><td><input type="checkbox" id="checkbox" name="checkbox</td><td><td><input class="delete-row" type="button" value="Delete"></td></tr>';
        $("table tbody").append(markup);
        productServicesID=productServicesID+1;
      });

      $('#productServicesID_'+productServicesID).on('change',function() {
        alert('s');
      });
       
      // Find and remove selected table rows
      $(".delete-row").click(function(){
         $("table tbody").find('input[name="record"]').each(function(){
            if($(this).is(":checked")){
               $(this).parents("tr").remove();
            }
         });
      });

    });
  </script>