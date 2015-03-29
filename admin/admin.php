<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location: login.php");
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" type="text/css"/>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="../public/jQuery-File-Upload-9.9.3/js/jquery.fileupload.js"></script>
	<link rel="stylesheet" href="../public/jQuery-File-Upload-9.9.3/css/jquery.fileupload.css">
	
	<style>
	.progress {
	    float: right;
	    width: 85%;
	    margin-top: 5px;
	}
	</style>
</head>
<body>
<div class="container">
	<?php require('../lib/nav.php');?>
	<div class="jumbotron">
		<h1>Welcome <?php echo $user->firstname?>!</h1>
		<span class="btn btn-success fileinput-button">
	        <i class="glyphicon glyphicon-plus"></i>
	        <span>Select files...</span>
	        <!-- The file input field used as target for the file upload widget -->
	        <input id="fileupload" type="file" name="files[]" multiple>
	    </span>
	    <div class="progress" >
		  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >
		    <span class="sr-only"></span>
		  </div>
		</div>
		<div id="files"></div>
	</div>
</div>
<script>
 $('#fileupload').fileupload({
    url: 'php',
    dataType: 'json',
    done: function (e, data) {
        $.each(data.result.files, function (index, file) {
            $('<p/>').text(file.name).appendTo('#files');
        });
    },
    progressall: function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('.progress-bar').css(
            'width',
            progress + '%'
        );
    }
});
</script>
</body>
</html>
