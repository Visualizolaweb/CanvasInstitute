<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="assets/icons/font-awesome-4.6.3/css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="assets/framework/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/stylesheet/main.css" media="screen" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <section class="container">
        <?php require("include/header.php");?>

        <div class="row news">
          <div class="col l9">

            <!-- Begin Article Press -->
            <article class="row">
              <div class="col l2">
                <div class="date-day">16<div class="date">JUL 2016</div></div>
              </div>

              <div class="col l10 content-press">
                <img src="assets/images/press/Local-Leaders-Hold-Community-Discussion-in-Response-to-Recent-Events-Across-the-Country.jpg" alt="Local Leaders Hold Community Discussion in Response to Recent Events Across the Country"/>
                <h3>Local Leaders Hold Community Discussion in Response to Recent Events Across the Country.</h3>
                <div class="preview">
                  <p>Staten Island residents are trying to come up with solutions following the recent events in Louisiana, Dallas, and Minnesota. NY1's Krizia Ruiz filed the following report.</p>
                  <p>Local leaders and elected officials are working to ease the tension that they say stands between some community members and the police.</p>
                </div>
                <div class="read-more">
                  <a href="Local-Leaders-Hold-Community-Discussion-in-Response-to-Recent-Events-Across-the-Country" class="waves-effect waves-light  pink darken-3 btn">READ MORE</a>
                </div>
              </div>
            </article>

            <article class="row">
              <div class="col l2">
                <div class="date-day">16<div class="date">JUL 2016</div></div>
              </div>

              <div class="col l10  content-press">
                <img src="assets/images/press/SILive-cover-Canvas-Inaugural-Art-exhibition.jpg" alt="SILive cover Canvas Inaugural Art exhibition"/>
                <h3>SILive cover Canvas Inaugural Art exhibition</h3>
                <div class="preview">
                  <p>STATEN ISLAND, N.Y. -- The CANVAS institute closed out its inaugural art exhibition while hosting two notable artists in Stapleton Sunday night.</p>
                  <p>One of Tokyo's best DJs, DJ Hokuto, and visual artist/musician Laolu Senbanjo were on hand between 6 and 11 p.m. for the event at 150 Victory Blvd.</p>
                </div>
                <div class="read-more">
                  <a href="http://www.silive.com/news/index.ssf/2016/03/canvas_art_expo_hosts_popular.html" target="_blank" class="waves-effect waves-light  pink darken-3 btn">READ MORE</a>
                </div>
              </div>
            </article>

            <article class="row">
              <div class="col l2">
                <div class="date-day">16<div class="date">JUL 2016</div></div>
              </div>

              <div class="col l10  content-press">
                <img src="assets/images/press/extralarge.jpg" alt="DNA Info lists Canvas Institute as one of the top 5 Places to be in Staten Island"/>
                <h3>DNA Info lists Canvas Institute as one of the top 5 Places to be in Staten Island.</h3>

                <div class="read-more">
                  <a href="https://www.dnainfo.com/new-york/20160114/tompkinsville/5-things-for-you-do-staten-islands-neighborhoods-this-weekend" target="_blank" class="waves-effect waves-light  pink darken-3 btn">READ MORE</a>
                </div>
              </div>
            </article>



            <article class="row">
              <div class="col l2">
                <div class="date-day">15<div class="date">JUL 2016</div></div>
              </div>

              <div class="col l10  content-press">
                <h3>Staten Island Community Gathers for Peaceful Rally Against Police-Involved Shootings.</h3>
                <div class="preview">
                  <p>People on Staten Island, including local leaders and activists, spoke out this weekend against the recent shootings of black men at the hands of police in Louisiana and Minnesota.</p>
                  <p>This comes as tensions remain high in Dallas as the city deals with the aftermath of an attack at a protest that left five police officers dead.</p>
                </div>
                <div class="read-more">
                  <a href="members-of-the-staten-island-community-gather-for-a-peaceful-rally" class="waves-effect waves-light  pink darken-3 btn">READ MORE</a>
                </div>
              </div>
            </article>

          </div>
          <div class="col l3">
            <div class="latest-post ">
              <h5 class="blue-grey lighten-2 white-text">LATEST FROM PRESS</h5>
              <ul class="blue-grey lighten-5">
                <li><h6><a href="Local-Leaders-Hold-Community-Discussion-in-Response-to-Recent-Events-Across-the-Country">Local Leaders Hold Community Discussion in Response to Recent Events Across the Country<small style="display:block" class="blue-grey-text lighten-1">July 16, 2016</small></a></h6></li>
                <li><h6><a href="members-of-the-staten-island-community-gather-for-a-peaceful-rally">Staten Island Community Gathers for Peaceful Rally Against Police-Involved Shootings. <small style="display:block" class="blue-grey-text lighten-1">July 15, 2016</small></a></h6></li>
              </ul>
            </div>
          </div>
        </div>



        <?php include_once("include/footer.php"); ?>
      </section>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/framework/materialize/js/materialize.min.js"></script>

      <script>
        $(document).ready(function(){
          $('.button-collapse').sideNav({
              menuWidth: 300,
              edge: 'right',
              closeOnClick: true
          });

          $('.slider').slider({indicators: false});

          $('.nextSlide').click(function(){
             $('.slider').slider('next');
          });

          $('.prevSlide').click(function(){
             $('.slider').slider('prev');
          });

        });
      </script>
    </body>
  </html>
