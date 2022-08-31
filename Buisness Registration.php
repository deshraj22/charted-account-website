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
    
      <div class="card">
        <div class="card-header ch" style="text-align:center ;background: -webkit-linear-gradient(#11998E , #38EF7D); color: #1F2667;">
          Buisness Registration
        </div>
      </div>

      <!-- <img src="IMAGES/new22.jpg" class="img-fluid" alt="..." width="100%" height="30px"> -->
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="IMAGES/man-with-pen-signs-document.jpg"class="d-block mx-lg-auto img-fluid im" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            <img src="IMAGES/a.jpg" class="d-block mx-lg-auto img-fluid imm" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 hm">  Private Limited </h1>
            <p class="lead pl">A private limited company is that which has members between 2 to 200 in number without any limit for paid-up share capital. The number of directors can be between 2 to 15, and this makes it a closed system that has many benefits in terms of decision-making and sharing stake. A private limited company is a great way to establish business with family and friends as the liability is limited and there is no scope for any outsider influence. If you’re interested in registering your business as a private limited company, you can use our filing tools that will make registration a simple process without any confusion faced with documentation and other formalities.</p>
            <p class="lead pl"> The Company Registration India is an online forum that is regulated and comes under the purview of the Companies Act, 2013. The site also adheres to the guidelines set by the Ministry of Corporate Affairs (MCA) and is processed by the Registrar of Companies from the Central Registration Centre (CRC). This portal for registering companies has a web-based filing system that we can assist you to fill.</p>
            <p class="lead pl">Once you sign up with us to avail of our registration services, we will personally take over the job of establishing your company as a private limited company. With our years of experience, we have served a multitude of private companies pan-India and abroad.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

            </div>
          </div>
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
       
       <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="IMAGES/man-with-pen-signs-document.jpg" class="d-block mx-lg-auto img-fluid im" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            <img src="IMAGES/a.jpg" class="d-block mx-lg-auto img-fluid imm" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 hm"> Partnership </h1>
            <p class="lead pl">A Partnership firm is a business entity made by two or more people that have agreed to share the profits and losses of the business in a predetermined ratio. Partnerships are an excellent choice for conducting business for small businesses where two or more people come together to contribute to a business and share its gains or risks. Partnerships are one of the most common types of business entities found in India due to the ease of formation and minimal compliance required. The Partnership Act, of 1932 has been in motion long before India was declared an independent country. An evolved version of a partnership was brought forth by the Limited Liability Partnership or LLP in 2010.</p>
            <H5 class="mt-xl-4 h">Types of Partnership</H5>
            <H5 class="mt-xl-4 h">There are two types of Partnership</H5>
            <H5 class="mt-xl-4 h">Registered Partnership</H5>
            <H5 class="mt-xl-4 h">Unregistered Partnership</H5>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

            </div>
          </div>
        </div>
      </div>
        <div class="card">
          <div class="card-header ch">
          Sole Proprietorship 
          </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>A proprietorship is a kind of unregistered business entity which is owned, managed, and controlled by only one person. The sole proprietorship business is the most commonly found business in India and is operated by the majority of the micro and small businesses present in the unorganized sector of the economy.</p>
            <p>Sole proprietorship businesses are simple to commence and have the least amount of regulatory compliance requirements for their work. This business works the best for solitary entrepreneurs who are stepping into the business world for the first time and prefer to deal with only small businesses with a limited number of clients.</p>
            
          </blockquote>
        </div>
      </div>
      <div class="card">
        <div class="card-header  ch">
          Limited Company
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Forming a Public Limited Company is a great business decision for large-scale businesses. The minimum membership requirement is of 7 members with no limit on the maximum number of members and/or shareholders for incorporating a Public Limited Company. However, only some Public Limited Companies list with one or many stock exchanges to raise capital from the general audience. Even a Private Company can list its debt instruments on stock exchanges. Due to its structuring, Public Limited Companies are required to adhere to multiple regulations of the government. Accordingly, starting a public limited company can be a cumbersome process, and might need expert assistance.</p>
            <p>
              With CA Plus, your company incorporation can be completed swiftly without much to be worried about as long as you provide to us with all the necessary documents while meeting the requirements set by the government to incorporate a public limited company. Get in touch with us today to begin your public limited company formation!
            </p>
            
          </blockquote>
        </div>
      </div>
      <div class="card">
        <div class="card-header ch">
          Shop Establishment 
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>The registration of Shops and Establishments has been put into place so as to regulate the working and employment conditions in shops and commercial establishments across the country. This law promotes the industrial safety and welfare of the employees that work in such establishments. The Department of Labour of each state administers this law.</p>
            <p>
              A “shop” is defined as any premise where trading or business activities are carried out, or where services are provided to the customers. An “establishment” is defined as a commercial, trading, banking, or insurance-based establishment where individuals employed are engaged primarily in office work. Subject to a few exceptions, all types of shops and establishments come under the purview of this act.
            </p>
         
          </blockquote>
        </div>
      </div>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6 ">
            <img src="IMAGES/man-with-pen-signs-document.jpg" class="d-block mx-lg-auto img-fluid im" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            <img src="IMAGES/a.jpg" class="d-block mx-lg-auto img-fluid imm" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 hm"> NGO</h1>
            <p class="lead pl">An NGO or a Not-for-Profit organization or a Trust can be created to endorse for any useful missions such as sports, education, research activities, animal rescue or shelters, orphanages and rehabilitation centers and more. The term Not for Profit does not state that this NGO or Trust is not permitted to generate profit or an income, but the action to apply the said income to the promotion of their mission and goodwill work. The income or profits of an NGO/Trust are not meant to be distributed to the promoters or shareholders.</p>
           
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header ch">
        Section-8 Company
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Any not-for-profit organization or an NGO can register itself as a trust by executing a trust deed or as a society under the Registrar of Societies, or as a not-for-profit company under Section 8 Company of the Companies Act, 2013. A Section 8 Company is a special entity and the same as a Section 25 company under The Old Companies Act, 1956. Under The New Companies Act 2013, Section 25 Companies have now been renamed as Section 8 Companies.</p>
            <p>As per section 8(1a, 1b, 1c) of the Companies Act, 2013, “A Section 8 company can be established for the promotion of commerce, art, science, sports, education, research, social welfare, religion, charity, protection of environment or any such other object”. The Act further clarifies that the Section 8 companies can pursue the above motives, subject to the condition that it “Intends to apply the profits, if any, or other income in promoting its objects and intends to prohibit the payment of any dividend to its members”. In simpler words, a Section 8 Company has to endorse a public cause and the proceeds created by the entity have to be solely used to support the stated public cause(s).</p>
          </blockquote>
        </div>
      </div>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="IMAGES/man-with-pen-signs-document.jpg" class="d-block mx-lg-auto img-fluid im" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            <img src="IMAGES/a.jpg" class="d-block mx-lg-auto img-fluid imm" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 hm">Nidhi Company</h1>
            <p class="lead pl">Nidhi Companies are special business entities in India that are created to inculcate the habit of thrifting and saving between the company’s members. Nidhi companies are permitted to make borrowings from their members and also lend capital to their members. Hence, the amount that is contributed to a Nidhi company comes only from the members or stakeholders. Therefore, Nidhi companies are mainly promoted for savings, especially among women from the middle class and poor backgrounds. It creates a legal scape for some sense of liability to conduct official business rather than resort to unofficial lending. Thus, Nidhi Companies also act as a conduit to promote the eradication of black money circulation for internal loans and lending. Registering a Nidhi Company in compliance with all the required laws is simple. We ease your job by completing all formalities and documentation work as well as applying to the MCA in accordance with the corresponding guidelines.</p>
            <H5 class="mt-xl-4 h" style="margin-left: 21px;">The Speciality of Registering a Nidhi Company</H5>
            <p class="lead pl">Nidhi Companies are special business entities in India that are created to inculcate the habit of thrifting and saving between the company’s members. Nidhi companies are permitted to make borrowings from their members and also lend capital to their members. Hence, the amount that is contributed to a Nidhi company comes only from the members or stakeholders. Therefore, Nidhi companies are mainly promoted for savings, especially among women from the middle class and poor backgrounds. It creates a legal scape for some sense of liability to conduct official business rather than resort to unofficial lending. Thus, Nidhi Companies also act as a conduit to promote the eradication of black money circulation for internal loans and lending. Registering a Nidhi Company in compliance with all the required laws is simple. We ease your job by completing all formalities and documentation work as well as applying to the MCA in accordance with the corresponding guidelines.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header ch">
          Producer Company
        </div>
        <H5 class="mt-xl-4 h" style="margin-left: 21px;">Register A Producer Company in India</H5>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>The Companies Act, 2013 defines a Producer as, “Any person engaged in any activity associated with or relatable to any primary produce”. Here the term Produce means, “Things that have been produced or grown, especially by farming”. A Producer Company is a special corporate entity that has the object that is one, or all of the following:</p>
            <p>Production, harvesting, procurement, grading, pooling, handling, marketing, selling, export of primary produce of the shareholders, or import of goods or services for their benefit.</p>
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