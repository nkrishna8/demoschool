<html>
<head>
<title>Take Admission</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h4{
	font-family:Courier;
	color:red;
}
</style>
</head>
 <body>
 <br>
 <center>
 <h4><b><u>Admission Details</u></b></h4>
 </center>
 <br><br>
 <div class="container">
<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Name: </label>
  <div class="col-sm-10">
               <input type="text" class="form-control input-lg"  name="name" placeholder="Your name" required = "true">
			   </div>
				</div>
				<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Father's Name: </label>
  <div class="col-sm-10">
               <input type="text" class="form-control input-lg"  name="name" placeholder="Father's name" required = "true">
			   </div>
				</div>
								<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Address: </label>
  <div class="col-sm-10">
               <input type="text" class="form-control input-lg"  name="name" placeholder="Living Address" required = "true">
			   </div>
				</div>
				<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Contact No: </label>
  <div class="col-sm-10">
               <input type="text" class="form-control input-lg"  name="contactno" placeholder="+91xxxxxx8526" required = "true" pattern=".{10,}">
			   </div>
				</div>
<div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label">Email: </label>
  <div class="col-sm-10">
               <input type="text" class="form-control input-lg"  name="email" placeholder="xyz123@gmail.com" required = "true"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
			   </div>
				</div>
  <div class="form-group row">
  <label for="colFormLabel" class="col-sm-2 col-form-label"> About Yourself: </label>
  <div class="col-sm-10">
  <textarea rows="5" name="project"  class="form-control input-lg" required = "true"></textarea>
               </div>
				</div>
					<br><br>	<input type="submit" value="Submit" class="btn btn-primary btn-block col-sm-12">
              </div>
			  
			  </body>
			  </html>