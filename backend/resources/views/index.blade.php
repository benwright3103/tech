<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- custom styles -->
    <link rel="stylesheet" href="css/app.css">
     <!-- fontawesome  -->
    <script src="https://use.fontawesome.com/d0199cfc5a.js"></script>

  </head>
  <body>


      <!-- Navigation -->
    <header>
    <nav class="navbar navbar-toggleable-md navbar-inverse  ">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
          </button>
                 <a class="navbar-brand" href="index.html"> <img id="navLogo"  src="{{asset('images/kytechlogo.png')}}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="postForm.html">Post a Job</a>
                            </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>

                        </ul>
                    </div>
                </nav>
      </header>

    <!-- Kentucky Map Filter -->
    <section>
        <div id="mapSection" >
          <img id="kyMap" class="mx-auto d-block" src="{{asset('images/kentucky.png')}}" alt="">
        </div>
    </section>

    <!-- Job Cards -->
    <section>

      <div class="card-deck ">
          <div class="card">
            <img class="card-img-top mx-auto d-block" src="{{asset('images/monitor.png')}}" alt="Card image cap">
              <span class="seperator mx-auto d-block"></span>
            <div class="card-block">
              <h4 class="card-title">Front End Dev</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Paducah</small></p>
            </div>
          </div> <!-- End Card -->
          <div class="card">
            <img class="card-img-top mx-auto d-block" src="{{asset('images/smartphone.png')}}" alt="Card image cap">
                <span class="seperator mx-auto d-block"></span>
            <div class="card-block">
              <h4 class="card-title">PHP Developer</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Louisville</small></p>
            </div>
          </div> <!-- End Card -->
          <div class="card">
            <img class="card-img-top mx-auto d-block" src="{{asset('images/tools-and-utensils.png')}}" alt="Card image cap">
                <span class="seperator mx-auto d-block"></span>
            <div class="card-block">
              <h4 class="card-title">UX Designer</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Lexington</small></p>
            </div>
          </div> <!-- End Card -->
      </div> <!-- End Card Deck  -->
    </section> <!-- End Job Cards -->
    

    <section>
      <div class="card-deck ">
        @foreach ($jobs as $job)
          <div class="card">
            <img class="card-img-top mx-auto d-block" src="{{asset('images/monitor.png')}}" alt="Card image cap">
              <span class="seperator mx-auto d-block"></span>
            <div class="card-block">
              <h4 class="card-title">{{ $job->job_title }}</h4>
              <p class="card-text">{{ $job->job_description }}</p>
              <p class="card-text"><small class="text-muted">{{ $job->location }}</small></p>
            </div>
          </div> <!-- End Card -->
        @endforeach
      </div> <!-- End Card Deck  -->
    </section> <!-- End Job Cards -->


    <!-- Footer -->
    <footer>
      <div class="footer">

      </div>

    </footer>








    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
