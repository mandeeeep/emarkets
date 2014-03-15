<?php
$path="./";
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<legend>Search</legend>
        <form name="search_frm" method="post" action="search_db.php" onsubmit="return validate_search(this)">
            <table>
                <tr>
                    <td><label>Search</label></td>
                    <td><input type="text" name="srch_name"></td>
                </tr>

                <tr>
                    <td><label>Brand</label></td>
                    <td><select name="srch_brand">
                            <option>Select brand</option>
                            <option value="1">Nokia</option>
                            <option value="2">Samsung</option>
                            <option value="3">L.G.</option>
                            <option value="4">Sony Ericsson</option>
                            <option value="5">Blackberry</option>
                            <option value="6">Motorola</option>
                            <option value="7">MicroMax</option>
                            <option value="8">Virgin Mobile</option>
                            <option value="9">N.E.C</option>
                            <option value="10">Others</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label>Price-range</label></td>
                    <td><input type="text" name="srch_price_min">-<input type="text" name="srch_price_max"></td>
                </tr>

                <tr>
                    <td><label>Condition</label></td>
                    <td>
                        <input type="radio" name="srch_condn" value="1">FirstHand&nbsp;&nbsp;
                        <input type="radio" name="srch_condn" value="2">SecondHand
                    </td>
                </tr>

                <tr>
                    <td><label>Negotiable</label></td>
                    <td>
                        <input type="radio" name="srch_nego" value="1">Yes&nbsp;&nbsp;
                        <input type="radio" name="srch_nego" value="0">No
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="sub" value="Search">
                        <input type="reset" name="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
<?php
 require 'includes/rbar.php';
require 'includes/footer.php';
?>