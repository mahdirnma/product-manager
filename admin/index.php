<?php
require_once "../layout/admin-header.php";
showHeader("main");
?>
    <div class="box-header">
        <div class="box">
            <div class="sign-in">
                <form action="signIn.php" method="post">
                    <p>sign in</p>
                    <label for="fName">first Name</label>
                    <input type="text" name="fName" id="fName" placeholder="first Name">
                    <label for="lName">last Name</label>
                    <input type="text" name="lName" id="lName" placeholder="last Name">
                    <label for="userName">user Name</label>
                    <input type="text" name="userName" id="userName" placeholder="userName">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="password">
                    <input type="submit" value="sign in">
                </form>
            </div>
            <div class="login">
                <form action="login.php" method="post">
                    <p>login</p>
                    <label for="userName">user Name</label>
                    <input type="text" name="userName" id="userName" placeholder="userName">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="password">
                    <input type="submit" value="login">
                </form>
            </div>
        </div>
    </div>

<?php
require_once "../layout/admin-footer.php";