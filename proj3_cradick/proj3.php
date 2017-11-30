<!DOCTYPE html>
<html>
    <head>
        <script src="proj3.js"></script>
        <link rel="stylesheet" href="proj3.css">   
    </head>
    <table class="table-minimal">
        <thead>
            <tr>
                <th>Unit</th>
                <th>Unit Cost</th>
                <th>Quantity</th>
                <th>Unit Subtotal</th>
            </tr>  
        </thead>
        <tbody>
            <tr>
                <td>37AX-L</td>
                <td>$12.45ea</td>
                <td>
                    <input title: "37AX-L" id="inp1" type="number" value="0" onchange="getAbs(this)">
                </td>
                <td id="id1">$0.00</td>
            </tr>
            <tr>
                <td>42XR-J</td>
                <td>$15.34ea</td>
                <td>
                    <input title: "42XR-j" id="inp2" type="number" value="0" onchange="getAbs(this)">
                </td>
                <td id="id2">$0.00</td>
            </tr>
            <tr>
                <td>93ZZ-A</td>
                <td>$28.99ea</td>
                <td>
                    <input title="93ZZ-A" id="inp3" type="number" value="0" onchange="getAbs(this)">
                </td>
                <td id="id3">$0.00</td>
            </tr>
            <tr>
                <td>Your SubTotal is:</td>
                <td></td>
                <td></td>
                <td id="subTotalValue">$0.00</td>
            </tr>
            <tr>
                <td>Select the state of the shipping adress:</td>
                <td>
                    <select>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </td>
                <td>
                    <button id="button" onclick="submit()">Submit</button>
                </td>

            </tr>
        </tbody>
    </table>
    <br>
    <div id="shipAgree"></div>
</html>
    
