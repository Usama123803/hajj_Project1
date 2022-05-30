<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\packages;
use App\Models\invoice;
use App\Models\inquiry;

class PackagesController extends Controller{
   
   public function create_package(){
   	return view('create_package_form');
   }
    
   public function add_package(Request $req){
      dd($req->package);
      foreach ($req->package['routinedate'] as $key => $value) {
      	// dd($key);
         $data[] = array(
         // 'date1'=> $value,
         $value => $req->package['routinedescription'][$key]);
      }
      foreach ($req->package['packageprice'] as $key => $value) {
         // dd($key);
         $roomtypeprice[] = array(
         // 'date1'=> $value,
         $value => $req->package['typeprice'][$key]);
      } 
      foreach ($req->package['hotel']['hotelname'] as $key => $value) {
   	   // dd($key);
         $stayhotelwise[] = array(
         // 'date1'=> $value,
         $value => $req->package['hotel']['checkin'][$key] .'/'. $req->package['hotel']['checkout'][$key] .'/'. $req->package['hotel']['location'][$key] .'/'. $req->package['hotel']['remarks'][$key]);
      }
      // dd($stayhotelwise);
   	$insert = new packages;
      $insert->packagetitle = $req->package['packagetitle'];
      $insert->packageprice = json_encode($roomtypeprice);
      $insert->startdate = $req->package['startdate'];
      $insert->enddate = $req->package['enddate'];
      $insert->route = $req->package['route'];
      $insert->hotel = json_encode($stayhotelwise);
      $insert->routinedate = json_encode($data);
      $insert->save();
      return back();
   }
    
   public function create_invoice(){
      $inquiry = inquiry::all();
      // dd($inquiry);
      return view('create_invoice',compact('inquiry'));
   }
    
   public function add_invoice(Request $req){
      // dd($req);
      $insert = new invoice;
      $insert->customername = $req->customername;
      $insert->tranctiondate = $req->tranctiondate;
      $insert->duedate = $req->duedate;
      $insert->billingaddress = $req->billingaddress;
      $insert->packagename = $req->packagename;
      $insert->noofpax = $req->noofpax;
      $insert->unitprice = $req->unitprice;
      $insert->amount = $req->amount;
      $insert->tax = $req->tax;

      $insert->file = $req->file('attachment')->store('file');
      $insert->save();
      return back();
   }
   
   public function inquiry(){
      return view('inquiry');
   }

   public function add_inquiry(Request $req){
      $insert = new inquiry;
      $insert->inquiryname = $req->inquiryname;
      $insert->inquiryphone = $req->inquiryphone;
      $insert->inquiryaddress = $req->inquiryaddress;
      $insert->paxinquiry = $req->paxinquiry;
      $insert->dateofinquiry = $req->dateofinquiry;

      $insert->save();
      return back()->with('success','Inquiry is created successfully!'); 
   }
}
