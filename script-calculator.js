
  


// var junior-datepicker = document.getElementById("junior-datepicker");
// var adult-datepicker = document.getElementById("adult-datepicker");
// var junior-date-label = document.getElementById("junior-date-label");
// var adult-date-label = document.getElementById("adult-date-label");

// junior-datepicker.style.display = 'none';
// adult-datepicker.style.display = 'none';
// junior-date-label.style.display = 'none';
// adult-date-label.style.display = 'none';


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
function getCourse(val){
    if(val === "juniors"){
        junior.style.display = "block";
        juniorlabel.style.display = "block";
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

