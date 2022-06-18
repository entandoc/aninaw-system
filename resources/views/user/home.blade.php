<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstrap 4-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/jpg" href="/images/logo.png">

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="/css/style.css">

  <title>Home</title>
</head>

<body>

  <!--Navigation Bar-->
  <section class="header">
    <nav>
      <h1>Aninaw</h1>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li class="home active"><a href="/">Home</a></li>
            <li class="news"><a href="/complaint/news">News</a></li>
            <li class="form"><a href="/complaint/create">Form</a></li>
            <li class="complaints"><a href="/complaint">Complaints</a></li>
            <li class="about"><a href="/complaint/about">About</a></li>
          </ul>
      </div> 
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  
    <!--Header Content-->
    <div class="text-box">
      <img src="/images/home/logo.svg">
      <h1>WELCOME TO ANINAW!</h1>
      <p>A complaint and suggestion management system for Las Pinas City.</p>
      <a href="/complaint/about" class="hero-btn">Learn More</a>
    </div>
  </section>

  <!--Citizens' Guide-->
  <section class="guide">
    <h1 class="guide-h1">CITIZEN'S GUIDE</h1>
    <div class="row">
      <div class="guide-col">
        <img src="/images/home/1.svg">
        <p>Submit concerns and report issues at Las Pinas City Hall.</p>
      </div>

      <div class="guide-col">
        <img src="/images/home/2.svg">
        <p>Get the fastest response from Las Pinas City Hall through call or email.</p>
      </div>

      <div class="guide-col">
        <img src="/images/home/3.svg">
        <p>Get the latest news and updates from Las Pinas City Hall.</p>
      </div>
    </div>
  </section>

  <!--Call To Action-->
  <section class="cta">
    <h1>DO YOU HAVE CONCERNS?</h1>
    <p>Submit your concerns, complaints, and reports by filling-up the form provided. <br> <br> Click the button below.</p>
    <a href="/complaint/create" class="hero-btn">Click Here</a>
  </section>

  <!-- Departments -->
  <section class="departments">
    <h1 class="departments-h1">SUBJECT OF COMPLAINTS</h1>
  
    <div class="departments-body">
      <button class="collapsible">Business Permit and Licensing Office</button>
      <div class="content">
        <p>Protecting your business legally, licenses can boost credibility and allow you to
          apply for citywide funding. Moreover, if your company has staff or sells taxable
          products or services, you also need to register with the taxing authorities.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Unable to pay taxes.</li>
          <li>Running a business without business permit.</li>
          <li>Businesses that are acting in an anticompetitive manner.</li>
          <li>Consumer complaint against an online seller.</li>
        </ul>
      </div>

      <button class="collapsible">City Health Office</button>
      <div class="content">
        <p>Formulation and implementation of policies, programs and projects to promote the
          health of the people in the community. Maintain proper sanitation and cleanliness
          in accordance with the sanitation code. Maintain health information system that
          provides vital health statistics and health status indicators.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Report about positive in covid-19.</li>
          <li>Crowded vaccination site.</li>
          <li>Improper sanitation.</li>
          <li>Dirty city/environment.</li>
        </ul>
      </div>

      <button class="collapsible">City Planning and Development Office</button>
      <div class="content">
        <p>Guides future physical and economic development. Staff in this department manages
          development policy, conducts research and supports the City’s long-term vision.
          The Department also works to guide the development process by issuing permits,
          reviewing plans and enforcing development policy.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Issuing permit.</li>
        </ul>
      </div>

      <button class="collapsible">City Social Welfare & Development Office</button>
      <div class="content">
        <p>The MSWDO will care, protect and develop the disadvantaged sectors to become
          self-reliant and productive citizens in the community through responsive delivery
          of social welfare services. <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Physical abuse.</li>
          <li>Child abuse.</li>
          <li>Abandoning child.</li>
          <li>Sexual abuse.</li>
          <li>Violence against women.</li>
        </ul>
      </div>

      <button class="collapsible">Human Resource Management Department</button>
      <div class="content">
        <p>Recruiting and hiring to meet the needs of vacancies within the City Responding
          to the needs of the City's workforce through compliance, strategic planning, and
          workforce development. <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Employee complaint.</li>
          <li>Incompliance.</li>
          <li>Not strategic planning .</li>
        </ul>
      </div>

      <button class="collapsible">Office of the City Civil Registry</button>
      <div class="content">
        <p>Responsible for the continuous and permanent recording of the occurrences and
          characteristics of vital events in accordance with the legal requirements in a city.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Late registration of certificate of live birth.</li>
          <li>Application and issuance of marriage license.</li>
          <li>Late registration of marriage certificate.</li>
          <li>Fake marriage certificate.</li>
          <li>Late registration of death certificate.</li>
          <li>Petition to change name and sex.</li>
        </ul>
      </div>

      <button class="collapsible">Office of the City Engineer</button>
      <div class="content">
        <p>City engineers are civil engineers who are employed by city governments. They design
          roads, bridges and other infrastructure projects and ensure they adhere to budgetary
          and environmental requirements. City engineers also oversee the execution of their
          projects, so they must have management skills.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Broken roads and bridges.</li>
        </ul>
      </div>

      <button class="collapsible">Office of the City Mayor</button>
      <div class="content">
        <p>The office of the mayor is tasked with promoting the general welfare of the City
          and its constituents through the efficient, effective, relevant and economical governance.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Crime.</li>
          <li>Improper garbage disposal.</li>
          <li>Noise complaint.</li>
          <li>Illegal business.</li>
          <li>Illegal claim of land</li>
        </ul>
      </div>

      <button class="collapsible">Police Department</button>
      <div class="content">
        <p>Responsible for maintaining public order and safety, enforcing the law, and preventing,
          detecting, and investigating criminal activities. These functions are known as policing.
          Police are often also entrusted with various licensing and regulatory activities.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Illegal business.</li>
          <li>Possession of illegal drugs.</li>
          <li>Possession of illegal firearms.</li>
          <li>Fighting of neighbours.</li>
          <li>Physical injury.</li>
          <li>Child abuse.</li>
          <li>Sexual abuse.</li>
          <li>Catcalling.</li>
        </ul>
      </div>

      <button class="collapsible">Urban Poor Affairs Offices</button>
      <div class="content">
        <p>Tasked to accommodate/entertain urban poor affairs such as land dispute complaints,
          ejectment cases, report of association anomalies and other queries and make necessary
          actions/advice regarding the matter.
          <br><br> The following are the types of complaints they accept:
        </p>
        <ul class="departments-ul">
          <li>Land dispute complaints.</li>
          <li>Ejectment cases.</li>
          <li>Report of association anomalies and other queries.</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-row">

        <div class="footer-col">
          <h4>Las Pinas City Hall</h4>
          <ul>
            <li><a href="/complaint/about/laspinas">About Us</a></li>
            <li><a href="/operatinghours">Operating Hours</a></li>
            <li><a href="/directory">Telephone Directory</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Aninaw</h4>
          <ul>
            <li><a href="/complaint/about/aninaw">About Us</a></li>
            <li><a href="/complaint/about#developers">The Developers</a></li>
            <li><a href="/privacyterms">Privacy and Terms</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="/faqs">FAQs</a></li>
            <li><a href="/complaint/create">Submit Form</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Socials</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/AninawLPC"><i class="fa fa-facebook-square"></i></a>
            <a href="https://twitter.com/Aninaw_LPC"><i class="fa fa-twitter-square"></i></a>
            <div class="copyright">
              <i class="fa fa-copyright"> 2022</i>
            </div>
          </div>
        </div>

      </div>
    </div>
 </footer>

  <!-- JavaScript for Toggle Menu -->
  <script>
    var navLinks=document.getElementById("navLinks");
    function showMenu(){
      navLinks.style.right="0";
    }
    function hideMenu(){
      navLinks.style.right="-200px";
    }
  </script>

  <!-- JavaScript for Toggle Collapse Section -->
  <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
  
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        }else{
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }
  </script>



</body>
</html>