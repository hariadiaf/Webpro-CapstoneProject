<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\Login.css">
</head>

<body>
    <nav class="navbar navbar-light" id="Bg">
        <a class="navbar-brand mx-auto pl-5"><img src="assets\img\penzu_white.png" id="logotgh"></a>
        <form class="form-inline">
            <a href="#"> <button class="btn" type="button" id="B">Go PRO</button></a>
            <a href="#"> <button class="btn" type="button" id="C">Sign up</button></a>
        </form>
    </nav>
    <div class="container-fluid mt-5 pt-5 " id="bungkus">
        <div class="container mx-auto my-auto " id="form">
            <center>
                <div id="signin">
                    <h3> Sign In </h3>
                </div>
            </center>
            <form>
                <div id="formemail" class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label id="label" for="exampleInputEmail1">EMAIL ADDRESS</label>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <label id="label" for="exampleInputPassword1">PASSWORD</label>
                </div>
                <a href="#">Forget your password?</a> <button id="buton" type="submit" class="btn btn-primary">Sign
                    In</button>

            </form>
        </div>
    </div>

</body>

</html>