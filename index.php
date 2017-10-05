<!doctype html>
<html lang="hu">

<head>
	<meta charset="utf-8">
	<title>ChordsUp!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="transponator.js"></script>
	<script type="text/javascript" src="chordprogression.js"></script>
</head>

<body>
	<div class="container bg-3">
		<div class="row">
			<div class="col-sm-6">
			<h2>Chord transponator</h2>
				<p>Chosse the desired notes or chords.</p>
			</div>
			<div class="col-sm-6 ">
			<p>Chosse the desired notes or chords.</p>
			</div>
		</div>
	</div>
<div class="container bg-1">
<div class="row">
			<div class="col-sm-6">	
			<legend>Action</legend>			
				<button type="button" class="btn btn-primary" id="createRadio">Add</button>
				<button type="button" class="btn btn-success" id="removeRadio">Delete</button>
				<button type="button" class="btn btn-info" id="changeRadio">Change</button>	
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6">
							<form>
							<legend>Key</legend>
							<select class="form-control" id="selTranspose">
								<option>A</option>
								<option>A#</option>
								<option>B</option>
								<option>C</option>
								<option>C#</option>
								<option>D</option>
								<option>D#</option>
								<option>E</option>
								<option>F</option>
								<option>F#</option>
								<option>G</option>
								<option>G#</option>
							</select>
							</form>						
					</div>
					<div class="col-sm-6">
						<p>
							<legend>Transposition</legend>
							<input  id="spinner" name="value">
							
						</p>
					</div>				
				</div>
			</div>

</div>
<div class="row">
	<div class=" col-sm-6">
		<div class="panel-small">
			<p class="panel-heading-small">Original keys</p>
			<div id="addChords" class="panel-body">
			</div>
		</div>
	</div>
	<div class=" col-sm-6">
		<div class="panel-small">
			<p class="panel-heading-small">Transposed keys</p>
			<div id="addChordsClone" class="panel-body">
			</div>
		</div>
	</div>
</div>
</div>



	

	<!-- CP -->
		<div class="container bg-3">
		<div class="row">
			<div class="col-sm-6">
			<h2>Chord progression</h2>
				<p>This application shows few popular, interesting or famous chord progression. Choose your main key, and chose minor or major. Useful for practicing, writing songs, jamming or rehearsal with your band! Have fun, play with style and emotion!</p>
			</div>
			<div class="col-sm-6 ">
				<h3 id="info3"></h3>
			</div>
		</div>
	</div>
	<div class="container bg-1">
		<div class="row">
			<!-- select -->
			<div class="col-sm-4">
				<form>
					<legend>Key</legend>
					<select class="form-control" id="select1">
						<option>A</option>
						<option>A#</option>
						<option>B</option>
						<option>C</option>
						<option>C#</option>
						<option>D</option>
						<option>D#</option>
						<option>E</option>
						<option>F</option>
						<option>F#</option>
						<option>G</option>
						<option>G#</option>
					</select>
				</form>
				</div>
			<div class="col-sm-4">
				<!-- radio -->
				<fieldset>
					<legend>Major or minor scale </legend>
					<label class="radio-inline input-lg custom-control custom-radio" for="radio-1">Major</label>
					<input type="radio" name="radio" value="major" id="radio-1" checked>
					<label class="radio-inline input-lg" for="radio-2">Minor</label>
					<input type="radio" name="radio" value="minor" id="radio-2">
				</fieldset>
				</div>
			<div class="col-sm-4 bg-2"> <a href="https://play.google.com/store/apps/details?id=sleepingcode.com.chordsup&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img class="img-responsive" alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png"/></a> </div>
		</div>
	</div>

	<div id="progression" class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel-small">
					<p class="panel-heading-small">Twoo chords</p>
					<div id="p1" class="panel-body"> </div>
				</div>
				<div class="panel-small">
					<p class="panel-heading-small">Three chords</p>
					<div id="p2" class="panel-body"> </div>
					<div class="panel-small">
						<p class="panel-heading-small">50s progression</p>
						<div id="p3" class="panel-body"> </div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel-small">
					<p class="panel-heading-small">Andalusian cadence</p>
					<div id="p4" class="panel-body"> </div>
					<div class="panel-small">
						<p class="panel-heading-small">Popular</p>
						<div id="p5" class="panel-body"> </div>
					</div>
					<div class="panel-small">
						<p class="panel-heading-small">Circle progression</p>
						<div id="p6" class="panel-body"> </div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel-small">
					<p class="panel-heading-small">12-bar blues</p>
					<div id="p7" class="panel-body"> </div>
				</div>
				<div class="panel-small">
					<p class="panel-heading-small">12-bar blues 2</p>
					<div id="p8" class="panel-body"> </div>
				</div>
				<div class="panel-small">
					<p class="panel-heading-small">12-bar blues 3</p>
					<div id="p9" class="panel-body"> </div>
				</div>
			</div>
		</div>
	</div>

	<!-- bg -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<img src="bg1.png" class="img-responsive center-block">
			</div>
		</div>
	</div>
	<!--contact -->
	<div id="contact" class="bg-1">
		<div class="container">
			<h3 class="text-center">Contact</h3>


			<div class="row test">
				<div class="col-md-4">

					<p><span class="glyphicon glyphicon-map-marker"></span>Debrecen</p>
					<p><span class="glyphicon glyphicon-phone"></span>+36 20/480-47-57</p>
					<p><span class="glyphicon glyphicon-envelope"></span>Email: szabolaszlo.mail@gmail.com</p>
				</div>
				<div class="col-md-8">
					<div class="row">
						<!-- form -->
						<form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" data-toggle="validator" role="form" method="post">
							<div class="col-sm-6 form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name" value="<?php echo $name;?>" required>
								</div>
							</div>
							<div class="col-sm-6 form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class=" 	glyphicon glyphicon-envelope"></i></span>
									<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" value="<?php echo $email;?>" required data-error="">
								</div>
							</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class=" 	glyphicon glyphicon-pencil"></i></span>
						<textarea class="form-control" rows="5" id="inputComment" name="inputComment" placeholder=Message value="<?php echo $comment;?>" required></textarea>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<button class="btn pull-right" type="submit">Send</button>
							<p id="message">sdassd</p>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<?php 
// define variables and set to empty values
$name  = $email = $comment =  "";
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["inputName"]);
  $email = test_input($_POST["inputEmail"]);
  $comment = test_input($_POST["inputComment"]); 
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;	 
}

	
		
if (!empty($name) && !empty($email) && !empty($comment) ){	
	$msg="Név: ".$name."\n"."Email: ".$email."\n"."Üzenet: ".$comment;
	// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
	// send email
 mail("szabolaszlo.mail@gmail.com","chords up üzenet",$msg);
	echo "<script>document.getElementById('message').innerHTML=('Thank you!');</script>";
	//echo'<script>alert("I am an alert box!");</script>';
	echo'<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sleeping Code - Contact</h4>
        </div>
        <div class="modal-body">
          <p>Thank you! Message sent.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><script>
$(document).ready(function(){
  
        $("#myModal").modal();
   
});
</script>';


} else {
		echo "<script>document.getElementById('message').innerHTML=('Get in touch!');</script>";
}

?>



</body>

</html>