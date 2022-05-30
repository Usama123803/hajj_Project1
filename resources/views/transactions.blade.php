@extends('layout/default')
@section('content')

<style>
  .caret {
    position: relative;
    top: 10px;
    margin-left: 5px;
    border-top: 4px solid #fff;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
  }

  .dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 8px 20px 8px 20px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
  }

  .dropdown {
    position: relative;
    display: inline-block;
    margin-left: 10px;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown a:hover {background-color: #ddd;}

  .show {display: block;}
</style>

  <!-- Main content -->
    <div class="content flex-row-fluid " id="kt_content" >
        <!--begin::Index-->
        <div class="card card-page">
          <!--begin::Card body-->
          <div class="card-body">
            <div style="display: flex;">
              <h1 id="h1">Sales Transactions</h1>
              <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">New Transaction
                <span class="caret"></span></button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="create_Transaction_Invoice">Create Invoice</a>
                  <a href="recieve_Payment">Recieve Payment</a>
                  <a href="#">Create Estimate</a>
                </div>
              </div>
            </div>
            <hr>

              <!-- Info boxes -->
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-4">
                    <h3 class="card-title">Payment</h3>
                    <div class="info-box">
                      <div id="piechart1"></div>
                      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                      // Load google charts
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);

                      // Draw the chart and set the chart values
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Awaiting Payment', 4],
                        ['Paid', 11],
                        ['Partially Paid', 9],
                      ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {'width':100, 'height':100};

                        // Display the chart inside the <div> element with id="piechart1"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                        chart.draw(data, options);
                      }
                      </script>
                      <div class="info-box-content" style="font-size: 13px;">
                        <span >£56,000.00</span>
                        <span >Recieved</span>
                        <span >£29,500.00</span>
                        <span >Outstandings</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6 col-md-4">
                    <h3 class="card-title">Status</h3>
                    <div class="info-box mb-3">
                      <!-- <span class="info-box-icon bg-success elevation-1">
                        <i class="fa fa-chart-pie"></i></span> -->
                      <div id="piechart"></div>
                      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                      <script type="text/javascript">
                      // Load google charts
                      google.charts.load('current', {'packages':['corechart']});
                      google.charts.setOnLoadCallback(drawChart);

                      // Draw the chart and set the chart values
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Awaiting Payment', 4],
                        ['Paid', 11],
                        ['Partially Paid', 9],
                      ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {'width':100, 'height':100};

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                      }
                      </script>
                      <div class="info-box-content" style="font-size: 12px;">
                        <span class="chart-label-icon" style="background-color:#208DF8"></span>
                        <span class="info-box-text">1 Awaiting Payment</span>
                        <span class="info-box-number">2 Paid</span>
                        <span class="info-box-number">3 Partially Paid</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->

                  <!-- fix for small devices only -->
                  <div class="clearfix hidden-md-up"></div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <h3 class="card-title">Outstandings</h3>
                    <div class="info-box mb-3" style="padding: 21px;">
                      <span style="text-align: center;font-size: 42px;padding: 5px 0px;">£29,500.00</span>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                </div>
            </div>

            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Transactions</h3>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Voucher No.</th>
                      <!-- <th>Type</th> -->
                      <th>Customer</th>
                      <th>Trn Date</th>
                      <th>Due Date</th>
                      <th>Discount</th>
                      <th>Balance</th>
                      <th>Total</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $value)
                      <tr>
                        <td><a href="transactionsInvoice/{{ $value->id }}">{{ $value->id }}</a></td>
                        <!-- <td>{{ $value->firstName }}</td> -->
                        <td>{{ $value->firstName }}</td>
                        <td>{{ $value->transactionDate }}</td>
                        <td>{{ $value->dueDate }}</td>
                        <td>{{ $value->discount }}</td>
                        <td>{{ $value->amount }}</td>
                        <td>{{ $value->totalAmount }}</td>
                        <td>Paid</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
    </div>
  <!-- /.content -->
  @endsection

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
  </script>