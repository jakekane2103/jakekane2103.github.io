<?php
    $page = "contact";
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Contact Us</title>
</head>

<body>
    <section>
    
        <div class="contactWhole">
            <img src="images/contact.jpg" alt="">

            <div class="contactWhole1">
                <img src="images/contact.jpg" alt="">
                <div class="contactUs">
                    <div class="contactText">
                        <h2>Contact Us</h2>
                        <p>Not able to find the answer in our Help section?</p>
                        <p>Please fill in this form:</p>
                        <p>Fields marked * are required.</p>
                    </div>


                    <div class="contactForm">
                        <div class="eachForm">
                            <h3>Full Name *</h3>
                            <form action="/action_page.php">
                                <input class="searchArray1" type="text" placeholder="" name="">
                                </button>
                            </form>
                        </div>

                        <div class="eachForm">
                            <h3>Email Address *</h3>
                            <form action="/action_page.php">
                                <input class="searchArray1" type="text" placeholder="" name="">
                                </button>
                            </form>
                        </div>

                        <div class="eachForm">
                            <h3>Postcode / Zip</h3>
                            <form action="/action_page.php">
                                <input class="searchArray1" type="text" placeholder="" name="">
                                </button>
                            </form>
                        </div>

                        <div class="eachForm">
                            <h3>Order number</h3>
                            <form action="/action_page.php">
                                <input class="searchArray1" type="text" placeholder="" name="">
                                </button>
                            </form>
                        </div>

                        <div class="eachForm">
                            <h3>Reason *</h3>
                            <div class="dropdown">
                                <form action="/action_page.php">
                                    <input class="searchArray1" type="text" placeholder="" name="">
                                    <div class="dropdown-content">
                                            <a href="">My order</a>
                                            <a href="">Change my order</a>
                                            <a href="">Cancel and return my order</a>
                                            <a href="">Damaged item</a>
                                            <a href="">Incorrect item</a>
                                            <a href="">Payment</a>
                                            <a href="">My account</a>
                                            <a href="">Website issues</a>
                                            <a href="">Other</a>
                                        </button>
                                    </div>
                                </form>
                            </div>



                            <h3>Your message *</h3>
                            <textarea id="subject" name="subject" placeholder="Describe your issue..."
                                style="height:200px"></textarea>

                                <div class="formButton">
                                    <a href="">Send</a>&emsp;&emsp;


                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>


</body>

</html>