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
    <title>caplus</title>
  </head>
  <body>
  <?php include("header.php");?>   <!-- content -->
     
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
          Trademark
        </div>
     
      </div>
      <div class="card">
        <div class="card-header ch">
          TRADEMARK REGISTRATION
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Trademark registration is meant to safeguard your brand and provide you with the necessary tools to avoid or stop another party from using similar signs to take advantage of the recognition of your business. Usually copying trademarks or slightly modifying them is done by businesses who sell similar products and want to gain more sales based on the indifference of the customer to inspect the symbol closely. This may result in them purchasing substandard and fraudulent products or services, which may put your brand name at risk due to the close proximity and matching symbols. A Trademark symbolizes a mark in trade and refers to a mark that has the capacity to be represented graphically and can be distinguished from the goods and services provided by one entity from those of the others. A trademark can include the shape of their goods, packaging, or a combination of symbols with colours.</p>
            <p>Essentially a trademark can be that identifies a brand name to their customers. A “Mark” consists of a device, brand, label, heading, ticket, signature, name, word, numeral, letter, the shape of products, packaging, or a combination of colours or any combination of the aforementioned. Trademark registration in India is highly advised to protect your brand name as there are several instances of plagiarism and cloning of fraudulent products and services.</p>
         
          </blockquote>
        </div>
      </div>
      <div class="card">
        <div class="card-header ch">
        ISO CERTIFICATION
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>As a business, the quality of the products and services you provide are first and foremost in the minds of customers who seek to avail of your business. Quality is the foundation of trust and standards since time immemorial among customers as they will be loyal once they find the quality of your goods and services suitable as per their expectations. However, word of mouth or your personal claims is not enough to vouch for your brand’s quality. Hence there are national and international assessment bodies to gauge the quality of your products and services. One of them is the ISO, which stands for the International Organization for Standardization. It is a regulatory body that ensures the quality management system of an organization. You can boost your brand’s reputation by acquiring an ISO certification of several grades to instill in customers the belief that you have adhered to all the standards and practices accepted internationally to deliver quality products.</p>
            <p>An ISO certificate in India can be acquired from one of the 162 bodies operating in India to adhere to the quality standards of the respective organization. An ISO Certification acts like the seal of trust that customers can rely on without a doubt.</p>
          </blockquote>
        </div>
      </div>
       
      <?php include("footer.php");?>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
    </body>
    </html>