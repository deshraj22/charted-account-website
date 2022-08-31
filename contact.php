<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="external.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ca plus</title>
  </head>
  <body>
  <?php include("header.php");?>
      <!-- content -->
      <div class="container">
        <h2 style="color: #1F2667 ;">Enquiry Form</h2>
        <p style=" color: #1F2667; margin-left: -1px;">Fill the form below to get in touch with us</p>
        <form action="caform.php" method="POST">
          <div class="form-group">
            <label for="usr"> Full Name</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Contact Number</label>
            <input type="text" class="form-control" id="pwd"  pattern="[123456789][0-9]{9}" name="contact">
          
            <br>
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <p id="text">WARNING! Caps lock is ON.</p><br>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="op" style="width: 100%; height: 40px;">
              <option selected>Select Services</option>
              <option value="Business Registration">Business Registration</option>
              <option value="Taxation">Taxation</option>
              <option value="Trademark">Trademark</option>
              <option value="Advisory">Advisory</option>
            </select>
            
            <div class="form-group">
    <label for="exampleFormControlTextarea1">Message For Us</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="m"></textarea>
  </div>

          </div>
          <!-- <button type="submit" name="s" id="submit_modal " class=" p-btn btn-warning rounded  px-3 py-2 float-right text-dark">Submit</button>  -->
          <input type="submit" name="s" >

        </form>
      </div>

      <?php include("footer.php");?>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
          var input = document.getElementById("exampleInputEmail1");
          var text = document.getElementById("text");
          input.addEventListener("keyup", function(event) {
          
          if (event.getModifierState("CapsLock")) {
              text.style.display = "block";
            } else {
              text.style.display = "none"
            }
          });
          </script>
   
    </body>
    </html>