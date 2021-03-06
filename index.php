<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>LAHS Hack Club</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="blue darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="." class="brand-logo">LAHS Hack Club</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="join.php">Join Now!</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="join.php">Join Now!</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="center blue-text text-darken-1">Los Altos High School</h4>
      <h1 class="center blue-text text-darken-4" style="margin: 0 0 50px -20px;">Hack <img src="img/lahshackclub.png" class="responsive-img" style="height: 2em; margin-bottom: -0.6em; border-radius: 5px" /> Club</h1>
      <div class="row center">
        <h5 class="header col s12 light">A club unlike any other.</h5>
        <p>Rather than simply teaching the basics of a language, which can be taught by anyone, we go a few steps further. We teach the in-depth concepts that will help throughout a computer science career, including the basics of the filesystem, troubleshooting, debugging, logic, and so much more. Some concepts that we cover include:</p>
        <div class="row">
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Frontend Web Design</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Backend Web Design</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Database Structuring</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Realtime Querying</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Scripting</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Bash</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Command Line Tools</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">APIs</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Automation Services</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Encryption</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px">
                <span class="card-title">Source Management (Git)</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card darken-1">
              <div style="padding: 10px 0">
                <span class="card-title"><b>Much More!</b></span>
              </div>
            </div>
          </div>
        </div>  
        <p>After students learn the basics of programming, we ask them what they want to build, and then guide them from the very first steps until the final ones. Each student goes at their own pace, regardless of their skill level. If the student is stuck and can't wait for the club meeting on Thursday, they can ask in our <span class="red-text">Slack</span> community, where club staff and other knowledgeable mentors are online as much as possible, ready to answer questions.</p>
        <p>Our final goal is for each student to create their own running business by the end of the year! With one-on-one guideance, we help the students grow as a programmer and a businessperson, together powerful.</p>
      </div>
      <div class="row center">
        <a href="join.php" id="download-button" class="btn-large waves-effect waves-light orange">Join Now!</a>
      </div>
      <br><br>
    </div>
  </div>

  <div class="container">
    <h2 class="center">Partners and Sponsors</h2>
    <div class="row">
        <a href="https://hackclub.com" target="_blank">
          <img src="img/hackclub.png" style="width: 40%; margin-left: 30%;" />
        </a>
      <h6 class="center">Want to be a partner? Shoot us a message at us at <a href="mailto:hack@lahs.club">hack@lahs.club</a>!</h6>
    </div>
  </div>

  <?php require_once("templates/footer.php"); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
