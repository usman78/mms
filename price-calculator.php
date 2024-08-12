<!DOCTYPE html>
<html>
    <head>
        <title>Price Calculator</title>
        <script src="script-calculator.js" type="text/javascript"></script>  
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            
        <script>
    //       var unavailableDates = ["09-04-2019", "14-04-2019", "15-04-2019"];

    // function unavailable(date) {
    //     dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
    //     if ($.inArray(dmy, unavailableDates) == -1) {
    //         return [true, ""];
    //     } else {
    //         return [false, "", "Unavailable"];
    //     }
    // }

    // $(function() {
    //     $("#junior-datepicker").datepicker({
    //         dateFormat: 'dd-mm-yy',
    //         beforeShowDay: unavailable
    //     });

    // });
        $(document).ready(function(){
            
               $( "#junior-datepicker" ).datepicker({
                   dateFormat: 'dd-mm-yy',
                   changeYear: false,
                   changeMonth: true,
                   minDate: new Date(),
                   maxDate: '07-12-2019',
                   beforeShowDay: function(date){
                      var day = date.getDay(); 
                      return [day == 1,""];
                    }
               }); 
        });
        // $(document).ready(function(){
            
        //        $( "#adult-datepicker" ).datepicker({
        //            dateFormat: 'dd-mm-yy',
        //            changeYear: false,
        //            changeMonth: true,
        //            minDate: new Date(),
        //            maxDate: '07-12-2019',
        //            beforeShowDay: function(date){
        //               var day = date.getDay(); 
        //               return [day == 1,""];
        //             }
        //        }); 
        // });    
            
        </script>
        
    </head>
    <body>
        <?php
        	require_once 'log_in.php';
			
        ?>
        <h1>English Programme Price calculator</h1>
        <h2>Calculate the price of an English course and accommodation</h2>
        <p>Choose from the different course and accommodation options below to view the price for your stay in Jersey.</p>
        <form method="post" action="calc.php">
        Course Type: 
        <select name="course-type" onchange="getCourse(this.value)" id="course-type">
            <option value="">Choose one</option>
            <option value="adults">Adults</option>
            <option value="juniors">Juniors</option>
        </select>
        <br>
        <label id="adult">Adult Course: </label>
        <select name="adult-course" id="adult-course" onchange="getAdultCourse(this.value)">
            <option value="">Choose one</option>
            <option value="standard-course">Standard Course</option>
            <option value="intensive-course">Intensive Course</option>
            <option value="private-15">Private tuition (15 hours)</option>
            <option value="private-22">Private tuition (22.5 hours)</option>
            <option value="young-adult-15">Young adult course (15 hours)</option>
            <option value="young-adult-20">Young adult course (20.5 hours)</option>
            <option value="50-programme">50+ programme</option>
            <option value="business-english">Business English course</option>
            <option value="comb-15grp">Combination course (15 hours group, 7.5 hours private)</option>
            <option value="comb-7grp">Combination course (7.5 hours group, 15 hours private)</option>
        </select>
        <label id="junior">Junior Course: </label>
        <select name="junior-course" id="junior-course" onchange="getJuniorCourse(this.value)">
            <option value="">Choose one</option>
            <option value="holiday">Holiday Course</option>
            <option value="semi-intensive">Semi Intensive Course</option>
            <option value="semi-combination">Semi Combination Course</option>
            <option value="intensive">Intensive Course</option>
        </select>
        <br>
        <label id="junior-date-label">Start Dates:</label> 
        <input type="text" id="junior-datepicker" name="junior-date" autocomplete="off"><br>
        <!-- <label id="adult-date-label">Start Dates:</label> 
        <input type="text" id="adult-datepicker"><br>
        <label>Number of weeks: </label> -->
<!--
        <select name="weeks" id="weeks">
            <option value="1-6weeks">1-6 weeks</option>
        </select>
-->
        <!-- <p style="display: inline-block;" id="weeks">1-6weeks</p> -->
        
        <br>
        <label id="weeks-label">Weeks: </label>
        <select name="weeks" id="weeks" onchange="getWeeks(this.value)">
        	<option value="">Choose Week</option>
        	<option value="1">Week 1</option>
        	<option value="2">Week 2</option>
        	<option value="3">Week 3</option>
        	<option value="4">Week 4</option>
        	<option value="5">Week 5</option>
        	<option value="6">Week 6</option>
        </select>
        <input type="submit" value="Calculate">
        </form>

        <?php




        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script type="text/javascript">
        	var junior = document.getElementById("junior-course");
			var juniorlabel = document.getElementById("junior");
			junior.style.display = 'none';
			juniorlabel.style.display = 'none';

			var adult = document.getElementById("adult-course");
			var adultlabel = document.getElementById("adult");
			adult.style.display = 'none';
			adultlabel.style.display = 'none';
			//
			//

			var weeksLabel = document.getElementById("weeks-label");
			var weeks = document.getElementById("weeks");
			weeksLabel.style.display = 'none';
			weeks.style.display = 'none';


			function getCourse(val){
			    if(val === "juniors"){
			        junior.style.display = "inline-block";
			        juniorlabel.style.display = "inline-block";
			        weeksLabel.style.display = 'inline-block';
					weeks.style.display = 'inline-block';
			        adult.style.display = "none";
			        adultlabel.style.display = "none";
			    }
			    if (val === "adults"){
			        adult.style.display = "block";
			        adultlabel.style.display = "block";
			        junior.style.display = "none";
			        juniorlabel.style.display = "none";
			    }
			};
		
        </script>
      
    </body>
</html>