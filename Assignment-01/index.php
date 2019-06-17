<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/17/2019
 * Time: 10:20 AM
 */
?>
<?php
/**
 * txt for text
 *
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Form</title>
    <!--This link for bootstrap downloaded link-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--form css-->
    <link rel="stylesheet" href="css/form.css">
</head>
<body>

<form action="anotherPage.php" method="post" id="form" style="background-color: #343a40">
    <div class="col">
        <div class="form-group">
            <label for="cid">Customer ID</label>
            <input type="text" class="form-control"  onclick="validation(reg)" name="cid" id="txtcid">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"   name="name" id="txtname">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="tel">Telephone No</label>
            <input type="tel" class="form-control"  placeholder="011-1234567" name="tel" id="txttel">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="tel">Salary</label>
            <input type="number" class="form-control"  placeholder="0000.00" name="sal" id="txtsal">
        </div>
    </div>
    <div class="col">
        <button type="button" class="btn-success" id="btnadd">Add</button>
    </div>
</form>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/validation.js"></script>
<script>
    //Validation for Phone Number
    if (
        $("#btnadd").click(function () {
            var value = $("#txttel").val();
            var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
            var result = regEx.test(value);
            if (!result) {
                alert(" Telephone Number is Invalid");
            }
        })) ;
    //Validation for Name
    if (
        $("#btnadd").click(function () {
            var value = $("#txtname").val();
            var regEx = /^[a-zA-Z]*$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Name Is Invalide..Please Input Only Letters");
            }
        })
    ) ;
    //validation for salary
    if (
        $("#btnadd").click(function () {
            var value = $("#txtsal").val();
            var regEx = /^\d{1,6}\.\d{1,6}$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Please input Salary Like : 0000.00");
            }
        })
    ) ;
    //Validation For Customer ID
    //
    //
    //

    //Validate Empty Space
    function validation(reg) {
        str = document.reg;
        if (str.name.value.trim() == "") {
            alert("Enter your name");
            str.name.focus();
            return false;
        }

</script>
</body>
</html>
