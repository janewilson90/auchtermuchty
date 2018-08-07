<?php include("header.php"); ?>


<div class="row">

  <div class="container">

    <h2 class="main-heading">Treatments</h2>

      <div class="treatments-key col-md-10 col-md-offset-1 button-group">
        <button class="treatment-btn btn btn-default current" data-filter="*">All 
          <span class="treatment-badge badge">4</span>
        </button>
        <button class="treatment-btn btn btn-primary" data-filter=".nhs">NHS 
          <span class="treatment-badge badge">4</span>
        </button>
        <button class="treatment-btn btn btn-success" data-filter=".private">Private 
          <span class="treatment-badge badge">4</span>
        </button>
      </div>

      <div class="col-md-12">
      <div class="treatment-grid">

        <div class="col-md-3 col-sm-12 treatment-item nhs">
          <h3>Check Up</h3>
          <p>The standard NHS checkup</p>
        </div>

        <div class="col-md-3 col-sm-12 treatment-item nhs private">
          <h3>Extraction</h3>
          <p>The standard NHS checkup</p>
        </div>

        <div class="col-md-3 col-sm-12 treatment-item private">
          <h3>Dentures</h3>
          <p>The standard NHS checkup</p>
        </div>

        <div class="col-md-3 col-sm-12 treatment-item nhs">
          <h3>Metal Fillings</h3>
          <p>The standard NHS checkup</p>
        </div>

        <div class="col-md-3 col-sm-12 treatment-item private">
          <h3>White Fillings</h3>
          <p>The standard NHS checkup</p>
        </div>

        <div class="col-md-3 col-sm-12 treatment-item nhs">
          <h3>Root Canal</h3>
          <p>The standard NHS checkup</p>
        </div>

        <div class="col-md-3 col-sm-12 treatment-item nhs">
          <h3>Crown</h3>
          <p>The standard NHS checkup</p>
        </div>

        <div class="col-md-3 col-sm-12 treatment-item nhs">
          <h3>X-Ray</h3>
          <p>The standard NHS checkup</p>
        </div>

      </div>
      </div>

  </div>

</div>

<hr />

<div class="row">
  <div class="container">

    <h2 class="main-heading">Our Dentists</h2>

    <div class="col-sm-12 col-md-6">
      <div class="panel our-dentists">
        <div class="panel-heading">
          <h3 class="panel-title">Richard Wilbraham</h3>
        </div>
        <div class="panel-body">
          <img class="dentist-img" alt="Richard Wilbraham" src="http://placehold.it/150x150">
          <p>This is some text about the above dentist. Dentist's look so snazy in their scrubs.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6">
      <div class="panel our-dentists">
        <div class="panel-heading">
          <h3 class="panel-title">Richard Wilbraham</h3>
        </div>
        <div class="panel-body">
          <img class="dentist-img img-responsive" alt="Richard Wilbraham" src="http://placehold.it/150x150">
          <p>This is some text about the above dentist. Dentist's look so snazy in their scrubs.</p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include("footer.php"); ?>