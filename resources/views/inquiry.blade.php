@extends('layout/default')
@section('content')

<!-- Main content -->
<div class="content flex-row-fluid " id="kt_content" >
              <!--begin::Index-->
              <div class="card card-page">
                <!--begin::Card body-->
                <div class="card-body">
<h1>Create Inquiry</h1>
<hr>
@if ($message = Session::get('success'))
<div id="inquiry_msg"><div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div></div>
@endif
<form action="{{URL::to('')}}/add_inquiry" method="POST">
  @csrf
  


  <div class="row">
    <div class="col">
    <label for="exampleInputEmail1">Name:</label>
     <input type="text" name="inquiryname" class="form-control" placeholder="Last name">
  </div>
  <div class="col">
     <label for="exampleInputEmail1">Phone:</label>
      <input type="tel" name="inquiryphone" class="form-control" placeholder="Last name">
    </div>
    
    <div class="col">
     <label for="exampleInputEmail1">Address:</label>
      <input type="text" name="inquiryaddress" class="form-control" placeholder="Enter Address">
    </div>
    <div class="col">
     <label for="exampleInputEmail1">Pax Inquiry:</label>
      <input type="text" name="paxinquiry" class="form-control" placeholder="Number Of Pax">
    </div>
    <div class="col">
     <label for="exampleInputEmail1">Date Of Enquiry:</label>
      <input type="text" name="dateofinquiry" class="form-control" placeholder="Date Of Enquiry">
    </div>
    </div>
  
  
 
 <div class="w-full md:w-5/10 px-48 mb-6 md:mb-0 mt-5">
  <button type="submit" class="btn btn-primary form-control">Submit</button>
</div>
</form>
</div>
</div>
</div>
   
    <!-- /.content -->
    @endsection

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
