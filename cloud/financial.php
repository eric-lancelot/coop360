<h6>&nbsp;</h6> 
<fieldset> 
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="location1">Does your co-operative own any assets? [Explain what is meant by an asset e.g. buildings, machinery, computers, trees, transport equipment, stores] </label>
                <select name="any_coop_assets" class="form-control">
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
                            <input type="checkbox" name="" class="form-control coop_assets " value="Land">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Buildings
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="Buildings">
                        </td>
                        </tr>
                        <tr> 
                        <td>
                            Furniture & fittings
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="Furniture & fittings">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Flooding
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="Flooding">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Machinery
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="Machinery">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Computers
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="Computers">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Trees
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="Trees">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Transport equipment
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="Transport equipment">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            None
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_assets" value="None">
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <span>Other [ Specify ]</span>
                    <input type="text" name="" class="form-control coop_assets">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Does your cooperative own a store</label>
                <select name="own_store" class="form-control">
                    <option value="">Choose</option>
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
                <br>
                <label>If yes, what is the store’s size</label>
                <textarea name="store_size" class="form-control"></textarea>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="date1">If your cooperative owns machinery as an asset, list the 3 that are most important</label>
                <hr>
                    <input type="text" name="machinery_asset_1" class="form-control" placeholder="Asset 1">
                    <br>
                    <input type="text" name="machinery_asset_2" class="form-control" placeholder="Asset 2">
                    <br>
                    <input type="text" name="machinery_asset_3" class="form-control" placeholder="Asset 3">
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="firstName1">Does the cooperative own or rent its premise</label>
            <ul style="list-style-type: none;">
                <li><input type="checkbox" class="own_or_rent_premise" name="" value="Own">&nbsp; Own</li>
                <li><input type="checkbox" class="own_or_rent_premise" name="" value="Rent">&nbsp; Rent</li>
                <li><input type="checkbox" class="own_or_rent_premise" name="" value="Hosted by the institution">&nbsp; Hosted by the institution (applies to mainly institutional cooperatives)</li>
            </ul>
            </div>
            <div class="form-group">
            <label for="lastName1">If you own land what is the size of this land in acres</label>
            <input type="text" name="land_size" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="emailAddress1">If your cooperative has land, does your cooperative have the supporting title documents</label>
                <hr>
                <span><b>Land Title</b>&nbsp;&nbsp;YES&nbsp;
                <input type="checkbox" class="title_docs" name="" value="YES">&nbsp;&nbsp;
                NO<input type="checkbox" class="title_docs" name="" value="NO"></span>
                &nbsp;&nbsp;&nbsp;
                <span><b>Purchase Agreement</b>&nbsp;&nbsp;YES&nbsp;
                <input type="checkbox" class="purchase_agreement" name="" value="YES">
                &nbsp;&nbsp;NO<input type="checkbox" class="purchase_agreement" name="" value="NO"></span>
                <br><br>
                <label>If no, why is this so</label>
                <textarea class="form-control" name="why_is_this_so"></textarea>
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
                            <input type="checkbox" name="" class="form-control coop_partners" value="Government">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Local Leader
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_partners" value="Local Leader">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Business Persons
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_partners" value="Business Persons">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Development partner
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_partners" value="Development partner">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Church Institution
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_partners" value="Church Institution">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Not applicable
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control coop_partners" value="Not applicable">
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <span>Other [ Specify ]</span>
                    <input type="text" name="" class="form-control coop_partners">
            </div>
        </div> 
        <div class="col-md-6">
            <div class="form-group">
                <label for="location1">What are the sources of your cooperative’s finances? [Check all that apply]</label>
                <ul style="list-style-type: none;">
                    <li><input type="checkbox" class="finance_sources" name="" value="Shares">&nbsp; Shares</li>
                    <li><input type="checkbox" class="finance_sources" name="" value="Business income">&nbsp; Business income</li>
                    <li><input type="checkbox" class="finance_sources" name="" value="Grants">&nbsp; Grants</li>
                    <li><input type="checkbox" class="finance_sources" name="" value="Loans">&nbsp; Loans</li>
                </ul>
                <br>
                <label for="location1">Please specify the amount for each of the funding categories mentioned above</label>
                <hr>
                <span>Shares</span>&nbsp;&nbsp;<input type="text" name="shares">&nbsp;
                <span>Business income</span>&nbsp;&nbsp;<input type="text" name="business_income">
                <br><br>
                <span>Grants</span>&nbsp;&nbsp;<input type="text" name="grants">&nbsp;
                <span>Loans</span>&nbsp;&nbsp;<input type="text" name="loans">
                <br><br>
                <label for="date1">What type of loans are included in your loan portfolio</label>
                <ul style="list-style-type: none;">
                    <li><input type="checkbox" class="loan_type" name="" value="Development loan (business expansion)">&nbsp; Development loan (business expansion)</li>
                    <li><input type="checkbox" class="loan_type" name="" value="Asset acquisition">&nbsp; Asset acquisition</li>
                    <li><input type="checkbox" class="loan_type" name="" value="Agricultural loan">&nbsp; Agricultural loan</li>
                    <li><input type="checkbox" class="loan_type" name="" value="Trade financing">&nbsp; Trade financing</li>
                    <li><input type="checkbox" class="loan_type" name="" value="None">&nbsp; None</li>
                </ul>
                <br>
                <span>[Other] Please specify if other</span>
                <input type="text" name="" class="form-control loan_type">

                <br><br>
                <label for="date1">What is the mode of loan repayment? [Check all that apply]</label>
                <ul style="list-style-type: none;">
                    <li><input type="checkbox" class="loan_repayment" name="" value="Cash">&nbsp; Cash</li>
                    <li><input type="checkbox" class="loan_repayment" name="" value="Mobile Money">&nbsp; Mobile Money</li>
                    <li><input type="checkbox" class="loan_repayment" name="" value="Bank">&nbsp; Bank</li>
                    <li><input type="checkbox" class="loan_repayment" name="" value="In-Kind">&nbsp; In-Kind</li>
                </ul>
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
                            <input type="checkbox" name="" class="form-control loan_source" value="Government">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Commercial bank
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loan_source" value="Commercial bank">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Development bank
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loan_source" value="Development bank">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Cooperative union
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loan_source" value="Cooperative union">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Microfinance
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loan_source" value="Microfinance">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Money lender
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loan_source" value="Money lender">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            Good customers
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loan_source" value="Good customers">
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <span>Other [ Please Specify ]</span>
                    <input type="text" name="" class="form-control loan_source">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="date1">What is the frequency of loan repayment? [Check all that apply]</label>
                <ul style="list-style-type: none;">
                    <li><input type="checkbox" class="loan_repayment_frequency" name="" value="Daily">&nbsp; Daily</li>
                    <li><input type="checkbox" class="loan_repayment_frequency" name="" value="Weekly">&nbsp; Weekly</li>
                    <li><input type="checkbox" class="loan_repayment_frequency" name="" value="Monthly">&nbsp; Monthly</li>
                    <li><input type="checkbox" class="loan_repayment_frequency" name="" value="Quarterly">&nbsp; Quarterly</li>
                    <li><input type="checkbox" class="loan_repayment_frequency" name="" value="Seasonally (after harvest)">&nbsp; Seasonally (after harvest)</li>
                    <li><input type="checkbox" class="loan_repayment_frequency" name="" value="Annually">&nbsp; Annually</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label for="firstName1">Does your cooperative give loans to its members?</label>
            <select name="give_loans_to_members" class="form-control">
                <option value="">Choose</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
            </select>
            <br><br>
            <label>If yes, what is the mode of loan repayment</label>
            <ul style="list-style-type: none;">
                <li><input type="checkbox" class="mode_of_loan_repayment" name="" value="Cash">&nbsp;Cash</li>
                <li><input type="checkbox" class="mode_of_loan_repayment" name="" value="Mobile Money">&nbsp;Mobile Money</li>
                <li><input type="checkbox" class="mode_of_loan_repayment" name="" value="Bank">&nbsp;Bank</li>
            </ul>
        </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label>If yes, what is the frequency of loan repayment? [Check all that apply]</label>
            <ul style="list-style-type: none;">
                <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Daily">&nbsp;Daily</li>
                <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Weekly">&nbsp;Weekly</li>
                <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Monthly">&nbsp;Monthly</li>
                <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Quarterly">&nbsp;Quarterly</li>
                <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Seasonally (after harvest)">&nbsp;Seasonally (after harvest)</li>
                <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Annually">&nbsp;Annually</li>
            </ul>
        </div>
    </div> -->
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
                            <input type="checkbox" name="" class="form-control loans_per_annum" value="1%-5%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            6% - 12
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loans_per_annum" value="6%-12">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            12% - 18%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loans_per_annum" value="12%-18%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            19% - 24%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loans_per_annum" value="19%-24%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            25% - 32%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loans_per_annum" value="25%-32%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            33% - 40%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loans_per_annum" value="33%-40%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            41% - 46%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control loans_per_annum" value="41%-46%">
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <span>Other [ Please Specify ]</span>
                    <input type="text" name="" class="form-control loans_per_annum">
                </div>
            </div>    
        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="firstName1">Does your cooperative give loans to its members?</label>
                <select name="loans_to_members" class="form-control">
                    <option value="">Choose</option>
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                </select>
                <br><br>
                <label>If yes, what is the mode of loan repayment</label>
                <ul style="list-style-type: none;">
                    <li><input type="checkbox" class="loan_repayment_mode" name="" value="Cash">&nbsp;Cash</li>
                    <li><input type="checkbox" class="loan_repayment_mode" name="" value="Mobile Money">&nbsp;Mobile Money</li>
                    <li><input type="checkbox" class="loan_repayment_mode" name="" value="Bank">&nbsp;Bank</li>
                </ul>
            </div>
            <div class="form-group">
                <label>If yes, what is the frequency of loan repayment? [Check all that apply]</label>
                <ul style="list-style-type: none;">
                    <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Daily">&nbsp;Daily</li>
                    <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Weekly">&nbsp;Weekly</li>
                    <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Monthly">&nbsp;Monthly</li>
                    <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Quarterly">&nbsp;Quarterly</li>
                    <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Seasonally (after harvest)">&nbsp;Seasonally (after harvest)</li>
                    <li><input type="checkbox" class="frequency_loan_repayment" name="" value="Annually">&nbsp;Annually</li>
                </ul>
            </div>    
        </div> -->
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
                            <input type="checkbox" name="" class="form-control interest_on_loans" value="1%-5%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            6% - 12
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control interest_on_loans" value="6%-12">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            12% - 18%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control interest_on_loans" value="12%-18%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            19% - 24%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control interest_on_loans" value="19%-24%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            25% - 32%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control interest_on_loans" value="25%-32%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            33% - 40%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control interest_on_loans" value="33%-40%">
                        </td>
                        </tr>
                        <tr>
                        <td>
                            41% - 46%
                        </td>
                        <td>
                            <input type="checkbox" name="" class="form-control interest_on_loans" value="41%-46%">
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <span>Other [ Please Specify ]</span>
                    <input type="text" name="" class="form-control interest_on_loans">
                </div>
            </div>
        </div>    
    </div>
</fieldset>