<?php echo "

		<form class='needs-validation' novalidate>
  <div class='form-row'>
    <div class='col-md-4 mb-3'>
      <label for='validationCustom01'>First name</label>
      <input type='text' class='form-control' id='validationCustom01' placeholder='First name' required>
      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a First Name.
        </div>
    </div>
	
    <div class='col-md-4 mb-3'>
      <label for='validationCustom02'>Second name</label>
      <input type='text' class='form-control' id='validationCustom02' placeholder='Second name' required>
      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a Second Name.
        </div>
    </div>
	
	<div class='col-md-4 mb-3'>
      <label for='validationCustom03'>Third name</label>
      <input type='text' class='form-control' id='validationCustom03' placeholder='Third name' required>
      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a Third Name.
        </div>
    </div>
    <div class='col-md-4 mb-3'>
      <label for='validationCustom04'>Last name</label>
      <input type='text' class='form-control' id='validationCustom04' placeholder='Last name' required>
      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a Last Name.
        </div>
    </div>
	
	<div class='col-md-4 mb-3'>
      
      <div class='form-group'>
    <label for='exampleFormControlSelect1'>Gender</label>
    <select class='form-control' id='exampleFormControlSelect1' placeholder='Gender' required>
      <option>Male</option>
      <option>Famale</option>
    </select>
	
      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a Last Name.
        </div>
    </div>
	</div>
	
    <div class='col-md-4 mb-3'>
      <label for='validationCustomUsername'>Username</label>
      <div class='input-group'>
        <div class='input-group-prepend'>
          <span class='input-group-text' id='inputGroupPrepend'>@</span>
        </div>
        <input type='text' class='form-control' id='validationCustomUsername' placeholder='Username' aria-describedby='inputGroupPrepend' required>
        <div class='invalid-feedback'>
          Please choose a username.
        </div>
		<div class='valid-feedback'>
        Looks good!
      </div>
      </div>
    </div>
  </div>
  
  
  <!-- ******************************************** -->
  <div class='form-row'>
    <div class='col-md-6 mb-3'>
      <label for='validationCustom03'>Nationalaty</label>
      <input type='text' class='form-control' id='Nationalaty' placeholder='Nationalaty' required>
      <div class='invalid-feedback'>
        Please provide a valid Nationalaty.
      </div>
	  <div class='valid-feedback'>
        Looks good!
      </div>
    </div>
    <div class='col-md-3 mb-3'>
      <label for='validationCustom04'>Nationalaty ID</label>
      <input type='number' class='form-control' id='Nationalaty_ID' placeholder='Nationalaty ID' required>
      <div class='invalid-feedback'>
        Please provide a valid state.
      </div>
	  <div class='valid-feedback'>
        Looks good!
      </div>
    </div>
	
    <div class='col-md-3 mb-3'>
      <label for='validationCustom04'>Mobile Number</label>
      <input type='number' class='form-control' id='Mobile_Number' placeholder='Mobile Number' required>
      <div class='invalid-feedback'>
        Please provide a valid state.
      </div>
	  <div class='valid-feedback'>
        Looks good!
      </div>
    </div>
	
	
    <div class='col-md-3 mb-3'> 
    <div class='form-group'>
    <label for='Status'>Status</label>
    <select class='form-control' id='Status' placeholder='Status' required>
      <option>Married</option>
      <option>Single</option>
	  <option>Deforce</option>
	  <option>Widowed</option>
    </select>
	
      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a Last Name.
        </div>
    </div>
    </div>
	
	<div class='col-md-4 mb-3'>
      <label for='validationCustom02'>Department</label>
      <input type='text' class='form-control' id='Department' placeholder='Department' required>
      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a Last Name.
        </div>
    </div>
	
	<div class='col-md-4 mb-3'>
      <label for='validationCustom02'>Select Avatar</label>
    
  <div class='custom-file'>
    <input type='file' class='custom-file-input' id='inputGroupFile02'>
    <label class='custom-file-label' for='inputGroupFile02'>Choose file</label>
  </div>


      <div class='valid-feedback'>
        Looks good!
      </div>
	  <div class='invalid-feedback'>
          Please choose a Last Name.
        </div>
    </div>
	
  </div>
  
    <!-- ******************************************** -->
	
	
  <div class='form-group'>
    <div class='form-check'>
      <input class='form-check-input' type='checkbox' value='' id='invalidCheck' required>
      <label class='form-check-label' for='invalidCheck'>
        Agree to terms and conditions
      </label>
      <div class='invalid-feedback'>
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class='btn btn-primary' type='submit'>Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


";
?>