<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/pinred-min.png">
        
        <title>Notices For ISE Department</title>
    </head>
    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation_checkbox" id="navi"></input>

            <label for="navi" class="navigation_button">
                <span class="navigation_icon">&nbsp;</span>
            </label>

            <div class="navigation_background">&nbsp;</div>

            <nav class="navigation_nav">
                <ul class="navigation_list">
                    <li class="navigation_item"><a href="index.php" class="navigation_link">home</a></li>
                    <li class="navigation_item"><a href="all.php" class="navigation_link">All Notices</a></li>
                    <li class="navigation_item"><a href="cat.php" class="navigation_link">View by category</a></li>
                    <li class="navigation_item"><a href="login.php" class="navigation_link">Login</a></li>
                    <li class="navigation_item"><a href="query.php" class="navigation_link">queries</a></li>
                </ul>
            </nav>

        </div>

        
            <section class="notice-section-book">
                <div class="row">
                    <div class="notice-book">
                        <div class="book_form">
                            <form action="cat01.php" class="form" method="POST">

                                    <div class="u-margin-bottom-medium">
                                            <h2 class="heading-secondary">
                                                 Select a Category
                                            </h2>
                                    </div>



                                <div class="form_group u-margin-bottom-medium">

                                    <div class="form_radio-group">
                                        <input type="radio" class="form_radio-input" id="cultural" name="cat" value="cultural">
                                        <label for="cultural" class="form_radio-label">
                                                <span class="form_radio-button"></span>
                                                Cultural</label>
                                    </div>

                                    <div class="form_radio-group">
                                        <input type="radio" class="form_radio-input" id="technical" name="cat" value="technical">
                                        <label for="technical" class="form_radio-label">
                                            <span class="form_radio-button"></span>
                                            Technical</label>
                                    </div>

                                    <div class="form_radio-group">
                                        <input type="radio" class="form_radio-input" id="academic" name="cat" value="academic">
                                        <label for="academic" class="form_radio-label">
                                            <span class="form_radio-button"></span>
                                            Academic</label>
                                    </div>

                                    <div class="form_radio-group">
                                        <input type="radio" class="form_radio-input" id="anaadyanta" name="cat" value="anaadyanta">
                                        <label for="anaadyanta" class="form_radio-label">
                                            <span class="form_radio-button"></span>
                                            Anaadyanta</label>
                                    </div>
    
                                </div>

                                <div class="form_group">
                                    <button class="btn btn-green">Submit &rarr;</button>
                                </div>
                               
                            </form>
                        </div>




            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nmit";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "select * from notices where category='".$_POST["cat"]."'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                ?>
                <center>
                <table width="1000" border="1" callpadding="1" cellspacing="1" style="margin-right: 3rem">
                                <tr>
                                            <th width="10%">Notice ID</th>
                                            <th width="10%">Date</th>
                                            <th width="20%">Category</th>
                                            <th width="50%">Description</th>
                                            <th width="10%">Employee ID</th>
                                </tr>
                </table>

                <?php
                // output data of each row
                while($row = $result->fetch_assoc()) {
                
                ?>
                <table width="1000" border="1" callpadding="1" cellspacing="1" style="margin-right: 3rem">
                <tr>


                        <td width="10%"><center><?php echo $row["nid"]?></center></td>
                        <td width="10%"><center><?php echo $row["ndate"]?></center></td>
                        <td width="20%"><center><?php echo $row["category"]?></center></td>
                        <td width="50%"><center><?php echo $row["description"]?></center></td>
                        <td width="10%"><center><?php echo $row["eid"]?></center></td>




<!--                                 <td>" . $row["ndate"]. "</td>
                                <td>" . $row["category"]. "</td>
                                <td>" . $row["description"]. "</td>
                                <td>" . $row["eid"]. "</td>
                                </tr>"; -->


                </tr>
                </table>
                <?php
                }

            } else {
                echo "<h3><center>"."0 Results"."</center></h3>";
            }

            $conn->close();
            ?> 

                    </center>

                    </div>
                </div>
            </section>

        </main>


    </body>
</html>


