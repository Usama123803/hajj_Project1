@extends('layout/default')
@section('content')

<!-- Main content -->
  <div class="content flex-row-fluid " id="kt_content" >
    <!--begin::Index-->
    <div class="card card-page">
      <!--begin::Card body-->
      <div class="card-body">
        <h1>Create Customers</h1>
        <hr>
        <form action="{{URL::to('')}}/add_Customers" method="POST" enctype="multipart/form-data">
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
            <div colspan="9" style="text-align: right; padding: 15px;">
              <button style="margin-top: 20px;padding: 5px 40px 5px 40px;border: 0px;"  type="cancel">Cancel</button>
              <button type="submit" style="margin-top: 20px;background-color: #1a9ed4;padding: 5px 40px 5px 40px;border: 0px;" class="btn-fake">Add new</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- /.content -->
@endsection
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

      $('#add_more_stay_btn').on('click',function(){    
          var clone = $('.clone_this').first().clone().appendTo(".add_more_stay_section").val();
          
      });
      $('#add_more_detail_btn').on('click',function(){    
          var clone = $('.date_detail_clone').first().clone().appendTo(".clone_date_detail_append").val();
          
      });
      $('#add_more_price_btn').on('click',function(){    
          var clone = $('.price_div_to_clone').first().clone().appendTo(".append_price_clone").val();
          
      });
      $('#add_more_hotel_stay_btn').on('click',function(){    
          var clone = $('.clone_hotel_stay').first().clone().appendTo(".append_hotel_stay_clone").val();
          
      });

      //Show more tags of form
      $("#formButton").click(function(){
            $("#form1").toggle();
      });
  });
    </script>