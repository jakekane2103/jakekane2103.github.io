<?php
    $page = "movies";
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="movies.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">
    <title>Bookshop: Movies</title>

</head>

<body>
    <section>
        
        <div class="filter">


            <div class="price">

                <div class="choices2">
                    <div id="myBtnContainer">
                        <h3>Price </h3>
                        <a class="btn" onclick="filterSelection('under5')">Under 5€ </a> <br>
                        <a class="btn" onclick="filterSelection('5to10')"> 5€ to 10€ </a> <br>
                        <a class="btn" onclick="filterSelection('10to20')"> 10€ to 20€ </a> <br>
                        <a class="btn" onclick="filterSelection('above20')"> Above 20€ </a> <br>

                    </div>
                </div>

            </div>

            <div class="language">

                <div class="choices">
                    <div id="myBtnContainer">
                        <h3>Audio</h3>
                        <a class="btn" onclick="filterSelection('english')">English</a> <br>
                        <a class="btn" onclick="filterSelection('french')">French</a> <br>
                        <a class="btn" onclick="filterSelection('german')">German</a> <br>
                        <a class="btn" onclick="filterSelection('czech')">Czech</a>

                    </div>
                </div>
            </div>

            <div class="rating">

            </div>

            <div class="choices">
                <h3>Rating</h3>
            </div>
            <div class="rate">

                <input class="btn" onclick="filterSelection('5')" type="button" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input class="btn" onclick="filterSelection('4')" type="button" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input class="btn" onclick="filterSelection('3')" type="button" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input class="btn" onclick="filterSelection('2')" type="button" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input class="btn" onclick="filterSelection('1')" type="button" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
            <br><br><br>
            <div class="cover">

                <div class="choices">
                    <div id="myBtnContainer">
                        <h3>Type</h3>
                        <a class="btn" onclick="filterSelection('blue')">Blue-Ray</a> <br>
                        <a class="btn" onclick="filterSelection('dvd')">DVD</a>
                    </div>
                </div>
            </div>


            <div class="availability">
                <div class="choices">
                    <h3>Availability</h3>
                    <a class="btn" onclick="filterSelection('in')">In Stock</a> <br>
                    <a class="btn" onclick="filterSelection('pre')">Pre-order</a> <br>
                    <a class="btn" onclick="filterSelection('out')"> Out of Stock</a>
                </div>

            </div>

            <div class="genre"></div>
            <div class="choices">
                <h3>Genre</h3>
                <a class="btn" onclick="filterSelection('act')">Action</a>
                <a class="btn" onclick="filterSelection('com')">Comedy</a>
                <a class="btn" onclick="filterSelection('dra')">Drama</a>
                <a class="btn" onclick="filterSelection('fan')">Fantasy</a>
                <a class="btn" onclick="filterSelection('mys')">Mystery</a>
                <a class="btn" onclick="filterSelection('hor')">Horror</a>
                <a class="btn" onclick="filterSelection('rom')">Romance</a>
                <a class="btn" onclick="filterSelection('sci')"> <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                    Sci-Fi</a>
                <a class="btn" onclick="filterSelection('wes')">Western</a>
            </div>
            <div class="reset">
                <a class="btn" onclick="filterSelection('all')">Reset Filters</a>
            </div>

        </div>



        <div class="switching">
            <div id="Page1">



                <div class="container" id="myUL">
                    <div class="products">
                        <div class="row1">
                            <div class="box">
                                <div class="filterDiv 5to10 english 1 dvd in act sci ">
                                    <div class="column" id="Lord of the Rings">
                                        <a href="moviePage.html">
                                            <img class="productImage" src="images/inception.jpg" alt="">

                                            <p class="title">Inception (2010)</p> <br>
                                            <p class="author">Director: Christopher Nolan</p> <br>
                                            <p class="author">Writer: Christopher Nolan</p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast: Leonardo DiCaprio, <br> &emsp;&emsp;&nbsp; Joseph
                                                Gordon-Levitt,
                                                <br>&emsp;&emsp; Elliot Page
                                            </p>
                                            <p class="description">A thief who steals corporate secrets through the use
                                                of
                                                dream-sharing </p>
                                            <p class="description1">
                                                technology is given the inverse task of planting an idea
                                                into the
                                                mind of a C.E.O., but his tragic past may doom the project and his team
                                                to
                                                disaster. Dominick "Dom" Cobb and Arthur are "extractors"; they perform
                                                corporate
                                                espionage using experimental military technology to infiltrate their
                                                targets'
                                                subconscious and extract information through a shared dream world. Their
                                                latest
                                                target, Saito, reveals he arranged their mission to test Cobb for a
                                                seemingly
                                                impossible job: implanting an idea in a person's subconscious, or
                                                "inception".
                                                Saito wants Cobb to convince Robert, the son of Saito's competitor
                                                Maurice
                                                Fischer, to dissolve his father's company. Saito promises to clear
                                                Cobb's
                                                criminal status, which prevents him from returning home to his children.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">8,99€</p>

                                            
                                        </a>
                                        <div class="shop-item-details ">

                                            <button class="btn btn-primary shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv 5to10 czech 2 blue in sci">
                                    <div class="column">
                                        <a href="moviePage.html">
                                            <img class="productImage" src="images/interstellarMovie.jpg" alt="">

                                            <p class="title">Interstellar (2014)</p> <br>
                                            <p class="author">Director: Christopher Nolan</p> <br>
                                            <p class="author">Writers: Christopher Nolan, <br>
                                                &emsp;&emsp;&emsp;&nbsp;&nbsp;
                                                Jonathan Nolan</p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast: Matthew McConaughey, <br> &emsp;&emsp;&nbsp; Anne
                                                Hathaway,
                                                <br>&emsp;&emsp;&nbsp; Jessica Chastain
                                            </p>
                                            <p class="description">Set in a future where a failing Earth
                                            </p>
                                            <p class="description1">
                                                puts humanity
                                                on the
                                                brink of extinction, it sees an intrepid team of NASA scientists,
                                                engineers and pilots attempt to find a new habitable
                                                planet,
                                                via interstellar travel. In 2067, crop blights and dust storms threaten
                                                humanity's survival. Cooper, a widowed engineer and former NASA pilot
                                                turned
                                                farmer, lives with his father-in-law, Donald, his 15-year-old son, Tom,
                                                and
                                                10-year-old daughter, Murphy "Murph". After a dust storm, strange dust
                                                patterns
                                                inexplicably appear in Murphy's bedroom; she attributes the anomaly to a
                                                ghost.
                                                Cooper eventually deduces the patterns were caused by gravity variations
                                                and
                                                they represent geographic coordinates in binary code. Cooper follows the
                                                coordinates to a secret NASA facility headed by Professor John Brand.


                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">9,99€</p>

                                           
                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primarya shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv 5to10 english 3 blue in act dra">
                                    <div class="column">
                                        <a href="darkKnightMovie.html">
                                            <img class="productImage" src="images/darkKnightMovie.jpg" alt="">

                                            <p class="title">The Dark Knight (2008)</p> <br>
                                            <p class="author">Director: Christopher Nolan</p> <br>
                                            <p class="author">Writers: Christopher Nolan, <br>
                                                &emsp;&emsp;&emsp;&nbsp;&nbsp;
                                                Jonathan Nolan</p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast: Christian Bale, <br> &emsp;&emsp; Heath Ledger,
                                                <br>&emsp;&emsp; Gary Oldman
                                            </p>
                                            <p class="description">When the menace known as the Joker
                                            </p>
                                            <p class="description1">
                                                wreaks havoc and
                                                chaos on the people of Gotham, Batman must accept one of the greatest
                                                psychological and
                                                physical tests of his ability to fight injustice. A gang of criminals
                                                rob a
                                                Gotham City mob bank; the Joker manipulates them into
                                                murdering each other for a higher share until only he remains, escaping
                                                with the
                                                money. Batman, District Attorney Harvey Dent and Lieutenant Jim Gordon
                                                form an
                                                alliance to rid Gotham of organized crime. Bruce Wayne is impressed with
                                                Dent's
                                                idealism and offers to support his career; he believes that, with Dent
                                                as
                                                Gotham's protector, he can give up being Batman and lead a normal life
                                                with
                                                Rachel Dawes—even though she and Dent are dating.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">8,92€</p>

                                           
                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primaryb shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>





                        <div class="row2">
                            <div class="box">
                                <div class="filterDiv 10to20 german 3 blue pre sci">
                                    <div class="column1">
                                        <a href="moviePage.html">
                                            <img class="productImage" src="images/dune.PNG" alt="">
                                            <p class="title">Dune (2021)</p> <br>
                                            <p class="author">Director: Denis Villeneuve</p> <br>
                                            <p class="author">Writer: Jon Spaihts, <br> &emsp;&emsp;&nbsp;&nbsp;&nbsp;
                                                Denis
                                                Villeneuve</p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast: Timothée Chalamet, <br> &emsp;&emsp;&nbsp; Rebecca
                                                Ferguson,
                                                <br>&emsp;&emsp;&nbsp; Oscar Isaac
                                            </p>
                                            <p class="description">Feature adaptation of Frank Herbert's
                                            </p>
                                            <p class="description1">
                                                science fiction
                                                novel, about the son of a noble family entrusted with the protection of
                                                the
                                                most
                                                valuable asset and most vital element in the galaxy. A mythic and
                                                emotionally
                                                charged hero's journey, "Dune" tells the story of Paul Atreides, a
                                                brilliant and
                                                gifted young man born into a great destiny beyond his understanding, who
                                                must
                                                travel to the most dangerous planet in the universe to ensure the future
                                                of his
                                                family and his people. As malevolent forces explode into conflict over
                                                the
                                                planet's exclusive supply of the most precious resource in existence-a
                                                commodity
                                                capable of unlocking humanity's greatest potential-only those who can
                                                conquer
                                                their fear will survive.
                                            </p>

                                            <div class="costAvail">
                                                <p class="preOrder">Pre-order</p>
                                                <p class="bookPrice">12,99€</p>
                                            </div>

                                            
                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary1 shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv 5to10 french 1 dvd in sci">
                                    <div class="column1">
                                        <a href="starWarsMovie.html">
                                            <img class="productImage" src="images/starWars3Movie.jpg" alt="">
                                            <p class="title">Star Wars: Episode III - Revenge of the Sith (2005)</p>
                                            <br>
                                            <p class="author">Director: George Lucas</p> <br>
                                            <p class="author">Writer: George Lucas</p>
                                            <br>
                                            <p class="author">Composer: John Williams</p> <br>
                                            <p class="author">Cast: Hayden Christensen, <br> &emsp;&emsp; Ewan McGregor,
                                                <br>&emsp;&emsp; Natalie Portman
                                            </p>
                                            <p class="description"></p>
                                            <p class="description1">
                                                Three years into the Clone Wars, the Jedi rescue
                                                Palpatine
                                                from Count Dooku. As Obi-Wan pursues a new threat, Anakin acts as a
                                                double
                                                agent
                                                between the Jedi Council and Palpatine and is lured into a sinister plan
                                                to rule
                                                the galaxy.
                                            </p>
                                            <div class="costAvail">
                                                <p class="inStock">In Stock</p>
                                                <p class="bookPrice">9,74€</p>
                                            </div>

                                           
                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary1a shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv under5 czech 2 dvd out sci com">
                                    <div class="column1">
                                        <a href="moviePage.html">
                                            <img class="productImage" src="images/backToTheFutureMovie.PNG" alt="">
                                            <p class="title">Back to the Future (1985)</p> <br>
                                            <p class="author">Director: Robert Zemeckis</p> <br>
                                            <p class="author">Writer:
                                                Robert Zemeckis, <br> &emsp;&emsp;&emsp; Bob Gale</p> <br>
                                            <p class="author">Composer: Alan Silvestri</p> <br>
                                            <p class="author">Cast:
                                                Michael J. Fox, <br> &emsp;&emsp; Christopher Lloyd,
                                                <br>&emsp;&emsp; Lea Thompson
                                            </p>
                                            <p class="description">In 1985, Marty McFly is a typical </p>
                                            <p class="description1">
                                                teenager living in
                                                Hill
                                                Valley, California. Marty's meek father George is bullied by his
                                                supervisor,
                                                Biff Tannen. His mother Lorraine is a depressed alcoholic, and his older
                                                siblings are professional and social failures. Marty's band is rejected
                                                for a
                                                music contest. He confides in his girlfriend, Jennifer Parker, about
                                                fears of
                                                becoming like his parents despite his ambitions.
                                            </p>
                                            <div class="costAvail">
                                                <p class="outOfStock">Out of Stock</p>
                                                <p class="bookPrice">4,99€</p>
                                            </div>

                                           
                                        </a>

                                        <div class="shop-item-details">

                                            <button class="btn btn-primary1b shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="row3">
                            <div class="box">
                                <div class="filterDiv under5 czech 4 dvd out wes">
                                    <div class="column2">
                                        <a href="moviePage.html">
                                            <img class="productImage" src="images/the good the bad and the ugly.jpg"
                                                alt="">
                                            <p class="title">The Good, the Bad and <br> the Ugly (1966)</p> <br>
                                            <p class="author">Director: Sergio Leone</p> <br>
                                            <p class="author">Writer: Sergio Leone</p> <br>
                                            <p class="author">Composer: Ennio Morricone</p> <br>
                                            <p class="author">Cast: Clint Eastwood, <br> &emsp;&emsp; Lee Van Cleef,
                                                <br>&emsp;&emsp; Eli Wallach
                                            </p>
                                            <p class="description">

                                            </p>
                                            <p class="description1">
                                                A bounty hunting scam joins two men in an uneasy alliance
                                                against a third in a race to find a fortune in gold buried in a remote
                                                cemetery.
                                                In 1862, during the American Civil War, a mercenary known as "Angel
                                                Eyes"
                                                interrogates former Confederate soldier Stevens, whom Angel Eyes is
                                                contracted
                                                to kill, about Jackson, a fugitive who stole a cache of Confederate
                                                gold.
                                                Learning Jackson's new alias "Bill Carson", Angel Eyes kills Stevens and
                                                then
                                                his employer Baker so he can find the gold himself. Bandit Tuco Ramirez
                                                is
                                                rescued from bounty hunters by a nameless drifter to whom Tuco refers as
                                                "Blondie", who delivers him to the local sheriff to collect his $2,000
                                                bounty.
                                                As Tuco is about to be hanged, Blondie severs Tuco's noose by shooting
                                                it, and
                                                sets him free. The two escape on horseback and split the bounty. They
                                                repeat the
                                                process in other towns until Blondie grows weary of Tuco's complaints
                                                and
                                                strands him in the desert.
                                            </p>
                                            <div class="costAvail">
                                                <p class="outOfStock">Out of Stock</p>
                                                <p class="bookPrice">4,12€</p>
                                            </div>

                                            
                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary2 shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="filterDiv under5 english 5 dvd in rom dra">
                                    <div class="column2">
                                        <a href="moviePage.html">
                                            <img class="productImage" src="images/casablancaMovie.jpg" alt="">
                                            <p class="title">Casablanca (1942)</p> <br>
                                            <p class="author">Director: Michael Curtiz</p> <br>
                                            <p class="author">Writer: Julius J. Epstein, <br> &emsp;&emsp; Philip G.
                                                Epstein
                                            </p> <br>
                                            <p class="author">Composer: Max Steiner</p> <br>
                                            <p class="author">Cast: Humphrey Bogart, <br> &emsp;&emsp; Ingrid Bergman
                                            </p>
                                            <p class="description">A cynical expatriate American cafe owner struggles to
                                                decide
                                                whether or
                                            </p>
                                            <p class="description1">
                                                not to help his former lover andher fugitive husband escape the
                                                Nazis in French Morocco. In December 1941, American expatriate Rick
                                                Blaine owns
                                                a nightclub and gambling
                                                den in Casablanca. "Rick's Café Américain" attracts a varied clientele,
                                                including Vichy French and German officials, refugees desperate to reach
                                                the
                                                neutral United States, and those who prey on them. Although Rick
                                                professes to be
                                                neutral in all matters, he ran guns to Ethiopia during the Second
                                                Italo-Ethiopian War and fought on the Republican side in the Spanish
                                                Civil War.
                                            </p>
                                            <div class="costAvail">
                                                <p class="inStock">In Stock</p>
                                                <p class="bookPrice">4,00€</p>


                                            </div>
                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary2a shop-item-button" type="button">ADD
                                                TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filterDiv under5 english 2 dvd out dra">
                                    <div class="column2">
                                        <a href="moviePage.html">
                                            <img class="productImage" src="images/godfatherMovie.jpg" alt="">
                                            <p class="title">The Godfather (1972)</p> <br>
                                            <p class="author">Director:
                                                Francis Ford Coppola</p> <br>
                                            <p class="author">Writer:
                                                Mario Puzo, <br> &emsp;&emsp;&emsp; Francis Ford Coppola</p> <br>
                                            <p class="author">Composer: Nino Rota</p> <br>
                                            <p class="author">Cast: Marlon Brando, <br> &emsp;&emsp; Al Pacino,
                                                <br>&emsp;&emsp; James Caan
                                            </p>
                                            <p class="description">The Godfather follows Vito Corleone,
                                            </p>
                                            <p class="description1">
                                                Don of the
                                                Corleone
                                                family, as he passes the mantel to his unwilling son, Michael. In 1945
                                                New York City, at his daughter Connie's wedding to
                                                Carlo,
                                                Vito Corleone,
                                                the Don of the Corleone crime family listens to requests. His youngest
                                                son,
                                                Michael, who was a Marine during World War II, introduces his
                                                girlfriend, Kay
                                                Adams, to his family at the reception. Johnny Fontane, a popular singer
                                                and
                                                Vito's godson, seeks Vito's help in securing a movie role; Vito
                                                dispatches his
                                                consigliere, Tom Hagen, to Los Angeles to persuade studio head Jack
                                                Woltz to
                                                give Johnny the part. Woltz refuses until he wakes up in bed with the
                                                severed
                                                head of his prized stallion.
                                            </p>
                                            <div class="costAvail">
                                                <p class="outOfStock">Out of Stock</p>
                                                <p class="bookPrice">4,89€</p>
                                            </div>


                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary2b shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="wholePage1">
                    <a class="page1" href="#" onclick="return show('Page2','Page1');">2</a>
                    <a class="page" href="#" onclick="return show('Page1','Page2');">1</a>
                </div>

            </div>
        </div>











        <div class="switching">
            <div id="Page2" style="display:none">

                <div class="container">
                    <div class="products">
                        <div class="row1">
                            <div class="box">

                                <div class="filterDiv under5 english a dvd in hor">
                                    <div class="column">
                                        <a href="moviePage.html">
                                            <img src="images/shiningMovie.jpg" alt="">

                                            <p class="title">Shining (1980)</p> <br>
                                            <p class="author">Director: Stanley Kubrick</p> <br>
                                            <p class="author">Writer: Stephen King, <br>
                                                &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp; Stanley Kubrick
                                            </p> <br>
                                            <p class="author">Composer: Wendy Carlos</p> <br>
                                            <p class="author">Cast: Jack Nicholson, <br> &emsp;&emsp; Shelley
                                                Duvall,
                                                <br>&emsp;&emsp; Danny Lloyd
                                            </p>
                                            <p class="description">A family heads to an isolated hotel for the
                                                winter
                                                where
                                                a sinister presence influences the father into </p>
                                            <p class="description1">
                                                violence, while his psychic
                                                son sees horrific forebodings from both past and future. In Boulder,
                                                Jack's
                                                son, Danny, has a premonition and seizure. Jack's wife,
                                                Wendy, tells the doctor about a past incident when Jack dislocated
                                                Danny's
                                                shoulder during a drunken rage. The incident convinced Jack to stop
                                                drinking
                                                alcohol. Before leaving for the seasonal break, head chef Dick
                                                Hallorann
                                                informs Danny of a telepathic ability the two share, which he calls
                                                "shining". Hallorann tells Danny the hotel also has a "shine" due to
                                                residues from unpleasant past events, and warns him to avoid Room
                                                237.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">4,99€</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="filterDiv 5to10 czech b blue in hor">
                                    <div class="column">
                                        <a href="moviePage.html">
                                            <img src="images/conjuringMovie.jpg" alt="">

                                            <p class="title">Conjuring (2013)</p> <br>
                                            <p class="author">Director:
                                                James Wan</p> <br>
                                            <p class="author">Writer:
                                                Chad Hayes <br> &emsp;&emsp;&emsp;
                                                Carey W. Hayes</p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast: Patrick Wilson, <br> &emsp;&emsp; Vera Farmiga,
                                                <br>&emsp;&emsp; Lili Taylor
                                            </p>
                                            <p class="description">Paranormal investigators Ed and Lorraine Warren
                                                work
                                                to
                                                help a family terrorized by a dark presence </p>
                                            <p class="description1">
                                                in their farmhouse. In 1971, Roger and Carolyn Perron move into a
                                                farmhouse
                                                in Harrisville,
                                                Rhode Island, with their five daughters: Andrea, Nancy, Christine,
                                                Cindy,
                                                and April. Their dog, Sadie, refuses to enter the house. They
                                                discover
                                                the
                                                entrance to a cellar which has been boarded up.

                                                Paranormal events occur within the first few nights. Every clock in
                                                the
                                                house stops at 3:07 AM, birds fly into their windows, Sadie is found
                                                dead in
                                                the morning, and Carolyn wakes up with large bruises. One night,
                                                Christine
                                                encounters a malevolent spirit. Another night, Carolyn hears
                                                clapping in
                                                the
                                                hallway and becomes trapped in the basement. Andrea and Cindy are
                                                attacked
                                                in their bedroom by a spirit believed to be the one that Christine
                                                had
                                                encountered.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">8,69€</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="filterDiv 5to10 english a blue in mys act">
                                    <div class="column">
                                        <a href="moviePage.html">
                                            <img src="images/sherlockHolmesMovie.jpg" alt="">

                                            <p class="title">Sherlock Holmes (2009)</p> <br>
                                            <p class="author">Director:
                                                Guy Ritchie</p> <br>
                                            <p class="author">Writer: Michael Robert Johnson <br> &emsp;&emsp;&emsp;
                                                Anthony Peckham</p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast: Robert Downey Jr., <br> &emsp;&emsp;&nbsp; Jude
                                                Law,
                                                <br>&emsp;&emsp; Rachel McAdams
                                            </p>
                                            <p class="description">Detective Sherlock Holmes and his stalwart
                                                partner
                                                Watson
                                                engage in a battle of wits and brawn with a </p>
                                            <p class="description1">
                                                nemesis whose plot is a threat
                                                to all of England. In 1890 London, private detective Sherlock Holmes
                                                and
                                                his
                                                partner Dr. John
                                                Watson prevent the ritualistic murder of a woman by Lord Henry
                                                Blackwood,
                                                who has killed five other young women in a similar manner. Inspector
                                                Lestrade and the police arrest Blackwood. Three months later, Watson
                                                is
                                                engaged to Mary Morstan and moving out of 221B Baker Street; while
                                                he
                                                enjoys
                                                their adventures together, Watson looks forward to not having to
                                                deal
                                                with
                                                Holmes' eccentricities. Meanwhile, Blackwood, who claims to have
                                                supernatural powers, has been sentenced to death and requests to see
                                                Holmes,
                                                warning him of three more unstoppable deaths that will cause great
                                                changes
                                                to the world. Blackwood is subsequently hanged.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">9,99€</p>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row2">
                            <div class="box">

                                <div class="filterDiv 10to20 german c dvd in act">
                                    <div class="column1">
                                        <a href="moviePage.html">
                                            <img src="images/johnWickMovie.jpg" alt="">
                                            <p class="title">John Wick (2014)</p> <br>
                                            <p class="author">Director:
                                                Chad Stahelski </p>
                                            <br>
                                            <p class="author">Writer: Derek Kolstad </p>
                                            <br>
                                            <p class="author">Composer:
                                                Tyler Bates</p> <br>
                                            <p class="author">Cast:
                                                Keanu Reeves, <br> &emsp;&emsp;&nbsp; Alfie Allen,
                                                <br>&emsp;&emsp; Michael Nyqvist, <br>&emsp;&emsp; Willem Dafoe
                                            </p>
                                            <p class="description">An ex-hit-man comes out of retirement to track
                                                down
                                                the
                                                gangsters that killed his dog and
                                            </p>
                                            <p class="description1">
                                                took everything from him. Legendary hitman
                                                John Wick retired from his career as a contract killer to
                                                live a normal life with his wife Helen, and the two have lived
                                                happily
                                                for 5
                                                years. John then loses Helen to a terminal illness, and is
                                                heartbroken.
                                                While struggling with his loss, he receives a beagle puppy named
                                                Daisy
                                                that
                                                Helen had arranged to send before she died, to help him cope with
                                                his
                                                grief.
                                                Despite John's stoic demeanor, he bonds with the puppy and they
                                                spend
                                                the
                                                day driving around in his vintage 1969 Ford Mustang Mach 1. At a gas
                                                station, he encounters a trio of Russian gangsters whose leader
                                                Iosef
                                                insists on buying his car, which John refuses to sell. That evening
                                                the
                                                gangsters break into John's home, knock him unconscious, kill Daisy,
                                                and
                                                steal his car.
                                            </p>
                                            <div class="costAvail">
                                                <p class="inStock">In Stock</p>
                                                <p class="bookPrice">10,05€</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="filterDiv 5to10 czech b dvd in mys dra">
                                    <div class="column1">
                                        <a href="moviePage.html">
                                            <img src="images/sevenMovie.jpg" alt="">
                                            <p class="title">Seven (1995)</p> <br>
                                            <p class="author">Director: David Fincher</p> <br>
                                            <p class="author">Writer: Andrew Kevin Walker</p>
                                            <br>
                                            <p class="author">Composer: Howard Shore</p> <br>
                                            <p class="author">Cast: Morgan Freeman, <br> &emsp;&emsp; Brad Pitt,
                                                <br>&emsp;&emsp; Kevin Spacey, <br>&emsp;&emsp; Gwyneth Paltrow
                                            </p>
                                            <p class="description">Two detectives, a rookie and a veteran, hunt a
                                                serial
                                                killer who uses the seven deadly sins as his</p>
                                            <p class="description1">
                                                motives. Soon-to-retire Detective Lieutenant William Somerset is
                                                partnered
                                                with
                                                short-tempered but idealistic Detective David Mills, who has
                                                recently
                                                moved
                                                to an unnamed large city with his wife Tracy. After forming a
                                                friendship
                                                with Somerset, Tracy confides to him that she is pregnant and has
                                                yet to
                                                tell Mills, as she is unhappy with the city and feels it is no place
                                                to
                                                raise a child. Somerset sympathizes, having had a similar situation
                                                with
                                                his
                                                ex-girlfriend many years earlier, and advises her to tell Mills only
                                                if
                                                she
                                                plans to keep the child.
                                            </p>
                                            <div class="costAvail">
                                                <p class="inStock">In Stock</p>
                                                <p class="bookPrice">7,99€</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="filterDiv 10to20 french a blue pre mys dra">
                                    <div class="column1">
                                        <a href="moviePage.html">
                                            <img src="images/DeathOnTheNileMovie.jpg" alt="">
                                            <p class="title">Death on the Nile (2022)</p> <br>
                                            <p class="author">Director:
                                                Kenneth Branagh</p> <br>
                                            <p class="author">Writer:
                                                Agatha Christie, <br> &emsp;&emsp; Michael Green</p>
                                            <br>
                                            <p class="author">Composer: Patrick Doyle</p> <br>
                                            <p class="author">Cast: Kenneth Branagh, <br> &emsp;&emsp; Gal Gadot,
                                                <br>&emsp;&emsp; Emma Mackey
                                            </p>
                                            <p class="description">While on vacation on the Nile, Hercule Poirot
                                                must
                                                investigate the murder of a young heiress. </p>
                                            <p class="description1">
                                                The peace and tranquility that was temporarily present on the S.S.
                                                Karnak is
                                                destroyed after one of the passengers is found murdered. Renowned
                                                Belgian
                                                detective Hercule Poirot is entrusted with the important task of
                                                identifying
                                                which one of the passengers is the killer before they strike again.
                                            </p>
                                            <div class="costAvail">
                                                <p class="preOrder">Pre-order</p>
                                                <p class="bookPrice">11,99€</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row3">
                            <div class="box">

                                <div class="filterDiv under5 english d dvd out mys">
                                    <div class="column2">
                                        <a href="moviePage.html">
                                            <img src="images/rearWindowMovie.jpg" alt="">
                                            <p class="title">
                                                Rear Window (1954)</p> <br>
                                            <p class="author">Director: Alfred Hitchcock</p> <br>
                                            <p class="author">Writer:
                                                John Michael Hayes, <br> &emsp;&emsp; Cornell Woolrich
                                            </p> <br>
                                            <p class="author">Composer: Franz Waxman</p> <br>
                                            <p class="author">Cast:
                                                James Stewart, <br> &emsp;&emsp; Grace Kelly,
                                                <br>&emsp;&emsp; Wendell Corey
                                            </p>
                                            <p class="description">A wheelchair-bound photographer spies on his
                                                neighbors
                                                from his Greenwich Village courtyard </p>
                                            <p class="description1">
                                                apartment window, and becomes convinced
                                                one of them has committed murder, despite the skepticism of his
                                                fashion-model girlfriend. Recuperating from a broken leg,
                                                professional
                                                photographer L. B. "Jeff"
                                                Jefferies is confined to a wheelchair in his apartment in Greenwich
                                                Village,
                                                Manhattan. His rear window looks out onto a courtyard and other
                                                apartments.
                                                During an intense heat wave, he watches his neighbors, who keep
                                                their
                                                windows open to stay cool. They are a lonely woman whom Jeff
                                                nicknames
                                                'Miss
                                                Lonelyhearts', a newlywed couple, a pianist, a pretty dancer
                                                nicknamed
                                                'Miss
                                                Torso', a middle-aged couple whose small dog likes digging in the
                                                flower
                                                garden, and Lars Thorwald, a traveling costume jewelry salesman with
                                                a
                                                bedridden wife.
                                            </p>
                                            <div class="costAvail">
                                                <p class="outOfStock">Out of Stock</p>
                                                <p class="bookPrice">4,29€</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="filterDiv 5to10 english c dvd in fan">
                                    <div class="column2">
                                        <a href=moviePage.html"">
                                            <img src="images/prisonerOfAzkabanMovie.jpg" alt="">
                                            <p class="title">Harry Potter and the <br> Prisoner of Azkaban (2004)
                                            </p>
                                            <br>
                                            <p class="author">Director:
                                                Alfonso Cuarón</p> <br>
                                            <p class="author">Writer:
                                                J.K. Rowling, <br> &emsp;&emsp; Steve Kloves
                                            </p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast:
                                                Daniel Radcliffe, <br> &emsp;&emsp; Emma Watson,
                                                <br>&emsp;&emsp; Rupert Grint
                                            </p>
                                            <p class="description">Harry Potter, Ron and Hermione return to Hogwarts
                                                School
                                                of </p>
                                            <p class="description1">
                                                Witchcraft and Wizardry for their third year of study, where they
                                                delve
                                                into the mystery surrounding an escaped prisoner who poses a
                                                dangerous
                                                threat to the young wizard..
                                            </p>
                                            <div class="costAvail">
                                                <p class="inStock">In Stock</p>
                                                <p class="bookPrice">8,36€</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="filterDiv 5to10 czech e dvd out dra">
                                    <div class="column2">
                                        <a href="moviePage.html">
                                            <img src="images/pulpFictionMovie.jpg" alt="">
                                            <p class="title">Pulp Fiction (1994)</p> <br>
                                            <p class="author">Director: Quentin Tarantino</p> <br>
                                            <p class="author">Writer:
                                                Quentin Tarantino, <br> &emsp;&emsp; Roger Avary
                                            </p> <br>
                                            <p class="author">Composer: Hans Zimmer</p> <br>
                                            <p class="author">Cast:
                                                John Travolta, <br> &emsp;&emsp; Samuel L. Jackson,
                                                <br>&emsp;&emsp; Uma Thurman, <br>&emsp;&emsp; Bruce Willis
                                            </p>
                                            <p class="description">The lives of two mob hitmen, a boxer, a gangster
                                                and
                                                his
                                                wife, and a </p>
                                            <p class="description1">
                                                pair of diner bandits intertwine in four tales of violence and
                                                redemption. Pulp Fiction's narrative is told out of chronological
                                                order,
                                                and
                                                follows
                                                three main interrelated stories that each have a different
                                                protagonist:
                                                Vincent Vega, a hitman; Butch Coolidge, a prizefighter; and Jules
                                                Winnfield,
                                                Vincent's business partner.
                                            </p>
                                            <div class="costAvail">
                                                <p class="outOfStock">Out of Stock</p>
                                                <p class="bookPrice">6,18€</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wholePage">

                    <a class="page2" href="#" onclick="return show('Page2','Page1');">2</a>
                    <a class="page3" href="#" onclick="return show('Page1','Page2');">1</a>

                </div>
            </div>
        </div>

    </section>


    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">0€</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
    </section>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    $('a').click(function () {
        $('*').removeClass("visited");

    });

    $('a').click(function () {

        $(this).addClass("visited");

    });



    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }



    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current control button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }


    function show(shown, hidden) {
        document.getElementById(shown).style.display = 'block';
        document.getElementById(hidden).style.display = 'none';
        return false;
    }


    function show(shown, hidden) {
        document.getElementById(shown).style.display = 'block';
        document.getElementById(hidden).style.display = 'none';
        return false;
    }


    if (document.readyState == 'loading') {
        document.addEventListener('DOMContentLoaded', ready)
    } else {
        ready()
    }

    function ready() {
        var removeCartItemButtons = document.getElementsByClassName('btn-danger')
        for (var i = 0; i < removeCartItemButtons.length; i++) {
            var button = removeCartItemButtons[i]
            button.addEventListener('click', removeCartItem)
        }

        var quantityInputs = document.getElementsByClassName('cart-quantity-input')
        for (var i = 0; i < quantityInputs.length; i++) {
            var input = quantityInputs[i]
            input.addEventListener('change', quantityChanged)
        }

        var addToCartButtons = document.getElementsByClassName('shop-item-button')
        for (var i = 0; i < addToCartButtons.length; i++) {
            var button = addToCartButtons[i]
            button.addEventListener('click', addToCartClicked)
        }

        document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
    }

    function purchaseClicked() {
        alert('Thank you for your purchase')
        var cartItems = document.getElementsByClassName('cart-items')[0]
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)
        }
        updateCartTotal()
    }

    function removeCartItem(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        updateCartTotal()
    }

    function quantityChanged(event) {
        var input = event.target
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1
        }
        updateCartTotal()
    }

    function addToCartClicked(event) {
        var button = event.target
        var shopItem = button.parentElement.parentElement
        var title = shopItem.getElementsByClassName('title')[0].innerText
        var price = shopItem.getElementsByClassName('bookPrice')[0].innerText
        var imageSrc = shopItem.getElementsByClassName('productImage')[0].src
        addItemToCart(title, price, imageSrc)
        updateCartTotal()
    }

    function addItemToCart(title, price, imageSrc) {
        var cartRow = document.createElement('div')
        cartRow.classList.add('cart-row')
        var cartItems = document.getElementsByClassName('cart-items')[0]
        var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
        for (var i = 0; i < cartItemNames.length; i++) {
            if (cartItemNames[i].innerText == title) {
                alert('This item is already added to the cart')
                return
            }
        }
        var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
        cartRow.innerHTML = cartRowContents
        cartItems.append(cartRow)
        cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
        cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    }

    function updateCartTotal() {
        var cartItemContainer = document.getElementsByClassName('cart-items')[0]
        var cartRows = cartItemContainer.getElementsByClassName('cart-row')
        var total = 0
        for (var i = 0; i < cartRows.length; i++) {
            var cartRow = cartRows[i]
            var priceElement = cartRow.getElementsByClassName('cart-price')[0]
            var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
            var price = parseFloat(priceElement.innerText.replace('€', ''))
            var quantity = quantityElement.value
            total = total + (price * quantity)
        }

        document.getElementsByClassName('cart-total-price')[0].innerText = total + '€'
    }

</script>