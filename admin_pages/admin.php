<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/admin-styles.css">
</head>
<body>
<div class="bg-image"></div>

<div class="row vertical-align">
    <div class="login-form-div">
        <form action="validateAdmin.php" method="post">
            <img class="center-img" alt="login-icon" src="../images/adminLogin/imac.png" width="100 px" height="100px">
            <legend class="center-text legend">Admin panel</legend>
            <div class="mb-3">
                <img alt="username-icon" src="../images/adminLogin/user.png" width="40px" height="40px">
                <input type="text" class="form-control login-input" id="username" name="username">
            </div>
            <div class="mb-3">
                <img alt="username-icon" src="../images/adminLogin/key.png" width="40px" height="40px">
                <input type="password" class="form-control login-input" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary login-btn">Log In</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>