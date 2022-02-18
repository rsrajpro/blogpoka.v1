<?php
  $pagetitle = "Age calculate";
  include('header.php');

?>
  <main>
    <div class="container bg-danger text-white pt-5 pb-5 text-center">
      <h1>Age Calculator</h1>
      <div class="input-group date" data-provide="datepicker">
        <input type="text" class="form-control myDate" placeholder="DD-MM-YYYY">
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>
      <center><button id="result" class="btn btn-success mt-3 mb-3 w-100">Calculate</button></center>
      <div class="result">
        <h2 class="yourAge"></h2><h2 class="error"></h2>
      </div>
    </div>
    <script>
      function calculateAge(birthDate){
        let year = new Date().getFullYear();
        let currentAge = year - birthDate;
        if(birthDate > year){
          return "Error";
        }
        else{
          return currentAge;
        }
      }

      $('.datepicker').datepicker().on('change',function(){

        $('.myDate').change();

      });

      $( "#result" ).click(function(e) {

      e.preventDefault();

      let myDate = $('.myDate').datepicker('getDate').getFullYear();

      let age = calculateAge(myDate);
      
      $('.result .yourAge').html("Your Age Is: ");

      $('.result .error').html(age);

      });

    </script>

  </main>        
</body>
</html>