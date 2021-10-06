$(document).ready(function () {

    // goto register page
    $("#register").on("click", function () {
        window.location.href = "register.php"
    });

    // goto login page
    $("#login").on("click", function () {
        window.location.href = "login.php"
    });

    // now register user

    $("#signup").on("click", function (e) {
        e.preventDefault();

        // declare variable
        const username = $("#username").val();
        const email = $("#email").val();
        const password = $("#password").val();

        // check field is empty or not
        $("#singup").text("Creating....")
        if (username == "" || email == "" || password == "") {
            alert("please fill the field");
            $("#singup").text("Create")
        } else {
            // ajax request
            $("#singup").text("Creating....")

            $.ajax({
                url: "php/register.php",
                type: "POST",
                data: { username: username, email: email, password: password },
                success: (data) => {
                    if (data == 1) {
                        alert("Data Add Successfully");
                        $("#form-data").trigger("reset");
                        $("#singup").text("Create")
                        window.location.href = "login.php";
                    } else if (data == 2) {
                        alert("Email all ready exist");
                        $("#singup").text("Create")

                    } else {
                        alert("Something Woring")
                        $("#singup").text("Create")

                    }
                }
            })
        }
    });

    // Now Login

    $("#signin").on("click", function () {
        const email = $("#email").val();
        const password = $("#password").val();

        // check the field is empty or not

        $("#signin").text("Login....")
        if (email == "" || password == "") {
            alert("Please Fill all the field")
            $("#signin").text("Login")
        } else {
            $("#signin").text("Login....")

            // ajax request
            $.ajax({
                url: "php/login.php",
                type: "POST",
                data: { email: email, password: password },
                success: (data) => {
                    if (data == 1) {
                        alert("Login successfully");
                        $("#login-form").trigger("reset");
                        $("#signin").text("Login")
                        window.location.href = "dashboard.php"
                    } else {
                        alert("Invalid Email and Password")
                        $("#signin").text("Login")

                    }
                }
            })
        }
    });

    // getUser
    const getUser = () => {
        $.ajax({
            url: "php/getUser.php",
            type: "POST",
            success: (data) => {
                $("#data").html(data);
            }
        })
    }
    // every 2s it call
    setTimeout(() => {
        getUser()
    }, 1000)

    // logout

    $(document).on("click", "#logout", function () {
        if (confirm("Are you Sure You want to logout")) {
            $.ajax({
                url: "php/logout.php",
                type: "GET",
                success: () => {
                    alert("Logout Successfully")
                    window.location.href="login.php"
                }
            })
        }
    })
})