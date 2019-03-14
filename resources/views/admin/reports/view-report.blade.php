@extends('admin.layout.design')
@section('content')
  <!-- Static Table Start -->
  <div class="data-table-area mg-b-15">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
                  <div class="sparkline13-list">
                      <div class="sparkline13-hd">
                          <div class="main-sparkline13-hd">
                              <h2><u>VIEW REPORT</u></h2> <br>
                             <button type="button" class="btn btn-danger" onclick="location.href='{{ url('#') }}'">DOWNLOAD</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table style="width:100%">
                                 <tbody>
                                      <tr>
                                          <td><h3><b>REPORT_NAME</h3></b></td>
                                          <td><h4> :- thyroid</h4></td>
                                      </tr>
                                      <tr>
                                          <td><h3><b>PATIENT_NAME</h3></b></td>
                                          <td><h4>:- dhruv</h4></td>
                                      </tr>
                                      <tr>
                                          <td><h3><b>PATIENT_ID<h3></b></td>
                                          <td><h4>:- shvp879065</h4></td>
                                      </tr>
                                      <tr>
                                          <td><h3><b>REPORT_DETAILS</h3></b></td>
                                          <td><h4>:- positive urea negative changes</h4></td>
                                      </tr>
                                      <!-- <tr>
                                      <button type="button" class="btn btn-danger btn-large" onclick="location.href='{{ url('#') }}'">Download</button>
                                      </tr> -->

                                  </tbody>
                                  </table>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
