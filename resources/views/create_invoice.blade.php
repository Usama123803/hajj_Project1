
@extends('layout/default')
@section('content')

<!-- Main content -->
<div class="content flex-row-fluid " id="kt_content" >
              <!--begin::Index-->
              <div class="card card-page">
                <!--begin::Card body-->
                <div class="card-body">
<form action="{{URL::to('')}}/add_invoice" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col ">
    <label>Customer Name: <span class="wperp-required-sign">*</span></label>
     <select class="form-control" required="" name="customername">
      <option readonly >Select</option>
      @foreach($inquiry as $inquiry1)
     
      <option>{{$inquiry1->inquiryname}}</option>
     
      @endforeach
    </select>
  </div>
  <div class="col">
     <label for="exampleInputEmail1">Transction Date: <span class="wperp-required-sign">*</span></label>
      <input type="date" name="tranctiondate" required="" class="form-control" placeholder="Last name">
    </div>
    <div class="col">
     <label for="exampleInputEmail1">Due Date: <span class="wperp-required-sign">*</span></label>
      <input type="date" name="duedate" required="" class="form-control" placeholder="Last name">
    </div>
    </div>
  
  
  
  
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Billing Address:</label>
    
    <textarea type="text" class="form-control" name="billingaddress" rows="4" cols="50"></textarea>

  </div>

 <h1 class="mt-5">Chosse Service:</h1>
  <!-- <div class="flex flex-wrap mb-6 mt-5">
    <button class="object-cover h-10 w-full md:w-6/10 px-6 mb-7 md:mb-0 " style="margin: 0px; color: white; line-height: 140%; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 20px;background-color: gray; width: auto; border-radius: 10px;" type="button" id="add_more_service_btn">
       <i class="fa fa-plus"></i> Service</button>
      
  </div> -->
 <div class="row clone_service">
  
    <div class="col ">
    <label>Package Name: <span class="wperp-required-sign">*</span></label>
     <select class="form-control"  name="packagename">
      <option readonly >Select</option>
      <option>P1</option>
      <option>P2</option>
      <option>P3</option>
      <option>P4</option>
    </select>
  </div>
  <div class="col">
     <label for="exampleInputEmail1">Select No of Pax:</label>
      <input type="number" name="noofpax"  class="form-control" placeholder="Total Pax Qty">
    </div>
    <div class="col">
     <label for="exampleInputEmail1">Unit Price:</label>
      <input type="number" name="unitprice" class="form-control" placeholder="Last name">
    </div>
     <div class="col">
     <label for="exampleInputEmail1">Amount:</label>
      <input type="number" name="amount"  class="form-control" placeholder="Last name">
    </div> 
     <div class="col">
     <label for="exampleInputEmail1">Tax:</label>
      <input type="checkbox" name="tax" class="form-control" placeholder="Last name">
    </div>
    </div>
<div class="append_service_clone_here">
  
</div>
 
 <div class="form-group mt-5">
    <label>Attachment:</label>
    <input type="file" name="attachment">
  </div>
  
  <button type="submit" class="btn btn-primary mt-5 form-control">Submit</button>
</form>
   </div>
   </div>
   </div>
    <!-- /.content -->
    @endsection

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

  // $('#add_more_service_btn').on('click',function(){    
  //   var clone = $('.clone_service').first().clone().appendTo(".append_service_clone_here").val();
      
  // });

});
    </script>