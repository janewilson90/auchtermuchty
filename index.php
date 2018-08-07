<?php include("header.php"); ?>

      <div class="row">
        <div class="container">
          <div class="jumbotron">
            <h1>Now accepting NHS patients</h1>
            <p></p>
            <p><button class="casper" href="#" role="button" data-toggle="modal" data-target="#appointments">Register as a patient</button></p>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="container">

          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user-md"></i>NHS Treatments</h3>
              </div>
              <div class="panel-body">
                <p>All NHS treatments available including:</p>
                <ul class="treatments">
                  <li>Checkups</li>
                  <li>Fillings</li>
                  <li>Root Canal</li>
                  <li>Extractions</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-gbp"></i>Private Treatments</h3>
              </div>
              <div class="panel-body">
                <ul class="treatments">
                  <li>Fillings</li>
                  <li>Dentures</li>
                  <li>Tooth Whitening</li>
                  <li>Veneers</li>
                  <li>Crowns</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-smile-o"></i>Childsmile</h3>
              </div>
              <div class="panel-body">
                <p>Childsmile Practice provides a universally-accessible, child-centred NHS dental service, through a network of independent and public dental service providers.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row appointments">

        <div class="container">
          <div class="col-md-12">
            <h2>Make an appointment</h2>
            <button class="casper" role="button" data-toggle="modal" data-target="#appointments">Book now</button>
          </div>
        </div>

      </div>

      <hr>

      <div class="row">
        <div class="container">
          <div class="col-md-8 gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4428.248199459534!2d-3.235958419063621!3d56.293170552541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c8b683580e42ef8!2sAuchtermuchty+Dental+Practice!5e0!3m2!1sen!2suk!4v1449764390067" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-md-4">
            <h3>Address</h3>
            <address>
              23 Back Dykes <br>
              Auchtermuchty <br>
              Fife <br>
              KY14 7AB <br>
              Scotland
            </address>

            <h3>Phone Number</h3>
            <a href="tel:01337-828360">01337 828360</a>
          </div>
        </div>
      </div>

      <hr>

<?php include ("appointment-modal.php"); ?>

<?php include("footer.php"); ?>
