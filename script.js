setInterval(progressbar, 100);
setInterval(logs,100)

function logs(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText != document.getElementById("logs").value){
      document.getElementById("logs").innerHTML = this.responseText;
      }
    }
  }
  xmlhttp.open("GET", "logs.php", true);
  xmlhttp.send();
}


function RunRsync(){
  var elem = document.getElementById("smoothprogress");
  elem.style.width = "0%";
  elem.ariaValueNow = 0;
  document.getElementById("smoothprogress").innerHTML = '0%';
  var Source = document.getElementById("RsyncSource").value;
  var Destination = document.getElementById("RsyncDestination").value;
  document.getElementById("restorestatus").innerHTML = '<h3>In progress...</h3>';
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "rsync.php?Source=" + Source + "&Destination=" + Destination, true);
   xmlhttp.send();
}

function progressbar(){
    var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function () {
     if (this.readyState == 4 && this.status == 200) {
         var elem = document.getElementById("smoothprogress");
         var percent = parseInt(this.responseText);
         if (percent >= 0){
         var valuenow = percent;
         }
         if (valuenow != undefined){
           var valuenow = percent;
           elem.style.width = valuenow + "%";
           elem.ariaValueNow = valuenow;
           document.getElementById("smoothprogress").innerHTML = valuenow + '%';
           document.getElementById("restorestatus").innerHTML = '<h3>In progress...</h3>';
           if(valuenow == 100){
           document.getElementById("restorestatus").innerHTML = '<h3>Completed</h3>';
          }
        }
    }
   };
   xmlhttp.open("GET", "status.php", true);
   xmlhttp.send();
}
progressbar();