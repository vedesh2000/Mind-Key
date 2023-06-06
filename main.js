var Slice = function() {
    var sliceDiv = document.getElementById('slice');
    var gridX = 3;
    var gridY = 3;
    var w = sliceDiv.offsetWidth;
    var h = sliceDiv.offsetHeight;
    var imagek=localStorage.getItem("aval");
	var k = "";
	for (var i=7;i<imagek.length;i++) {
		k+=imagek[i];
	}
   document.querySelectorAll('#slice img')[0].src = ''+k+'';
    var img =document.querySelectorAll('#slice img')[0].src;
    var delay = 0.05;

    console.log(w, h, img);

    this.create = function() {
        for (x = 0; x < gridX; x++) {

            var width = x * w / gridX + "px";
            var div = document.createElement("div");
            document.getElementById('slice').appendChild(div);
            div.style.left = width;
            div.style.top = 0; 
            div.style.width = w / gridX + "px";
            div.style.height = h  + "px";
            div.style.backgroundImage = "url(" + img + ")";
            div.style.backgroundPosition = "-" + width;
            div.style.backgroundSize = w + "px";
          
          
        } 
  
    }

    this.create();

    document.getElementById("slice").onmouseover = function() {mouseOver()};
    document.getElementById("slice").onmouseout = function() {mouseOut()};
   
   

    

}

window.onload = function() {
    var slice = new Slice();
};
