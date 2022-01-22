<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="styles.css">
<div class="container">
<div class="row"><div class="col-sm-8">

<h2>PHP, JS, Rsync progress bar</h3>

<br>
<h4>Source:</h4>
<input id="RsyncSource" class="form-control form-control-lg" type="text" placeholder="/var/www/html/test1">
<br>
<h4>Destination:</h4>
<input id="RsyncDestination" class="form-control form-control-lg" type="text" placeholder="/var/www/html/test2">
<br>
<button type="submit" onClick="RunRsync()" class="btn btn-primary">Run rsync</button>
<br>
<br>
<div id="restorestatus"><h3>Progress bar</h3></div>

<div class="progress"><div id="smoothprogress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div></div>
<br>
<textarea class="form-control" readonly id="logs" style="width:100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;" rows="10"></textarea>

<script src="script.js"></script>

</div></div></div>