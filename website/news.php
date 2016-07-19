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
            <h3>Staten Island Community Gathers for Peaceful Rally Against Police-Involved Shootings.</h3>
          </div>
        </div>


        <article class="page row">
          <div class="col l12">
            <video controls autoplay preload width="100%">
                <source src=assets/videos/StatenislandCommunity.webm type=video/webm>
                <source src=assets/videos/StatenislandCommunity.ogg type=video/ogg>
                <source src=assets/videos/StatenislandCommunity.mp4 type=video/mp4>
            </video>
            <small style="font-size:13px; font-style:italic; display:block">By TWC News Staff</small>
          </div>

          <div class="col l8" style="text-align:justify">
              <p>People on Staten Island, including local leaders and activists, spoke out this weekend against the recent shootings of black men at the hands of police in Louisiana and Minnesota.</p>
              <p>This comes as tensions remain high in Dallas as the city deals with the aftermath of an attack at a protest that left five police officers dead.</p>
              <p>"This is an actual emergency and we are all faced with an extreme urgency," said a Staten Island resident participating in a peaceful rally.</p>
              <p>"I feel at this point this country right now is in a state of turmoil," said another.</p>
              <p>"There's been this cloud of darkness over the nation," said Bobby Digi with the group 'Occupy the Block' as he addressed the crowd. He was one of the organizers of the rally.</p>
              <p>The group gathered in front of P.S. 59 in New Brighton Saturday night just two days after the attack.</p>
              <p>"United we stand, divide we fall," the group chanted as they marched to Borough Hall in St. George.</p>
              <p>Organizers say this rally was held to condemn all the recent killings and to give Island residents a platform to share their feelings.</p>
              <p>"We said you know what what we could do being individuals who have been working very closely in the community for community development work that we should create an avenue where people can come out, express themselves," said Digi.</p>
              <p>Digi took to social media to organize the event.</p>
              <p>John Mcbeth, founded 'Occupy the Block' with Digi. They and took to social media to organize the event.</p>
              <p>McBeth says the goal is to achieve peace and accountability.</p>
              <p>"Peace from police brutality as well as peace within our own neighborhoods and that's one of the things 'Occupy the Block' works very actively towards and then the second message is to continue to ask for accountability with regard to the people whose salaries we pay to protect us," said McBeth. </p>
              <p>Participants say they came to the rally to push that message.</p>
              <p>"It's really important to stress we want accountability," said a participant.</p>
              <p>Organizers say they plan to offer another opportunity for dialogue.</p>
              <p>A community discussion addressing the recent shootings will take place monday from 6 to 8 p.m. at the Canvas Institute in Tompkinsville.</p>
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
