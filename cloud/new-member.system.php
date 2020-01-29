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
                  <select class="form-control" required style="width: 17%;" name="coop-selected">
                    <option value="">Choose</option>
                    <option value="demo-00">Demo Cooperative</option>
                  </select>

                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <label>Attach Member Photo</label>
                  <input type="file" name="" class="form-control">
                  </div>
                </div>

                <div class="card-content collapse show">
                  <div class="card-body">
                    <form class="vertical-tab-steps wizard-notification register-core" method="POST" action="<?php echo $base_host; ?>mvc/controllers/dex-member-controller.system">
                      <!-- Step 1 -->

                      <h6>Personal Details</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName4"> 1 : Full Names</label>
                              <input type="text" class="form-control" name="fullname">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName4">2 : Occupation</label>
                              <br>
                              <input type="checkbox" class="form-control occupation" value="Teacher">&nbsp;Teacher&nbsp;&nbsp;
                              <input type="checkbox" class="occupation" value="Farmer">&nbsp;Farmer&nbsp;&nbsp;
                              <input type="checkbox" class="occupation" value="Trader">&nbsp;Trader&nbsp;&nbsp;
                              <input type="checkbox" class="occupation" value="Transporter">&nbsp;Transporter&nbsp;&nbsp;
                              <br><br>
                              <input type="checkbox" class="occupation" value="Medical">&nbsp;Medical&nbsp;&nbsp;
                              <input type="checkbox" class="occupation" value="Labourer">&nbsp;Labourer&nbsp;&nbsp;
                              <input type="checkbox" class="occupation" value="Professional">&nbsp;Professional&nbsp;&nbsp;
                              <input type="checkbox" class="occupation" value="Security">&nbsp;Security&nbsp;&nbsp;
                              <span>Others (Specify)</span><input type="text" name="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress7">2.1 : If you are a farmer, what do u produce</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                       Cereals
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Cereals">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Pulses
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Pulses">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Horticulture
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Horticulture">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Coffee
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Coffee">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Cocoa
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Cocoa">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Cotton
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Cotton">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Grains
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Grains">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Palm Oil
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Palm Oil">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Sun Flower
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Sun Flower">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Sesame
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Sesame">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Sesame
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce"  value="Sesame">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Nuts
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Nuts">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Honey
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Honey">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Poles
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Poles">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Timber
                                      </td>
                                      <td>
                                        <input type="checkbox" name="produce[]" class="form-control produce" value="Timber">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" name="" class="form-control">
                                <br>
                                <label for="phoneNumber4">2.3 : Employment Status</label>
                                <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td><input type="checkbox" class="employment" value="Employed">&nbsp;&nbsp;Employed
                                    </td>
                                    <td>
                                      <input type="text" class="employment form-control" placeholder="current employer">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>a
                                      <input type="checkbox" class="employment" value="unEmployed">&nbsp;&nbsp;Un-Employed
                                    </td>
                                    <td>
                                      <input type="checkbox" class="employment" value="self-Employed">&nbsp;&nbsp;Self Employed
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress7">2.2 : If you are a trader, what do u deal in</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                       Textiles
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product[] form-control" value="Textiles">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Meat
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Meat">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Fish
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Fish">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Milk
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Milk">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Livestock
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Livestock">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Financial
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Financial">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Drug Shops
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Drug Shops">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        General Merchandise
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="General Merchandise">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Processed Foods
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Processed Foods">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Fuel & Lubricants
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Fuel & Lubricants">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Dry Agricultral Prodcuts
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Dry Agricultral Prodcuts">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Skins & Hides
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Skins & Hides">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Laundry & Car Wash
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Laundry & Car Wash">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Plastics & KitchenWare
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Plastics & KitchenWare">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Saloon & Cosmetics
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Saloon & Cosmetics">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Bars & Entertainment
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Bars & Entertainment">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Gaming Facilities
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Gaming Facilities">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Propertity Dealership
                                      </td>
                                      <td>
                                        <input type="checkbox" class="trading_product  form-control" value="Propertity Dealership">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" class="trading_product  form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="proposalTitle4">4 : Date of Birth</label>
                              <input type="date" class="form-control" id="date4" name="date_of_birth">
                            </div>
                            <div class="form-group">
                              <label for="emailAddress8">AGE</label>
                              <input type="number" name="age" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="videoUrl4">SEX</label>
                              <select class="form-control" name="gender"> 
                                <option value="">Choose</option>
                                <option value="MALE">Male</option>
                                <option value="FEMALE">Female</option>
                              </select>

                              <label>District</label>
                              <input type="text" name="district" class="form-control">
                              <br>
                              <label>County/Municipality</label>
                              <input type="text" name="county" class="form-control">
                              
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="shortDescription4">5 : Nationality</label>
                              <input type="text" name="nationality" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="shortDescription4">ID Number</label>
                              <input type="text" name="nin_number" class="form-control">
                            </div>
                            
                              <label for="videoUrl4">6 : Marital Status</label>
                              <select class="form-control" name="marital_status"> 
                                <option value="">Choose</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Windowed">Windowed</option>
                              </select>

                              <label>7 : If Married: Husbands? Wife’s full Name</label>
                              <input type="text" name="spouse_name" class="form-control">

                              <label>8 : If Married: Does your wife/husband belong to a cooperative</label>
                              <select class="form-control" name="spouse_to_coop">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="eventName4">Sub county</label>
                              <input type="text" class="form-control" name="sub_county">
                            </div>
                            <div class="form-group">
                              <label for="eventType4">Parish</label>
                              <input type="text" name="parish" class="form-control"> 
                            </div>
                            <div class="form-group">
                              <label for="eventLocation4">Village</label>
                              <input type="text" name="village" class="form-control">
                              <br><br>
                              <label>11 : If you have any known chronic or terminal illness that you would like the society to be aware of, please state it for the record</label>
                              <input type="text" name="chronic_illness" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>9 : Telephone Number</label>
                              <div class='input-group'>
                                <input type='text' class="form-control" name="phone_number">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="eventStatus4">Email Address</label>
                              <input type="text" class="form-control" name="email_address">
                            </div>
                            <div class="form-group">
                              <label>10 : Next of Kin</label>
                              <div class="c-inputs-stacked">
                                <input type="text" class="form-control" name="next_of_kin_name">
                              </div>
                              <label>Next of Kin Tel</label>
                              <div class="c-inputs-stacked">
                                <input type="text" name="next_of_kin_phone" class="form-control">
                                <br><br>
                                <label>12 : Do you own or rent your house</label>
                                <select class="form-control" name="own_house">
                                  <option value="">Choose</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>



                      <h6>Cooperative Membership Information</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="meetingName4">13 : What informed your decision to join this cooperative</label>
                              <table>
                                <tbody class="table table-bordered">
                                  <tr>
                                    <td>
                                      looking for a loan
                                    </td>
                                    <td>
                                      <input type="checkbox" class="join_reason " value="looking for a loan">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Traning
                                    </td>
                                    <td>
                                      <input type="checkbox" class="join_reason " value="Traning">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Marketing
                                    </td>
                                    <td>
                                      <input type="checkbox" class="join_reason " value="Marketing">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Storage
                                    </td>
                                    <td>
                                      <input type="checkbox" class="join_reason " value="Storage">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Savings
                                    </td>
                                    <td>
                                      <input type="checkbox" class="join_reason " value="Savings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Investments
                                    </td>
                                    <td>
                                      <input type="checkbox" class="join_reason " value="Investments">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Bussiness Networking
                                    </td>
                                    <td>
                                      <input type="checkbox" class="join_reason " value="Bussiness Networking">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <br>
                               <label>Other (Specify)</label>
                                <input type="text" class="join_reason " class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="meetingLocation4">14 : How many shares do you have in the cooperative</label>
                              <input type="text" class="form-control" name="coop_shares">
                              <br><br>
                              <label>15 : Do you have a savings account with the cooperative</label>
                              <select class="form-control" name="have_saving_account"> 
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br>
                              <label>If yes, how much do u save per month</label>
                              <input type="text" name="amount_per_month" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="participants4">16 : How often do u save</label>
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td>
                                      Daily
                                    </td>
                                    <td>
                                      <input type="checkbox" name="saving_period " class="form-control saving_period " value="Daily">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Weekly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="saving_period " class="form-control saving_period " value="Weekly">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Monthly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="saving_period " class="form-control saving_period " value="Monthly">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Quarterly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="saving_period " class="form-control saving_period " value="Quarterly">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Half yearly
                                    </td>
                                    <td>
                                      <input type="checkbox" name="saving_period " class="form-control saving_period ">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="decisions4">15.1 : If you save in cash what medium do you use</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" class="saving_medium " value="MobileMoney">&nbsp; Mobile Money</li>
                                <li><input type="checkbox" class="saving_medium " value="Bank">&nbsp; Bank</li>
                                <li><input type="checkbox" class="saving_medium " value="Cash">&nbsp; Cash</li>
                                <li><input type="checkbox" class="saving_medium " value="other">&nbsp; Other</li>
                              </ul>
                              <br>
                              <label>If other, specify</label>
                              <input type="text" class="saving_medium " class="form-control">
                            </div>
                            <div class="form-group">
                              <label>16 : Do you earn an interest on your money</label>
                              <div class="c-inputs-stacked">
                                <select class="form-control" name="earn_interest">
                                  <option value="">Choose</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                                <br>
                                <label>17 : How often can you access your Money</label>
                                <ul style="list-style-type: none;">
                                  <li><input type="checkbox" class="money_access " value="whenever i need it">&nbsp; whenever i need it</li>
                                  <li><input type="checkbox" class="money_access " value="ounce a year">&nbsp; Ounce a Year</li>
                                  <li><input type="checkbox" class="money_access " value="Ounce a Month">&nbsp; Ounce a Month</li>
                                  <li><input type="checkbox" class="money_access " value="twice a year">&nbsp; twice a year</li>
                                </ul>
                                <br>
                                <label>18 : If you save in kind, what volume of produce do you save/bulk</label>
                                <ul style="list-style-type: none;">
                                  <li><input type="checkbox" class="volume_produce " value="1-10kgs">&nbsp; 1-10kgs</li>
                                  <li><input type="checkbox" class="volume_produce " value="11-20kgs">&nbsp; 11-20kgs</li>
                                  <li><input type="checkbox" class="volume_produce " value="21-49kg">&nbsp; 21-49kg</li>
                                  <li><input type="checkbox" class="volume_produce " value="50-100kgs">&nbsp; 50-100kgs</li>
                                  <li><input type="checkbox" class="volume_produce " value="above 100kgs">&nbsp; above 100kgs</li>
                                </ul>
                                <label>19 : What do you perceive as your roles as a member of the cooperative</label>
                                <ul style="list-style-type: none;">
                                  <li><input type="checkbox" class="member_role " value="to-borrow">&nbsp; to-borrow</li>
                                  <li><input type="checkbox" class="member_role " value="to-attend partcipate in meetings">&nbsp; to-attend partcipate in meetings</li>
                                  <li><input type="checkbox" class="member_role " value="to provide timely and accurate information">&nbsp; to provide timely and accurate information</li>
                                  <li><input type="checkbox" class="member_role " value="to save">&nbsp; To Save</li>
                                  <li><input type="checkbox" class="member_role " value="to invest and earn divends">&nbsp; to invest and earn divends</li>
                                  <li><input type="checkbox" class="member_role " value="to protect and defend our coperative from any form of danger">&nbsp; to protect and defend our coperative from any form of danger</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="meetingName4">20 : As a member of the cooperative, what do you perceive as your rights</label>
                              <table>
                                <tbody class="table table-bordered">
                                  <tr>
                                    <td>
                                      To Vote
                                    </td>
                                    <td>
                                      <input type="checkbox" class="member_rights " value="to Vote">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Attend and Participate In Meetings
                                    </td>
                                    <td>
                                      <input type="checkbox" class="member_rights " value="To Attend and Participate In Meetings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Be Failry Listened to and Heard
                                    </td>
                                    <td>
                                      <input type="checkbox" class="member_rights " value="To Be Failry Listened to and Heard">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Recieve Updates and Reports in the Bussines of the Coperatives
                                    </td>
                                    <td>
                                      <input type="checkbox" class="member_rights " value="To Recieve Updates and Reports in the Bussines of the Coperatives">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Have Privacy and Confidentility
                                    </td>
                                    <td>
                                      <input type="checkbox" class="member_rights " value="To Have Privacy and Confidentility">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Be Paid Whats Due
                                    </td>
                                    <td>
                                      <input type="checkbox" class="member_rights " value="To Be Paid Whats Due">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      To Be Voted
                                    </td>
                                    <td>
                                      <input type="checkbox" class="member_rights " value="to be Vote">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="form-group">
                              <label>21 : What benefits have you received from the cooperative since joining</label>
                              <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td>
                                      Trainings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="Trainings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Loans
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="Loans">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Farming Inputs
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="Farming Inputs">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Marketings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="Marketings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Savings
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="savings">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Storage
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="Storage">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Investments
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="Investments">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Bussiness Networking
                                    </td>
                                    <td>
                                      <input type="checkbox" name="benefits " class="form-control benefits " value="Bussiness Networking">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <label>If other, specify</label>
                              <input type="text" name="benefits " class="form-control">

                              <br><br>
                              <label>22 : Do you understand what an Annual General Meeting is?</label>
                              <select class="form-control" name="understand_annual_meeting"> 
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br>
                               <label>23 : Since you joined the cooperative have you attended any Annual General meeting</label>
                              <select class="form-control" name="attend_annual_meeting">
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
                                      <input type="checkbox" name="usefull_annual_meeting " class="form-control usefull_annual_meeting " value="I was Voted">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Was Able to Elect Our Coperative Leaders
                                    </td>
                                    <td>
                                      <input type="checkbox" name="usefull_annual_meeting " class="form-control usefull_annual_meeting " value="I Was Able to Elect Our Coperative Leaders">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Was Trained
                                    </td>
                                    <td>
                                      <input type="checkbox" name="usefull_annual_meeting " class="form-control usefull_annual_meeting " value="I Was Trained">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Dicussed and Approved the Reports Presented By The Coperative Management
                                    </td>
                                    <td>
                                      <input type="checkbox" name="usefull_annual_meeting " class="form-control usefull_annual_meeting " value="I Dicussed and Approved the Reports Presented By The Coperative Management">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Made New BUssiness/Social Contacts
                                    </td>
                                    <td>
                                      <input type="checkbox" name="usefull_annual_meeting " class="form-control usefull_annual_meeting " value="I Made New BUssiness/Social Contacts">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      I Made Suggestions For Improvement Of Our Coperative
                                    </td>
                                    <td>
                                      <input type="checkbox" name="usefull_annual_meeting " class="form-control usefull_annual_meeting " value="I Made Suggestions For Improvement Of Our Coperative">
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
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="Sometimes Members Were denied Opportunity to Talk">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      We Started Late
                                    </td>
                                    <td>
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="We Started Late">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      The AGM had No Agenda
                                    </td>
                                    <td>
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="The AGM had No Agenda">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      There Was No Food
                                    </td>
                                    <td>
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="There Was No Food">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      We Had No Minutes From The Previous AGM
                                    </td>
                                    <td>
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="We Had No Minutes From The Previous AGM">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      We Did Not Recieve Reports on The Perfomance Of The Coperative
                                    </td>
                                    <td>
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="We Did Not Recieve Reports on The Perfomance Of The Coperative">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      There Were Too Many Disagreements
                                    </td>
                                    <td>
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="There Were Too Many Disagreements">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      The Actual Of Fully Paid Members Was Not Presented for Verification
                                    </td>
                                    <td>
                                      <input type="checkbox" name="like_about_agm " class="form-control like_about_agm " value="The Actual Of Fully Paid Members Was Not Presented for Verification">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                                <br>
                      <br>
                      </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                               <label>Do you have any fears about being a member of this cooperative</label>
                                <select class="form-control" name="any_fears">
                                  <option value="">Choose</option>
                                  <option value="YES">YES</option>
                                  <option value="NO">NO</option>
                                </select>
                                <br>

                              <label for="decisions4">If yes, tick why this is the case</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" class="fear_reason " value="I Will Loose Money">&nbsp; I Will Loose Money</li>
                                <li><input type="checkbox" class="fear_reason " value="The Coperative Will Die">&nbsp; The Coperative Will Die</li>
                                <li><input type="checkbox" class="fear_reason " value="Conflict">&nbsp; Conflict</li>
                                <li><input type="checkbox" class="fear_reason " value="Fear Of Not Being Given An Opportunity to not to partcipate in the decisions of the coperative">&nbsp; Fear Of Not Being Given An Opportunity to not to partcipate in the decisions of the coperative</li>
                              </ul>
                              <br>

                              <label>How do you think these fears can be addressed</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" class="fear_solution " value="by attending and partcipating in Cooperative affairs">&nbsp; by attending and partcipating in Cooperative affairs</li>
                                <li>
                                  <span>Other ( Please Sepecify )</span>
                                  <input type="text" class="fear_solution " class="form-control">
                                </li>
                              </ul>
                            </div>
                            <div class="form-group">
                              <label>24 : What do you expect to have gained from the cooperative 5 years from now</label>
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>Increase My savings and HouseHold Income</td>
                                      <td><input type="checkbox" class="expect " value="Increase My savings and HouseHold Income"></td>
                                    </tr>
                                    <tr>
                                      <td>I will have grown in the leadership of the coperative</td>
                                      <td><input type="checkbox" class="expect " value="I will have grown in the leadership of the coperative"></td>
                                    </tr>
                                    <tr>
                                      <td>I Expect to have grown my bussiness volume through browing</td>
                                      <td><input type="checkbox" class="expect " value="I Expect to have grown my bussiness volume through browing"></td>
                                    </tr>
                                    <tr>
                                      <td>To increase My knoledge and Skills For The Better of My Coperative</td>
                                      <td><input type="checkbox" class="expect " value="To increase My knoledeg and Skills For The Better of My Coperative"></td>
                                    </tr>
                                    <tr>
                                      <td>Ease access to affordable Money</td>
                                      <td><input type="checkbox" class="expect " value="Ease access to affordable Money"></td>
                                    </tr>
                                    <tr>
                                      <td>To Grow My Social and Bussiness Network</td>
                                      <td><input type="checkbox" class="expect " value="To Grow My Social and Bussiness Network"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <label>If others, specify</label>
                                <input type="text" name="" class="form-control">
                                <br>
                                <label>25 : As a member where do you want to see your cooperative in 5 or more years from now</label>
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>To Grow Into a Bank</td>
                                      <td><input type="checkbox" class="future " value="To Grow Into a Bank"></td>
                                    </tr>
                                    <tr>
                                      <td>To Have Multiple Branches</td>
                                      <td><input type="checkbox" class="future " value="To Have Multiple Branches"></td>
                                    </tr>
                                    <tr>
                                      <td>To Be a training Centre</td>
                                      <td><input type="checkbox" class="future " value="To Be a training Centre"></td>
                                    </tr>
                                    <tr>
                                      <td>To Own Properties</td>
                                      <td><input type="checkbox" class="future " value="To Own Properties"></td>
                                    </tr>
                                    <tr>
                                      <td>To Export</td>
                                      <td><input type="checkbox" class="future " value="To Export"></td>
                                    </tr>
                                    <tr>
                                      <td>To Provide Employement to members and thier families</td>
                                      <td><input type="checkbox" class="future " value="To Provide Employement to members and thier families"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <label>If others, specify</label>
                                <input type="text" class="future " class="form-control">
                                <br>
                                <label>26 : What are you going to do to contribute to this aspiration you have mentioned above cooperative</label>
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>Vote The Right Leaders</td>
                                      <td><input type="checkbox" class="contribute " value="Vote The Right Leaders"></td>
                                    </tr>
                                    <tr>
                                      <td>Buy Shares and Pay Subscriptions in Time</td>
                                      <td><input type="checkbox" class="contribute " value="Buy Shares and Pay Subscriptions in Time"></td>
                                    </tr>
                                    <tr>
                                      <td>To Mobilise New Members in to the Coperative</td>
                                      <td><input type="checkbox" class="contribute " value="To Mobilise New Members in to the Coperative"></td>
                                    </tr>
                                    <tr>
                                      <td>Use All the Services and Products the coperative offers</td>
                                      <td><input type="checkbox" class="contribute " value="Use All the Services and Products the coperative offers"></td>
                                    </tr>
                                    <tr>
                                      <td>Attend and Participate In Mettings and Trainings</td>
                                      <td><input type="checkbox" class="contribute " value="To Export"></td>
                                    </tr>
                                    <tr>
                                      <td>Offer My Self For LeaderShip in the Coperative</td>
                                      <td><input type="checkbox" class="contribute " value="Offer My Self For LeaderShip in the Coperative"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <label>If others, specify</label>
                                <input type="text" class="contribute " class="form-control">
                                <br>
                               
                              </div>
                            </div>
                        </div>
                      </fieldset>




                      <!-- Step 3 -->
                      <h6>Member`s Education Profile</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="meetingName4">27 : Have you ever been to school</label>
                                  <select class="form-control" name="been_school">
                                    <option value="">Choose</option>
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                  </select>
                                  <br>
                              <label>If yes, please specify which schools below</label>
                              <table class="table table-bordered">
                                <thead>
                                  <th>School/College/University</th>
                                  <th>Qualification</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      Primary
                                    </td>
                                    <td>
                                      <textarea class="form-control" name="primary_school"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Secondary
                                    </td>
                                    <td>
                                      <textarea class="form-control" name="secondary_school"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      College
                                    </td>
                                    <td>
                                      <textarea class="form-control" name="college"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      University
                                    </td>
                                    <td>
                                      <textarea class="form-control" name="university"></textarea>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <br>
                              <label>28 : Do you have children</label>
                              <select class="form-control" name="have_kids">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>If yes, how many</label>
                              <input type="text" name="number_kids_have" class="form-control">
                              <br>

                        <label>If you have children fill in the table</label>
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                          <button type="button" class="btn btn-outline-blue block btn-md border-blue blue"
                          data-toggle="modal" data-target="#mariam-lancelot">
                            Enter Details
                          </button>
                          <!-- Modal -->
                          <div class="modal fade text-left" id="mariam-lancelot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                          aria-hidden="true">
                            <div class="modal-xl modal-dialog" role="document">
                              <div class="modal-content border-pink">
                                <div class="modal-header border-bottom-pink">
                                  <h4 class="modal-title" id="myModalLabel15"><span style="font-weight: bold; font-family: sans-serif;">Member`s Children Details</span></h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                              <table class="table table-bordered">
                                <thead>
                                  <th>NAME</th>
                                  <th>AGE</th>
                                  <th>Highest Education Level</th>
                                  <th>Occupation</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <input type="text" class="kid_name  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_age  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_education  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_occupation  form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" class="kid_name  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_age  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_education  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_occupation  form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" class="kid_name  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_age  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_education  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_occupation  form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" class="kid_name  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_age  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_education  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_occupation  form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" class="kid_name  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_age  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_education  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_occupation  form-control">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" class="kid_name  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_age  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_education  form-control">
                                    </td>
                                    <td>
                                      <input type="text" class="kid_occupation  form-control">
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

                          <div class="col-md-6">
                            <label>29 : Have you attended any trainings</label>
                            <select class="form-control" name="have_training">
                              <option value="">Choose</option>
                              <option value="YES">YES</option>
                              <option value="NO">NO</option>
                            </select>
                            <br>
                            <label>List the training you have received in the last 3 years</label>
                            <table class="table table-bordered">
                              <thead>
                                <th>Training</th>
                                <th>Institution</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <input type="text" class="training_name  form-control">
                                  </td>
                                  <td>
                                    <input type="text" class="train_place  form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="training_name  form-control">
                                  </td>
                                  <td>
                                    <input type="text" class="train_place  form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="training_name  form-control">
                                  </td>
                                  <td>
                                    <input type="text" class="train_place  form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="training_name  form-control">
                                  </td>
                                  <td>
                                    <input type="text" class="train_place  form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="training_name  form-control">
                                  </td>
                                  <td>
                                    <input type="text" class="train_place  form-control">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <br>
                            <label>What Kind of Training have you received</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" class="training_type " value="Financial Litracy">&nbsp; Financial Litracy</li>
                                <li><input type="checkbox" class="training_type " value="Agronomy">&nbsp; Agronomy</li>
                                <li><input type="checkbox" class="training_type " value="Cooperative Governance">&nbsp; Cooperative Governance</li>
                              </ul>
                              <label>Other </label>
                              <input type="text" class="training_type " class="form-control">
                        <br>
                            <label>How have these trainings helped you</label>
                            <ul style="list-style-type: none;">
                              <li><input type="checkbox" class="training_help " value="understand and involved in my cooperative Better">&nbsp; understand and involved in my cooperative Better</li>
                              <li><input type="checkbox" class="training_help " value="learn how to use money Better">&nbsp; learn how to use money Better</li>
                              <li><input type="checkbox" class="training_help " value="Started bussiness">&nbsp; Started bussiness</li>
                              <li><input type="checkbox" class="training_help " value="Am Managing My Bussines Better">&nbsp; Am Managing My Bussines Better</li>
                            </ul>
                        <label>What knowledge or skills gaps would you wish you could fill</label>
                        <input type="text" class="training_help " class="form-control">
                        <br>
                          </div>
                        </div>
                      </fieldset>




                      <!-- Step 4 -->
                      <h6>Member Income & Expense</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="meetingName4">30 : Please use this table to understand your income sources and how you spend the money that you make on a monthly basis. Please ensure to provide accurate estimates if you do not keep records of your transactions.</label>
                              <table class="table table-bordered">
                                <thead>
                                  <th>Source of Income</th>
                                  <th>Monthly Income</th>
                                  <th>Monthly Expense</th>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>
                                        <textarea class="form-control source_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_expense "></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <textarea class="form-contro source_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_expense "></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <textarea class="form-control source_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_expense "></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <textarea class="form-control source_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_pay "></textarea>
                                      </td>
                                      <td>
                                        <textarea class="form-control month_expense "></textarea>
                                      </td>
                                    </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                    <div class="form-group">
                      <label>31 : Do you have a loan</label>
                      <select class="form-control" name="have_loan">
                        <option value="">Choose</option>
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                      </select>
                      <br>
                      <label>Do you have a bank account</label>
                      <select class="form-control" name="have_bank_account">
                        <option value="">Choose</option>
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                      </select>
                      <br>
                      <label>If you have a loan what is the amount, who is your provider and what was the purpose of the loan</label>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                          <button type="button" class="btn btn-outline-blue block btn-md border-blue blue"
                          data-toggle="modal" data-target="#lancelot-core">
                            Enter Details
                          </button>
                          <div class="modal fade text-left" id="lancelot-core" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
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
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
                                    </td>
                                  </tr>
                                   <tr>
                                    <td>
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
                                    </td>
                                  </tr>
                                   <tr>
                                    <td>
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
                                    </td>
                                  </tr>
                                   <tr>
                                    <td>
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
                                    </td>
                                  </tr>
                                   <tr>
                                    <td>
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
                                    </td>
                                  </tr>
                                   <tr>
                                    <td>
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="text" name="loan_type " class="form-control loan_type ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_amount " class="form-control loan_amount ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_provider " class="form-control loan_provider ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_date " class="form-control loan_date ">
                                    </td>
                                    <td>
                                      <input type="text" name="loan_reason " class="form-control loan_reason ">
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
        </section>
      </div>
    </div>
  </div>
