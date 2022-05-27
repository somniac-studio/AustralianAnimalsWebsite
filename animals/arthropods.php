<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>1621ICT Ongoing Project</title>
            <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
            <link rel="stylesheet" href="../style.css">

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
                <a href="../index.php">Home</a>
                <a href="../about.php">About</a>
                <a href="../contact.php">Contact</a>
            <div class="dropdown">
                <a class="top-links, dropbtn">Animals  <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="birds.php">Birds</a>
                        <a href="mammals.php">Mammals</a>
                        <a href="fish.php">Fish</a>
                        <a href="reptiles.php">Reptiles</a>
                        <a href="arthropods.php">Arthropods</a>
                        <a href="amphibians.php">Amphibians</a>
                    </div>
                </div>
            </div>
        </nav>

        <!--Content Body-->
        <body>

        <h2>Arthropods yo</h2>

        <div class="container">
            <div class="animalmenu">
                <div class="animalitem">
                    <a href="amphibians/greentreefrog.html"><img alt="green tree frog" src="../images/greentreefrog01.jpg">
                    </a>
                    <h2>Green Tree Frog</h2>
                </div>
                <div class="animalitem">
                    <a href="amphibians/waterfallfrog.html"><img alt="waterfall frog" src="../images/waterfallfrog01.jpeg"></a>
                    <h2>Waterfall Frog</h2>
                </div>
                <div class="animalitem">
                    <a href="amphibians/canetoad.html"><img alt="cane toad" src="../images/canetoad01.jpg"></a>
                    <h2>Cane Toad</h2>
                </div>
            </div>
        </div>

        <table>
                    <tr>
                        <th>Common Name</th>
                        <th>Taxonomy</th>
                        <th>Class</th>
                        <th>Order</th>
                        <th>Genus</th>
                        <th>Species</th>
                    </tr>
                    <?php
                        foreach($animals as $animal)
                        {
                            echo "<tr>";
                                echo "<td>" . $animal["commonname"] . "</td>";
                                echo "<td>" . $animal["taxonomy"] . "</td>";
                                echo "<td>" . $animal["class"] . "</td>";
                                echo "<td>" . $animal["order"] . "</td>";
                                echo "<td>" . $animal["genus"] . "</td>";
                                echo "<td>" . $animal["species"] . "</td>";
                        }
                    ?>
        </table>

        </body>
        <!--Footer-->
        <footer class="footer">
            <a href="https://www.griffith.edu.au">Griffith University</a>
            <p>©S5300739 Web Developments, 2022</p>
        </footer>
    </html>