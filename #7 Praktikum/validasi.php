<html>
    <head>
        <title>
            QUIZ
        </title>
    </head>
    <body>
        <h1>PHP Form Validation</h1>
        <font color=red>* required field<br><br></font>
        <form action="" method="POST" name="input">
            Name : <input type="text" name="name" required><font color=red> *</font><br><br>
            Email : <input type="email" name="email" required><font color=red> *</font><br><br>
            Website : <input type="url" name="website"><br><br>
            Comment : <textarea name="comment" cols=40 rows=5></textarea><br><br>
            Gender : <input type="radio" name="gender" value="Male" > Male <input type="radio" name="gender" value="Female" required> Female<font color=red> *</font><br><br>
            <input type="submit" name="input" value="Submit">
        </form> 

        <h2>Your Input : </h2>

        <?php
            if (isset($_POST['input'])) 
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $website = $_POST['website'];
                $comment = $_POST['comment'];
                $gender = $_POST['gender'];

                echo $name."<br>";  
                echo $email."<br>";
                echo $website."<br>";
                echo $comment."<br>";
                echo $gender."<br>";
            }
        ?>

    </body>
</html>