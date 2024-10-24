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
            <select class="form-control" id="country" name="country">
                <option value="">--Select Country--</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
            </select>        
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>





</form>



<?php
 return ob_get_clean();
    }
    
}