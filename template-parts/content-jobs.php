<?php

  // Advanced Custom Fields
  $first_name                     = get_field(first_name);
  $last_name                      = get_field(last_name);
  $current_address                = get_field(current_address);
  $city                           = get_field(city);
  $state                          = get_field(state);
  $zip_code                       = get_field(zip_code);
  $phone_number                   = get_field(phone_number);
  $desired_position               = get_field(desired_position);
  $start_date                     = get_field(start_date);
  $desired_salary                 = get_field(desired_salary);
  $currently_employed             = get_field(currently_employed);
  $employer_contact               = get_field(employer_contact);
  $high_school_name               = get_field(high_school_name);
  $high_school_address            = get_field(high_school_address);
  $high_school_graduation         = get_field(high_school_graduation);
  $college_name                   = get_field(college_name);
  $college_address                = get_field(college_address);
  $college_graduation             = get_field(college_graduation);
  $college_studies                = get_field(college_studies);
  $employer_name                  = get_field(employer_name);
  $employer_address               = get_field(employer_address);
  $employee_position              = get_field(employee_position);
  $employee_salary                = get_field(employee_salary);
  $employer_leaving               = get_field(employer_leaving);
  $employer_start_date            = get_field(employer_start_date);
  $employer_end_date              = get_field(employer_end_date);
  $reference_name                 = get_field(reference_name);
  $reference_phone_number         = get_field(reference_phone_number);
  $reference_employer             = get_field(reference_employer);
  $reference_years_known          = get_field(reference_years_known);
  $authorization_disclaimer       = get_field(authorization_disclaimer);
  $authorization_date             = get_field(authorization_date);
  $authorization_signature        = get_field(authorization_signature);
  $authorization_sub_disclaimer   = get_field(authorization_sub_disclaimer);

 ?>


 <!-- Start Jobs Section -->
 <section id="jobs" class="top-section">
   <div class="jobs-wrapper">
     <div class="title jobs-title"><span>Jobs</span></div>
     <div class="jobs-description">Interested in a job in Metal Fabrication? Fill out our application and start fabricating your future.</div>
     <div class="jobs-form-wrapper">
       <form action="https://api.formbucket.com/f/buk_edDbZGWHEGuX9PB2ztOVobCW" method="post" target="_blank" class="jobs-form">
         <!-- Personal Information Section -->
         <div class="jobs-form-group-header">Personal Information</div>
         <div class="jobs-form-group">
           <label for="First Name"><?php echo $first_name ?></label>
           <input type="text" name="First Name">
           <label for="Last Name"><?php echo $last_name ?></label>
           <input type="text" name="Last Name">
           <label for="Current Address"><?php echo $current_address ?></label>
           <input type="text" name="Current Address">
           <label for="City"><?php echo $city ?></label>
           <input type="text" name="City">
           <label for="State"><?php echo $state ?></label>
           <input type="text" name="State">
           <label for="Zip Code"><?php echo $zip_code ?></label>
           <input type="number" name="Zip Code">
           <label for="Phone Number"><?php echo $phone_number ?></label>
           <input type="number" name="Phone Number">
         </div>
         <!-- Desired Employment Section -->
         <div class="jobs-form-group-header">Desired Employment</div>
         <div class="jobs-form-group">
           <label for="Desired Position"><?php echo $desired_position ?></label>
           <input type="text" name="Desired Position">
           <label for="Start Date"><?php echo $start_date ?></label>
           <input type="date" name="Start Date">
           <label for="Desired Salary"><?php echo $desired_salary ?></label>
           <input type="number" name="Desired Salary" placeholder="Hourly">
           <label for="Currently Employed"><?php echo $currently_employed ?></label>
           <select name="Currently Employed" id="" class="jobs-select-wrapper">
             <option value="" disabled selected class="select-text"></option>
             <option value="Yes" name="Yes" >Yes</option>
             <option value="No" name="No" >No</option>
           </select>
           <label for="Currently Employed Contact">Can we contact your current employer?</label>
           <select name="Contact Current Employer" id="" class="jobs-select-wrapper">
             <option value="" disabled selected class="select-text"></option>
             <option value="Yes" name="Yes">Yes</option>
             <option value="No" name="No">No</option>
           </select>
         </div>
         <!-- Education Section -->
         <div class="jobs-form-group-header">Education Information</div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">High School Education</div>
           <label for="High Schoole Name"><?php echo $high_school_name ?></label>
           <input type="text" name="High School Name">
           <label for="High School Address"><?php echo $high_school_address ?></label>
           <input type="text" name="High School Address">
           <label for="High School Graduation"><?php echo $high_school_graduation ?></label>
           <select name="High School Graduation" id="" class="jobs-select-wrapper">
             <option value="" disabled selected class="select-text"></option>
             <option value="Yes" name="Graduated Yes" >Yes</option>
             <option value="No" name="Graduated No">No</option>
           </select>
         </div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">College Education</div>
           <label for="College Name"><?php echo $college_name ?></label>
           <input type="text" name="College Name">
           <label for="College Address"><?php echo $college_address ?></label>
           <input type="text" name="College Address">
           <label for="College Graduation"><?php echo $college_graduation ?></label>
           <select name="College Graduation" id="" class="jobs-select-wrapper">
             <option value="" disabled selected class="select-text"></option>
             <option value="Yes" name="Graduated Yes">Yes</option>
             <option value="No" name="Graduated No">No</option>
           </select>
           <label for="College Area of Study"><?php echo $college_studies ?></label>
           <input type="text" name="College Area of Study" class="jobs-school-study">
         </div>
         <!-- Work Section -->
         <div class="jobs-form-group-header">Work History</div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">Most Recent Employer</div>
           <label for="Employer Name"><?php echo $employer_name ?></label>
           <input type="text" name="Recent Employer Name">
           <label for="Employer Address"><?php echo $employer_address ?></label>
           <input type="text" name="Recent Employer Address">
           <label for="Employee Position"><?php echo $employee_position ?></label>
           <input type="text" name="Recent Employer Position">
           <label for="Employee Salary"><?php echo $employee_salary ?></label>
           <input type="text" name="Recent Employer Salary">
           <label for="Reason For Leaving"><?php echo $employer_leaving ?></label>
           <input type="text" name="Recent Employer Reason for leaving">
           <label for="Start Date"><?php echo $employer_start_date ?></label>
           <input type="month" name="Recent Employer Start Date">
           <label for="End Date"><?php echo $employer_end_date ?></label>
           <input type="month" name="Recent Employer End Date">
         </div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">Previous Employer</div>
           <label for="Employer Name"><?php echo $employer_name ?></label>
           <input type="text" name="2nd Employer Name">
           <label for="Employer Address"><?php echo $employer_address ?></label>
           <input type="text" name="2nd Employer Address">
           <label for="Employee Position"><?php echo $employee_position ?></label>
           <input type="text" name="2nd Employer Position">
           <label for="Employee Salary"><?php echo $employee_salary ?></label>
           <input type="text" name="2nd Employer Salary">
           <label for="Reason For Leaving"><?php echo $employer_leaving ?></label>
           <input type="text" name="2nd Employer Reason for leaving">
           <label for="Start Date"><?php echo $employer_start_date ?></label>
           <input type="month" name="2nd Employer Start Date">
           <label for="End Date"><?php echo $employer_end_date ?></label>
           <input type="month" name="2nd Employer End Date">
         </div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">Previous Employer</div>
           <label for="Employer Name"><?php echo $employer_name ?></label>
           <input type="text" name="3rd Employer Name">
           <label for="Employer Address"><?php echo $employer_address ?></label>
           <input type="text" name="3rd Employer Address">
           <label for="Employee Position"><?php echo $employee_position ?></label>
           <input type="text" name="3rd Employer Position">
           <label for="Employee Salary"><?php echo $employee_salary ?></label>
           <input type="text" name="3rd Employer Salary">
           <label for="Reason For Leaving"><?php echo $employer_leaving ?></label>
           <input type="text" name="3rd Employer Reason for leaving">
           <label for="Start Date"><?php echo $employer_start_date ?></label>
           <input type="month" name="3rd Employer Start Date">
           <label for="End Date"><?php echo $employer_end_date ?></label>
           <input type="month" name="3rd Employer End Date">
         </div>
         <!-- References Section -->
         <div class="jobs-form-group-header">References</div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">Reference 1</div>
           <label for="Reference Name"><?php echo $reference_name ?></label>
           <input type="text" name="1st Reference Name">
           <label for="Reference Phone Number"><?php echo $reference_phone_number ?></label>
           <input type="text" name="1st Reference Phone Number">
           <label for="Reference Title"><?php echo $reference_employer ?></label>
           <input type="text" name="1st Reference Title">
           <label for="Refence Years Known"><?php echo $reference_years_known ?></label>
           <input type="number" name="1st Reference Years Known">
         </div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">Reference 2</div>
           <label for="Reference Name"><?php echo $reference_name ?></label>
           <input type="text" name="2nd Reference Name">
           <label for="Reference Phone Number"><?php echo $reference_phone_number ?></label>
           <input type="text" name="2nd Reference Phone Number">
           <label for="Reference Title"><?php echo $reference_employer ?></label>
           <input type="text" name="2nd Reference Title">
           <label for="Refence Years Known"><?php echo $reference_years_known ?></label>
           <input type="number" name="2nd Reference Years Known">
         </div>
         <div class="jobs-form-group">
           <div class="jobs-form-sub-header">Reference 3</div>
           <label for="Reference Name"><?php echo $reference_name ?></label>
           <input type="text" name="3rd Reference Name">
           <label for="Reference Phone Number"><?php echo $reference_phone_number ?></label>
           <input type="text" name="3rd Reference Phone Number">
           <label for="Reference Title"><?php echo $reference_employer ?></label>
           <input type="text" name="3rd Reference Title">
           <label for="Refence Years Known"><?php echo $reference_years_known ?></label>
           <input type="number" name="3rd Reference Years Known">
         </div>
         <!-- Authorization Section -->
         <div class="jobs-form-group-header">Authorization</div>
         <div class="jobs-form-group">
           <div class="authorization">
             <?php echo $authorization_disclaimer ?>
           </div>
           <label for="Authorization Date"><?php echo $authorization_date ?></label>
           <input type="date" name="Authorization Date">
           <label for="Authorization Signature"><?php echo $authorization_signature ?></label>
           <input type="text" name="Authorization Signature">
           <small><?php echo $authorization_sub_disclaimer ?></small>
         </div>
         <div class="jobs-form-group">
           <input type="submit" class="button secondary-button contact-form-submit" value="Submit">
         </div>
       </form>
     </div>
   </div>
 </section>
 <!-- End Jobs Section -->
