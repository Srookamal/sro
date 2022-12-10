<?php include('insert.php'); ?>

            <h1>Add Admin</h1>  
            <?php 
                if(isset($_SESSION['add'])){
                echo $_SESSION['add'];  //display session
                unset( $_SESSION['add']);
                }
                ?>          
                  <br><br> 

            <form action="" method="POST">
                <table class="tbl-30">

                         

                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="username" placeholder="Your User Name ">
                        </td>
                    </tr>

                    <tr>
                        <td>Password </td>
                        <td>
                            <input type="password" name="password" placeholder="Your password ">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secodery">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

<?php include('insert.php'); ?>
 
<?php
    // proces the value from form and saves it into DB
    // check the btn clicked or not

    if(isset($_POST['submit']))
    // submit === name of the input   
    {
        // btn clicked 
        // echo "btn clicked";

        // Get the Data from form
        $full_name = $_POST['full_name'];
        $username  = $_POST['username'];
        $password  = md5($_POST['password']);

        // sql query to save the data into DB
        $sql = "INSERT INTO user SET
        username  = '$username',
        password  = '$password'
        ";  

        $res  = mysqli_query($conn,$sql) or die(mysqli_error());  
        if($res == TRUE){
            // echo 'inserted';
            // start session
            $_SESSION['add'] = "Admin Added Seccessfully";
            // redirect page
            header("location:".SITEURL.'e.php');

        }else{
              // echo 'not inserted';
              // start session
              $_SESSION['add'] = "Admin faild Seccessfully";
              // redirect page
              header("location:".SITEURL.'e.php');
        }        
    }
?>