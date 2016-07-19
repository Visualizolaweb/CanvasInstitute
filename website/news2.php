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

        <div class="row title">
          <div class="col l12">
            <h3>Local Leaders Hold Community Discussion in Response to Recent Events Across the Country.</h3>
          </div>
        </div>


        <article class="page row">
          <div class="col l12">
            <video controls autoplay preload width="100%">
              <source src=assets/videos/2016-07-16/webm_version.webm type=video/webm>
              <source src=assets/videos/2016-07-16/ogv_version.ogv type=video/ogg>
              <source src=assets/videos/2016-07-16/mp4_version.mp4 type=video/mp4>
            </video>
            <small style="font-size:13px; font-style:italic; display:block">By TWC News Staff</small>
          </div>

          <div class="col l8" style="text-align:justify">
              <p class="init-text">Staten Island residents are trying to come up with solutions following the recent events in Louisiana, Dallas, and Minnesota. NY1's Krizia Ruiz filed the following report. .</p>
              <p>Local leaders and elected officials are working to ease the tension that they say stands between some community members and the police.</p>
              <p>"It's time that we collectively have to come together and tackle it head on," said Bobby Digi, the executive director of the Island Voice and the co-founder of the group "Occupy the Block."</p>
              <p>Digi was one of the organizers of the event where the group discussed their concerns at a meeting at the Canvas Institute of Arts Culture and Civic Engagement.</p>
              <p>Several attendees spoke about their experiences with racial profiling or police brutality in the past.</p>
              <p>"We get pulled over, it's like a life-or-death thing for us," said someone attenting the meeting.</p>
              <p>The community meeting comes on the heels of the death of five Dallas police officers. The same organizers held a peaceful rally over the weekend. They marched from P.S. 59 in New Brighton to Borough Hall in St. George. They denounced the recent shootings of black men at the hands of police in Louisiana and Minnesota.</p>
              <p>"Everyone's doing what they're doing because they're hurt, they're tired and they're just fed up. We are here as a community to put it into measure so it doesnt happen in this community," Digi said.</p>
              <p>Organizers say the goal of the meeting was to come up with a list of peaceful solutions that could improve the relationship between the police and the community.</p>
              <p>"How to make sure that police are held accountable. And honestly, it's a matter of protecting one another. It's a matter of education and understanding what their job is and what our job is," said Nikia Allen, the co-founder of Historical Gems.</p>
              <p>Organizers say their work is just beginning. The group will meet on a weekly basis and say their next step will be to present a list of ideas and solutions to City Hall.</p>
          </div>
          <div class="col l4">
            <div class="latest-post ">
              <h5 class="blue-grey lighten-2 white-text">LATEST FROM PRESS</h5>
              <ul class="blue-grey lighten-5">
                <li><h6><a href="Local-Leaders-Hold-Community-Discussion-in-Response-to-Recent-Events-Across-the-Country">Local Leaders Hold Community Discussion in Response to Recent Events Across the Country<small style="display:block" class="blue-grey-text lighten-1">July 16, 2016</small></a></h6></li>
                <li><h6><a href="members-of-the-staten-island-community-gather-for-a-peaceful-rally">Staten Island Community Gathers for Peaceful Rally Against Police-Involved Shootings. <small style="display:block" class="blue-grey-text lighten-1">July 15, 2016</small></a></h6></li>
              </ul>
            </div>
          </div>
        </article>

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
