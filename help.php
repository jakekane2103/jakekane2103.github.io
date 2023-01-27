<?php
    $page = "help";
    include 'header.php';
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="help.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Help</title>
</head>

<body>


    <section>
      
    </section> 
      
        <div class="help">
           
            <div class="help1">
                <h2>FAQs</h2>
            <button type="button" class="collapsible">How much is delivery?</button>
            <div class="content">
              <p>1st Class <br>
                Send a letter from 95p and a small parcel from £4.45 ||
                We aim to deliver the next working day, including Saturdays<br>
                Includes compensation cover up to £20 ||
                20kg maximum weight <br><br>
                2nd Class <br>
                Send your letter from 68p and your parcel from £3.35 ||
                We aim to deliver in 2-3 working days, including Saturdays <br>
                Includes compensation cover up to £20 ||
                20kg maximum weight</p>
            </div>
            
            <button type="button" class="collapsible">Which countries and regions do you deliver to?</button>
            <div class="content">
              <p>All countries in European Union + UK + Switzerland + Balkans + North America</p>
            </div>
    
            <button type="button" class="collapsible">When will my order arrive?</button>
            <div class="content">
              <p>Expected delivery to Slovakia is in 6-11 business days. You will be notified few days before receiving your order.
              </p>
            </div>
    
            <button type="button" class="collapsible">How can I contact you?</button>
            <div class="content">
              <p>You can contact us via telephone number / email listed in "Contact Us" or through formular</p>
            </div>

            <button type="button" class="collapsible">Will my order have tracking?</button>
            <div class="content">
              <p>Yes, you can track your order online here: https://trackmyorder.com/en/tracking/search.</p>
            </div>
            
            <button type="button" class="collapsible">Can you offer a specific day for when delivery will be made?</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
            </div>
    
            <button type="button" class="collapsible">Are items dispatched together or in separate packages?</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button type="button" class="collapsible">What is a pre-order?</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aliquam deserunt ullam laudantium amet? Officiis odio, porro delectus aut, rem dicta obcaecati harum aliquid saepe placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible">Problem with a gift cart</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aliquam deserunt ullam laudantium amet? Officiis odio, porro delectus aut, rem dicta obcaecati harum aliquid saepe placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button type="button" class="collapsible">What if I forget my password?</button>
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aliquam deserunt ullam laudantium amet? Officiis odio, porro delectus aut, rem dicta obcaecati harum aliquid saepe placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
        
        
        <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>
        
       



</body>

</html>