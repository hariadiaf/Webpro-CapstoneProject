<!DOCTYPE html>
<html>

<head>
    <title>Accountsetting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/set.css") ?>">
</head>

<body>
    <nav class="navbar navbar-light" id="Bg">
        <a class="navbar-brand mx-auto pl-5"><img src="assets\img\penzu_white.png" id="logotgh"></a>
        <form class="form-inline">
            <a href="#"> <button class="btn" type="button" id="B">Go PRO</button></a>
            <a href="#"> <button class="btn" type="button" id="C">Sign in</button></a>
        </form>
    </nav>
    <form name="accountInfoForm">
        <div>
            <div class="alert ng-binding alert-danger ng-hide" style="margin-bottom: 20px;"></div>
        </div>
        <div>
            <div class="form-group">
                <div>
                    <h2>Account Info</h2>
                    <label>First Name</label>
                    <label id="last">Last Name</label>
                    <input class="form-control ng-pristine ng-valid ng-not-empty ng-touched" id="firstName" type="text"
                        name="firstName">
                    <input class="form-control ng-pristine ng-valid ng-not-empty ng-touched" id="lastName" type="text"
                        name="LastName">
                </div>
                <div>
                    <label id="label3" for="exampleInputEmail1">EMAIL ADDRESS</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <button id="buton" type="submit" class="btn btn-primary">Save</button>