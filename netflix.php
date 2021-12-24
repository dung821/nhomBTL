<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="netflix.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <title>NetFlix</title>
  </head>
  <body>
    <div class="row" style="background-color: black">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="Title"><p>Frequently Asked Questions</p></div>
      </div>

      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="bs1">
        <div class="question" id="click" onClick="Showcontent()"><p>What is Netflix?</p></div>
        <div class="contentQuestion" id="show">
          <p>
            Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of
            internet-connected devices. You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price.
            There's always something new to discover and new TV shows and movies are added every week!
          </p>
        </div>
      </div>
      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="bs1">
        <div class="question" id="click1" onClick="Showcontent1()"><p>How much does Netflix cost?</p></div>
        <div class="contentQuestion" id="show1">
          <p>
            Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from 70,000 ₫ to 260,000
            ₫ a month. No extra costs, no contracts.
          </p>
        </div>
      </div>
      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="bs1">
        <div class="question" id="click2" onClick="Showcontent2()"><p>Where can I watch?</p></div>
        <div class="contentQuestion" id="show2">
          <p>
            Watch anywhere, anytime. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any
            internet-connected device that offers the Netflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.
          </p>
          <p>
            You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an
            internet connection. Take Netflix with you anywhere.
          </p>
        </div>
      </div>
      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="bs1">
        <div class="question" id="click3" onClick="Showcontent3()"><p>How do I cancel?</p></div>
        <div class="contentQuestion" id="show3">
          <p>
            Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no
            cancellation fees – start or stop your account anytime.
          </p>
        </div>
      </div>
      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="bs1">
        <div class="question" id="click4" onClick="Showcontent4()"><p>What can I watch on Netflix?</p></div>
        <div class="contentQuestion" id="show4">
          <p>
            Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you
            want, anytime you want.
          </p>
        </div>
      </div>
      <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="bs1">
        <div class="question" id="click5" onClick="Showcontent5()"><p>Is Netflix good for kids?</p></div>
        <div class="contentQuestion" id="show5">
          <p>
            The Netflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own
            space.
          </p>
          <p>
            Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific
            titles you don’t want kids to see.
          </p>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p class="bs3">Ready to watch? Enter your email to create or restart your membership.</p>
      </div>
      <!-- Dang ky tai khoan -->

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form class="Email" action="xuly.php" method="post">
          <input type="Email" placeholder="Email Address" name="email"/>
          <button class="colorEmail" type="submit" name="submit">Get Started</button>
        </form>


        <hr class="hr" />

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="footer">
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="contactus">
            <div><a class="link1" href="https://help.netflix.com/en/contactus">Questions? Contact us.</a></div>
            <div style="padding-top: 20px"><p>FAQ</p></div>
            <div><a class="link1" href="https://ir.netflix.net/ir-overview/profile/default.aspx">Investor Relations</a></div>
            <div><a class="link1" href="https://help.netflix.com/legal/privacy">Privacy</a></div>
            <div><a class="link1" href="https://fast.com/">Speed Test</a></div>
            <div class="col-sm-2" id="select">
              <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                  <select id="gender1">
                    <i class="fas fa-globe"></i>
                    <option>English</option>
                    <option>Việt Nam</option>
                  </select>
                </div>
              </div>
            </div>
            <div><p class="Vietnam">Netflix Vietnam</p></div>
          </div>

          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <div><a class="link1" href="https://help.netflix.com/en/">Help Center</a></div>
            <div><a class="link1" href="https://jobs.netflix.com/">Jobs</a></div>
            <div><p class="link1">Cookie Preferences</p></div>
            <div><a class="link1" href="https://help.netflix.com/legal/notices">Legal Notices</a></div>
          </div>

          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <div><a class="link1" href="https://www.netflix.com/vn-en/login?nextpage=https%3A%2F%2Fwww.netflix.com%2Fyouraccount">Account</a></div>
            <div><a class="link1" href="https://devices.netflix.com/en/">Ways to Watch</a></div>
            <div><a class="link1" href="https://help.netflix.com/legal/corpinfo">Corporate Information</a></div>
            <div><a class="link1" href="https://www.netflix.com/vn-en/browse/genre/839338">Only on Netflix</a></div>
          </div>

          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <div><a class="link1" href="https://media.netflix.com/en/">Media Center</a></div>
            <div><a class="link1" href="Terms of Use">Terms of Use</a></div>
            <div><a class="link1" href="Contact Us">Contact Us</a></div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="netflix.js"></script>
  </body>
</html>
