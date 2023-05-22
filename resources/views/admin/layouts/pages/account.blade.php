@extends('admin.layouts.partials.dashboardApp')
@section('page_title')
  My Account | Admin Panel
@endsection

@section('content')

<!-- Dashbord start -->
<div class="dashboard">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-12 col-sm-12 col-pad">
        <div class="dashboard-nav d-none d-xl-block d-lg-block">
          <div class="dashboard-inner">
            <h4>Main</h4>
            <ul>
              <li><a href="currentVentures.html"><i class="fa fa-users"></i>Ventures</a></li>
              <li><a href="dashboard.html"><i class="fa fa-dashboard"></i>Dashboard </a></li>
              <li><a href="portfolio.html"><i class="fa fa-image"></i>Portfolio</a></li>
              <li><a href="documents.html"><i class="fa fa-file"></i>Documents</a></li>
              <li class=""><a href="contact.html"><i class="fa fa-envelope"></i>Contact</a></li>
              <li><a href="refer-friend.html"><i class="fa fa-address-book "></i>Refer A Friend</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-10 col-md-12 col-sm-12 col-pad">
        <div class="content-area5">
          <div class="dashboard-content">
            <div class="dashboard-header clearfix">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <h4>My Account</h4>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="dashboard-list">
                  <div class="dashboard-message bdr clearfix ">
                    <div class="tab-box-2">
                      <div class="row">
                        <div class="col-sm-10">
                          <p class=""><b> Personal Information </b> </p>
                        </div>
                        <div class="col-sm-2 text-right"> <a href="edit.html" class="btn btn-theme customBtnEdit"><i class="fa fa-edit"></i> Edit </a> </div>
                      </div>
                      <table class="table table-striped table-bordered mt-20 customTable">
                        <thead class="bg-active">
                          <!--                                                <tr>-->
                          <!--                                                    <td class=""><strong>Personal Information</strong></td>-->
                          <!--                                                </tr>-->
                        </thead>
                        <tbody>
                          <tr>
                            <td class="">First Name</td>
                            <td class="">Joe</td>
                          </tr>
                          <tr>
                            <td class="">Last Name</td>
                            <td class="">Doe</td>
                          </tr>
                          <tr>
                            <td class="">Street</td>
                            <td class="">123 Any Street</td>
                          </tr>
                          <tr>
                            <td class="">City</td>
                            <td class="">Any Town</td>
                          </tr>
                          <tr>
                            <td class="">State</td>
                            <td class="">Any State</td>
                          </tr>
                          <tr>
                            <td class="">ZIP</td>
                            <td class="">12345</td>
                          </tr>
                          <tr>
                            <td class="">Phone</td>
                            <td class="">555-444-333</td>
                          </tr>
                          <tr>
                            <td class="">Email</td>
                            <td class="">example@example.com</td>
                          </tr>
                          <tr>
                            <td class="">Password</td>
                            <td class="">**********</td>
                          </tr>
                          <tr>
                            <td class="">Date of Birth</td>
                            <td class="">01.01.1980</td>
                          </tr>
						  <tr>
                            <td class="">Social Security Number</td>
                            <td class="">***-**-3265</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div id="form" class="mt-3">
                      <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                          <div class="row CustomRow">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Payment Information</label>
                                <input type="text" placeholder="Credit Card Editing" class="form-control">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Change Payment Information</label>
                                <select class="selectpicker search-fields">
                                  <option>Visa</option>
                                  <option>Master Card</option>
                                  <option>American Express</option>
                                  <option>Discover</option>
                                </select>
                              </div>
                            </div>
							  <div class="col-sm-6">
                              <div class="form-group">
                                <label>Account Number</label>
                                <input type="text" placeholder="Account Number" class="form-control">
                              </div>
                            </div>
							  <div class="col-sm-3">
                              <div class="form-group">
                                <label>CVC</label>
                                <input type="text" placeholder="CVC" class="form-control">
                              </div>
                            </div>
							  <div class="col-sm-3">
                              <div class="form-group">
                                <label>Expiration</label>
                                <input type="text" placeholder="Expiration" class="form-control">
                              </div>
                            </div>
							  <div class="col-sm-12">
							  	<a href="#" class="btn btn-theme customBtnEdit"> Save New Payment information </a>
								  <a class="btn btn-theme customBtnEdit" href="javascript:void(0)" data-toggle="modal" data-target="#cancelSale"> Cancel Membership </a>
							  </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dashboard-message bdr clearfix ">
              <p class="footer-text text-center"> <a href="">FAQS</a> <a href="">Company</a> <a href="">Terms</a> <a href="">Privacy Policy</a> <a href="">Contact</a> <br>
                © Sample All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dashbord end -->
</div>
<!-- Full Page Search -->
<div id="full-page-search">
  <button type="button" class="close">×</button>
  <form action="http://storage.googleapis.com/themevessel-products/neer/index.html#">
    <input type="search" value="" placeholder="type keyword(s) here" />
    <button type="submit" class="btn btn-sm button-theme">Search</button>
  </form>
</div>
<!-- Modal -->
<div class="modal fade" id="cancelSale" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cancelSaleLabel">Cancel Membership</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body text-center"> Are you sure you want to cancel Your Membership?
        <div class="link mt-20 mb-20"> <a href="javascript:void(0)" onClick="saleCanceled()" class="btn btn-success btnloop">Yes</a> <a href="" class="btn btn-danger btnloop" data-dismiss="modal">No</a> </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="canceledSale" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="canceledSaleLabel">Cancel Sale</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body text-center mt-3 mb-3"> We are sorry to see you go. If you have any unsettled items, we will contact you to get everything settled. Thank you for the opportunity to serve you! </div>
    </div>
  </div>
</div>

  @endsection