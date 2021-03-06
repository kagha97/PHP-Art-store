<?php
include "includes/customer-validation.php";
include 'includes/primary-navigation.inc.php';
include "includes/head.inc.php";


    try {
        $conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    //City sql for select
    $citySql = "SELECT DISTINCT city FROM Customers WHERE city != '' ORDER BY city ASC";
    $cityResult = $conn->prepare($citySql);
    $cityResult->execute();



    $countrySql = "SELECT DISTINCT country FROM Customers WHERE country != '' ORDER BY country ASC";
    $countryResult = $conn->prepare($countrySql);
    $countryResult->execute();



    $stateSql = "SELECT DISTINCT region FROM Customers WHERE region != '' ORDER BY region ASC";
    $stateResult = $conn->prepare($stateSql);
    $stateResult->execute();






/*foreach($cityResult as $key=> $value) {
    echo $value['city'];


} */

//check to see if user is admin
if ( @$_SESSION['cusID']) {
    echo '<script type="text/javascript">
alert("You are already registered and logged in.");
window.location.href = \'index.php/\';
</script>';

}

?>




<!DOCTYPE html>
<html lang="en">

<style>.error{color : red; margin-top: 0px; margin-bottom: 0px;}</style>
<body>



<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="google-font"><span class = "glyphicon glyphicon-user"></span> Register Account </h3>


</div>
    <form  method = "post" action = "<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="form-group row">


            <div class="col-md-5" style = "margin-left: 16px; margin-top: 10px;">
            <div id = "email">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name = "email" placeholder="Email" value="<?php echo $email;?>">
                <span class = "error"><?php echo $emailErr?></span>
            </div>
            </div>
        </div>

        <div class="form-group row-md-5">
            <div id = "firstname" class="col-md-6">
                <label for="inputPassword4">First Name</label>
                <input type="text" class="form-control" name = "firstname" placeholder="First Name" value="<?php echo $firstName;?>">
                <span class = "error"><?php echo $firstNameErr?></span>
                <br/>
            </div>
            <div id = "lastname" class="col-md-6">
                <label for="inputPassword4">Last Name</label>
                <input type="text" class="form-control" name = "lastname" placeholder="Last Name" value="<?php echo $lastName;?>">
                <span class = "error"><?php echo $lastNameErr?></span>
                <br/>
            </div>
        </div>

        <div class="form-group row-md-5">
            <div id = "password" class="col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name = "password" placeholder="Password" value="<?php echo $password;?>">
                <span class = "error"><?php echo $passwordErr?></span>
                <br/>
            </div>
            <div id = "cpassword" class="col-md-6">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control" name = "cpassword" placeholder="Confirm Password" value = "<?php echo $cpassword;?>">
                <span class = "error"><?php echo $cPasswordErr?></span>
                <br/>
            </div>
        </div>

        <div class="form-group row-md-5" >
            <div id = "phone" class="col-md-6">
                <label for="inputPassword4">Phone Number</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone Number" value = "<?php echo $phone; ?>" maxlength="19">
                <span class = "error"><?php echo $phoneErr?></span>
                <br/>
            </div>
        </div>

        <div class="form-group row-md-5">
            <div id = "country" class="col-md-6">
                <label for="country">Country</label>

                <select class="form-control" name = "country" id="country">
                    <?php foreach($countryResult as $key => $value){ ?>
                        <option><?php echo $value['country']; ?></option>
                    <?php } ?>


                </select>
                <br/>
            </div>

        </div>

        <div class="form-group">
            <div id = "address" class = "col-md-6">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name = "address" id="address" placeholder="1234 Main St" value="<?php echo $address; ?>">
                <span class = "error"><?php echo $addressErr?></span>

                <br/>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City</label>


                <select class="form-control" name = "city" id="city">
                    <?php foreach($cityResult as $key => $value){ ?>

                        <option><?php echo $value['city']; ?></option>
                    <?php } ?>


                </select>

                <br/>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <select class="form-control" name = "region" id="state">
                    <?php foreach($stateResult as $key => $value){ ?>
                        <option><?php echo $value['region']; ?></option>
                    <?php } ?>


                </select>
                <br/>
            </div>
            <div class="form-group col-md-2">
                <label for="postal">Postal</label>
                <input type="text" class="form-control" name = "postal" id="postal" value = "<?php echo $postal; ?>" maxlength="10">
                <span class = "error"><?php echo $postalErr?></span>
            </div>
        </div>
        <br/>

        <div class = "form-group row">
        <div class = "col-md-12">
        <button type="submit" class="btn btn-info btn-lg" value = "Submit Form" name = "submit" style = "margin-left: 480px"><span class="glyphicon glyphicon-ok-sign"></span> Register</button>
        </div>
        </div>
    </form>






</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>