<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>1621ICT Ongoing Project</title>
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">

            <meta name="description" content="A Web-based catalogue of Australian Animals">
            <meta name="keywords" content="Animals, Australia, Mammals, Sighting, Database">
            <meta name="author" content="S5300759">
        </head>

        <!--Sticky Header-->
        <header>
            <div class="header">
                <h1>Australian Animals</h1>
            </div>
        </header>

        <!--Centered Navigation Bar-->
        <nav>
            <div class="topnav">
            
            <div class="top-links">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            <div class="dropdown">
                <a class="top-links, dropbtn">Animals  <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="animals/birds.php">Birds</a>
                        <a href="animals/mammals.php">Mammals</a>
                        <a href="animals/fish.php">Fish</a>
                        <a href="animals/reptiles.php">Reptiles</a>
                        <a href="animals/arthropods.php">Arthropods</a>
                        <a href="animals/amphibians.php">Amphibians</a>
                    </div>
                </div>
            </div>
        </nav>


        <!--Content Body-->
        <body>
            <div class="container">
                <div class="row">
                    <h2>Report a Sighting</h2>
                </div>
            
            <div class="container">
            <form action="submission.html" method="POST">
                <div class="row">
                <div class="col">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first-name" name="first-name">
                        </div>
                    </div>

                    <div class="col">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="last-name">
                        </div>
                    </div>

                <div class="row">

                    <div class="col">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                    </div>

                <div class="row">
                <div class="col">
                    <label for="animal-type" class="form-label">Class of Animal</label>
                        <select name="animal-type" class="form-select"id="animal-type">
                            <option value="amphibian">Amphibian</option>
                            <option value="arthropod">Arthropod</option>
                            <option value="birds">Birds</option>
                            <option value="fish">Fish</option>
                            <option value="mammal">Mammal</option>
                            <option value="reptile">Reptile</option>
                        </select>
                    </div>

                    <div class="mb-3">    
                    <label for="sighting-date" class="form-label">Date of Sighting</label>
                        <input type="date" name="sighting-date" id="sighting-date">
                    </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <label  class="form-check-label">Time of Sighting</label>
                                
                                <input type="radio" class="form-check-input" name="sighting-time" id="day" value="day">
                                <label  class="form-label" for="day">Day</label>
                                
                                <input type="radio"  class="form-check-input" name="sighting-time" id="night" value="night">
                                <label  class="form-check-label" for="night">Night</label>
                           </div>  
                        </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                    <label for="description" class="form-label">Description of Animal</label>
                    <textarea id="description" class="form-control" name="description" rows="4" cols="60">Please briefly describe the animal.</textarea>
                    </div>
                </div>

            </div>

                <div class="row">
                <div class="col">
                    <div class="mb-3">
                    <label for="state-sighted" class="form-label">State Sighted</label>
                        <select name="state-sighted" class="form-select" id="state-sighted">
                            <option value="ACT">ACT</option>
                            <option value="NSW">NSW</option>
                            <option value="QLD">QLD</option>
                            <option value="SA">SA</option>
                            <option value="VIC">VIC</option>
                            <option value="WA">WA</option>
                        </select>
                        </div>
                    </div>
                
                    <div class="mb-3">
                        <label for="nearest-town" class="form-label">Nearest Town</label>
                        <input type="text" class="form-control" id="nearest-town" name="nearest-town">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>

            </div>
        
        <div class="container">
            <h3>Contact Details</h3>
            <div itemscope itemtype="https://schema.org/Person">
                <span itemprop="name">Australian Animals Inst.</span>

            <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">
                    170 Kessels Rd.
                </span>
                <span itemprop="addressLocality">Nathan</span>,
                <span itemprop="addressRegion">QLD</span>
                <span itemprop="postalCode">411</span>
            </div>
                <span itemprop="telephone">(+61)431266791</span>
            <a href="mailto:australiananimals@griffith.edu.au" itemprop="email">
            AustralianAnimals@griffith.edu.au</a>
            </div>
        </div>

        
        </body>


        <!--Footer-->
        <footer class="footer">
            <a href="contact-but-bootstrap.html">Secret Bootstrap Example Form</a>
            </br>
            <a href="https://www.griffith.edu.au">Griffith University</a>
            <p>©S5300739 Web Developments, 2022</p>
        </footer>
    </html>