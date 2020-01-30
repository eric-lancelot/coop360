<h6>&nbsp;</h6>
<fieldset>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="proposalTitle1">How many FULLY PAID UP members does the cooperative have</label>
                <input type="number" name="fully_paid_members" class="form-control" id="proposalTitle1">
            </div>
            <div class="form-group">
                <label for="emailAddress2">How many PARTIALLY PAID UP members do you have</label>
                <input type="number" name="partially_paid_members" class="form-control" id="emailAddress2">
            </div>
            <div class="form-group">
                <label for="videoUrl1">Do you Keep Demographic Details On Members</label>
                <select name="demographic_details" class="form-control">
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
                <span>15-25 </span>&nbsp;<input name="15-25" type="number" class="form-control">
                <span>26-35</span>&nbsp;<input name="26-35" type="number" class="form-control" id="jobTitle1">
                <span>36-45</span>&nbsp;<input name="36-45" type="number" class="form-control" id="jobTitle1">
                <span>46-60</label>&nbsp;<input name="46-60" type="number" class="form-control" id="jobTitle1">
                <span>61-Older</span>&nbsp;<input name="61-older" type="number" class="form-control" id="jobTitle1">
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="jobTitle1">Please specify how many of the cooperative members have the following education levels</label>
                <br>
                <span>PLE level education</span>&nbsp;<input name="ple" type="number" class="form-control">
                <span>UCE level education</span>&nbsp;<input name="uce" type="number" class="form-control">
                <span>UACE/Tertiary level education</label>&nbsp;<input name="uace" type="number" class="form-control">
                <span>Undergraduate Degree</span>&nbsp;<input name="undergraduate" type="number" class="form-control" id="jobTitle1">
                <span>Post-graduate/masters’education</span>&nbsp;<input name="post_graduate" type="number" class="form-control" id="jobTitle1">
                <span>Not Applicable</span>&nbsp;<input type="number" name="not_applicable" class="form-control" id="jobTitle1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="jobTitle2">How many members of the cooperative have left since its inception</label>
                <div class='input-group'>
                <input type='number' name="members_left" class="form-control datetime" id="jobTitle2" />
                </span>
                </div>
            </div>
            <div class="form-group">
                <label for="eventStatus1">State how many members fall in these categories <i>(Dormant Members / Active Members)</i></label>
                <input type="number" name="dormant_members" class="form-control" placeholder="Dormant Members">
                <span><i><b>A dormant member is one who has not done any business with the cooperative for the last 12 months.</b></i></span>
                <hr>
                <input type="number" name="active_members" class="form-control" placeholder="Active Members">
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
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">

            <div class="form-group">
                <label for="jobTitle1">Please specify how many cooperative members fall in to the following occupation categories</label>
                <br>
                <span>Farmers</span>&nbsp;<input type="number" name="no_of_farmers" class="form-control">
                <span>Teachers</span>&nbsp;<input type="number" name="no_of_teachers" class="form-control">
                <hr>
                <span>Medical practitioners</span>&nbsp;<input type="number" name="no_of_medical" class="form-control">
                <span>Legal practitioners</span>&nbsp;<input type="number" name="no_of_legal_practitioners" class="form-control" id="jobTitle1">
                <hr>
                <span>Social development workers</span>&nbsp;<input type="number" class="form-control" id="jobTitle1">
                <span>Finance practitioners</span>&nbsp;<input type="number" name="no_of_finance" class="form-control" id="jobTitle1">
                <hr>
                <span>Marketing practitioners</span>&nbsp;<input type="number" name="no_marketers" class="form-control" id="jobTitle1">
                <span>Engineers</span>&nbsp;<input type="number" name="no_of_engineers" class="form-control" id="jobTitle1">
                <hr>
                <span>Manual labor</span>&nbsp;<input type="number" name="no_of_manual_labor"class="form-control" id="jobTitle1">
            </div>
            <div class="form-group">
                <span for="eventType1">Others please specify</span>
                <input type="text" name="other_occupation" class="form-control">
            </div>
        </div>
        <div class="col-md-6">       
            <div class="form-group">
                <label>If the answer is yes, why is this so? [Check all that apply]</label>
                <ul style="list-style-type: none;">
                <li>
                    <span>The share price is high</span>
                    <input type="checkbox" name="" class="form-control if_yes" value="The share price is high"></li>

                <li>
                    <span>Disinterest in buying shares</span>
                    <input type="checkbox" name="" class="form-control if_yes" value="Disinterest in buying shares"></li>

                <li>
                    <span>Expand on membership</span>
                    <input type="checkbox" name="" class="form-control if_yes" value="Expand on membership"></li>
                <li>If Others
                    <input type="text" name="" class="form-control if_yes">
                </li>

                </ul>
            </div>
            <div class="form-group">
                <label for="eventStatus1">How many non-members are benefiting from the services and products of the cooperative</label>
                <input type="number" name="non_member_beneficiaries_no" class="form-control">
                
            </div>
            <div class="form-group">
                <label for="eventStatus1">Do you have members who are groups</label>
                <select name="member_group_nos" class="form-control"="">
                <option value="">Choose</option>
                <option value="YES"><b>YES</b></option>
                <option value="NO"><b>NO</b></option>
                </select>
            </div>
            <div class="form-group">
                <label for="eventStatus1">If yes, how many groups belong to the Cooperative</label>
                <input type="number" name="no_of_groups" class="form-control">
            </div>
            <div class="form-group">
                <label for="eventStatus1">Also state three reasons why your cooperative has opted for group members</label>
                <input type="text" name="reason1" class="form-control" placeholder="Reason 1">
                <input type="text" name="reason2" class="form-control" placeholder="Reason 2">
                <input type="text" name="reason3" class="form-control" placeholder="Reason 3">
            </div>
        </div>
    </div>
</fieldset>