<?php
    $page = "books";
    include 'header.php';
?>
    
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="books.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use">

    <title>Bookshop: Books</title>

</head>

<body>
    <section>
       
        <div class="filter">
            <div class="price">

                <div class="choices2">
                    <div id="myBtnContainer">
                        <h3>Price </h3>
                        <a class="btn" onclick="filterSelection('under10')">Under 10€ </a> <br>
                        <a class="btn" onclick="filterSelection('10to20')"> 10€ to 20€ </a> <br>
                        <a class="btn" onclick="filterSelection('20to50')"> 20€ to 50€ </a> <br>
                        <a class="btn" onclick="filterSelection('above50')"> Above 50€ </a> <br>

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
                    <h3>Cover</h3>
                    <a class="btn" onclick="filterSelection('hard')">Hardback</a> <br>
                    <a class="btn" onclick="filterSelection('paper')">Paperback</a>
                </div>
            </div>

            <div class="condition">

                <div class="choices">
                    <h3>Condition</h3>
                    <a class="btn" onclick="filterSelection('new')">New</a> <br>
                    <a class="btn" onclick="filterSelection('used')">Used</a>

                </div>
            </div>

            <div class="availability">
                <div class="choices">
                    <h3>Availability</h3>
                    <a class="btn" onclick="filterSelection('in')">In Stock</a> <br>
                    <a class="btn" onclick="filterSelection('pre')">Pre-order <br></a>
                    <a class="btn" onclick="filterSelection('out')">Out of Stock</a>
                </div>

            </div>

            <div class="genre"></div>
            <div class="choices">
                <h3>Genre</h3>
                <a class="btn" onclick="filterSelection('adv')">Adventure</a>
                <a class="btn" onclick="filterSelection('fan')">Fantasy</a> <br>
                <a class="btn" onclick="filterSelection('mys')">Mystery</a> <br>
                <a class="btn" onclick="filterSelection('poe')">Poetry</a> <br>
                <a class="btn" onclick="filterSelection('hor')">Horror </a> <br>
                <a class="btn" onclick="filterSelection('rom')">Romance <br></a>
                <a class="btn" onclick="filterSelection('sci')">Sci-Fi</a>
            </div>


        </div>


        <div class="reset">
            <a class="btn" onclick="filterSelection('all')">Reset Filters</a>
        </div>

        </div>




        <div class="switching">
            <div id="Page1">

                <div class="container" id="myUL">
                    <div class="products">
                        <div class="LOTR">
                            <div class="box">
                                <div class="filterDiv 20to50 english hard 5 new in fan adv">
                                    <div class="column">
                                        <a href="bookPage.html">
                                            <img class="productImage" src="images/lotr 1 hd.jpg" alt="">

                                            <p class="title">The Lord of the Rings</p> <br>
                                            <p class="author">J.R.R. Tolkien</p>
                                            <p class="description">The Fellowship of the Ring, the first volume in the
                                                trilogy,
                                                tells of
                                                the fateful power of the One Ring. It begins a magnificent tale of
                                                adventure
                                                that will
                                                plunge the members of the Fellowship of the Ring into a perilous quest
                                                and
                                                set the stage
                                                for the ultimate clash between the powers of good and evil.
                                            </p>
                                            <p class="description1">
                                                The volume
                                                contains
                                                a Prologue for readers
                                                who have not read The Hobbit, and background information to set the
                                                stage
                                                for
                                                the novel. The body of the volume consists of Book One: The Ring Sets
                                                Out,
                                                and
                                                Book Two: The Ring Goes South.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">24,99€</p>


                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>


                                    </div>
                                </div>
                                <div class="filterDiv 10to20 english paper 4 used in fan adv">
                                    <div class="column">
                                        <a href="bookPage.html">
                                            <img class="productImage" src="images/witcherBook.jpg" alt="">
                                            <p class="title">The Witcher: The Last Wish</p> <br>
                                            <p class="author">Andrzej Sapkowski</p>
                                            <p class="description">The Last Wish is the first of the two collections of
                                                short
                                                stories
                                                preceding the main Witcher Saga. The collection contains seven short
                                                stories
                                                interspersed with a continuing frame story: Geralt of Rivia, after
                                                having
                                                been
                                                injured in battle, rests in a temple.
                                            </p>
                                            <p class="description1">
                                                During that time he has flashbacks to recent
                                                events
                                                in his
                                                life, with each flashback forming a short story. The King of Temeria,
                                                Foltest,
                                                has offered a reward to anyone who can lift the curse on his daughter,
                                                Adda
                                                (the
                                                result of an incestuous union with his late sister, also named Adda),
                                                who
                                                was
                                                born as a striga, and now terrorizes the town every night.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">14,20€</p>



                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primarya shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="filterDiv 10to20 french hard 4 new in fan">
                                    <div class="column">
                                        <a href="harryPotterBook.html">
                                            <img class="productImage" src="images/harry.jpg" alt="">
                                            <p class="title">Harry Potter and the Philosopher's Stone</p> <br>
                                            <p class="author">J. K. Rowling<p>
                                                <p class="description">The first novel in the Harry Potter series
                                                    follows
                                                    Harry
                                                    Potter,
                                                    a young wizard who discovers his magical heritage on his eleventh
                                                    birthday,
                                                    when he
                                                    receives a letter of acceptance to Hogwarts School of Witchcraft and
                                                    Wizardry. And with the help of his friends, he faces an</p>
                                                <p class="description1">

                                                    attempted comeback by the
                                                    dark
                                                    wizard
                                                    Lord
                                                    Voldemort who killed Harry's parents, but failed to kill Harry when
                                                    he
                                                    was
                                                    just 15 months old. The first book concludes with Harry's
                                                    confrontation with Voldemort, who, in his quest to regain a body,
                                                    yearns to gain the power of the Philosopher's Stone, a substance
                                                    that bestows everlasting life.
                                                </p>
                                                <p class="inStock">In Stock</p>
                                                <p class="bookPrice">12,99€</p>



                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primaryb shop-item-button" type="button">ADD
                                                TO
                                                CART</button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="PJ">
                            <div class="box">
                                <div class="filterDiv 10to20 german paper 5 new out fan adv">
                                    <div class="column1">
                                        <a href="bookPage.html">
                                            <img class="productImage" src="images/PJ hd.jpg" alt="">
                                            <p class="title">Percy Jackson: <br> The Lighting Thief</p> <br>
                                            <p class="author">Rick Riordan</p>
                                            <p class="description">Suddenly, mythical creatures seem to be walking
                                                straight
                                                out
                                                of the
                                                pages of Percy's Greek mythology textbook and into his life. The gods of
                                                Mount
                                                Olympus,
                                                he's coming to realize, are very much alive in the 21st-century. And
                                                worse,
                                                suspect. he's </p>
                                            <p class="description1">
                                                angered
                                                a few of them: Zeus's master lightning bolt has been stolen, and Percy
                                                is
                                                the
                                                prime
                                                Will he sucsesfuly retrieve the bolt or will he fail? As a son of
                                                Poseidon, one of the "Big Three" (the others being Zeus and Hades),
                                                Percy is more powerful than most of the gods' other children.
                                            </p>
                                            <p class="outOfStock">Out of Stock</p>
                                            <p class="bookPrice">12,09€</p>

                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary1 shop-item-button" type="button">ADD
                                                TO
                                                CART</button>
                                        </div>


                                    </div>
                                </div>

                                <div class="filterDiv 10to20 german hard 3 new out sci">
                                    <div class="column1">
                                        <a href="duneBook.html">
                                            <img class="productImage" src="images/duneBook.jpg" alt="">
                                            <p class="title">Dune</p> <br>
                                            <p class="author">Frank Herbert</p>
                                            <p class="description">Dune is set in the distant future amidst a feudal
                                                interstellar
                                                society in which various noble houses control planetary fiefs. It tells
                                                the
                                                story of
                                                young Paul Atreides, whose family accepts the stewardship of the planet
                                                Arrakis.
                                                While
                                                the planetis an inhospitable and sparsely populated desert wasteland
                                            </p>
                                            <p class="description1">
                                                , it is the
                                                only
                                                source of melange, or "spice", a drug that extends life and enhances
                                                mental
                                                abilities.
                                                As melange can
                                                only be produced on Arrakis, control of the planet is a coveted and
                                                dangerous
                                                undertaking. The story explores the multilayered interactions of
                                                politics,
                                                religion,
                                                ecology, technology, and human emotion, as the factions of the empire
                                                confront
                                                each
                                                other in a struggle for the control of Arrakis and its spice.
                                            </p>
                                            <p class="outOfStock">Out of Stock</p>
                                            <p class="bookPrice">15,49€</p>


                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary1a shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>


                                    </div>
                                </div>

                                <div class="filterDiv under10 czech hard 3 used out mys hor">
                                    <div class="column1">
                                        <a href="bookPage.html">
                                            <img class="productImage" src="images/draculaBook.jpg" alt="">
                                            <p class="title">Dracula</p> <br>
                                            <p class="author">Bram Stoker</p>
                                            <p class="description">As an epistolary novel, the narrative is related
                                                through
                                                letters,
                                                diary entries, and newspaper articles. It has no single protagonist, but
                                                opens
                                                with
                                                solicitor Jonathan Harker taking a business trip to stay at the castle
                                                of a
                                                Transylvanian noble, Count Dracula. Harker escapes the castle after
                                                discovering that
                                                Dracula </p>
                                            <p class="description1">
                                                is a vampire, and the Count moves to England and plagues the
                                                seaside
                                                town of
                                                Whitby. A small group, led by Abraham Van Helsing, hunt Dracula and, in
                                                the
                                                end,
                                                kill
                                                him.He also obtains a bullet- and sword-proof lion skin coat when he
                                                killed the Nemean lion.
                                            </p>
                                            <p class="outOfStock">Out of Stock</p>
                                            <p class="bookPrice">9,59€</p>


                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary1b shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>


                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="ASOIAF">
                            <div class="box">

                                <div class="filterDiv 20to50 english hard 4 new in fan">
                                    <div class="column2">
                                        <a href="bookPage.html">
                                            <img class="productImage" src="images/aDWDBook.jpg" alt="">
                                            <p class="title">ASOIAF: A Dance with Dragons</p> <br>
                                            <p class="author">G.R.R. Martin</p>
                                            <p class="description">Having killed his father Tywin, the Hand of the King,
                                                the
                                                dwarf Tyrion Lannister is smuggled out of Westeros to the city of Pentos
                                                by
                                                the
                                                spymaster Varys, where he is sheltered by the merchant Illyrio Mopatis.
                                                Stannis
                                                Baratheon, a claimant to the Iron Throne of
                                            </p>
                                            <p class="description1">


                                                Westeros, occupies the Wall at
                                                the realm's northern border, having helped to repel an invasion of
                                                wildlings
                                                from
                                                the northern wilderness.
                                                Daenerys has conquered the city of Meereen and banned
                                                slavery, but struggles to maintain peace among various factions within
                                                the
                                                city,
                                                including the Sons of the Harpy, a violent Meereenese resistance group,
                                                and
                                                with
                                                the neighboring city of Yunkai.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">20,54€</p>



                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary2 shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>

                                    </div>
                                </div>

                                <div class="filterDiv 20to50 english hard 3 new pre fan">
                                    <div class="column2">

                                        <a href="bookPage.html">
                                            <img class="productImage" src="images/windsOfWinter.jpg" alt="">
                                            <p class="title">ASOIAF: The Winds of Winter</p> <br>
                                            <p class="author">G.R.R. Martin</p>
                                            <p class="description">The Winds of Winter will take readers farther north
                                                than
                                                any
                                                of the
                                                previous books, and the Others will appear in the book. The previous
                                                installment, A
                                                Dance with Dragons, covered less story than Martin intended, excluding
                                                at least
                                                one planned large battle sequence and

                                            </p>
                                            <p class="description1">
                                                leaving several character threads ending
                                                in
                                                cliffhangers. Martin intends to resolve these storylines "very early" in
                                                The
                                                Winds of Winter. Senses while near the water; the ability to breathe
                                                underwater and operate old sailing ships with his mind
                                            </p>
                                            <p class="preOrder">Pre-order</p>
                                            <p class="bookPrice">24,49€</p>



                                        </a>
                                        <div class="shop-item-details">

                                            <button class="btn btn-primary2a shop-item-button" type="button">ADD TO
                                                CART</button>
                                        </div>

                                    </div>

                                </div>

                                <div class="filterDiv 10to20 french paper 2 used in fan">
                                    <div class="column2">

                                        <a href="bookPage.html">
                                            <img class="productImage" src="images/stoneSkyBook.jpg" alt="">
                                            <p class="title">The Stone Sky</p> <br>
                                            <p class="author">N. K. Jemisin</p>
                                            <p class="description">As with the other books in the Broken Earth series,
                                                The
                                                Stone
                                                Sky is mostly set in a single supercontinent referred to as the
                                                Stillness by
                                                its
                                                inhabitants. Most of humanity lives in city-states referred to as
                                                "comms,"
                                                and are segregated into social castes based on their usefulness to
                                                society. The Stillness is constantly

                                            </p>
                                            <p class="description1">

                                                wracked
                                                by geological cataclysms, and every few
                                                hundred years an event is severe enough to touch off a global volcanic
                                                winter,
                                                referred to as a Fifth Season. Some characters, referred to as orogenes,
                                                have
                                                the ability to manipulate geological energies on a large scale, as well
                                                as
                                                magic
                                                on a smaller scale. They are a persecuted and feared minority, though it
                                                is
                                                largely due to their efforts humanity has survived the Seasons at all.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">14,09€</p>


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








            </div>
            <div class="wholePage">
                <a class="page1" href="#" onclick="return show('Page2','Page1');">2</a>
                <a class="page" href="#" onclick="return show('Page1','Page2');">1</a>
            </div>

        </div>



        <div id="Page2" style="display:none">

            <div class="container" id="myUL">
                <div class="products">
                    <div class="LOTR">
                        <div class="box">

                            <div class="filterDiv under10 german paper 3 used in sci">
                                <div class="column">
                                    <a href="bookPage.html">
                                        <img src="images/metroBook.jpg" alt="">

                                        <p class="title">Metro 2033</p> <br>
                                        <p class="author">Dmitry Glukhovsky</p>
                                        <p class="description">In 2013, a nuclear war forced a large amount of
                                            Moscow's
                                            surviving population to relocate to the city's Metro system in search of
                                            refuge.
                                            Eventually, communities settled within the underground train stations
                                            and
                                            developed into independent states over time.
                                        </p>
                                        <p class="description1">
                                            Factions emerged, ranging from the independent
                                            peacekeepers the "Rangers of the Order", to the neo-Stalinist "Red
                                            Line" faction and the neo-Nazi "Fourth Reich", to the more powerful
                                            factions
                                            such as "Polis", which contained the greatest military power and the
                                            most
                                            knowledge of the past, and the "Hanza" regime, which controlled the main
                                            ring of
                                            metro stations by its sheer economic power.
                                        </p>
                                        <p class="inStock">In Stock</p>
                                        <p class="bookPrice">9,99€</p>
                                    </a>
                                </div>
                            </div>

                            <div class="filterDiv 20to50 english hard 4 new in fan">
                                <div class="column">
                                    <a href="bookPage.html">
                                        <img src="images/oathbringerBook.jpg" alt="">
                                        <p class="title">Oathbringer</p> <br>
                                        <p class="author">Brandon Sanderson</p>
                                        <p class="description">Dalinar Kholin's Alethi armies won a fleeting victory
                                            at
                                            a
                                            terrible cost: The enemy Parshendi summoned the violent Everstorm, which
                                            now
                                            sweeps the world with destruction, and in its passing awakens the once
                                            peaceful
                                            and subservient parshmen to the horror of their millennia-long</p>
                                        <p class="description1">
                                            enslavement by
                                            humans. While on a desperate flight to warn his family of the threat,
                                            Kaladin
                                            Stormblessed must come to grips with the fact that the newly kindled
                                            anger
                                            of
                                            the parshmen may be wholly justified. Nestled in the mountains high
                                            above
                                            the
                                            storms, in the tower city of Urithiru, Shallan Davar investigates the
                                            wonders of
                                            the ancient stronghold of the Knights Radiant and unearths dark secrets
                                            lurking
                                            in its depths. And Dalinar realizes that his holy mission to unite his
                                            homeland
                                            of Alethkar was too narrow in scope. Unless all the nations of Roshar
                                            can
                                            put
                                            aside Dalinar's blood-soaked past and stand together--and unless Dalinar
                                            himself
                                            can confront that past--even the restoration of the Knights Radiant will
                                            not
                                            prevent the end of civilization.
                                        </p>
                                        <p class="inStock">In Stock</p>
                                        <p class="bookPrice">21,32€</p>
                                    </a>
                                </div>
                            </div>

                            <div class="filterDiv above50 french hard 5 used in mys">
                                <div class="column">
                                    <a href="bookPage.html">
                                        <img src="images/theNineGatesBook.jpg" alt="">
                                        <p class="title">The Nine Gates</p> <br>
                                        <p class="author">Aristide Torchia<p>
                                            <p class="description">Boris Balkan's version of the book of "The Nine
                                                Gates
                                                of
                                                the Kingdom of Shadows." Includes all nine engravings, chapter
                                                pages,
                                                latin
                                                text and cover has worn out leather look. "The Nine Gates of the
                                                Kingdom
                                                of
                                                Shadows" a.k.a. De Umbrarum Regni Novem Portis was </p>
                                            <p class="description1">
                                                written by Aristide
                                                Torchia in Venice, 1666. The book contains nine woodcut engravings
                                                rumoured
                                                to be copied from the apocryphal Delomelanicon, a book purportedly
                                                written
                                                by the devil himself. The Nine Gates is said to contain within its
                                                pages
                                                knowledge to raise the devil. The author was burned, along with all
                                                his
                                                works in 1667. Three copies are known to survive, one with Baroness
                                                Kessler,
                                                one in the Fargas collection and one previously in the possession of
                                                Andrew
                                                Telfer but sold to Boris Balkan.
                                            </p>
                                            <p class="inStock">In Stock</p>
                                            <p class="bookPrice">256,66€</p>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="PJ">
                        <div class="box">

                            <div class="filterDiv 10to20 english hard 3 new out fan adv">
                                <div class="column1">
                                    <a href="bookPage.html">
                                        <img src="images/theBloodofOlympusBook.jpg" alt="">
                                        <p class="title">Heroes of Olympus: <br> The Blood of Olympus</p> <br>
                                        <p class="author">Rick Riordan</p>
                                        <p class="description">The seven demigods of the Prophecy of Seven—Percy
                                            Jackson,
                                            Annabeth Chase, Jason Grace, Leo Valdez, Piper McLean, Hazel Levesque,
                                            and
                                            Frank
                                            Zhang—go on their final adventure to defeat
                                        </p>
                                        <p class="description1">
                                            Gaea/Terra while Nico di Angelo, Reyna Avila Ramírez-Arellano, and Coach
                                            Gleeson
                                            Hedge attempt to bring the
                                            Athena Parthenos to Camp Half-Blood in order to prevent a war between
                                            the
                                            Roman
                                            and Greek demigods. The novel is narrated in third-person, alternating
                                            between the points of view of Jason, Piper, Leo, Reyna, and Nico, making
                                            it
                                            the
                                            first time in the series that someone other than one of the seven
                                            demigods
                                            of
                                            the prophecy is the viewpoint character.
                                        </p>
                                        <p class="outOfStock">Out of Stock</p>
                                        <p class="bookPrice">13,10€</p>
                                    </a>
                                </div>
                            </div>

                            <div class="filterDiv english paper 4 new pre fan mys">

                                <div class="column1">
                                    <a href="bookPage.html">
                                        <img src="images/theGoldenTowerBook.jpg" alt="">
                                        <p class="title">Magisterium: <br> The Golden Tower</p> <br>
                                        <p class="author">Holy Black & <br> Cassandra Clare</p>
                                        <p class="description">A generation ago, powerful mage Constantine Madden
                                            came
                                            close
                                            to achieving what no magician had ever achieved: the ability to bring
                                            back
                                            the
                                            dead. He didn't succeed </p>
                                        <p class="description1">
                                            but he did find a way to keep himself alive,
                                            inside a young child named Callum Hunt.
                                            Facing up to what he is, Callum has battled chaos and evil across four
                                            years
                                            of
                                            magical training at the Magisterium, eventually defeating the armies of
                                            chaos in
                                            an epic battle.
                                        </p>
                                        <p class="preOrder">Pre-order</p>
                                        <p class="bookPrice">Unknown</p>
                                    </a>
                                </div>
                            </div>
                            <div class="filterDiv english hard 2 new pre fan">
                                <div class="column1">
                                    <a href="bookPage.html">
                                        <img src="images/theAtlasSixBook.jpg" alt="">
                                        <p class="title">The Atlas Six</p> <br>
                                        <p class="author">Olivie Blake</p>
                                        <p class="description">The Alexandrian Society, caretakers of lost knowledge
                                            from
                                            the greatest civilizations of antiquity, are the foremost secret society
                                            of
                                            magical academicians in the world. Those who earn a place among the
                                            Alexandrians
                                            will secure a life of wealth, power, and prestige beyond
                                        </p>
                                        <p class="description1">
                                            their wildest dreams,
                                            and each decade, only the six most uniquely talented magicians are
                                            selected
                                            to
                                            be considered for initiation. Enter the latest round of six: Libby
                                            Rhodes
                                            and
                                            Nico de Varona, unwilling halves of an unfathomable whole, who exert
                                            uncanny
                                            control over every element of physicality.
                                        </p>
                                        <p class="preOrder">Pre-order</p>
                                        <p class="bookPrice">Unknown</p>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="ASOIAF">
                        <div class="box">


                            <div class="filterDiv 20to50 english paper 4 new pre mys">
                                <div class="column2">
                                    <a href="bookPage.html">
                                        <img src="images/gwendysFinalTaskBook.jpg" alt="">
                                        <p class="title">Gwendy's Final Task</p> <br>
                                        <p class="author">Stephen King</p>
                                        <p class="description">When Gwendy Peterson was twelve, a mysterious
                                            stranger
                                            named
                                            Richard Farris gave her a mysterious box for safekeeping. It offered
                                            treats
                                            and
                                            vintage coins, but it was dangerous. Pushing any of its seven
                                            colored
                                            buttons
                                            promised death and destruction. Years later,
                                        </p>

                                        <p class="description1">
                                            the button box entered Gwendy’s life again. A successful novelist
                                            and a rising political star, she was once again forced to deal with
                                            the
                                            temptation that box represented. Now, evil forces seek to possess
                                            the button
                                            box
                                            and it is up to Senator Gwendy Peterson to keep it from them. At all
                                            costs.
                                            But
                                            where can you hide something from such powerful entities?
                                        </p>
                                        <p class="preOrder">Pre-order</p>
                                        <p class="bookPrice">23,99</p>
                                    </a>
                                </div>
                            </div>

                            <div class="filterDiv english hard 3 new pre fan">
                                <div class="column2">
                                    <a href="bookPage.html">
                                        <img src="images/theFallOfGondolin.jpg" alt="">
                                        <p class="title">The Fall of Gondolin</p> <br>
                                        <p class="author">J. R. R. Tolkien</p>
                                        <p class="description">In the Tale of The Fall of Gondolin are two of the
                                            greatest
                                            powers in the world. There is Morgoth of the uttermost evil, unseen in
                                            this
                                            story but ruling over a vast military power from his fortress of
                                            Angband.
                                            Deeply
                                            opposed to Morgoth is Ulmo, second in might only to Manwë,
                                        </p>

                                        <p class="description1">
                                            chief of the Valar:
                                            he is called the Lord of Waters, of all seas, lakes, and rivers under
                                            the
                                            sky.
                                            But he works in secret in Middle-earth to support the Noldor, the
                                            kindred of
                                            the
                                            Elves among whom were numbered Húrin and Túrin Turambar.
                                            Central to this enmity of the gods is the city of Gondolin, beautiful
                                            but
                                            undiscoverable. It was built and peopled by Noldorin Elves who, when
                                            they
                                            dwelt
                                            in Valinor, the land of the gods, rebelled against their rule and fled
                                            to
                                            Middle-earth. Turgon King of Gondolin is hated and feared above all his
                                            enemies
                                            by Morgoth, who seeks in vain to discover the marvellously hidden city,
                                            while
                                            the gods in Valinor in heated debate largely refuse to intervene in
                                            support
                                            of
                                            Ulmo’s desires and designs.
                                        </p>
                                        <p class="preOrder">Pre-order</p>
                                        <p class="bookPrice">Unknown</p>
                                    </a>
                                </div>
                            </div>

                            <div class="filterDiv 10to20 english paper 2 new pre fan adv">
                                <div class="column2">
                                    <a href=bookPage.html"">
                                        <img src="images/returnOfTheDragonSlayersBook.jpg" alt="">
                                        <p class="title">Dragonwatch: Return of the Dragon Slayers</p> <br>
                                        <p class="author">Brandon Mull</p>
                                        <p class="description">The magical world teeters on the brink of
                                            collapse. The
                                            Dragon King, Celebrant, has united the dragons into a vengeful army,
                                            and
                                            only a
                                            final artifact stands in the way of them unleashing their fury
                                            against

                                        </p>

                                        <p class="description1">
                                            humankind. With established allegiances shifting under the strain,
                                            Seth and
                                            Kendra find themselves in desperate need of new allies.
                                            Seth must face his most dangerous quest—the fulfillment of his
                                            pledge to the
                                            Singing Sisters. With only Calvin the Tiny Hero at his side, Seth
                                            needs to
                                            collect the pieces of the Ethergem, including the stones from the
                                            crowns of
                                            the
                                            Dragon King, the Giant Queen, and the Demon King.
                                            Halfway across the world, Kendra finds herself torn between her duty
                                            to
                                            Dragonwatch and her desire to rescue Bracken. Can she challenge
                                            Ronodin’s
                                            control of the fairy realm without leaving the five legendary dragon
                                            slayers
                                            to
                                            be hunted by Celebrant and his sons?
                                        </p>
                                        <p class="preOrder">Pre-order</p>
                                        <p class="bookPrice">15,40€</p>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

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