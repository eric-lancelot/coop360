<?php
require '../asset-core/head-start.php';
require '../asset-core/top-head-start.php';
require '../asset-core/nav-start.php';
?>

<style type="text/css">
  label{
    font-weight: bold;
  }
</style>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">ADD NEW COOPERATIVE MEMBER</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <section id="vertical-tabs">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Choose Member`S Cooperative</h4>
                  <br>
                  <select class="form-control" required style="width: 17%;">
                    <option value="">Choose</option>
                    <option value="">Demo Cooperative</option>
                  </select>

                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <label>Attach Member Photo</label>
                  <input type="file" name="" class="form-control">
                  </div>
                </div>

                <div class="card-content collapse show">
                  <div class="card-body">
                    <form action="#" class="vertical-tab-steps wizard-notification">
                      <!-- Step 1 -->
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName4">Full Names</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName4">Occupation</label>
                              <br>
                              <input type="checkbox" name="" value="Teacher">&nbsp;Teacher&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Farmer">&nbsp;Farmer&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Trader">&nbsp;Trader&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Transporter">&nbsp;Transporter&nbsp;&nbsp;
                              <br><br>
                              <input type="checkbox" name="" value="Medical">&nbsp;Medical&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Labourer">&nbsp;Labourer&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Professional">&nbsp;Professional&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Security">&nbsp;Security&nbsp;&nbsp;
                              <span>Others (Specify)</span><input type="text" name="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress7">If you are a farmer, what do u produce</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                       Cereals
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Cereals">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Pulses
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Pulses">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Horticulture
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Horticulture">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Coffee
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Coffee">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Cocoa
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Cocoa">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Cotton
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Cotton">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Grains
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Grains">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Palm Oil
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Palm Oil">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Sun Flower
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Sun Flower">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Sesame
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Sesame">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Sesame
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Sesame">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Nuts
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Nuts">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Honey
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Honey">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Poles
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Poles">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Timber
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Timber">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" name="" class="form-control">
                                <br>
                                <label for="phoneNumber4">Employment Status</label>
                                <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td><input type="checkbox" name="" value="Employed">&nbsp;&nbsp;Employed
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control" placeholder="current employer">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="checkbox" name="" value="unEmployed">&nbsp;&nbsp;Un-Employed
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="self-Employed">&nbsp;&nbsp;Self Employed
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress7">If you are a trader, what do u deal in</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                       Textiles
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Textiles">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Meat
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Meat">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Fish
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Fish">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Milk
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Milk">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Livestock
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Livestock">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Financial
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Financial">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Drug Shops
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Drug Shops">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        General Merchandise
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="General Merchandise">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Processed Foods
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Processed Foods">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Fuel & Lubricants
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Fuel & Lubricants">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Dry Agricultral Prodcuts
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Dry Agricultral Prodcuts">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Skins & Hides
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Skins & Hides">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Laundry & Car Wash
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Laundry & Car Wash">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Plastics & KitchenWare
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Plastics & KitchenWare">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Saloon & Cosmetics
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Saloon & Cosmetics">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Bars & Entertainment
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Bars & Entertainment">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Gaming Facilities
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Gaming Facilities">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Propertity Dealership
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Propertity Dealership">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber4">Employment Status</label>
                              
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date4">Date of Birth :</label>
                              <input type="date" class="form-control" id="date4">
                            </div>
                          </div>
                        </div> -->
                      </fieldset>

                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="proposalTitle4">Date of Birth</label>
                              <input type="date" class="form-control" id="date4">
                            </div>
                            <div class="form-group">
                              <label for="emailAddress8">AGE</label>
                              <input type="number" name="" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="videoUrl4">SEX</label>
                              <select class="form-control"> 
                                <option value="">Choose</option>
                                <option value="MALE">Male</option>
                                <option value="FEMALE">Female</option>
                              </select>

                              <label>District</label>
                              <input type="text" name="" class="form-control">
                              <br>
                              <label>County/Municipality</label>
                              <input type="text" name="" class="form-control">
                              
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="shortDescription4">Nationality</label>
                              <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="shortDescription4">ID Number</label>
                              <input type="text" name="" class="form-control">
                            </div>
                            
                              <label for="videoUrl4">Marital Status</label>
                              <select class="form-control"> 
                                <option value="">Choose</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Windowed">Windowed</option>
                              </select>

                              <label>If Married: Husbands? Wife’s full Name</label>
                              <input type="text" name="" class="form-control">

                              <!-- <label>If Married: Does your wife/husband belong to a cooperative</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select> -->
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 3 -->
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="eventName4">Sub county</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="eventType4">Parish</label>
                              <input type="text" name="" class="form-control"> 
                            </div>
                            <div class="form-group">
                              <label for="eventLocation4">Village</label>
                              <input type="text" name="" class="form-control">
                              <br><br>
                              <label>If you have any known chronic or terminal illness that you would like the society to be aware of, please state it for the record</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Telephone Number</label>
                              <div class='input-group'>
                                <input type='text' class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="eventStatus4">Email Address</label>
                              <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Next of Kin</label>
                              <div class="c-inputs-stacked">
                                <input type="text" name="" class="form-control">
                              </div>
                              <label>Next of Kin Tel</label>
                              <div class="c-inputs-stacked">
                                <input type="text" name="" class="form-control">
                                <br><br>
                                <label>Do you own or rent your house</label>
                                <select class="form-control">
                                  <option value="">Choose</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 4 -->
                      <h6>&nbsp;</h6>
                      <!-- <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="meetingName4">What informed your decision to join this cooperative</label>
                              <table>
                                <tbody class="table table-bordered">
                                  <tr>
                                    <td>
                                      looking for a loan
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="looking for a loan">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Traning
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="Traning">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Marketing
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="Marketing">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Storage
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="Storage">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Savings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="Savings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Investments
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="Investments">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Bussiness Networking
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="Bussiness Networking">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <br>
                               <label>Other (Specify)</label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="meetingLocation4">How many shares do you have in the cooperative</label>
                              <input type="text" class="form-control">
                              <br><br>
                              <label>Do you have a savings account with the cooperative</label>
                              <select class="form-control"> 
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br>
                              <label>If yes, how much do u save per month</label>
                              <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="participants4">How often do u save</label>
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td>
                                      Daily
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Daily">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Weekly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Weekly">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Monthly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Monthly">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Quarterly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Quarterly">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Half yearly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="decisions4">If you save in cash what medium do you use</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="MobileMoney">&nbsp; Mobile Money</li>
                                <li><input type="checkbox" name="" value="Bank">&nbsp; Bank</li>
                                <li><input type="checkbox" name="" value="Cash">&nbsp; Cash</li>
                                <li><input type="checkbox" name="" value="other">&nbsp; Other</li>
                              </ul>
                              <br>
                              <label>If other, specify</label>
                              <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Do you earn an interest on your money</label>
                              <div class="c-inputs-stacked">
                                <select class="form-control">
                                  <option value="">Choose</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                                <br>
                                <label>How often can you access your Money</label>
                                <ul style="list-style-type: none;">
                                  <li><input type="checkbox" name="" value="whenever i need it">&nbsp; whenever i need it</li>
                                  <li><input type="checkbox" name="" value="ounce a year">&nbsp; Ounce a Year</li>
                                  <li><input type="checkbox" name="" value="Ounce a Month">&nbsp; Ounce a Month</li>
                                  <li><input type="checkbox" name="" value="twice a year">&nbsp; twice a year</li>
                                </ul>
                                <br>
                                <label>If you save in kind, what volume of produce do you save/bulk</label>
                                <ul style="list-style-type: none;">
                                  <li><input type="checkbox" name="" value="1-10kgs">&nbsp; 1-10kgs</li>
                                  <li><input type="checkbox" name="" value="11-20kgs">&nbsp; 11-20kgs</li>
                                  <li><input type="checkbox" name="" value="21-49kg">&nbsp; 21-49kg</li>
                                  <li><input type="checkbox" name="" value="50-100kgs">&nbsp; 50-100kgs</li>
                                  <li><input type="checkbox" name="" value="above 100kgs">&nbsp; above 100kgs</li>
                                </ul>
                                <label>What do you perceive as your roles as a member of the cooperative</label>
                                <ul style="list-style-type: none;">
                                  <li><input type="checkbox" name="" value="to-borrow">&nbsp; to-borrow</li>
                                  <li><input type="checkbox" name="" value="to-attend partcipate in meetings">&nbsp; to-attend partcipate in meetings</li>
                                  <li><input type="checkbox" name="" value="to provide timely and accurate information">&nbsp; to provide timely and accurate information</li>
                                  <li><input type="checkbox" name="" value="to save">&nbsp; To Save</li>
                                  <li><input type="checkbox" name="" value="to invest and earn divends">&nbsp; to invest and earn divends</li>
                                  <li><input type="checkbox" name="" value="to protect and defend our coperative from any form of danger">&nbsp; to protect and defend our coperative from any form of danger</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset> -->
                      <!-- <h6>&nbsp;</h6> -->
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <!-- <div class="form-group">
                              <label for="meetingName4">As a member of the cooperative, what do you perceive as your rights</label>
                              <table>
                                <tbody class="table table-bordered">
                                  <tr>
                                    <td>
                                      To Vote
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="to Vote">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Attend and Participate In Meetings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="To Attend and Participate In Meetings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Be Failry Listened to and Heard
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="To Be Failry Listened to and Heard">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Recieve Updates and Reports in the Bussines of the Coperatives
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="To Recieve Updates and Reports in the Bussines of the Coperatives">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Have Privacy and Confidentility
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="To Have Privacy and Confidentility">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Be Paid Whats Due
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="To Be Paid Whats Due">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Be Voted
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" value="to be Vote">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="form-group">
                              <label>What benefits have you received from the cooperative since joining</label>
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td>
                                      Trainings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Trainings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Loans
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Loans">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Farming Inputs
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Farming Inputs">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Marketings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Marketings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Savings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="savings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Storage
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Storage">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Investments
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Investments">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Bussiness Networking
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Bussiness Networking">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <label>If other, specify</label>
                              <input type="text" name="" class="form-control">

                              <br><br>
                              <label>Do you understand what an Annual General Meeting is?</label>
                              <select class="form-control"> 
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br>
                               <label>Since you joined the cooperative have you attended any Annual General meeting</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="participants4">if yes, how useful was the meeting to you</label>
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td>
                                      I was Voted
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="I was Voted">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Was Able to Elect Our Coperative Leaders
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="I Was Able to Elect Our Coperative Leaders">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Was Trained
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="I Was Trained">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Dicussed and Approved the Reports Presented By The Coperative Management
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="I Dicussed and Approved the Reports Presented By The Coperative Management">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Made New BUssiness/Social Contacts
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="I Made New BUssiness/Social Contacts">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Made Suggestions For Improvement Of Our Coperative
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="I Made Suggestions For Improvement Of Our Coperative">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <br>
                              <label for="participants4">If No, what didn’t you like about the AGM</label>
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td>
                                      Sometimes Members Were denied Opportunity to Talk
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="Sometimes Members Were denied Opportunity to Talk">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      We Started Late
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="We Started Late">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      The AGM had No Agenda
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="The AGM had No Agenda">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      There Was No Food
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="There Was No Food">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      We Had No Minutes From The Previous AGM
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="We Had No Minutes From The Previous AGM">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      We Did Not Recieve Reports on The Perfomance Of The Coperative
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="We Did Not Recieve Reports on The Perfomance Of The Coperative">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      There Were Too Many Disagreements
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="There Were Too Many Disagreements">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      The Actual Of Fully Paid Members Was Not Presented for Verification
                                    </td>
                                    <td>
                                      <input type="checkbox" name="" class="form-control" value="The Actual Of Fully Paid Members Was Not Presented for Verification">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <label>Do you have any fears about being a member of this cooperative</label>
                                <select class="form-control">
                                  <option value="">Choose</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select> -->

                                <br>
                            <label>Do you have children</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>If yes, how many</label>
                              <input type="text" name="" class="form-control">
                              <br>
                              <label>If you have children fill in the table</label>


                        <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-outline-blue block btn-lg border-blue blue"
                          data-toggle="modal" data-target="#border">
                            Enter Details
                          </button>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="border" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                          aria-hidden="true">
                            <div class="modal-xl modal-dialog" role="document">
                              <div class="modal-content border-pink">
                                <div class="modal-header border-bottom-pink">
                                  <h4 class="modal-title" id="myModalLabel15"><i class="la la-user"></i> <span style="font-weight: bold; font-family: sans-serif;">Children Details</span></h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                              <table class="table table-bordered">
                                <th>
                                  <tr>
                                    <td>Name</td>
                                    <td>Age</td>
                                    <td>Highest Education Level</td>
                                    <td>Occupation</td>
                                  </tr>
                                </th>
                                <tbody>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <label>MEMBERS INCOME & EXPENSE DEMANDS</label>

                      <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-outline-blue block btn-lg border-blue blue"
                          data-toggle="modal" data-target="#lancelot">
                            Enter Details
                          </button>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="lancelot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                          aria-hidden="true">
                            <div class="modal-xl modal-dialog" role="document">
                              <div class="modal-content border-pink">
                                <div class="modal-header border-bottom-pink">
                                  <h4 class="modal-title" id="myModalLabel15"><span style="font-weight: bold; font-family: sans-serif;">MEMBERS INCOME & EXPENSE DEMANDS</span></h4>
                                  <i><b>lease use this table to understand your income sources and how you spend the money that you make on a monthly basis. Please ensure to provide accurate estimates if you do not keep records of your transactions.</b></i>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                              <table class="table table-bordered">
                          <th>
                            <tr>
                              <td>
                                Source of Income
                              </td>
                              <td>
                                Monthly Income
                              </td>
                              <td>
                                Monthly Expense
                              </td>
                            </tr>
                          </th>
                          <tbody>
                            <tr>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                              <td>
                                <input type="text" name="" class="form-control">
                              </td>
                            </tr>
                          </tbody>
                      </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <br>
                      <label>Do you have a loan</label>
                      <select class="form-control">
                        <option value="">Choose</option>
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                      </select>

                      <br>
                      <label>If you have a loan what is the amount, who is your provider and what was the purpose of the loan</label>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-outline-blue block btn-lg border-blue blue"
                          data-toggle="modal" data-target="#mariam">
                            Enter Details
                          </button>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="mariam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                          aria-hidden="true">
                            <div class="modal-xl modal-dialog" role="document">
                              <div class="modal-content border-pink">
                                <div class="modal-header border-bottom-pink">
                                  <h4 class="modal-title" id="myModalLabel15"><span style="font-weight: bold; font-family: sans-serif;">Member Loan Details</span></h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                              <table class="table table-bordered">
                                <th>
                                  <tr>
                                    <td>Loan type</td>
                                    <td>Amount</td>
                                    <td>Provider</td>
                                    <td style="font-style: 60%;">Date acquired &Payment period</td>
                                    <td>Purpose</td>
                                  </tr>
                                </th>
                                <tbody>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>









                            </div>
                          </div>
                          <div class="col-md-6">
                            <!-- <div class="form-group">
                              <label for="decisions4">If yes, tick why this is the case</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="I Will Loose Money">&nbsp; I Will Loose Money</li>
                                <li><input type="checkbox" name="" value="The Coperative Will Die">&nbsp; The Coperative Will Die</li>
                                <li><input type="checkbox" name="" value="Conflict">&nbsp; Conflict</li>
                                <li><input type="checkbox" name="" value="Fear Of Not Being Given An Opportunity to not to partcipate in the decisions of the coperative">&nbsp; Fear Of Not Being Given An Opportunity to not to partcipate in the decisions of the coperative</li>
                              </ul>
                              <br>
                              <label>How do you think these fears can be addressed</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="by attending and partcipating in Cooperative affairs">&nbsp; by attending and partcipating in Cooperative affairs</li>
                                <li>
                                  <span>Other ( Please Sepecify )</span>
                                  <input type="text" name="" class="form-control">
                                </li>
                              </ul>
                            </div>
                            <div class="form-group"> -->
                              <!-- <label>What do you expect to have gained from the cooperative 5 years from now</label>
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>Increase My savings and HouseHold Income</td>
                                      <td><input type="checkbox" name="" value="Increase My savings and HouseHold Income"></td>
                                    </tr>
                                    <tr>
                                      <td>I will have grown in the leadership of the coperative</td>
                                      <td><input type="checkbox" name="" value="I will have grown in the leadership of the coperative"></td>
                                    </tr>
                                    <tr>
                                      <td>I Expect to have grown my bussiness volume through browing</td>
                                      <td><input type="checkbox" name="" value="I Expect to have grown my bussiness volume through browing"></td>
                                    </tr>
                                    <tr>
                                      <td>To increase My knoledge and Skills For The Better of My Coperative</td>
                                      <td><input type="checkbox" name="" value="To increase My knoledeg and Skills For The Better of My Coperative"></td>
                                    </tr>
                                    <tr>
                                      <td>Ease access to affordable Money</td>
                                      <td><input type="checkbox" name="" value="Ease access to affordable Money"></td>
                                    </tr>
                                    <tr>
                                      <td>To Grow My Social and Bussiness Network</td>
                                      <td><input type="checkbox" name="" value="To Grow My Social and Bussiness Network"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <label>If others, specify</label>
                                <input type="text" name="" class="form-control">
                                <br>
                                <label>As a member where do you want to see your cooperative in 5 or more years from now</label>
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>To Grow Into a Bank</td>
                                      <td><input type="checkbox" name="" value="To Grow Into a Bank"></td>
                                    </tr>
                                    <tr>
                                      <td>To Have Multiple Branches</td>
                                      <td><input type="checkbox" name="" value="To Have Multiple Branches"></td>
                                    </tr>
                                    <tr>
                                      <td>To Be a training Centre</td>
                                      <td><input type="checkbox" name="" value="To Be a training Centre"></td>
                                    </tr>
                                    <tr>
                                      <td>To Own Properties</td>
                                      <td><input type="checkbox" name="" value="To Own Properties"></td>
                                    </tr>
                                    <tr>
                                      <td>To Export</td>
                                      <td><input type="checkbox" name="" value="To Export"></td>
                                    </tr>
                                    <tr>
                                      <td>To Provide Employement to members and thier families</td>
                                      <td><input type="checkbox" name="" value="To Provide Employement to members and thier families"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <label>If others, specify</label>
                                <input type="text" name="" class="form-control">
                                <br>
                                <label>What are you going to do to contribute to this aspiration you have mentioned above cooperative</label>
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>Vote The Right Leaders</td>
                                      <td><input type="checkbox" name="" value="Vote The Right Leaders"></td>
                                    </tr>
                                    <tr>
                                      <td>Buy Shares and Pay Subscriptions in Time</td>
                                      <td><input type="checkbox" name="" value="Buy Shares and Pay Subscriptions in Time"></td>
                                    </tr>
                                    <tr>
                                      <td>To Mobilise New Members in to the Coperative</td>
                                      <td><input type="checkbox" name="" value="To Mobilise New Members in to the Coperative"></td>
                                    </tr>
                                    <tr>
                                      <td>Use All the Services and Products the coperative offers</td>
                                      <td><input type="checkbox" name="" value="Use All the Services and Products the coperative offers"></td>
                                    </tr>
                                    <tr>
                                      <td>Attend and Participate In Mettings and Trainings</td>
                                      <td><input type="checkbox" name="" value="To Export"></td>
                                    </tr>
                                    <tr>
                                      <td>Offer My Self For LeaderShip in the Coperative</td>
                                      <td><input type="checkbox" name="" value="Offer My Self For LeaderShip in the Coperative"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <label>If others, specify</label>
                                <input type="text" name="" class="form-control">
                                <br> -->
                                <label for="meetingName4">Have you ever been to school</label>
                                  <select class="form-control">
                                    <option value="">Choose</option>
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                  </select>
                                  <br>
                              <label>If yes, please specify which schools below</label>
                  <button type="button" class="btn btn-outline-blue block btn-lg border-blue blue" data-toggle="modal" data-target="#roola">
                            Enter Details
                          </button>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="roola" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                          aria-hidden="true">
                            <div class="modal-xl modal-dialog" role="document">
                              <div class="modal-content border-pink">
                                <div class="modal-header border-bottom-pink">
                                  <h4 class="modal-title" id="myModalLabel15"><i class="la la-user"></i> <span style="font-weight: bold; font-family: sans-serif;">Education Background Details</span></h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                <th>
                                  <tr>
                                  <td>School/College/University</td>
                                  <td>Qualification</td>
                                  </tr>
                                </th>
                                <tbody>
                                  <tr>
                                    <td>
                                      Primary
                                    </td>
                                    <td>
                                      <textarea class="form-control"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Secondary
                                    </td>
                                    <td>
                                      <textarea class="form-control"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      College
                                    </td>
                                    <td>
                                      <textarea class="form-control"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      University
                                    </td>
                                    <td>
                                      <textarea class="form-control"></textarea>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                        <label>What Kind of Training have you received</label>
                        <ul style="list-style-type: none;">
                          <li><input type="checkbox" name="" value="Financial Litracy">&nbsp; Financial Litracy</li>
                          <li><input type="checkbox" name="" value="Agronomy">&nbsp; Agronomy</li>
                          <li><input type="checkbox" name="" value="Cooperative Governance">&nbsp; Cooperative Governance</li>
                        </ul>
                        <label>Other </label>
                        <input type="text" name="" class="form-control">
                        <br>
                        <label>How have these trainings helped you</label>
                        <ul style="list-style-type: none;">
                          <li><input type="checkbox" name="" value="understand and involved in my cooperative Better">&nbsp; understand and involved in my cooperative Better</li>
                          <li><input type="checkbox" name="" value="learn how to use money Better">&nbsp; learn how to use money Better</li>
                          <li><input type="checkbox" name="" value="Started bussiness">&nbsp; Started bussiness</li>
                          <li><input type="checkbox" name="" value="Am Managing My Bussines Better">&nbsp; Am Managing My Bussines Better</li>
                        </ul>
                        <label>What knowledge or skills gaps would you wish you could fill</label>
                        <input type="text" name="" class="form-control">
                        <br>
                        <label>Do you have a bank account</label>
                        <select class="form-control">
                          <option value="">Choose</option>
                          <option value="YES">YES</option>
                          <option value="NO">NO</option>
                        </select>
                        <br>
                        <label>If yes, who is your provider and what was the purpose of the loan</label>
                        <button type="button" class="btn btn-outline-blue block btn-lg border-blue blue" data-toggle="modal" data-target="#eva">
                            Enter Details
                          </button>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="eva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                          aria-hidden="true">
                            <div class="modal-xl modal-dialog" role="document">
                              <div class="modal-content border-pink">
                                <div class="modal-header border-bottom-pink">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                <th>
                                  <tr>
                                  <td>Bank Account type</td>
                                  <td>Average annual amount banked</td>
                                  <td>Provider & Location</td>
                                  <td>Purpose</td>
                                  </tr>
                                </th>
                                <tbody>
                                  <tr>
                                    <td>
                                      Savings
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Current
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Fixed
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Loan
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                      <input type="text" name="" class="form-control">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>




                        </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php
require '../asset-core/footer-start.php';
?>