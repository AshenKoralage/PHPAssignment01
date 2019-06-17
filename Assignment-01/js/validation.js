//Telephone Number
tel = document.getElementById("txttel").value,
if(
    $("#btnadd").click(function () {
        var value = $("#txttel").val();
        var regEx = /\d{3}-\d{7}/;
        var result = regEx.test(value);
        if (!result) {
            alert("Number is Invalid");
        }
    }));
