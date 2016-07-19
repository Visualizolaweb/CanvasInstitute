<!DOCTYPE html>
  <html>
    <head>
      <link type="text/css" rel="stylesheet" href="assets/icons/font-awesome-4.6.3/css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="assets/framework/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/stylesheet/main.css" media="screen" />
      <link type="text/css" rel="stylesheet" href="assets/Library/fullcalendar/fullcalendar.css">
      <link type="text/css" rel="stylesheet" href='assets/Library/fullcalendar/fullcalendar.print.css' media='print' />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/framework/materialize/js/materialize.min.js"></script>

      <script type="text/javascript" src='assets/Library/fullcalendar/moment.min.js'></script>
      <script type="text/javascript" src='assets/Library/fullcalendar/fullcalendar.min.js'></script>
      <script type="text/javascript" src='assets/Library/fullcalendar/gcal.js'></script>

      <script type="text/javascript" src="assets/Library/fullcalendar/moment.min.js"></script>
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.0/fullcalendar.min.js"></script>


      <script>
        $(document).ready(function(){
          $('.button-collapse').sideNav({
              menuWidth: 300,
              edge: 'right',
              closeOnClick: true
          });

          $('#calendar_Events').fullCalendar({
            header: {
      				left: 'prev,next today',
      				center: 'title',
      				right: 'month,basicWeek,basicDay'
      			},
            editable: false,
            displayEventEnd: true,
            eventLimit: true,
        			events: [
                {

                  title: "Health and Wellness: Men's Health",
                  start: '2016-07-11T11:00:00',
                  end: '2016-07-11T13:00:00',
                  url: '#'
                },
        				{

        					title: "DLee's World at Canvas!",
        					start: '2016-07-16T12:00:00',
        					end: '2016-07-16T14:00:00',
        					url: '#'
        				},
        				{

        					title: "OPEN MIC NIGHT at Canvas!",
        					start: '2016-07-22T07:00:00',
        					end: '2016-07-22T09:00:00',
        					url: '#'
        				},
        				{

        					title: "Yoga at Canvas! Brought by NYCYogaProject",
        					start: '2016-07-23T12:30:00',
        					url: '#'
        				},
        				{

        					title: "Jazz Nights at Canvas!",
        					start: '2016-07-29T19:00:00',
        					end: '2016-07-29T21:00:00',
        					url: '#'
        				},
        				{

        					title: "OSHA Classes at Canvas",
        					start: '2016-07-30T09:00:00',
        					end: '2016-07-30T15:00:00',
        					url: '#'
        				},
        				{

        					title: "OSHA Classes at Canvas",
        					start: '2016-08-06T09:00:00',
        					end: '2016-08-06T15:00:00',
        					url: '#'
        				},
        				{

        					title: "Yoga at Canvas! Brought by NYCYogaProject",
        					start: '2016-08-13T12:30:00',
        					url: '#'
        				},
        				{

        					title: "Yoga at Canvas! Brought by NYCYogaProject",
        					start: '2016-08-20T12:30:00',
        					url: '#'
        				},
                {

                  title: "Health and Wellness Event: Stress Relief",
                  start: '2016-08-27T10:00:00',
                  end: '2016-08-27T12:00:00',
                  url: '#'
                },
                {

                  title: "Yoga at Canvas! Brought by NYCYogaProject",
                  start: '2016-08-27T12:30:00',
                  url: '#'
                }
        			]
          });


        });
      </script>
    </head>

    <body>
      <section class="container">
        <?php require("include/header.php");?>

        <div class="row" style="margin-top:20px;">
          <div class="col l12">
            <div id="calendar_Events"></div>
          </div>
        </div>

        <article class="row">
          <div class="row">
            <div class="col s8" >
              <ul class="tabs">
                <li class="tab col s3"><a href="#upcomingevents" class="active" >Upcoming Events</a></li>
                <li class="tab col s3"><a href="#pastevents">Past Events</a></li>
              </ul>
            </div>

            <div id="upcomingevents" class="content-tab col s12">
              <article id="next-event" class="row">
                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">22<small>JUL</small></div>
                        <div clasS="col m7"><h3>OPEN MIC NIGHT at Canvas! </h3></div>
                        <div class="col m2 date blue-grey lighten-1">START<small>07:00pm</small></div>
                        <div class="col m2 date teal accent-4">END<small>09:00pm</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">23<small>JUL</small></div>
                        <div clasS="col m7"><h3>Yoga at Canvas! Brought by NYCYogaProject</h3></div>
                        <div class="col m4 date blue-grey lighten-1">START<small>12:30pm</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">29<small>JUL</small></div>
                        <div clasS="col m7"><h3>Jazz Nights at Canvas!</h3></div>
                        <div class="col m2 date blue-grey lighten-1">START<small>07:00pm</small></div>
                        <div class="col m2 date teal accent-4">END<small>09:00Pm</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">30<small>JUL</small></div>
                        <div clasS="col m7"><h3>OSHA Classes at Canvas (1ST session)</h3></div>
                        <div class="col m2 date blue-grey lighten-1">START<small>09:00am</small></div>
                        <div class="col m2 date teal accent-4">END<small>03:00pm</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">06<small>AUG</small></div>
                        <div clasS="col m7"><h3>OSHA Classes at Canvas (2ND session)</h3></div>
                        <div class="col m2 date blue-grey lighten-1">START<small>09:00am</small></div>
                        <div class="col m2 date teal accent-4">END<small>03:00pm</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">13<small>AUG</small></div>
                        <div clasS="col m7"><h3>Yoga at Canvas! Brought by NYCYogaProject</h3></div>
                        <div class="col m4 date blue-grey lighten-1">START<small>12:30pm</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">20<small>AUG</small></div>
                        <div clasS="col m7"><h3>Yoga at Canvas! Brought by NYCYogaProject </h3></div>
                        <div class="col m4 date blue-grey lighten-1">START<small>12:30pm</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">27<small>AUG</small></div>
                        <div clasS="col m7"><h3>Health and Wellness Event: Stress Relief </h3></div>
                        <div class="col m2 date blue-grey lighten-1">START<small>10:00am</small></div>
                        <div class="col m2 date teal accent-4">END<small>12:00m</small></div>
                    </div>
                </div>

                <div class="row">
                    <div class="row title-event">
                        <div class="col m1 date">27<small>AUG</small></div>
                        <div clasS="col m7"><h3>Yoga at Canvas! Brought by NYCYogaProject </h3></div>
                        <div class="col m4 date blue-grey lighten-1">START<small>12:30pm</small></div>
                    </div>
                </div>

              </article>
            </div>
            <div id="pastevents" class="content-tab col s12">
              <article id="next-event" class="row">
              <div class="row">
                  <div class="row title-event">
                      <div class="col m1 date">16<small>JUL</small></div>
                      <div clasS="col m7"><h3>DLee's World at Canvas!</h3></div>
                      <div class="col m2 date blue-grey lighten-1">START<small>12:00m</small></div>
                      <div class="col m2 date teal accent-4">END<small>02:00pm</small></div>
                  </div>
              </div>
              <div class="row">
                  <div class="row title-event">
                      <div class="col m1 date">11<small>JUL</small></div>
                      <div clasS="col m7"><h3>Health and Wellness: Men's Health </h3></div>
                      <div class="col m2 date blue-grey lighten-1">START<small>11:00am</small></div>
                      <div class="col m2 date teal accent-4">END<small>01:00Pm</small></div>
                  </div>
              </div>              
              </article>
            </div>

          </div>
        </article>

        <?php include_once("include/footer.php"); ?>
      </section>

    </body>
  </html>
