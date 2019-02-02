<link rel="stylesheet" type="text/css" media="screen" href="studyzone.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <img src="kulogo.png" height="50" width="50"> 
    <div id="headersection">
     
        <ul>
                
               <!--<p id="topic">KU EXPRESS</p>-->
            <li><a href="index.php"> Home</li></a>
            <li><a href="project/project.html"> Notices</li></a>
            <li> <a href="studyzone.php">Study Zone</li></a>
            <li><a href="faculty.html"> Faculty</li></a>
            <li><a href="filter.php"> Student</li></a>
            <li><a href="gallery.html">Gallery</li></a>
            <li> <a href="">About US</li></a>
        </ul>
        
    </div>
    <h1 class="topics"> Study Zone </h1>
    <p class="sz"> Welcome to the study Zone. Here You can collect syllabus ,routine ,books, assignments, solutions and various other studying materials. Not only collecting you can upload and share your study materials too. Interaction makes this page emjoyable so i believe you will be interacting with us through this page and yes if you have any study material we would like to request you to kindly update it here. mention the semester year and material name in the heading if the uploaded file. Thank you. KU EXPRESS.
</p>
    <div class="soe">
           <center> <h1 class="heading"> School Of Engineering</h1></center>
            <main id="accordion">
        <section id="ce">
            <a href="#ce"><h2><i class="fa fa-laptop" aria-hidden="true"></i>Computer Engineering</h2></a>
            <ul>
                <li>

                    
                                                            <?php
                                                            ?>
                                                            <form method="POST" enctype="multipart/form-data" action="upload.php">
                                                            <input type="file" name="file">
                                                                <input type="submit" value="Upload">
                                                            </form>
                                                            <?php
                                                            $files= scandir("uploads");
                                                            for ($a=2; $a< count ($files); $a++)
                                                            {
                                                            ?>
                                                            <p>
                                                            <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                                            </p>
                                                            <?php
                                                            }?>
            </li>
            </ul>
        </section>
        <section id="civil">
                <a href="#civil"><h2><i class="fa fa-building" aria-hidden="true"></i>Civil Engineering</h2></a>
                <ul>
                <li>
                                                        <?php
                                                        ?>
                                                        <form method="POST" enctype="multipart/form-data" action="upload.php">
                                                        <input type="file" name="file">
                                                            <input type="submit" value="Upload">
                                                        </form>
                                                        <?php
                                                        $files= scandir("uploads");
                                                        for ($a=2; $a< count ($files); $a++)
                                                        {
                                                        ?>
                                                        <p>
                                                        <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                                        </p>
                                                        <?php
                                                        }?>
            </li>
            </ul>
            </section>
            <section id="ee">
                    <a href="#ee"><h2><i class="fa fa-car" aria-hidden="true"></i>Mechanical Engineering</h2></a>
                    <ul>
                <li>
                                                                <?php
                                                                ?>
                                                                <form method="POST" enctype="multipart/form-data" action="upload.php">
                                                                <input type="file" name="file">
                                                                    <input type="submit" value="Upload">
                                                                </form>
                                                                <?php
                                                                $files= scandir("uploads");
                                                                for ($a=2; $a< count ($files); $a++)
                                                                {
                                                                ?>
                                                                <p>
                                                                <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                                                </p>
                                                                <?php
                                                                }?>
            </li>
            </ul>
                </section>
                <section id="ge">
                        <a href="#ge"><h2><i class="fa fa-bolt"></i></i>Electrical Engineering</h2></a>
                        <ul>
                <li>
                                                    <?php
                                                    ?>
                                                    <form method="POST" enctype="multipart/form-data" action="upload.php">
                                                    <input type="file" name="file">
                                                        <input type="submit" value="Upload">
                                                    </form>
                                                    <?php
                                                    $files= scandir("uploads");
                                                    for ($a=2; $a< count ($files); $a++)
                                                    {
                                                    ?>
                                                    <p>
                                                    <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                                    </p>
                                                    <?php
                                                    }?>
            </li>
            </ul>
                    </section>
                    <section id="ges">
                            <a href="#ges"><h2><i class="fa fa-road" aria-hidden="true"></i>Geomatics Engineering</h2></a>
                            <ul>
                <li>
                                            <?php
                                            ?>
                                            <form method="POST" enctype="multipart/form-data" action="upload.php">
                                            <input type="file" name="file">
                                                <input type="submit" value="Upload">
                                            </form>
                                            <?php
                                            $files= scandir("uploads");
                                            for ($a=2; $a< count ($files); $a++)
                                            {
                                            ?>
                                            <p>
                                            <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                            </p>
                                            <?php
                                            }?>
            </li>
            </ul>
                        </section>
                </main>
        
    </div>
    <div class="sos">
        <h1 class="heading"> School of Science</h1>
        
                <main id="accordion">
            <section id="cs">
                <a href="#cs"><h2><i class="fa fa-laptop" aria-hidden="true"></i>Computer Science</h2></a>
                <ul>
                <li>
                            <?php
                            ?>
                            <form method="POST" enctype="multipart/form-data" action="upload.php">
                            <input type="file" name="file">
                            <input type="submit" value="Upload">
                             </form>
                            <?php
                            $files= scandir("uploads");
                            for ($a=2; $a< count ($files); $a++)
                            {
                            ?>
                            <p>
                            <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                            </p>
                            <?php
                             }?>
                </li>
                </ul>
            </section>
            <section id="phar">
                    <a href="#phar"><h2><i class="fa fa-medkit" aria-hidden="true"></i>Pharmancy</h2></a>
                    <ul>
                <li>
                                <?php
                                ?>
                                <form method="POST" enctype="multipart/form-data" action="upload.php">
                                <input type="file" name="file">
                                    <input type="submit" value="Upload">
                                </form>
                                <?php
                                $files= scandir("uploads");
                                for ($a=2; $a< count ($files); $a++)
                                {
                                ?>
                                <p>
                                <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                </p>
                                <?php
                                }?>
            </li>
            </ul>
                </section>
                <section id="es">
                        <a href="#es"><h2><i class="fa fa-envira" aria-hidden="true"></i>Environmental Science</h2></a>
                        <ul>
                <li>
                                <?php
                                ?>
                                <form method="POST" enctype="multipart/form-data" action="upload.php">
                                <input type="file" name="file">
                                    <input type="submit" value="Upload">
                                </form>
                                <?php
                                $files= scandir("uploads");
                                for ($a=2; $a< count ($files); $a++)
                                {
                                ?>
                                <p>
                                <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                </p>
                                <?php
                                }?>
            </li>
            </ul>
                    </section>
                    <section id="bt">
                            <a href="#bt"><h2><i class="fa fa-adjust" aria-hidden="true"></i>Biotechnology</h2></a>
                            <ul>
                <li>
                                    <?php
                                    ?>
                                    <form method="POST" enctype="multipart/form-data" action="upload.php">
                                    <input type="file" name="file">
                                        <input type="submit" value="Upload">
                                    </form>
                                    <?php
                                    $files= scandir("uploads");
                                    for ($a=2; $a< count ($files); $a++)
                                    {
                                    ?>
                                    <p>
                                    <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                                    </p>
                                    <?php
                                    }?>
            </li>
            </ul>
                        </section>
                    </main>
    </div>
   



