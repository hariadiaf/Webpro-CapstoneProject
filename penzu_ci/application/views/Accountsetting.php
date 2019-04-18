<!DOCTYPE html>
<html>

<head>
    <title>Accountsetting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light" id="Bg">
        <a class="navbar-brand mx-auto pl-5"><img src="assets\img\penzu_white.png" id="logotgh"></a>
        <form class="form-inline">
            <a href="#"> <button class="btn" type="button" id="B">Go PRO</button></a>
            <a href="#"> <button class="btn" type="button" id="C">Sign in</button></a>
        </form>
    </nav>
    <div class="container-fluid mt-5 pt-5 " id="bungkus">
        <div class="container mx-auto my-auto " id="form">
            <center>
                <div id="register">
                    <h1> Welcome to Penzu!</h1>
                    <h1>Let’s create your free account</h1>
                </div>
            </center>
            <form>
                <div id="formemail" class="form-group form-inline">
                    <div class="form-group mb-2 m-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group mb-2 m-2" id="lastname">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <label id="label" for="exampleInputEmail1">First Name</label>
                    <label id="label2" for="exampleInputEmail1">Last Name</label>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1">
                    <label id="label3" for="exampleInputEmail1">EMAIL ADDRESS</label>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <label id="label3" for="exampleInputPassword1">PASSWORD</label>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <label id="label3" for="exampleInputPassword1">CONFIRM PASSWORD</label>
                </div>
                <input type="checkbox" id="cbox" name="vehicle3" value="Boat" checked> <a style="color:#9098A5;">Send me
                    awesome updates from the Penzu team!</a><br><br><br><br>
                <p style="color:#9098A5; font-size:11px;">By signing up you agree to our<br>
                    Terms of Use and Privacy Policy</P>
                <button id="buton" type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
                <p class="text-center"style="color:#9098A5; font-size:11px;">Under 13 years old? Sign Up Here!<br>
                Are you a teacher? Get Penzu Classroom Here!</P>


            </form>
        </div>
    </div>
    <style>