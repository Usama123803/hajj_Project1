<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addCustomer;
use App\Models\addTransaction;
use App\Models\addRecievePayment;
use DB;

class AccountDetailsController extends Controller
{
  
  //Create Acc User
  public function create_Customers(){
    return view('create_Customers');
  }

  //User Accounts View
  public function acc_Users(){
    
    $data = addCustomer::all();
    return view('acc_Users',compact('data'));
    // return view('acc_Users');
  }

  //Add Acc User
  public function add_Customers(Request $req){
      // dd($req);
      $insert = new addCustomer();
      $insert->firstName = $req->firstName;
      $insert->lastName = $req->lastName;
      $insert->email = $req->email;
      $insert->phone = $req->phone;
      $insert->company = $req->company;
      $insert->mobile = $req->mobile;
      $insert->fax = $req->fax;
      $insert->website = $req->website;
      $insert->street1 = $req->street1;
      $insert->street2 = $req->street2;
      $insert->country = $req->country;
      $insert->city = $req->city;
      $insert->provinceState = $req->provinceState;
      $insert->postCode = $req->postCode;
      $insert->note = $req->note;

      $insert->file = $req->file('file')->store('file');
      $insert->save();
      return redirect('acc_Users');
  }

  //Edit Acc User
  public function edit_acc_Users($id)
  {
      $value = addCustomer::find($id);
      return view('edit_Customers', compact('value'));
  }

  //Update Acc User
  public function update_acc_Users(Request $req, $id)
  {
      $insert = addCustomer::find($id);
      $insert->firstName = $req->firstName;
      $insert->lastName = $req->lastName;
      $insert->email = $req->email;
      $insert->phone = $req->phone;
      $insert->company = $req->company;
      $insert->mobile = $req->mobile;
      $insert->fax = $req->fax;
      $insert->website = $req->website;
      $insert->street1 = $req->street1;
      $insert->street2 = $req->street2;
      $insert->country = $req->country;
      $insert->city = $req->city;
      $insert->provinceState = $req->provinceState;
      $insert->postCode = $req->postCode;
      $insert->note = $req->note;
      $insert->file = $req->file('file')->store('file');
      $insert->update();
      return redirect('acc_Users');
  }

  public function delete_acc_Users($id)
  {
      $data = addCustomer::find($id);
      $data->delete();
      return redirect('acc_Users');
  }

  // All transactions
  public function transactions(){
    $data = addTransaction::all();
    return view('transactions',compact('data'));
    // return view('transactions');
  }

  // Transactions Invoice
  public function transactionsInvoice($id){
    // dd($id);
    $data = DB::table('add_transactions')->join('addCustomers','add_transactions.user_id', '=' , 'addCustomers.id')->where('add_transactions.id',$id)->first();
    return view('transactionsInvoice',compact('data','id'));
  }

  public function create_Transaction_Invoice(){
    $data = addCustomer::all();
    return view('create_Transaction_Invoice',compact('data'));
    // return view('create_Transaction_Invoice');
  }

  //Add Transaction Invoice
  public function add_Transaction_Invoice(Request $req){
      // dd($req);
      $insert = new addTransaction();
      $insert->user_id = $req->user_id; 
      $insert->firstName = $req->firstName;
      $insert->transactionDate = $req->transactionDate;
      $insert->dueDate = $req->dueDate;
      $insert->billingaddress = $req->billingaddress;
      $insert->productServices = $req->productServices;
      $insert->qty = $req->qty;
      $insert->unitprice = $req->unitprice;
      $insert->amount = $req->amount;
      $insert->discount = $req->discounts;
      $insert->salesTax = $req->salesTax;
      $insert->totalAmount = $req->totalAmount;
      $insert->particulars = $req->particulars;
      $insert->file = $req->file('file')->store('file');
      $insert->save();
      return redirect('transactions');
  }

  //Recieve payment
  public function recieve_Payment(){
    $data  = addCustomer::all();
    $data1 = addTransaction::all();
    return view('recieve_Payment',compact('data','data1'));
  }

  //Recieve payment
  public function recieve_PaymentID(Request $req){
    $id=$_GET['user_id'];
    $data1 = addTransaction::where('user_id',$id)->get();
    echo $data1;
  }


  //Add Recieve Payment
  public function add_Recieve_Payment(Request $req){

      foreach ($req->voucher_Data['id'] as $key => $value) {
        $data[] = array($value => $req->voucher_Data['dueDate'][$key] .'/'. $req->voucher_Data['totalAmount'][$key] .'/'. $req->voucher_Data['totalAmount'][$key] .'/'. $req->voucher_Data['totalAmount'][$key]);
      }
      
      $insert = new addRecievePayment();
      $insert->user_id = $req->user_id;
      $insert->firstName = $req->firstName;
      $insert->reference = $req->reference;
      $insert->paymentDate = $req->paymentDate;
      $insert->paymentMethod = $req->paymentMethod;
      $insert->depositTo = $req->depositTo;
      $insert->billingAddress = $req->billingAddress;
      $insert->voucher_Data = json_encode($data);
      $insert->totalAmount = $req->totalAmount;
      $insert->particulars = $req->particulars;
      $insert->file = $req->file('file')->store('file');
      $insert->save();
      return redirect('transactions');
  }
  
}
