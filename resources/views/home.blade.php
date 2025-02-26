<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/home1.css')}}">
        <title>MultiApp- Smart Money Management</title>
    </head>

    <body>
        
        <div class="main">
              
<form style="display:none">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required pattern="[A-Za-z\s]+" title="Name should only contain letters.">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" title="Phone number should be a 10 digit number.">
    
    <label for="state">State:</label>
    <input type="text" id="state" name="state" required pattern="[A-Za-z\s]+" title="State should only contain letters.">
    
    <label for="city">City:</label>
    <input type="text" id="city" name="city" required pattern="[A-Za-z\s]+" title="City should only contain letters.">
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required minlength="8" title="Password should be at least 8 characters long.">
    
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>

    
  
            <!-- first ke doo floor means 12 -->
            <div class="f12">
                <div class="logo">
                    <img src="{{ asset('img/logo1.png') }}"  width="100" alt="Logo">
                </div>

                <div class="phone_login">
                     Help-Line : 9328431157
                <button class="login" name="Log In ">Log In</button>
                </div>
            </div> 

            <!-- second floor ke doo 22 -->
            <div class="f22">
                <div class="f2_b1">
                    <span class="aurbhi"><i>(aur bhi)</i></span><br>
                    <b>Business hua^ easy</b><br>
                    With Multi-App<br><br>
                    <form>
                        <input type="email" name="email" placeholder="Enter your E-Mail">
                        <span class="submit"><input type="Submit" value="Get Started" name="Submit"><span>
                    </form>
                    <img src="{{ asset('img/get_started_down.png') }}"  width="250" height="120">
                </div>

                <div class="f2_b2">
                    <img src="{{ asset('img/bg-home1.jpeg') }}" width="300px" heigth="300px">
                </div>
            </div>

            <div class="f3" style="text-align: center; display: block;">
                <span class="f3_line1" >POWERFUL FEATURES TO HELP YOU</span><br>
                <span class="f3_line2">Digital Baahi Khata<br><br><b>Built with features for growing</b><br><b> businesses</b></span>
            </div>

            <div class="f4" style="background-image: url('{{ asset('img/money_bg.jpeg') }}'); background-size: cover; height: 85vh;">
                <span class="f4text" style="font-size: 11px;">
                    <br><br>
                    Real time data sync across different devices<br><br>
                    Easy Access<br><br>
                    One place for all credit/debit transactions<br><br>
                    Save Time<br><br>
                    Anywhere Anytime<br><br>
                    Get your reports in a single Touch<br><br>
                    Paperless Records<br><br>
                    Multiple Profile<br><br>
                    Auto Back-Up
                    
                </span>
                
            </div>

            <div class="f5">
                <div class="f51">
                <form>
                        <input type="email" name="email" placeholder="Enter your E-Mail">
                        <span class="submit"><input type="Submit" value="Get Started" name="Submit"><span>
                </form><br>
                <span class="f51_text">
                    <br>Manage Money Made Easy<br><br>
                    Single Platform for all money calls
                </span>
                <img src="{{ asset('img/f4down.png') }}" width="100px" heigth="300px" align="right" style="margin-right:110px;">
                </div>


            </div>
            <br><br><br><br><br><br>
            <div class="address">
                <hr>Contact Us<hr>
                <span class="add">
                    MultiApp Pvt Ltd.<br>
                    GF-08, Pallidium Mall<br>
					Thaltej, Ahmedabad<br>
                    <b>Phone No.</b>9328431157<br><br>
                    <a href="https://goo.gl/maps/tKLe1NhznnrKcCTZA" target="-blank">
                    <img src="{{ asset('img/map.jpg') }}" width="100px" heigth="300px"></a><br><br>


                    <a href="https://twitter.com/aparichit202?t=boEGw4aHnKLMjYXiR1soUA&s=09" target="-blank" title="Click Me">
					<img src="{{ asset('img/twitter.png') }}" height="20" width="20" ></a>
					&nbsp;
					
					<a href="mailto:riteshkumawat1003@gmail.com" target="-blank" title="Click Me">
					<img src="{{ asset('img/gmail.png') }}" width="20" height="20"></a>
					&nbsp;
					
					<a href="http://wa.me/+919328431157" target="-blank" title="Click Me">
					<img src="{{ asset('img/wp.png') }}" width="20" height="20"></a>
					&nbsp;
					
					<a href="https://www.snapchat.com/add/ritesh.1003?share_id=kecIuvAVx1E&locale=en-IN" target="-blank" title="Click Me">
					<img src="{{ asset('img/snap.jpeg') }}" width="20" height="20"></a>
					&nbsp;
					
					
					<a href="https://instagram.com/ritesh_kumawat_1003?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="-blank" title="Click Me">
					<img src="{{ asset('img/ig.jpeg') }}" width="20" height="20"></a>
					&nbsp;
					
					
					<a href="https://youtube.com/@riteshkumawat1447" target="-blank" title="Click Me">
					<img src="{{ asset('img/utube.jpeg') }}" width="20" height="20"></a>
					&nbsp;

                </span>
            </div>
            <div class="footer">
            <br><br><br>
                <hr>
                © 2025 LARAVEL PROJECT LJKU SEM-4<br>
                All rights reserved<br>
                Made in India<br>
                <img src="{{ asset('img/logo1.png') }}"  width="100" alt="Logo"> 
                <hr>
            </div>

        </div><!--  main -->

    </body>
</html>