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
    
    <title>Form</title>
</head>

<body>

    <!-- sub-header -->
    <section class="sub-header">
        <nav>
            <h1>Aninaw</h1>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('news') }}">News</a></li>
                    <li><a href="{{ url('form') }}">Form</a></li>
                    <li><a href="{{ url('complaints') }}">Complaints</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="login.php">Login</a></li>
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
                        <div id="dd1"></div>
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
                        <input type="text" class="input" placeholder="Landmark">
                    </div>
                </div>

                <div class="container">
                    <label>Phone Number <span style="color: red;">*</span></label>
                    <div class="textbox">
                        <input type="text" class="input" placeholder="Phone Number">
                    </div>
                </div>

                <div class="container">
                    <label>Subject of Complaint <span style="color: red;">*</span></label>
                    <div class="space">
                        <!-- Dropdown -->
                        <div id="dd2"></div>
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
                        <label><input type="checkbox" value="" required><a href="">Terms & Conditions </a></label>
                    </div>
                </div>

                <div class="container">
                    <div class="checkbox">
                        <label><input type="checkbox" value=""> Anonymous (Optional)</label>
                    </div>
                </div>

                <div class="submit">
                    <a href="" class="hero-btn">Submit</a>
                </div>
            </form>
        </div>
    </div>



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

        var dd2 = new Dropdown({
            id: 'dd2',
            val: 'Subject of Complaint',
            data: ['Garbage Disposal', 'Traffic Jam', 'B.F. International Village', 'Daniel Fajardo', 'Elias Aldana',
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

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>