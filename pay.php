<!DOCTYPE html>
<html>
    <head>
        <title>Pay</title>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>
    <div class="container">
	<div class="row-fluid">
      <form class="form-horizontal" action="pay_action.php" method="POST" >
        <fieldset>
          <div id="legend">
            <legend class="">Paiement</legend>
          </div>
     <!-- Name -->
            <div class="control-group">
              <label class="control-label" name="nom" for="username">Nom</label>
              <div class="controls">
              <input type="text" id="username" name="name" placeholder="" class="input-xlarge">
            </div>
          </div>
          <!-- Name -->
          <div class="control-group">
            <label class="control-label" name="emal" for="username">email</label>
            <div class="controls">
              <input type="text" id="username" name="email" placeholder="" class="input-xlarge">
            </div>
          </div>
          <!-- Name -->
          <div class="control-group">
            <label class="control-label" name="number" for="username">Numero de telephone</label>
            <div class="controls">
              <input type="text" id="phone" name="number" placeholder="" class="input-xlarge">
            </div>
          </div> 
     
          <!-- Submit -->
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-success" name="valid" onclick="myFunction()">Payez maintenant</button>
            </div>
          </div>
          </fieldset>
           </form>
          <script>
function myFunction() {
  alert("Merci pour paiement !! nous vous contacterons par e-mail !");
}
</script>
    </body>
</html>