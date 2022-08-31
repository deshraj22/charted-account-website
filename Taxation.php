<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="external.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>ca plus</title>
</head>

<body>
  
<?php include("header.php");?>
  <!-- content -->
  
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
  <div class="card">
    <div class="card-header ch" style="text-align:center ;background: -webkit-linear-gradient(#11998E , #38EF7D); color: #1F2667;">
      Taxation
    </div>
 
  </div>
  <div class="bd-example" style="position:relative; z-index: 0;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
    
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="IMAGES/banner1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
        <div class="carousel-item">
          <img src="IMAGES/banner4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
        <div class="carousel-item">
          <img src="IMAGES/banner3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
           
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
  <div class="card">
    <div class="card-header ch">
      ITR
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Filing Income Tax Returns is an annual occasion with different due dates for different types of taxpayers. The ITR is required to be filed within its due date otherwise there are severe repercussions in the form of interests and penalties charged. Our organization takes careful consideration of your ITR and helps you file it in the given due dates efficiently.</p>
        <P>
          An Income Tax Return or ITR is a form where all taxpayers are required to declare their taxable incomes from all the sources, any eligible deductions, and tax payments if any. This is called the ITR Filing process.
        </P>
       
      </blockquote>
    </div>
  </div>
  <div class="card">
    <div class="card-header ch">
      TDS
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>TDS Returns are supposed to be filed by any entity or person who is liable for deducting tax at its source. A TDS Return is a quarterly generated statement that needs to be submitted to the Income Tax Department of India. Filing and submission of a TDS Return are compulsory if you are a deductor and must contain all the necessary details of the TDS deducted and deposited by you during a particular quarter. Find out the latest updates regarding TDS percentage rates due to the COVID-19 pandemic in India and employ our services to file your TDS returns to avoid confusion or delays.</p>
        <P>
          The first prerequisite for filing a TDS Return is to get a valid TAN or Tax Deduction Account Number. You will need to check which payments you need to deduct TDS on. Generally, all kinds of payments such as salaries, professional fees, interest, Payment to contractors, and rent of machinery and building among others are all covered under TDS liable payments. There are prescribed rates specified for all types of TDS payments under the Income Tax Act, 1961.
        </P>
      </blockquote>
    </div>
  </div>
  <div class="card">
    <div class="card-header ch">
      GST FILING
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>The new Indirect Taxation regulation is based upon the system of seamless flow of the GST Credit within the entire supply chain. A taxpayer is needed to file a monthly computation of their GST and Return. On the contrary, a GST return is required to be filed on a quarterly basis for small taxpayers.</p>
        <H5 class="mt-xl-4 oh">The Various Types of GST Returns Are Mentioned as Under</H5>
        <p>GST was introduced and applied in India W.E.F 1st July 2017. More than 1.2 crores of taxpayers since then have registered for their GSTIN numbers where all the applicants are liable to file various kinds of GST Returns on the due date. Even if an inactive business has obtained registration with GST, they are required to file a GST return in the required Form. Since this is a relatively new Act in India, compliance can be confusing for former VAT and Service Taxpayers. Contact us for top to bottom GST filing solutions today.</p>
       
      </blockquote>
    </div>
  </div>
 
  <!-- Section: Social media -->
  <?php include("footer.php");?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>