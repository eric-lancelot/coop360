<h6>&nbsp;</h6> 
<fieldset>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="firstName1">Does the Cooperative have a Business plan</label>
                <select name = "business_plan"class="form-control">
                <option value="">Choose</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lastName1">What is the level the member’s participation in designing the Business plan</label>
                <select name="business_plan_participation" class="form-control ">
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
                <select name = "no_business_plan" class="form-control">
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
                <input type="checkbox" class = "keep_records" name="" value="softcopy">&nbsp;<span>SoftCopy</span>&nbsp;&nbsp;
                <input type="checkbox" class = "keep_records" name="" value="hardcopy">&nbsp;<span>HardCopy</span>
                <br><br>
                <input type="checkbox" class = "keep_records" name="" value="softcopy and hardcopy">&nbsp;<span>Both</span>&nbsp;&nbsp;
                <input type="checkbox" class = "keep_records" name="" value="none">&nbsp;<span>None</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="phoneNumber1">Does your cooperative use any accounting software</label>
                <select name = "any_coop_software" class="form-control">
                <option value="">Choose</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="date1">If not, would your cooperative be interested in acquiring an accounting software</label>
                <select name = "coop_software" class="form-control">
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
                <select name = "keep_reserves" class="form-control">
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
                <li><input type="checkbox" class = "coop_reserves" name="" value="Reserve fund (10% of net surplus)">&nbsp;Reserve fund (10% of net surplus)</li>
                <li><input type="checkbox" class = "coop_reserves" name="" value="Share transfer fund (5% of registered share capital)">&nbsp;Share transfer fund (5% of registered share capital)</li>
                <li><input type="checkbox" class = "coop_reserves" name="" value="Share transfer fund (5% of registered share capital)">&nbsp;Share transfer fund (5% of registered share capital)</li>
                <li><input type="checkbox" class = "coop_reserves" name="" value="Education fund (% of total annual turnover) ">&nbsp;Education fund (% of total annual turnover)</li>
                <li><input type="checkbox" class = "coop_reserves" name="" value="Revolving fund (5% of total surplus)">&nbsp;Revolving fund (5% of total surplus)</li>
                <li>
                    <label>Others [Specify]</label>
                    <input type="text" name="" class="form-control coop_reserves">
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
                <input type="checkbox" class = "coop_money_ways" name="" value="Bank account">&nbsp;Bank account&nbsp;&nbsp;
                <input type="checkbox" class = "coop_money_ways" name="" value="Mobile money">&nbsp;Mobile money&nbsp;&nbsp;
                <input type="checkbox" class = "coop_money_ways" name="" value="In a box">&nbsp;In a box&nbsp;&nbsp;
                <input type="checkbox" class = "coop_money_ways" name="" value="Underground">&nbsp;Underground&nbsp;&nbsp;
                <br><br>
                <input type="checkbox" class = "coop_money_ways" name="" value="With a committee member">&nbsp;With a committee member&nbsp;&nbsp;
                <input type="checkbox" class = "coop_money_ways" name="" value="With the manager">&nbsp;With the manager&nbsp;&nbsp;
                <input type="checkbox" class = "coop_money_ways" name="" value="With the treasurer">&nbsp;With the treasurer
                <input type="checkbox" class = "coop_money_ways" name="" value="Safe">&nbsp;Safe
                <br>
                <label>Other [ Please Clarify ]</label>
                <input type="text" name="" class="form-control coop_money_ways">
                <label>Does the Cooperative have an Insurance Policy</label>
                <select name="coop_insurance_policy" class="form-control">
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
                <li><input type="checkbox" class="have_any_account" name="" value="Investment">&nbsp;Investment</li>
                <li><input type="checkbox" class="have_any_account" name="" value="Savings">&nbsp;Savings</li>
                <li><input type="checkbox" class="have_any_account" name="" value="Credit account">&nbsp;Credit account</li>
                <li><input type="checkbox" class="have_any_account" name="" value="Current">&nbsp;Current</li>
                <li><input type="checkbox" class="have_any_account" name="" value="None">&nbsp;None</li>
                <li>
                    <hr>
                    <label>Others [Specify]</label>
                    <input type="text" name="" class="form-control have_any_account">
                </li>
                </ul>
            </div>
        </div>
    </div>
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
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Liability Insurance">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Property Insurance
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Property Insurance">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Worker's Compensation
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Worker's Compensation">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Poor leadership
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Poor leadership">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Professional indemnity
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Professional indemnity">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Weather index insurance
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Weather index insurance">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Livestock insurance
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Livestock insurance">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Equipment insurance
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Equipment insurance">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Life Insurance
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Life Insurance">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Health Insurance
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="Health Insurance">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        None
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_insurance_policy_type" value="None">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <span>Other [ Please Specify ]</span>
                <input type="text" name="" class="form-control coop_insurance_policy_type">
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
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Fraud">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Fire
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Fire">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Lack of storage
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Lack of storage">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Internal theft
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Internal theft">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Capacity of staff
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Capacity of staff">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Lack of agricultural inputs and extensions
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Lack of agricultural inputs and extensions">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Lack of machinery
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Lack of machinery">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Lack of ICT
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="Lack of ICT">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        None
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control common_internal_risks" value="None">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <span>Other [ Specify ]</span>
                <input type="text" name="" class="form-control common_internal_risks">
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
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Land grabbing">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Price Fluctuations
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Price Fluctuations">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Drought
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Drought">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Flooding
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Flooding">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Disease and pests
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Disease and pests">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Lack of market
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Lack of market">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Fake seeds and seedlings
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Fake seeds and seedlings">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Theft
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Theft">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Lack of infrastructure
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Lack of infrastructure">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Government policy
                        </td>
                        <td>
                        <input type="checkbox" name="" class="form-control coop_external_risks" value="Government policy">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <span>Other [ Specify ]</span>
                <input type="text" name="" class="form-control coop_external_risks">
                </div>
            </div>
        </div>
    </div>
</fieldset>