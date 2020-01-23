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
          <h3 class="content-header-title">ADD NEW SYSTEM COOPERATIVE</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <section id="demo">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form action="#" class="number-tab-steps wizard-circle">
                      <!-- Step 1 -->
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1"><b>Cooperative Name</b></label>
                              <input type="text" class="form-control" id="firstName1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Profiled by</label>
                              <input type="text" class="form-control" id="lastName1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Date of Profiling</label>
                              <input type="date" class="form-control" id="date1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Respondent Name</label>
                              <input type="text" class="form-control" id="lastName1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Respondent’s Telephone</label>
                              <input type="tel" class="form-control" id="phoneNumber1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Respondent’s Email</label>
                              <input type="text" class="form-control" id="lastName1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Respondent’s role at the Cooperative</label>
                              <input type="text" class="form-control" id="lastName1">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">Registered Cooperative name in full</label>
                              <input type="text" class="form-control" id="firstName1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Probationary Registration Date</label>
                              <input type="date" class="form-control" id="lastName1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Probationary Registration Number</label>
                              <input type="number" class="form-control" id="emailAddress1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Permanent Registration Number</label>
                              <input type="number" class="form-control" id="emailAddress1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">District</label>
                              <input type="text" class="form-control" id="phoneNumber1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Sub County</label>
                              <input type="text" class="form-control" id="date1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Parish</label>
                              <input type="text" class="form-control" id="phoneNumber1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Village</label>
                              <input type="text" class="form-control" id="date1">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Does Cooperative Have Physical Office</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES"><b>YES WE HAVE</b></option>
                                <option value="NO"><b>NO WE DONT</b></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 2 -->
                      <!-- <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="proposalTitle1">How many FULLY PAID UP members does the cooperative have</label>
                              <input type="number" class="form-control" id="proposalTitle1">
                            </div>
                            <div class="form-group">
                              <label for="emailAddress2">How many PARTIALLY PAID UP members do you have</label>
                              <input type="number" class="form-control" id="emailAddress2">
                            </div>
                            <div class="form-group">
                              <label for="videoUrl1">Do you Keep Demographic Details On Members</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES"><b>YES We Do</b></option>
                                <option value="NO"><b>NO We Dont</b></option>
                              </select>
                              <span class=""><i><b>Note to researcher: If the respondent replies with “yes”, administer the remainder of the questions in this section. If the respondent replies with “no”, skip to the next question.</b></i></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="jobTitle1">Please specify how many of the cooperative members are of the following age categories</label>
                              <br>
                              <span>15-25 </span>&nbsp;<input type="number" class="form-control">
                              <span>26-35</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <span>36-45</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <span>46-60</label>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <span>61-Older</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                            </div>

                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="jobTitle1">Please specify how many of the cooperative members have the following education levels</label>
                              <br>
                              <span>PLE level education</span>&nbsp;<input type="number" class="form-control">
                              <span>UCE level education</span>&nbsp;<input type="number" class="form-control">
                              <span>UACE/Tertiary level education</label>&nbsp;<input type="number" class="form-control">
                              <span>Undergraduate Degree</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <span>Post-graduate/masters’education</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <span>Not Applicable</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                            </div>
                          </div>

                        </div>
                      </fieldset> -->
                      <!-- Step 3 -->
                      <!-- <h6>&nbsp;</h6> -->
                      <!-- <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="jobTitle1">Please specify how many of the cooperative members are of the following sexes</label>
                              <input type="number" class="form-control" id="jobTitle1" placeholder="NUMBER OF MALE">
                              <hr>
                              <input type="number" class="form-control" id="jobTitle1" placeholder="NUMBER OF FEMALE">
                            </div>

                            <div class="form-group">
                              <label for="jobTitle1">Please specify how many cooperative members fall in to the following occupation categories</label>
                              <br>
                              <span>Farmers</span>&nbsp;<input type="number" class="form-control">
                              <span>Teachers</span>&nbsp;<input type="number" class="form-control">
                              <hr>
                              <span>Medical practitioners</span>&nbsp;<input type="number" class="form-control">
                              <span>Legal practitioners</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <hr>
                              <span>Social development workers</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <span>Finance practitioners</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <hr>
                              <span>Marketing practitioners</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <span>Engineers</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                              <hr>
                              <span>Manual labor</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                            </div>
                            <div class="form-group">
                              <span for="eventType1">Others please specify</span>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="jobTitle2">How many members of the cooperative have left since its inception</label>
                              <div class='input-group'>
                                <input type='number' class="form-control datetime" id="jobTitle2" />
                                </span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="eventStatus1">State how many members fall in these categories <i>(Dormant Members / Active Members)</i></label>
                              <input type="number" name="" class="form-control" placeholder="Dormant Members">
                              <span><i><b>A dormant member is one who has not done any business with the cooperative for the last 12 months.</b></i></span>
                              <hr>
                              <input type="number" name="" class="form-control" placeholder="Active Members">
                              
                            </div>
                            <div class="form-group">
                              <label>Do You Provide Services to None Members? If yes, please specify below</label>
                              <div class="c-inputs-stacked">
                                <div class="d-inline-block custom-control custom-checkbox">
                                  <input type="radio" name="status" class="custom-control-input" id="staffing" value="YES">
                                  <label class="custom-control-label" for="staffing">YES we Do!</label>
                                </div>
                                <div class="d-inline-block custom-control custom-checkbox">
                                  <input type="radio" name="status" class="custom-control-input" id="catering" value="NO">
                                  <label class="custom-control-label" for="catering">NO We Dont!</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>If the answer is yes, why is this so? [Check all that apply]</label>
                              <ul style="list-style-type: none;">
                                <li>
                                  <span>The share price is high</span>
                                  <input type="checkbox" name="" class="form-control" value="The share price is high"></li>

                                <li>
                                  <span>Disinterest in buying shares</span>
                                  <input type="checkbox" name="" class="form-control" value="Disinterest in buying shares"></li>

                                <li>
                                  <span>Expand on membership</span>
                                  <input type="checkbox" name="" class="form-control" value="Expand on membership"></li>
                                <li>If Others
                                  <input type="text" name="" class="form-control">
                                </li>

                              </ul>
                            </div>
                            <div class="form-group">
                              <label for="eventStatus1">How many non-members are benefiting from the services and products of the cooperative</label>
                              <input type="number" name="" class="form-control">
                              
                            </div>
                            <div class="form-group">
                              <label for="eventStatus1">Do you have members who are groups</label>
                              <select class="form-control"="">
                                <option value="">Choose</option>
                                <option value="YES"><b>YES</b></option>
                                <option value="NO"><b>NO</b></option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="eventStatus1">If yes, how many groups belong to the Cooperative</label>
                              <input type="number" name="" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="eventStatus1">Also state three reasons why your cooperative has opted for group members</label>
                              <input type="text" name="" class="form-control" placeholder="Reason 1">
                              <input type="text" name="" class="form-control" placeholder="Reason 2">
                              <input type="text" name="" class="form-control" placeholder="Reason 3">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="eventName1">
                                What business does your cooperative do? [Check all that apply]
                              </label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="">&nbsp;Crop farming</li>
                                <li><input type="checkbox" name="">&nbsp;Livestock farming</li>
                                <li><input type="checkbox" name="">&nbsp;Bee-keeping</li>
                                <li><input type="checkbox" name="">&nbsp;Forestry</li>
                                <li><input type="checkbox" name="">&nbsp;Fishing</li>
                                <li><input type="checkbox" name="">&nbsp;Arts and Crafts</li>
                                <li><input type="checkbox" name="">&nbsp;Dairy farming</li>
                                <li><input type="checkbox" name="">&nbsp;Mining and mineral</li>
                                <li><input type="checkbox" name="">&nbsp;Quarrying</li>
                                <li><input type="checkbox" name="">&nbsp;Processing</li>
                                <li><input type="checkbox" name="">&nbsp;Bulking and Marketing</li>
                                <li><input type="checkbox" name="">&nbsp;Transport</li>
                                <li><input type="checkbox" name="">&nbsp;Supply of consumer goods</li>
                                <li><input type="checkbox" name="">&nbsp;Manufacturing</li>
                                <li><input type="checkbox" name="">&nbsp;Agricultural Inputs & extensions Supply</li>
                                <li><input type="checkbox" name="">&nbsp;Carpentry</li>
                                <li><input type="checkbox" name="">&nbsp;Health</li>
                                <li><input type="checkbox" name="">&nbsp;Construction</li>
                                <li><input type="checkbox" name="">&nbsp;Education</li>
                                <li><input type="checkbox" name="">&nbsp;Funeral management</li>
                                <li><input type="checkbox" name="">&nbsp;Financial services</li>
                                <li><input type="checkbox" name="">&nbsp;Housing</li>
                                <li><input type="checkbox" name="">&nbsp;Insurance</li>
                                <li><input type="checkbox" name="">&nbsp;Energy</li>
                                <li>
                                    Other [Specify]
                                    <input type="text" name="" class="form-control">
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="jobTitle2">If you are a SACCO but doing other businesses other than financial services please list these services</label>
                              <div class='input-group'>
                                <textarea class="form-control" name=""></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="jobTitle2">Please state 3 reasons why your SACCO is engaged in other businesses other than financial services</label>
                              <div class='input-group'>
                                <input type="text" name="" class="form-control" placeholder="Reason 1">
                                <hr>
                                <input type="text" name="" class="form-control" placeholder="Reason 2">
                                <hr>
                                <input type="text" name="" class="form-control" placeholder="Reason 3">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="jobTitle2">My cooperative business is</label>
                              <div class='input-group'>
                                <ol style="list-style-type: none;">
                                  <li><input type="radio" name="" value="active">&nbsp;Active (Operating and producing revenue)</li>
                                  <li><input type="radio" name="" value="in-active">&nbsp;Dormant (Open but not doing business)</li>
                                </ol>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="eventName1">
                                If you’re cooperative sells products, which of these apply? [Check all that apply]
                              </label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Cereals">&nbsp;Cereals</li>
                                <li><input type="checkbox" name="" value="Pulses">&nbsp;Pulses</li>
                                <li><input type="checkbox" name="" value="Horticulture">&nbsp;Horticulture</li>
                                <li><input type="checkbox" name="" value="Coffee">&nbsp;Coffee</li>
                                <li><input type="checkbox" name="" value="Cocoa">&nbsp;Cocoa</li>
                                <li><input type="checkbox" name="" value="Cotton">&nbsp;Cotton</li>
                                <li><input type="checkbox" name="" value="Grains">&nbsp;Grains</li>
                                <li><input type="checkbox" name="" value="Palm Oil">&nbsp;Palm Oil</li>
                                <li><input type="checkbox" name="" value="Sun flower">&nbsp;Sun flower</li>
                                <li><input type="checkbox" name="" value="Sesame">&nbsp;Sesame</li>
                                <li><input type="checkbox" name="" value="Meat">&nbsp;Meat</li>
                                <li><input type="checkbox" name="" value="Skins & Hides">&nbsp;Skins & Hides</li>
                                <li><input type="checkbox" name="" value="Honey">&nbsp;Honey</li>
                                <li><input type="checkbox" name="" value="Bee’s wax">&nbsp;Bee’s wax</li>
                                <li><input type="checkbox" name="" value="Poles">&nbsp;Poles</li>
                                <li><input type="checkbox" name="" value="Timber">&nbsp;Timber</li>
                                <li><input type="checkbox" name="" value="Diary">&nbsp;Diary</li>
                                <li><input type="checkbox" name="" value="Fish">&nbsp;Fish</li>
                                <li><input type="checkbox" name="" value="Energy">&nbsp;Energy</li>
                                <li><input type="checkbox" name="" value="Art & Craft">&nbsp;Art & Craft</li>
                                <li><input type="checkbox" name="" value="Nuts">&nbsp;Nuts</li>
                                <li><input type="checkbox" name="" value="None">&nbsp;None</li>
                                <li>
                                    Other [Specify]
                                    <input type="text" name="" class="form-control">
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </fieldset> -->
                      <!-- Step 4 -->
                      <!-- <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="meetingName1">If your cooperative is in Agricultural business, please state if you are using any form of irrigation system</label>
                              <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="eventName1">
                                If the cooperative sells minerals, please select all that apply. [Check all that apply]
                              </label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Gold">&nbsp;Gold</li>
                                <li><input type="checkbox" name="" value="Copper">&nbsp;Copper</li>
                                <li><input type="checkbox" name="" value="Iron Ore">&nbsp;Iron Ore</li>
                                <li><input type="checkbox" name="" value="Tin">&nbsp;Tin</li>
                                <li><input type="checkbox" name="" value="Limestone">&nbsp;Limestone</li>
                                <li><input type="checkbox" name="" value="Marble">&nbsp;Marble</li>
                                <li><input type="checkbox" name="" value="Lead">&nbsp;Lead</li>
                                <li><input type="checkbox" name="" value="Clay">&nbsp;Clay</li>
                                <li><input type="checkbox" name="" value="Graphite">&nbsp;Graphite</li>
                                <li><input type="checkbox" name="" value="Mica">&nbsp;Mica</li>
                                <li><input type="checkbox" name="" value="Kyanite">&nbsp;Kyanite</li>
                                <li><input type="checkbox" name="" value="Feldspar">&nbsp;Feldspar</li>
                                <li><input type="checkbox" name="" value="Salt">&nbsp;Salt</li>
                                <li><input type="checkbox" name="" value="Gypsum">&nbsp;Gypsum</li>
                                <li><input type="checkbox" name="" value="Sand">&nbsp;Sand</li>
                                <li><input type="checkbox" name="" value="Phosphate">&nbsp;Phosphate</li>
                                <li><input type="checkbox" name="" value="None">&nbsp;None</li>
                              </ul>
                            </div>
                            <div class="form-group">
                              <label for="participants1">Who supplies raw materials to the Cooperative</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="Members"><b>Members</b></option>
                                <option value="Market"><b>Open Market</b></option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="participants1">Does your cooperative add value to its products</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES"><b>YES</b></option>
                                <option value="NO"><b>NO</b></option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="participants1">If yes, please specify the value addition activities;</label>
                              <textarea class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="participants1">Are your products standardized</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES"><b>YES</b></option>
                                <option value="NO"><b>NO</b></option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="participants1">If yes, who standardized your products? [Select all that apply]</label>
                              <ul style="list-style-type: none;">
                                  <li>
                                    <input type="checkbox" name="" value="cooperative">&nbsp;Your cooperative itself</li>
                                  <li>
                                    <input type="checkbox" name="" value="product-association">&nbsp;Your product association / authority</li>
                                    <li>
                                    <input type="checkbox" name="" value="UNBS">&nbsp;Uganda National Bureau of Standards</li>
                                    <li>
                                    <input type="checkbox" name="" value="ware-house-receipting">&nbsp;Warehouse Receiptingy</li>
                                    <li>
                                    <input type="checkbox" name="" value="ISO">&nbsp;ISO</li>
                              </ul>
                            </div>
                            <div class="form-group">
                              <label for="participants1">Does your cooperative have a standard measurement scale for your products</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES"><b>YES</b></option>
                                <option value="NO"><b>NO</b></option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="participants1">What is the total quantity of produce/ products your cooperative handles per annum</label>
                              <textarea class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                              <label for="participants1">If you are a multipurpose/producer cooperative, please specify the different products and their quantities per annum in the boxes below</label>
                              
                              <div class="container">           
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Product Name</th>
                                      <th>Quantity Per Annum</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">What is the annual turnover (total business income in a year) of your cooperative</label>
                              <input type="number" class="form-control" id="firstName1">
                            </div>
                          </div>
                          <div class="form-group">
                              <label for="participants1">If you are a multipurpose please specify the turn over per business unit (i.e. financial products, retail shop)</label>
                              
                              <div class="container">           
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Business Name</th>
                                      <th>Annual Turn Over</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                        <input type="text" name="" class="form-control" autocomplete="off">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">How often does the Cooperative sell its products and services</label>
                              <select class="custom-select form-control" name="location">
                                <option value="">Choose</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="annually">Anually</option>
                                <option value="Seasonally">Seasonally</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">What channels does your cooperative use to market your products and services</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Directly to customers">&nbsp;Directly to customers</li>
                                <li><input type="checkbox" name="" value="Agents">&nbsp;Agents</li>
                                <li><input type="checkbox" name="" value="Online">&nbsp;Online</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Where does the Cooperative market its products/services? [Select all that apply]</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="local">&nbsp;Local Markets (within Uganda)</li>
                                <li><input type="checkbox" name="" value="regional">&nbsp;Regional Markets (within East Africa)</li>
                                <li><input type="checkbox" name="" value="international">&nbsp;International Markets (beyond East Africa)</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Do you have an export license</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">If the cooperative exports, please specify which product(s) the cooperative exports</label>
                              <textarea class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">How much do you pay for transport from the production line i.e. from source to the market</label>
                              <input type="number" name="" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">What is the distance from your cooperative to the nearest market in kilometers?</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                              <label for="participants1">What challenges does the cooperative face in marketing? [Check all that apply]</label>
                              
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                        Expensive middle men
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Expensive middle men">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Poor storage houses
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Poor storage houses">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of marketing skills
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of marketing skills">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Poor leadership
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Poor leadership">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Poor transport networks
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Poor transport networks">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of sophistication in<br> contractual business skill
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of sophistication in contractual business skill">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Unfair trade policies
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Unfair trade policies">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of standardization
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of standardization">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Unpredictable weather patterns
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Unpredictable weather patterns">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Inability to process raw products
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Inability to process raw products">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of communication and members participation
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of communication and members participation">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                        </div>
                      </fieldset> -->
                      <!-- <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>When was the last time your cooperative had an AGM</label>
                              <ul style="list-style-type: none;">
                                <li>
                                  <label>Others [Please Specify]</label>
                                  <input type="text" name="" class="form-control">
                                </li>
                                <li><input type="checkbox" name="" value="Last Financial Year">&nbsp;Last Financial Year</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Since inception have you had it annually</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">What is the quorum of your cooperative</label>
                              <input type="text" class="form-control" id="emailAddress1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Does your cooperative observe quorum at the AGM</label>
                              <select class="custom-select form-control" id="location1" name="location">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">How many members attended your last AGM</label>
                              <input type="number" class="form-control" id="phoneNumber1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">How many members participated in ELECTING THE COMMITTEE MEMBERS</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Do you send audit reports to your members two weeks before the AGM</label>
                              <select class="form-control" name="">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <label for="date1">Sometimes (Please specify)</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Do your members understand AUDITED FINANCIAL REPORTS</label>
                              <select class="form-control" name="">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <label for="date1">Some (Please specify)</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Do you have a representative from the Ministry of Trade, Industry and Cooperatives during the AGM</label>
                              <select class="form-control" name="">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">Does the cooperative have the following committees?</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Vetting committee">&nbsp;Vetting committee</li>
                                <li><input type="checkbox" name="" value="Executive/board committee">&nbsp;Executive/board committee</li>
                                <li><input type="checkbox" name="" value="Supervisory committee">&nbsp;Supervisory committee</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        
                      </fieldset>
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Does your cooperative hold elections for each statutory committee every four years as prescribed in the Cooperative Societies (Amendment Act, 2019)</label>
                              <select class="form-control" name="">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">When was the last election of each of these committees held? Please specify the year for each of the committees. If not applicable</label>
                              
                                Vetting committee&nbsp;<input type="number" name="">&nbsp;&nbsp;
                                Executive/board committee&nbsp;<input type="number" name="">
                                <br><br>
                                Supervisory committee&nbsp;<input type="number" name="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Does your cooperative issue out contracts to committee members</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Do you have a managerial team</label>
                              <select class="custom-select form-control" id="location1" name="location">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <label for="location1">If yes, how were they recruited</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Head-hunting">&nbsp;Head-hunting</li>
                                <li><input type="checkbox" name="" value="Open sourcing/advertisement">&nbsp;Open sourcing/advertisement</li>
                                <li><input type="checkbox" name="" value="Both Head-hunting and Advertisement">&nbsp;Both Head-hunting and Advertisement</li>
                                <li><input type="checkbox" name="" value="na">&nbsp;N/A</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">If you have no managerial team, how do you run the day to day operations of the cooperative?</label>
                              <textarea class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>When recruiting the managerial team, do you consider hiring graduates from the cooperative’s colleges</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                                <option value="NAT">N/A</option>
                              </select>
                              <label>If Yes, please state why</label>
                              <input type="text" name="" class="form-control">
                              <label>If No, please state why</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6> -->
                      <!-- <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">How many employees does your cooperative have</label>
                              <input type="number" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Does the cooperative issue contracts to its employees</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                                <option value="NAT">N/A</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">Does your cooperative prepare financial reports</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                                <option value="NAT">N/A</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Does your cooperative have an internal auditor</label>
                              <select class="custom-select form-control" id="location1" name="location">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                                <option value="NAT">N/A</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Does your cooperative engage external auditors</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <label>If Yes, who? DCO</label>
                              <input type="text" name="" class="form-control">
                              <label>If Yes, who? Qualified Audit Firm</label>
                              <input type="text" name="" class="form-control">
                              <label>Other (Please specify)</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">When was the last audit done</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="Never">Never</option>
                                <option value="Cant remember">Can’t remember</option>
                                <option value="Last financial year">Last financial year</option>
                                <option value="Other">Other</option>
                                <option value="NAT">N/A</option>
                              </select>
                              <label>If other, please specify</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </fieldset> -->
                      <!-- <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">Does the Cooperative remit taxes</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">If yes, specify which taxes. [Check all that apply]</label>
                              <br>
                                <input type="checkbox" name="" value="Corporation Tax">&nbsp;Corporation Tax&nbsp;&nbsp;
                                <input type="checkbox" name="" value="PAYE">&nbsp;PAYE&nbsp;&nbsp;
                                <input type="checkbox" name="" value="Withholding Tax">&nbsp;Withholding Tax&nbsp;&nbsp;
                                <input type="checkbox" name="" value="Stamp duty">&nbsp;Stamp duty&nbsp;&nbsp;
                                <input type="checkbox" name="" value="Import tax">&nbsp;Import tax</li>&nbsp;&nbsp;
                                <br>
                                <input type="checkbox" name="" value="Commodity tax">&nbsp;Commodity tax&nbsp;&nbsp;
                                <input type="checkbox" name="" value="Exercise tax">&nbsp;Exercise tax&nbsp;&nbsp;
                                <input type="checkbox" name="" value="VAT">&nbsp;VAT
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">What policies does the cooperative have? [Check all that apply]</label>
                                <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Procurement">&nbsp;Procurement</li>
                                <li><input type="checkbox" name="" value="Governance">&nbsp;Governance</li>
                                <li><input type="checkbox" name="" value="Finance and Accounting">&nbsp;Finance and Accounting</li>
                                <li><input type="checkbox" name="" value="Credit">&nbsp;Credit</li>
                                <li><input type="checkbox" name="" value="Savings">&nbsp;Savings</li>
                                <li><input type="checkbox" name="" value="Human Resources">&nbsp;Human Resources</li>
                                <li><input type="checkbox" name="" value="Bulking / Marketing">&nbsp;Bulking / Marketing</li>
                                <li><input type="checkbox" name="" value="Asset Management">&nbsp;Asset Management</li>
                                <li><input type="checkbox" name="" value="Risk Management">&nbsp;Risk Management</li>
                                <li><input type="checkbox" name="" value="Others">&nbsp;Others</li>
                                <li><input type="checkbox" name="" value="None">&nbsp;None</li>
                              </ul>
                              <label>If other, please specify</label>
                              <input type="text" name="" class="form-control">
                              <label>If you don’t have any of these policies, please specify why</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="We don’t know that we need these policies">&nbsp;We don’t know that we need these policies</li>
                                <li><input type="checkbox" name="" value="Cooperative has no skills to write the policies">&nbsp;Cooperative has no skills to write the policies</li>
                                <li><input type="checkbox" name="" value="Not applicable">&nbsp;Not applicable</li>
                                <li><input type="checkbox" name="" value="other">&nbsp;Other</li>
                              </ul>
                              <label>If other, please specify</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Is your cooperative a member affiliated to any of the following bodies</label>
                                <ul style="list-style-type: none;">
                                <li><input type="checkbox" value="Uganda Cooperative Alliance">&nbsp;Uganda Cooperative Alliance</li>
                                <li><input type="checkbox" value="Uganda Credit and Savings Cooperative Union">&nbsp;Uganda Credit and Savings Cooperative Union</li>
                                <li><input type="checkbox" value="Coop360 Network">&nbsp;Coop360 Network</li>
                                <li><input type="checkbox"  value="other">&nbsp;None</li>
                              </ul>
                              <label>If other, specify</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                        </div>

                      </fieldset> -->
                      <!-- tab pad 12 -->
                      <!-- <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">Does the Cooperative have a Business plan</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">What is the level the member’s participation in designing the Business plan</label>
                              <select class="form-control">
                                  <option value="">Choose</option>
                                  <option value="None">None</option>
                                  <option value="Mild">Mild</option>
                                  <option value="Strong">Strong</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">If your cooperative has no business plan, would you consider paying a consultant to help you develop one</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">How does your cooperative keep records</label>
                              <br>
                              <input type="checkbox" name="" value="softcopy">&nbsp;<span>SoftCopy</span>&nbsp;&nbsp;
                              <input type="checkbox" name="" value="hardcopy">&nbsp;<span>HardCopy</span>
                              <br><br>
                              <input type="checkbox" name="" value="softcopy and hardcopy">&nbsp;<span>Both</span>&nbsp;&nbsp;
                              <input type="checkbox" name="" value="none">&nbsp;<span>None</span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Does your cooperative use any accounting software</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">If not, would your cooperative be interested in acquiring an accounting software</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Does the cooperative keep reserves</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">
                                 What reserves does the cooperative keep? [Select all that apply]
                              </label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Reserve fund (10% of net surplus)">&nbsp;Reserve fund (10% of net surplus)</li>
                                <li><input type="checkbox" name="" value="Share transfer fund (5% of registered share capital)">&nbsp;Share transfer fund (5% of registered share capital)</li>
                                <li><input type="checkbox" name="" value="Share transfer fund (5% of registered share capital)">&nbsp;Share transfer fund (5% of registered share capital)</li>
                                <li><input type="checkbox" name="" value="Education fund (% of total annual turnover) ">&nbsp;Education fund (% of total annual turnover)</li>
                                <li><input type="checkbox" name="" value="Revolving fund (5% of total surplus)">&nbsp;Revolving fund (5% of total surplus)</li>
                                <li>
                                  <label>Others [Specify]</label>
                                  <input type="text" name="" class="form-control">
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">In what ways does your cooperative keep its money? [Check all that apply]</label>
                              <br>
                              <input type="checkbox" name="" value="Bank account">&nbsp;Bank account&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Mobile money">&nbsp;Mobile money&nbsp;&nbsp;
                              <input type="checkbox" name="" value="In a box">&nbsp;In a box&nbsp;&nbsp;
                              <input type="checkbox" name="" value="Underground">&nbsp;Underground&nbsp;&nbsp;
                              <br><br>
                              <input type="checkbox" name="" value="With a committee member">&nbsp;With a committee member&nbsp;&nbsp;
                              <input type="checkbox" name="" value="With the manager">&nbsp;With the manager&nbsp;&nbsp;
                              <input type="checkbox" name="" value="With the treasurer">&nbsp;With the treasurer
                              <input type="checkbox" name="" value="Safe">&nbsp;Safe
                              <br>
                              <label>Other [ Please Clarify ]</label>
                              <input type="text" name="" class="form-control">
                              <label>Does the Cooperative have an Insurance Policy</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">
                                 If you have a bank account, which type of account do you have
                              </label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Investment">&nbsp;Investment</li>
                                <li><input type="checkbox" name="" value="Savings">&nbsp;Savings</li>
                                <li><input type="checkbox" name="" value="Credit account">&nbsp;Credit account</li>
                                <li><input type="checkbox" name="" value="Current">&nbsp;Current</li>
                                <li><input type="checkbox" name="" value="None">&nbsp;None</li>
                                <li>
                                  <hr>
                                  <label>Others [Specify]</label>
                                  <input type="text" name="" class="form-control">
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6> -->
                      <!-- <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="participants1">
                                    What type of insurance policy does the cooperative have
                              </label>
                              
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                        Liability Insurance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Liability Insurance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Property Insurance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Property Insurance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Worker's Compensation
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Worker's Compensation">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Poor leadership
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Poor leadership">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Professional indemnity
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Professional indemnity">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Weather index insurance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Weather index insurance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Livestock insurance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Livestock insurance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Equipment insurance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Equipment insurance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Life Insurance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Life Insurance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Health Insurance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Health Insurance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        None
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="None">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="participants1">What are the common internal risks in the cooperative business? Select all that apply</label>
                              
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                        Fraud
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Fraud">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Fire
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Fire">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of storage
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of storage">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Internal theft
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Internal theft">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Capacity of staff
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Capacity of staff">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of agricultural inputs and extensions
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of agricultural inputs and extensions">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of machinery
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of machinery">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of ICT
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of ICT">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        None
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="None">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="participants1">What are the common external risks in the cooperative business? Select all that apply</label>
                              
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                        Land grabbing
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Land grabbing">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Price Fluctuations
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Price Fluctuations">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Drought
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Drought">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Flooding
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Flooding">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Disease and pests
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Disease and pests">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of market
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of market">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Fake seeds and seedlings
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Fake seeds and seedlings">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Theft
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Theft">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Lack of infrastructure
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Lack of infrastructure">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Government policy
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Government policy">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Does your co-operative own any assets? [Explain what is meant by an asset e.g. buildings, machinery, computers, trees, transport equipment, stores] </label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <label for="participants1">If yes, what are the co-operative Assets</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                        Land
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Land">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Buildings
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Buildings">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Furniture & fittings
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Furniture & fittings">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Flooding
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Flooding">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Machinery
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Machinery">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Computers
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Computers">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Trees
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Trees">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Transport equipment
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Transport equipment">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                          None
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="None">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Does your cooperative own a store</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br>
                              <label>If yes, what is the store’s size</label>
                              <textarea class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">If your cooperative owns machinery as an asset, list the 3 that are most important</label>
                              <hr>
                                <input type="text" name="" class="form-control" placeholder="Asset 1">
                                <br>
                                <input type="text" name="" class="form-control" placeholder="Asset 2">
                                <br>
                                <input type="text" name="" class="form-control" placeholder="Asset 3">
                              </ul>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6> -->
                      <!-- <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">Does the cooperative own or rent its premise</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Own">&nbsp; Own</li>
                                <li><input type="checkbox" name="" value="Rent">&nbsp; Rent</li>
                                <li><input type="checkbox" name="" value="Hosted by the institution">&nbsp; Hosted by the institution (applies to mainly institutional cooperatives)</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">If you own land what is the size of this land in acres</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">If your cooperative has land, does your cooperative have the supporting title documents</label>
                              <hr>
                              <span><b>Land Title</b>&nbsp;&nbsp;YES&nbsp;<input type="checkbox" name="" value="YES">&nbsp;&nbsp;NO<input type="checkbox" name="" value="NO"></span>
                              &nbsp;&nbsp;&nbsp;
                              <span><b>Purchase Agreement</b>&nbsp;&nbsp;YES&nbsp;<input type="checkbox" name="" value="YES">&nbsp;&nbsp;NO<input type="checkbox" name="" value="NO"></span>
                              <br><br>
                              <label>If no, why is this so</label>
                              <textarea class="form-control"></textarea>
                              <br><br>
                              <label>From which of these partners did your cooperative obtain grants, if any</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                        Government
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Government">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Local Leader
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Local Leader">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Business Persons
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Business Persons">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Development partner
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Development partner">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Church Institution
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Church Institution">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Not applicable
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Not applicable">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">What are the sources of your cooperative’s finances? [Check all that apply]</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Shares">&nbsp; Shares</li>
                                <li><input type="checkbox" name="" value="Business income">&nbsp; Business income</li>
                                <li><input type="checkbox" name="" value="Grants">&nbsp; Grants</li>
                                <li><input type="checkbox" name="" value="Loans">&nbsp; Loans</li>
                              </ul>
                              <br>
                              <label for="location1">Please specify the amount for each of the funding categories mentioned above</label>
                              <hr>
                              <span>Shares</span>&nbsp;&nbsp;<input type="text" name="">&nbsp;
                              <span>Business income</span>&nbsp;&nbsp;<input type="text" name="">
                              <br><br>
                              <span>Grants</span>&nbsp;&nbsp;<input type="text" name="">&nbsp;
                              <span>Loans</span>&nbsp;&nbsp;<input type="text" name="">
                              <br><br>
                              <label for="date1">What type of loans are included in your loan portfolio</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Development loan (business expansion)">&nbsp; Development loan (business expansion)</li>
                                <li><input type="checkbox" name="" value="Asset acquisition">&nbsp; Asset acquisition</li>
                                <li><input type="checkbox" name="" value="Agricultural loan">&nbsp; Agricultural loan</li>
                                <li><input type="checkbox" name="" value="Trade financing">&nbsp; Trade financing</li>
                                <li><input type="checkbox" name="" value="None">&nbsp; None</li>
                              </ul>
                              <br>
                              <span>[Other] Please specify if other</span>
                              <input type="text" name="" class="form-control">

                              <br><br>
                              <label for="date1">What is the mode of loan repayment? [Check all that apply]</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Cash">&nbsp; Cash</li>
                                <li><input type="checkbox" name="" value="Mobile Money">&nbsp; Mobile Money</li>
                                <li><input type="checkbox" name="" value="Bank">&nbsp; Bank</li>
                                <li><input type="checkbox" name="" value="In-Kind">&nbsp; In-Kind</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">If you have a loan, what is your source</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                        Government
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Government">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Commercial bank
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Commercial bank">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Development bank
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Development bank">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Cooperative union
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Cooperative union">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Microfinance
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Microfinance">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Money lender
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Money lender">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        Good customers
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="Good customers">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="date1">What is the frequency of loan repayment? [Check all that apply]</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Daily">&nbsp; Daily</li>
                                <li><input type="checkbox" name="" value="Weekly">&nbsp; Weekly</li>
                                <li><input type="checkbox" name="" value="Monthly">&nbsp; Monthly</li>
                                <li><input type="checkbox" name="" value="Quarterly">&nbsp; Quarterly</li>
                                <li><input type="checkbox" name="" value="Seasonally (after harvest)">&nbsp; Seasonally (after harvest)</li>
                                <li><input type="checkbox" name="" value="Annually">&nbsp; Annually</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <h6>&nbsp;</h6> -->
                      <!-- <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">Does your cooperative give loans to its members?</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>If yes, what is the mode of loan repayment</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Cash">&nbsp;Cash</li>
                                <li><input type="checkbox" name="" value="Mobile Money">&nbsp;Mobile Money</li>
                                <li><input type="checkbox" name="" value="Bank">&nbsp;Bank</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>If yes, what is the frequency of loan repayment? [Check all that apply]</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Daily">&nbsp;Daily</li>
                                <li><input type="checkbox" name="" value="Weekly">&nbsp;Weekly</li>
                                <li><input type="checkbox" name="" value="Monthly">&nbsp;Monthly</li>
                                <li><input type="checkbox" name="" value="Quarterly">&nbsp;Quarterly</li>
                                <li><input type="checkbox" name="" value="Seasonally (after harvest)">&nbsp;Seasonally (after harvest)</li>
                                <li><input type="checkbox" name="" value="Annually">&nbsp;Annually</li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailAddress1">What interest is being charged on your loans per annum</label>
                              <div class="container">           
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td>
                                       1 % - 5%
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="1%-5%">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        6% - 12
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="6%-12">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        12% - 18%
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="12%-18%">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        19% - 24%
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="19%-24%">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        25% - 32%
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="25%-32%">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        33% - 40%
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="33%-40%">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        41% - 46%
                                      </td>
                                      <td>
                                        <input type="checkbox" name="" class="form-control" value="41%-46%">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <span>Other [ Please Specify ]</span>
                                <input type="text" name="" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Has your Cooperative ever been involved in national policy development</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>Does your cooperative refer to any of the following</label>
                              <ol style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="The Cooperative Societies Act Cap112">&nbsp; The Cooperative Societies Act Cap.112</li>
                                <li><input type="checkbox" name="" value="The Cooperative Societies Regulations 1992">&nbsp; The Cooperative Societies Regulations 1992</li>
                                <li><input type="checkbox" name="" value="The Tier 4 Microfinance Act 2016">&nbsp; The Tier 4 Microfinance Act 2016</li>
                              </ol>
                              <span>Other [ Please Specify ]</span>
                              <input type="text" name="" class="form-control">

                              <br><br>
                              <span>If yes, do you have a copy of the documents mentioned above</span>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <span>If yes, have your members read them</span>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Do your members know that government has proposed The Cooperative Act Amendment bill 2014 which will soon be debated and passed by the Parliament</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label for="phoneNumber1">Do you have any unresolved conflict/ disagreement</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>If your cooperative has had a conflict before, how did you resolve it</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Arbitration">&nbsp; Arbitration</li>
                                <li><input type="checkbox" name="" value="Court">&nbsp; Court</li>
                                <li><input type="checkbox" name="" value="Mediation">&nbsp; Mediation</li>
                              </ul>
                              <br><br>
                              <label>If yes, how many unresolved cases does your cooperative have</label>
                              <input type="text" name="" class="form-control">
                            </div>
                          </div>
                        </div>
                      </fieldset> -->
                      <h6>&nbsp;</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="firstName1">Has your cooperative lost any property(s) in the past</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>If yes, what caused the loss</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="Wars">&nbsp; Wars</li>
                                <li><input type="checkbox" name="" value="Natural disaster">&nbsp; Natural disaster</li>
                                <li><input type="checkbox" name="" value="Debt">&nbsp; Debt</li>
                                <li><input type="checkbox" name="" value="Internal fraud">&nbsp; Internal fraud</li>
                                <li><input type="checkbox" name="" value="None">&nbsp; None</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Have you ever heard about the former Cooperative Bank</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label for="lastName1">If yes, was your cooperative a share-holder of the former Cooperative Bank</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label for="lastName1">Did your Cooperative have an account in the former Cooperative Bank</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="lastName1">Did you make any losses when the Cooperative Bank was closed in 1999</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>If yes, in what form</label>
                              <ul style="list-style-type: none;">
                                <li><input type="checkbox" name="" value="We lost money in deposit accounts">&nbsp; We lost money in deposit accounts</li>
                                <li><input type="checkbox" name="" value="We lost money in paying debts">&nbsp; We lost money in paying debts</li>
                                <li><input type="checkbox" name="" value="Not applicable">&nbsp; Not applicable</li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="location1">Quantify the Loss in monetary terms if Assets were lost. If Money was lost, please state how much</label>
                              <input type="text" name="" class="form-control">
                              <br><br>
                              <label>Would you support a new Cooperative Bank</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br><br>
                              <label>Did your cooperative have shares in the Cooperative Insurance Company of Uganda</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="phoneNumber1">Do you currently hold any shares in current Cooperative Insurance Company of Uganda</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Does your cooperative have shares in any defunct cooperative</label>
                              <select class="form-control">
                                <option value="">Choose</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>
                              </select>
                              <br>
                              <label>If yes, please specify</label>
                              <input type="text" name="" class="form-control">
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
        <!-- Form wizard with vertical tabs section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php
require '../asset-core/footer-start.php';
?>