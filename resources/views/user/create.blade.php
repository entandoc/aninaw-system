<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cdnjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Fontawesome cdn -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/css/form.css">
    
    <title>Aninaw Form</title>
</head>

<body>

    <!-- Sub-header -->
    <section class="sub-header">
        <nav>
            <h1>Aninaw</h1>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li class="home"><a href="/">Home</a></li>
                    <li class="news"><a href="/complaint/news">News</a></li>
                    <li class="form active"><a href="/complaint/create">Form</a></li>
                    <li class="complaints"><a href="/complaint">Complaints</a></li>
                    <li class="about"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>SUBMIT YOUR CONCERNS, COMPLAINTS, AND REPORTS HERE</h2>
    </section>

    <!-- Form Body -->
    <div class="wrapper">
        <div class="con-container"></div>
            <form action="" method="get">
                <div class="container">
                    <label>Email <span style="color: red;">*</span></label>
                    <div class="textbox">
                        <input type="text" class="input" placeholder="Email" required>
                    </div>
                </div>

                <div class="container">
                    <label>Name (Last, First, Middle) <span style="color: red;">*</span></label>
                    <div class="textbox">
                        <input type="text" class="input" placeholder="Name" required>
                    </div>
                </div>

                <div class="container">
                    <label>Location <span style="color: red;">*</span></label>    
                    <div class="space">
                        <!-- Dropdown -->
                        <div id="dd1" required></div>
                    </div>
                </div>

                <div class="container">
                    <label>Full Address <span style="color: red;">*</span></label>
                    <div class="textbox">
                        <input type="text" class="input-full" placeholder="Full Address" required>
                    </div>
                </div>

                <div class="container">
                    <label>Landmark <span style="color: red;">*</span></label>
                    <div class="textbox">
                        <input type="text" class="input" placeholder="Landmark" required>
                    </div>
                </div>

                <div class="container">
                    <label>Phone Number <span style="color: red;">*</span></label>
                    <div class="textbox">
                        <input type="text" class="input" placeholder="Phone Number" required>
                    </div>
                </div>

                <div class="container">
                    <label>Subject of Complaint <span style="color: red;">*</span></label>
                    <div class="space">
                        <!-- Dynamic dropdown -->
                        <select name="slct1" id="slct1" onchange="populate(this.id,'slct2')">
                            <option value=""> Choose Department </option>
                            <option value="bplo"> Business Permit and Licensing Office </option>
                            <option value="cho"> City Health Office </option>
                            <option value="cpdo"> City Planning and Development Office </option>
                            <option value="cswdo"> City Social Welfare & Development Office </option>
                            <option value="hrmd"> Human Resource Management Department </option>
                            <option value="occr"> Office of the City Civil Registry </option>
                            <option value="oce"> Office of the City Engineer </option>
                            <option value="ocm"> Office of the City Mayor </option>
                            <option value="pd"> Police Department </option>
                            <option value="upao"> Urban Poor Affairs Offices </option>
                        </select>
                    
                        <select name="slct2" id="slct2"></select>
                    </div>
                </div>

                <div class="container">
                    <label>Complaint Description <span style="color: red;">*</span></label>
                    <textarea placeholder="Complaint Description"></textarea>
                </div>

                <div class="container">
                    <label>Attach a photo (Optional)</label>
                    <div class="insert-photo">
                        <a href="">
                            <i class="fa fa-paperclip" aria-hidden="true"></i> 
                            Attach a photo
                        </a>
                    </div>
                </div>

                <div class="container">
                    <div class="checkbox">
                        <label><input type="checkbox" value="" required><a href="">Terms & Conditions</a><span style="color: red;"> *</span></label>
                    </div>
                </div>

                <div class="container">
                    <div class="checkbox">
                        <label><input type="checkbox" value=""> Anonymous (Optional)</label>
                    </div>
                </div>

                <div class="btn">
                    <button class="submit" a href="success-message.html">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">

                <div class="footer-col">
                    <h4>Las Pinas City Hall</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Operating Hours</a></li>
                        <li><a href="#">Telephone Directory</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Aninaw</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">The Developers</a></li>
                        <li><a href="#">Privacy and Terms</a></li>
                    </ul>
                </div>
        
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="form.html">Submit Form</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Socials</h4>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-twitter-square"></i></a>
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

    <!-- Vanilla JavaScript for Dropdown List -->
    <script>
        function Dropdown(o){
            this.options = o;

            window.getdd = function(elem){
                var id = elem.closest('.dropdown').parentElement.id;
                return window.dropdowns[id];
            }

            this.init = function() {
                this.elem = document.getElementById(this.options.id);

                var val = this.options.val;
                var html = `<div class="dropdown">
                <div class="dropdown_value">${val}</div>
                <div class="dropdown_arrow">▼</div>
                <div class="dropdown_panel">
                    <div class="dropdown_items">
                </div>
                </div>`;

                this.elem.innerHTML = html;
                var elem = this.elem;

                /* Store a hash of dropdowns */
                if (!window.dropdowns) window.dropdowns = {};
                window.dropdowns[this.options.id] = this;

                /* Get elements */
                this.items = elem.querySelector(".dropdown_items");
                this.arrow = elem.querySelector(".dropdown_arrow");
                this.value = elem.querySelector(".dropdown_value");

                /* Populate dropdown items */
                var data = this.options.data;
                html = "";
                data.forEach(function(elem){
                    html += `<div class="dropdown_item" onmousedown='var self=getdd(this); self.clicked(this)'>${elem}</div>`;
                });
                this.items.innerHTML = html;

                var self = this;

                /* To drop the dropdown */
                this.elem.addEventListener('mousedown', function(){
                    if (self.isVisible)
                        self.hide();
                    else
                        self.show();
                });
            }

            this.clicked = function(elem){
                event.stopPropagation();
                    this.hide();
                    var newval = elem.innerHTML;
                    this.value.innerHTML = newval;
            }

            this.show = function() {
                    this.isVisible = true;
                    this.items.style.transform = 'translate(0px, 0px)';
                    this.arrow.style.transform = 'rotate(180deg)';
            }

            this.hide = function(){
                    this.isVisible = false;
                    this.items.style.transform = 'translate(0px, -255px)';
                    this.arrow.style.transform = 'rotate(0deg)';
            }

            this.init();
            return this;
        }

        var dd1 = new Dropdown({
            id: 'dd1',
            val: 'Location',
            data: ['Almanza Uno', 'Almanza Dos', 'B.F. International Village', 'Daniel Fajardo', 'Elias Aldana',
            'Ilaya', 'Manuyo Uno', 'Manuyo Dos', 'Pamplona Uno', 'Pamplona Dos', 'Pamplona Tres',
            'Pilar', 'Pulang Lupa Uno', 'Pulang Lupa Dos', 'Talon Uno', 'Talon Dos', 
            'Talon Tres', 'Talon Kuatro', 'Talon Singko', 'Zapote',]
        });
    </script>

    <!-- JavaScript for Description -->
    <script>
        const textarea = document.querySelector("textarea");
        textarea.addEventListener("keyup", e =>{
        textarea.style.height = "auto";
        let scHeight = e.target.scrollHeight;
        textarea.style.height = `${scHeight}px`;
        });
    </script>

    <script>
        function populate(s1,s2){
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            
            s2.innerHTML = "";

            if(s1.value == "bplo"){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint', 'Unable to pay taxes|Unable to pay taxes',
                'Running a business without business permit|Running a business without business permit',
                'Businesses that are acting in an anticompetitive manner|Businesses that are acting in an anticompetitive manner',
                'Consumer complaint against an online seller|Consumer complaint against an online seller', 'Others|Others'];
            }
            else if(s1.value == 'cho'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint',
                'Report about positive in Covid-19|Report about positive in Covid-19',
                'Crowded vaccination site|Crowded vaccination site',
                'Improper sanitation|Improper sanitation', 'Others|Others'];
            }
            else if(s1.value == 'cpdo'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint', 'Issuing permit|Issuing permit', 'Others|Others'];
            }
            else if(s1.value == 'cswdo'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint',
                'Physical abuse|Physical abuse','Child abuse|Child abuse',
                'Abandoning child|Abandoning child','Sexual abuse|Sexual abuse',
                'Violence against women|Violence against women','Others|Others'];
            }
            else if(s1.value == 'hrmd'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint', 
                'Employee complaint|Employee complaint','Incompliance|Incompliance',
                'Not strategic planning|Not strategic planning', 'Others|Others'];
            }
            else if(s1.value == 'occr'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint',
                'Late registration of certificate of live birth|Late registration of certificate of live birth',
                'Application and issuance of marriage license|Application and issuance of marriage license',
                'Late registration of marriage certificate|Late registration of marriage certificate',
                'Fake marriage certificate|Fake marriage certificate',
                'Late registration of death certificate|Late registration of death certificate',
                'Petition to change name and sex|Petition to change name and sex', 'Others|Others'];
            }
            else if(s1.value == 'oce'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint',
                'Broken roads and bridges|Broken roads and bridges', 'Others|Others'];
            }
            else if(s1.value == 'ocm'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint',
                'Crime|Crime','Improper garbage disposal|Improper garbage disposal',
                'Noise complaint|Noise complaint','Illegal business|Illegal business',
                'Illegal claim of land|Illegal claim of land', 'Others|Others'];
            }
            else if(s1.value == 'pd'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint', 'Illegal business|Illegal business',
                'Possession of illegal drugs|Possession of illegal drugs',
                'Possession of illegal firearms|Possession of illegal firearms',
                'Fighting of neighbours|Fighting of neighbours','Physical injury|Physical injury',
                'Child abuse|Child abuse','Sexual abuse|Sexual abuse', 'Catcalling|Catcalling', 'Others|Others'];
            }
            else if(s1.value == 'upao'){
                var optionArray = ['Choose Nature of Complaint|Choose Nature of Complaint',
                'Land dispute complaints|Land dispute complaints', 'Ejectment cases|Ejectment cases',
                'Report of association anomalies and other queries|Report of association anomalies and other queries',
                'Others|Others'];
            }

            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML=pair[1];
                s2.options.add(newoption)
            }
        }
    </script>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>