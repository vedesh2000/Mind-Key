<!doctype html>
<html>
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
.container {
  height: 200px;
  position: relative;
  border: 3px solid green;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('bg.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}


#wrapper {
position:center;
  display:flex;
  flex-wrap:wrap;
 
 
   
}
.splitImg {
  padding: 1px;
  background-clip: content-box;
  background-repeat: no-repeat;
}
</style>
</head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<div class="w3-display-middle" id="wrapper">

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
  var imagek=localStorage.getItem("skd");
var img = new Image();
var width;
var height;
var length = 3;
var ylength = 3;
var password ="";
img.src = ''+imagek+'';
img.onload = function() {
	width = this.width;
  height = this.height;
  
  var count=4;
  var k=0;
 	for (var j = 0; j < length; j++){
  	for (var i = 0; i < length; i++){
  		var left = (-1 * width/length * i).toString() +"px";
   		var top = (-1 * height/ylength * j).toString() +"px";
   		var element = jQuery('<div/>', {
    		id:i+""+j,
    		class: "splitImg",
    		css: {
        	"width" : Math.floor(width/length),
        	"height":Math.floor(height/ylength),
          "background-position": left  + " " +  top,
          "background-image" : 'url(' + img.src + ')'
    		}
    		

			})
				
			
			element.appendTo('#wrapper');
			
			element[0].addEventListener("click", function() {
			
				if(count>0){
				count--;
				password+=this.id;
				//alert(password);
				if(k==0&&count==0){
				localStorage.setItem("pwdkd",password);
				//window.open("1.html");
				alert("Please reenter the password");
				count=4;
				password="";
				k=1;
				
				}
				else if(k==1&&count==0){
				var b=localStorage.getItem("pwdkd");
				var n = password.localeCompare(b);
				if(n==0){
				alert("Successful Registration");
				 var  passwor = b;
				 var kk=localStorage.getItem("ram");
				 var imagek=localStorage.getItem("skd");
				
$.post('xyzt.php', {'username':kk,'signin':imagek,'passwordq':passwor}, function(data){
	
window.open('xyzt.php');
});

				
				}
				else 
				alert("The passwords did not match.");
				
				}
				}
						
				
			});
			
			
						
    	$("#wrapper").width(width + (length *2))
  	}
	}

	
	
}



</script>



</div>






</body>
</html>