<?php
require '../asset-core/footer-start.php';
?>
<script type="text/javascript">
  $(document).click(function(){

    $('a[href="#finish"]').hide();
    $("li[style='']").html("<button class='btn btn-info camelot-remit' type='submit'>Create Account</button>");
    $(".camelot-remit").click(function(){
      var occupation =  [];  
      var produce =  [];
      var employment = [] ;
      var trading_product =  [];
      var kid_name = [] ;
      var kid_age = [] ;
      var kid_education = [] ;
      var kid_occupation = [];
      var training_name = [];
      var training_place = [];
      var training_type = [];
      var training_help = [];
      var source_pay = [];
      var month_pay = [];
      var month_expense = [];
      var loan_type = [];
      var loan_amount = [];
      var loan_provider = [];
      var loan_date = [];
      var loan_reason = [];
      var join_reason = [];
      var saving_period = [];
      var saving_medium = [];
      var money_access = [];
      var volume_produce = [];
      var member_role = [];
      var member_rights = [];
      var benefits = [];
      var fear_reason = [];
      var fear_solution = [];
      var expect = [];
      var future = [];
      var contribute = [];
      var usefull_annual_meeting = [];
      var like_about_agm = [];
      
      $('.occupation').each(function(){  
            if($(this).is(":checked"))  
            {  
              occupation.push($(this).val());  
            }  
      });  
      occupation = occupation.toString(); 

      $('.produce').each(function(){  
            if($(this).is(":checked"))  
            {  
              produce.push($(this).val());  
            }  
      });  
      produce = produce.toString();  

      $('.employment').each(function(){  
            if($(this).is(":checked"))  
            {  
              employment.push($(this).val());  
            }  
      });  
      employment = employment.toString(); 

      $('.trading_product').each(function(){  
            if($(this).is(":checked"))  
            {  
              trading_product.push($(this).val());  
            }  
      });  
      trading_product = trading_product.toString();  

      $('.kid_name').each(function(){  
            if($(this).is(":checked"))  
            {  
              kid_name.push($(this).val());  
            }  
      });  
      kid_name = kid_name.toString(); 

      $('.kid_age').each(function(){  
            if($(this).is(":checked"))  
            {  
              kid_age.push($(this).val());  
            }  
      });  
      kid_age = kid_age.toString();  

      $('.kid_education').each(function(){  
            if($(this).is(":checked"))  
            {  
              kid_education.push($(this).val());  
            }  
      });  
      kid_education = kid_education.toString();  
      
      $('.kid_occupation').each(function(){  
            if($(this).is(":checked"))  
            {  
              kid_occupation.push($(this).val());  
            }  
      });  
      kid_occupation = kid_occupation.toString();  

      $('.training_name').each(function(){  
            if($(this).is(":checked"))  
            {  
              training_name.push($(this).val());  
            }  
      });  
      training_name = training_name.toString();  

      $('.training_place').each(function(){  
            if($(this).is(":checked"))  
            {  
              training_place.push($(this).val());  
            }  
      });  
      training_place = training_place.toString();  

      $('.training_type').each(function(){  
            if($(this).is(":checked"))  
            {  
              training_type.push($(this).val());  
            }  
      });  
      training_type = training_type.toString();  

      $('.training_help').each(function(){  
            if($(this).is(":checked"))  
            {  
              training_help.push($(this).val());  
            }  
      });  
      training_help = training_help.toString();  

      $('.source_pay').each(function(){  
            if($(this).is(":checked"))  
            {  
              source_pay.push($(this).val());  
            }  
      });  
      source_pay = source_pay.toString();  

      $('.month_pay').each(function(){  
            if($(this).is(":checked"))  
            {  
              month_pay.push($(this).val());  
            }  
      });  
      month_pay = month_pay.toString();  

      $('.month_expense').each(function(){  
            if($(this).is(":checked"))  
            {  
              month_expense.push($(this).val());  
            }  
      });  
      month_expense = month_expense.toString();  

      $('.loan_type').each(function(){  
            if($(this).is(":checked"))  
            {  
              loan_type.push($(this).val());  
            }  
      });  
      loan_type = loan_type.toString();  

      $('.loan_amount').each(function(){  
            if($(this).is(":checked"))  
            {  
              loan_amount.push($(this).val());  
            }  
      });  
      loan_amount = loan_amount.toString();  

      $('.loan_provider').each(function(){  
            if($(this).is(":checked"))  
            {  
              loan_provider.push($(this).val());  
            }  
      });  
      loan_provider = loan_provider.toString();  
      
      $('.loan_date').each(function(){  
            if($(this).is(":checked"))  
            {  
              loan_date.push($(this).val());  
            }  
      });  
      loan_date = loan_date.toString();

      $('.loan_reason').each(function(){  
            if($(this).is(":checked"))  
            {  
              loan_reason.push($(this).val());  
            }  
      });  
      loan_reason = loan_reason.toString();  

      $('.join_reason').each(function(){  
            if($(this).is(":checked"))  
            {  
              join_reason.push($(this).val());  
            }  
      });  
      join_reason = join_reason.toString();  

      $('.saving_period').each(function(){  
            if($(this).is(":checked"))  
            {  
              saving_period.push($(this).val());  
            }  
      });  
      saving_period = saving_period.toString();  

      $('.saving_medium').each(function(){  
            if($(this).is(":checked"))  
            {  
              saving_medium.push($(this).val());  
            }  
      });  
      saving_medium = saving_medium.toString();  

      $('.money_access').each(function(){  
            if($(this).is(":checked"))  
            {  
              money_access.push($(this).val());  
            }  
      });  
      money_access = money_access.toString();  

      $('.volume_produce').each(function(){  
            if($(this).is(":checked"))  
            {  
              volume_produce.push($(this).val());  
            }  
      });  
      volume_produce = volume_produce.toString();  

      $('.member_role').each(function(){  
            if($(this).is(":checked"))  
            {  
              member_role.push($(this).val());  
            }  
      });  
      member_role = member_role.toString();  

      $('.member_rights').each(function(){  
            if($(this).is(":checked"))  
            {  
              member_rights.push($(this).val());  
            }  
      });  
      member_rights = member_rights.toString();  

      $('.benefits').each(function(){  
            if($(this).is(":checked"))  
            {  
              benefits.push($(this).val());  
            }  
      });  
      benefits = benefits.toString();  

      $('.fear_reason').each(function(){  
            if($(this).is(":checked"))  
            {  
              fear_reason.push($(this).val());  
            }  
      });  
      fear_reason = fear_reason.toString();  

      $('.fear_solution').each(function(){  
            if($(this).is(":checked"))  
            {  
              fear_solution.push($(this).val());  
            }  
      });  
      fear_solution = fear_solution.toString();  

      $('.expect').each(function(){  
            if($(this).is(":checked"))  
            {  
              expect.push($(this).val());  
            }  
      });  
      expect = expect.toString();  

      $('.future').each(function(){  
            if($(this).is(":checked"))  
            {  
              future.push($(this).val());  
            }  
      });  
      future = future.toString(); 

      $('.contribute').each(function(){  
            if($(this).is(":checked"))  
            {  
              contribute.push($(this).val());  
            }  
      });  
      contribute = contribute.toString();  

      $('.usefull_annual_meeting').each(function(){  
            if($(this).is(":checked"))  
            {  
              usefull_annual_meeting.push($(this).val());  
            }  
      });  
      usefull_annual_meeting = usefull_annual_meeting.toString();  

      $('.like_about_agm').each(function(){  
            if($(this).is(":checked"))  
            {  
              like_about_agm.push($(this).val());  
            }  
      });  
      like_about_agm = like_about_agm.toString();  

      $.ajax({
          type: "POST",
          url: "<?php echo $base_host; ?>mvc/controllers/dex-member-controller.system",
          data: $(".register-core").serialize(),
          success: function(response_down_hydra){
            console.log(response_down_hydra);
          }

      });
      return false;
    });


    return false;
  });
  
</script>