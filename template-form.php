<?php 
get_header();
// Template Name: Form
;?>
<div class="container">
    <div class="section record">
        <div class="form-title">
            <h2>
                <?php echo get_field('form_title')?>
            </h2>
        </div>
        <?php $records = get_field('record_repeater');?>
        <div class="records-form">
            <form action="">
                <div class="form-wrapper">
                    <label for=""> First Name </label>
                    <input type="fname" name="First Name" placeholder="First Name" name="first_name" value="">
                </div>
                <div class="form-wrapper">
                    <label for=""> Last Name </label>
                    <input type="lname" name="Last Name" placeholder="Last Name" name="last_name" value="">
                </div>
                <div class="form-wrapper">
                    <label for=""> Email </label>
                    <input type="email" placeholder="Enter your email" name="email" value="">
                </div>
                <div class="form-wrapper">
                    <label for=""> Enter your phone number </label>
                    <input type="number" placeholder="Enter your phone number" name="phone" value="">
                </div>
                <div class="form-wrapper">
                    <label for=""> Tell us about yourself </label>
                    <textarea rows="7" cols="46" placeholder="Tell us about yourself" name="comment" value=""></textarea>
                </div>
                <div class="form-wrapper-checkbox">
                    <label for="check" class="checkboxes checkbox">
                        <input type="checkbox" id="check" name="click" value="Done">
                        <div class="checkup"></div>
                        <div class="checkbox-info">
                            I agree to the <a href="#">terms and conditions</a>
                        </div>
                    </label>
                </div>
                <div class="form-wrapper-button">
                    <button class="btn btn-secondary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        
    </div>
</div>
<?php 
get_footer();