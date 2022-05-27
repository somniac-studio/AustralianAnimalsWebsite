<?php
    $animals = [
        ["commonname"=>"Sulphur Crested Cockatoo" , "taxonomy"=>"bird" , "class"=>"aves" , "order"=>"Psittaciformes" , "genus"=>"Cacatua" , "species"=>"C.galerita"],
        ["commonname"=>"Budgerigar" , "taxonomy"=>"bird" , "class"=>"aves" , "order"=>"Psittaciformes" , "genus"=>"Birb" , "species"=>"C.galerita"],
        ["commonname"=>"Laughing Kookaburra" , "taxonomy"=>"bird" , "class"=>"aves" , "order"=>"Psittaciformes" , "genus"=>"Filler" , "species"=>"C.galerita"]
    ];
?>

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
                <a href=".//contact.php">Contact</a>
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

        <h2>Mammals</h2>
        <h3>they are mammals which is crazy</h3>

        <div class="container">
            <div class="animalmenu">
                <div class="animalitem">
                    <a href="mammals/echidna.php"><img alt="echidna" src="../images/echidna-01.jpg">
                    </a>
                    <h2>Echidna</h2>
                </div>
                <div class="animalitem">
                    <a href="mammals/platypus.php"><img alt="platypus" src="../images/platypus-01.jpg"></a>
                    <h2>Duck-billed Platypus</h2>
                </div>
                <div class="animalitem">
                    <a href="mammals/wombat.php"><img alt="wombat" src="../images/wombat-01.jfif"></a>
                    <h2>Wombat</h2>
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

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        </body>
        <!--Footer-->
        <footer class="footer">
            <a href="https://www.griffith.edu.au">Griffith University</a>
            <p>©S5300739 Web Developments, 2022</p>
        </footer>
    </html>