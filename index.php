<?php 
  require_once('includes/header.php');
?>

      <section style="margin-top: 50px;">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./img/eat_sleep_code_repeat.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/css_slider.jpeg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/laptop.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <div class="profile-picture">
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h1>About me</h1>
              <p>Hi, my name is Erik van der Schaaf and this is my website. Enjoy your stay and make sure to checkout all of its contents.</p>
              <p>I live in the Netherlands (Zuid-Holland) with my parents and I'm 23 years old.</p>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./img/wordpress_hand_logo.jpg" alt="Wordpress">
                <div class="card-body">
                  <h5 class="card-title">Wordpress</h5>
                  <p class="card-text">I work alot with Wordpress. Here you can find what Wordpress is</p>
                  <a href="https://wordpress.org/" class="btn">Find out more</a>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./img/rotterdam_night.jpg" alt="Rotterdam">
                <div class="card-body">
                  <h5 class="card-title">Rotterdam</h5>
                  <p class="card-text">This is rotterdam, the city I work in.</p>
                  <a href="https://www.rotterdam.nl/" class="btn">Find out more</a>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./img/Renekton_OriginalCentered.jpg" alt="Renekton">
                <div class="card-body">
                  <h5 class="card-title">League of Legends</h5>
                  <p class="card-text">This is Renekton, my favorite champion to play in League of Legends</p>
                  <a href="https://play.euw.leagueoflegends.com/en_GB" class="btn">Find out more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h3>Games</h3>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        League of Legends
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Summoners War
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        World of Warcraft
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h3>Youtube</h3>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            <div class="col-sm">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8HrHAGkdFtg" allowfullscreen></iframe>
              </div>
            </div>
          </div>       
        </div>
      </section>
    </main>
    <?php
      require_once('includes/footer.php');
    ?>