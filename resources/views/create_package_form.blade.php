@extends('layout/default')
@section('content')

<!-- Main content -->
<div class="content flex-row-fluid " id="kt_content" >
              <!--begin::Index-->
              <div class="card card-page">
                <!--begin::Card body-->
                <div class="card-body">
<h1>Create Package</h1>
<hr>

<form action="{{URL::to('')}}/add_package" method="POST">
  @csrf
  

<div class="form-group">
    <label for="exampleInputEmail1">Package Title:</label>
    <input type="text"  class="form-control" name="package[packagetitle]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Package Title">
  </div>
   <div class="flex flex-wrap mb-6 mt-5">
    <button class="object-cover h-10 w-full md:w-6/10 px-6 mb-7 md:mb-0 " style="margin: 0px; color: white; line-height: 140%; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 20px;background-color: gray; width: auto; border-radius: 10px;" type="button" id="add_more_price_btn">
       <i class="fa fa-plus"></i> Room</button>
      

  </div>
  <div class="row append_price_clone">
    <div class="price_div_to_clone">
    <div class="col ">
    <label for="exampleInputEmail1">Room Type:</label>
     <select class="form-control" name="package[packageprice][]">
      <option>Quad</option>
      <option>duble</option>
      <option>triple</option>
      <option>single</option>
    </select>
  </div>
  <div class="col">
     <label for="exampleInputEmail1">Price:</label>
      <input type="number" name="package[typeprice][]" class="form-control" placeholder="Last name">
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Start Date:</label>
    <input type="date"  class="form-control" name="package[startdate]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Check IN Date">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">End Date:</label>
    <input type="date" class="form-control"  name="package[enddate]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Check Out Date">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Route:</label>
    <select  class="form-control"name="package[route]">
      <option>Aziziyah-Mina-Aziziyah-Makkah-Madina</option>
          </select>
  </div>

  <!-- adding hotel div -->
  <div class="flex flex-wrap mb-6 mt-5">
    <button class="object-cover h-10 w-full md:w-6/10 px-6 mb-7 md:mb-0 " style="margin: 0px; color: white; line-height: 140%; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 20px;background-color: gray; width: auto; border-radius: 10px;" type="button" id="add_more_hotel_stay_btn">
       <i class="fa fa-plus"></i> Stay</button>
      

  </div>
  
  <div class="row clone_hotel_stay">
    <div class="col">
      <label for="exampleInputEmail1">Stay:</label>
      <select class="form-control" name="package[hotel][hotelname][]">
        <option>Aziziyah</option>
        <option>Mina</option>
        <option>Makkah</option>
        <option>Madina</option>
      </select>
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Check In:</label>
      <input type="date" name="package[hotel][checkin][]" class="form-control" placeholder="Last name">
    </div>
    
    <div class="col">
      <label for="exampleInputEmail1">Check Out:</label>
      <input type="date" name="package[hotel][checkout][]" class="form-control" placeholder="Last name">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Location:</label>
      <input type="text" name="package[hotel][location][]" class="form-control" placeholder="Last name">
    </div>
    <div class="col">
      <label for="exampleInputEmail1">Remarks:</label>
      <input type="text" name="package[hotel][remarks][]" class="form-control" placeholder="Last name">
    </div>
  </div>
 
  <div class="form-group append_hotel_stay_clone">
   
  </div>

<!-- end -->

    
  </div> -->
  <!-- detail itnerary -->
 <div class="flex flex-wrap mb-6 mt-5">
    <button class="object-cover h-10 w-full md:w-6/10 px-6 mb-7 md:mb-0 " style="margin: 0px; color: white; line-height: 140%; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 20px;background-color: gray; width: auto; border-radius: 10px;" type="button" id="add_more_detail_btn">
       <i class="fa fa-plus"></i> Detail</button>
      

  </div>
  <div class="row clone_date_detail_append">
   
   <div class="date_detail_clone">
    <div class="col">
    <label for="exampleInputEmail1">Select Date:</label>
    <input type="date" name="package[routinedate][]" class="form-control" >
  </div>
  <div class="col">
     <label for="exampleInputEmail1">Describe Routine:</label>
      <textarea type="text" class="form-control" name="package[routinedescription][]" rows="1" cols="50"></textarea>
    </div>
    </div>

  </div>
    
<!-- end -->
 
 <div class="w-full md:w-5/10 px-48 mb-6 md:mb-0" style="margin-left: 15%; margin-top: 10px;">
  <button type="submit" class="btn btn-primary">Submit</button>
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

});
    </script>