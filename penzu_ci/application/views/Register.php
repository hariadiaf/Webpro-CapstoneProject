<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/register.css") ?>">
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
                <input type="checkbox" id="cbox" name="vehicle3" value="Boat"  checked> <a style="color:#9098A5;">Send me awesome updates from the Penzu team!</a><br><br><br><br>
                <p style="color:#9098A5; font-size:11px;">By signing up you agree to our<br>
                Terms of Use and Privacy Policy</P>
                <button id="buton" type="submit" class="btn btn-primary">CREATE ACCOUNT</button>

            </form>
        </div>
    </div>
<style>
body {
    overflow: scroll;
}

#Bg {
    background-color: #f23f21;
    height: 50px;
    position: fixed;
    z-index: 900;
}

#logotgh{
    position : absolute;
    top : 14px;
    bottom : 9px;
    right : 628.75px;
    left : 674.5px;
    display : block;
    height : 27px;
    width : 91.5px;
    margin : 0 0 0 -46px;
    height : 27px;
    width : 91.5px;
    margin : 0 0 0 -46px;
    width: 100px;
}


#B {
    font-family : "Open Sans", helvetica, sans-serif;
    font-size : 14px;
    font-weight : 700;
    line-height : 14px;
    text-align : center;
    background-color :  #FFFFFF;
    color: #f23f21;
    padding : 6px 8px 6px 8px;
}

#C {
    font-family : "Open Sans", helvetica, sans-serif;
    font-size : 13px;
    font-weight : 600;
    line-height : 19.6px;
    text-decoration : underline solid rgb(255, 255, 255);
    color :  #FFFFFF;
    height : 31px;
    width : 73.5313px;
    padding : 6px 8px 6px 16px;
}

#bungkus {
    overflow: hidden;
    background-image: url("assets\img\wood.jpg");
}

#form {
    width: 400px;
    max-width: 540px;
    box-shadow: 0 0 6px rgba(0,0,0,.25);
    border-radius: 4px;
    margin-top: 100px;
    background: #f5f5f5;
    border-bottom: 1px solid #e6e6e6;
    padding: 20px 50px;
    background-color: #FFFFFF;
    width : 540px;
    
}

h1 {
    font-family : "Open Sans", helvetica, sans-serif;
    font-size : 28px;
    font-weight : 300;
    line-height : 39,2px;
    text-decoration : none solid rgb(75, 82, 91);
    text-align : center;
}

#register{
   
    height : 63px;
    width : 540px;
    padding : 20px 50px 20px 50px;
    margin-top: -4.6%;
    margin-left: -11.3%;
}



#label {
    font-family : "Open Sans", helvetica, sans-serif;
    font-size : 14px;
    letter-spacing : 1.4px;
    line-height : 19.6px;
    text-transform : uppercase;
    background-color :  #FFFFFF;
    color : #9098A5;
    margin-left: 4%;
    margin-top: -6%;
}

#label2 {
    font-family : "Open Sans", helvetica, sans-serif;
    font-size : 14px;
    letter-spacing : 1.4px;
    line-height : 19.6px;
    text-transform : uppercase;
    background-color :  #FFFFFF;
    color : #9098A5;
    margin-left: 32%;
    margin-top: -6%;
}

#label3 {
    font-family : "Open Sans", helvetica, sans-serif;
    font-size : 14px;
    letter-spacing : 1.4px;
    line-height : 19.6px;
    text-transform : uppercase;
    background-color :  #FFFFFF;
    color : #9098A5;
    margin-left: 1%;
    margin-top: -6%;
}

#buton {   
    margin-top: -20%; 
    margin-left: 50%;
    font-family : "Open Sans", helvetica, sans-serif;
    font-size : 14px;
    font-weight : 600;
    line-height : 14px;
    text-align : center;
    background-color :  #3498DB;
    color :  #FFFFFF;
    height : 41.2847px;
    width : 220px;
    padding : 13px 16px 13px 16px;
}

#formemail {
    padding-top: 10%;
    margin-left: -3%;
   
}

.form-control {
    width : 440px;
    height: 48px;
    border : 1px solid  #9FA4AA;
    margin : 0 0 10px 0;
    padding : 8px 10px 8px 10px;
}

#lastname {
    position: relative;
    left: 4.5%;   
}

</style>
</body>

</html>