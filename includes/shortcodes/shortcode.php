<?php

add_shortcode('conditional_logic', 'clf_conditional_logic_form');

if( !function_exists('clf_conditional_logic_form')){
    function clf_conditional_logic_form(){
        ob_start(); 
        ?>

<form id="conditional-form">
    <!-- Country Dropdown -->
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="country">Select Country</label>
            <!-- Country Dropdown -->
            <select class="form-control" id="country" name="country">
                <option value="">--Select Country--</option>
                <option value="US">US</option>
                <option value="CA">CA</option>
                <option value="UK">UK</option>
            </select>     
    </div>    
    <div class="form-group" id="city-container" style="display:none">
        <label for="city">Select City:</label>
        <!-- City Dropdown (Hidden by default) -->
            <select class="form-control" id="city" name="city">
            </select>
    </div>
    <div class="form-group" id="suburb-container" style="display:none">
        <label for="suburb">Select Suburbs:</label>
        <!-- Suburb Dropdown (Hidden by default) -->
            <select class="form-control" id="suburb" name="suburb">
            </select>
    </div>
    <div class="form-check">
        <label>Available:</label>
        <!-- Radio Button for Availability -->
        <input type="radio" id="available_yes" name="available" value="yes" class="form-check-input">&nbsp; Yes
        <input type="radio" id="available_no" name="available" value="no" class="form-check-input">&nbsp; No
    </div><br />
    <div  id="date-container" style="display:none;">
        <label>Select Date</label>
        <!--Date field will be hidden-->
        <input type="date" id="date" name="date" >
    </div>
    <!-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <br />
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php
 return ob_get_clean();
    }    
}