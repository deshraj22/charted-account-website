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
<?php include("header.php"); ?>
      <!-- <div class="transparent">abcd</div> -->
      <div class="bd-example" style="position:relative; z-index: 0;">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
        
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="IMAGES/deshLogo.png" class="d-block w-100" alt="..."  style="height: 600px; width:300px">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="IMAGES/desh2.png" class="d-block w-100" alt="..." style="height: 600px; width:300px">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="IMAGES/desh3.png" class="d-block w-100" alt="..." style="height: 600px; width:300px">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Third slide label</h5> -->
                <p></p>
              </div>
            </div>
         
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev" style="position: absolute; z-index: 1000;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    
      <div class="container-fluid">
        <div class="row">
        <div class="side-contact bg-form">
        
        <div onclick="openForm()" class=" fbtn bg-btn  px-4 py-2" style="cursor:pointer;">Enquiry
        Now</div>
        <form action="caform.php" method="POST" name="modal_form">
        <div class="row">
        <div class="col-md-12 text-center py-2">
        <h4 style="  background-image: linear-gradient(to right, #ede574, #e1f5c4);margin-bottom:20px;margin-top:0px;letter-spacing:2px;">Get An Imediate Response</h4>
        </div>
        <div class="col-md-12">
        <div class="form-group">
        <input id="form_name" type="text" name="username" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="form-group">
        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="form-group">
        <input id="form_name" type="number" name="contact" class="form-control" placeholder="Mobile No *" required="required" data-error="Firstname is required.">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="form-group">
        <textarea id="form_message" name="m" class="form-control" placeholder="Message for me..." rows="3" required="required" data-error="Please, leave us a message."></textarea>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <button type="button" onclick="closeForm()" class="p-btn btn-danger rounded px-4 py-2">Cancel</button>
        <button type="submit" name="s" id="submit_modal " class=" p-btn btn-warning rounded  px-3 py-2 float-right text-dark">Submit</button>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        <script type="text/javascript">
            /**
             *******Side-Contact Form*******
             **/
            function openForm() {
                let f = document.querySelector('.side-contact');
                if (f.style.right == "0px") {
                    f.style.right = "-320px";
                } else {
                    f.style.right = "0px";
                }
            }
        
            function closeForm() {
                document.querySelector('.side-contact').style.right = "-320px";
            }
        </script>
    <div style="text-align: center; margin-top: 60px; color: #00B712;"><h3>SERVICES</h3></div>
      <div class="row container-fluid" style="margin-top: 56px;">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body text-center change">
              <h5 class="card-title">BUSINESS REGISTRATION</h5>
              <p class="card-text">A private limited company is that which has members between 2 to 200 in number without any limit for paid-up share capital.</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card ">
            <div class="card-body text-center change"  >
              <h5 class="card-title">TAXATION</h5>
              <p class="card-text">Filing Income Tax Returns is an annual occasion with different due dates for different types of taxpayers. </p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row container-fluid" style="margin-top:20px ;">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body text-center change">
              <h5 class="card-title">TRADEMARK</h5>
              <p class="card-text">Trademark registration is meant to safeguard your brand and provide you with the necessary tools to avoid or stop another party from using similar signs to take advantage of the recognition of your business.</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body text-center change">
              <h5 class="card-title">ADVISORY</h5>
              <p class="card-text">A strong advisory team can change the direction of your business and make it more successful due to the expert advice provided. Hiring a team of advisors can be an expensive affair and also time consuming. Why not sign up for our advisory services where you get a team of your own to assess, examine and scope for all the compliances, opportunities, challenges and procedures required to be fulfilled by your business from time to time?</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="IMAGES/desh.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 hh" style="font-style: italic;">Who We Are</h1>
            <p class="lead"  style="font-style: italic; font-size: 25px;">One integrated business registration,TAX,ITR,TDS,GST,Business Audit and Accounting to help you manage your business and get better visibility into your financials.Let our experts take a load off by outsourcing your book-keeping and financial tasks to us.So you can focus on growing.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
             
            </div>
          </div>
        </div>
      </div>
      <div style=" margin-bottom:50px"> <h1 style="text-align:center; color: #00B712;">Our Values</h1></div>
      <div class="card-group container">
        <div class="card">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Always Act with Ownership</h5>
            <p class="card-text ourvalues">We Have retained employees in a high-turnover industry by cultivating a team where everyone acts as a partner. Every team member takes pride in their craft and ownership of their work.</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Support never ends</h5>
            <p class="card-text ourvalues">We back our products, and are always available for support, consultation and feedback. We know that we succeed when our clients succeed, so we commit to see each project .</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          <!-- <img src="" class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Focus on solutions</h5>
            <p class="card-text ourvalues">We believe that leadership requires thinking ahead of trends to deliver innovative solutions. We're dedicated to data and obsessed with making our clients successful in measurable ways..</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
      </div>
    
      <div class="card-group container card6">
        <div class="card">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Always Act with Ownership</h5>
            <p class="card-text ourvalues">We Have retained employees in a high-turnover industry by cultivating a team where everyone acts as a partner. Every team member takes pride in their craft and ownership of their work.</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Prioritize security security</h5>
            <p class="card-text ourvalues">The charge of every facilitator of innovation is utmost security. We work with industry-changing ideas and massive amounts of sensitive data, so our top priority is rigorous security. From our team to our tech, we implement extensive privacy protocols.</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Know no limits</h5>
            <p class="card-text ourvalues">The possibilities of technology are endless, and we keep that in mind in every project we work on. We truly believe that there are no limits to what we can do. We have yet to encounter an impossible request, because we approach each challenge.</p>
            
          </div>
        </div>
      </div>
    
   
      <div class="slider r">
    <h2 style="text-align:center ;">We Have Crossed 250+ Registrations</h2>
    <p style="font-size: 17px; text-align: center;  ">CA PLUS is continuously providing software solution in India.<br> have 250+ clients
        across the India who are already using Nidhi sotware with full satisfaction.</p>
    
</div>

   <?php
   include("footer.php");
   ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>