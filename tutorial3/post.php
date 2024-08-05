<!DOCTYPE html>
<html lang="en">
    <body>
    <h2>POST Requests</h2>

    <?php if (isset($_COOKIE['username'])): ?>
        <!-- Username cookie is set, show welcome message -->
        <p>Welcome back <?= $_COOKIE['username'] ?>!</p>
        <?php $username = $_COOKIE['username']; ?>
    <?php else: ?>
        <!-- Cannot find username cookie, display login form -->
        <p>Login with your username and password.</p>

        <form action="post.php" method="post">
            <label for="input-username">Username:</label>
            <input id="input-username" type="text" name="username" value="">
            <br />
            <label for="input-password">Password:</label>
            <input id="input-password" type="password" name="password" value="">
            <br /><br />
            <input type="submit" value="Login">
        </form>

        <?php if (isset($_POST['username']) && isset($_POST['password'])): ?>
            <?php if (login_user(htmlentities($_POST["username"]), $_POST["password"])): ?>
                <!-- 4b - Complete this section -->
                <p> Welcome to INFO 263!</p>
            <?php else: ?>
                <p>ACCESS DENIED! Incorrect username/password</p>
            <?php endif; ?>

            <?php if (authenticate(htmlentities($_POST["username"]), $_POST["password"])): ?>
                <!-- 4b - Complete this section  -->
                <p><?php echo htmlspecialchars($_POST["username"]); ?> has been authenticated.</p>
            <?php else: ?>
                <p>Failed to authenticate.</p>
            <?php endif; ?>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    /**
     * Function which attempts to login in a user and shows either an error message on a failed attempt or a success message
     * if the user's username and password match the one stored on the server.
     * @param $username String user's username
     * @param $password String user's password
     */
    function login_user($username, $password) {
//        $server_user = "superman";
//        $server_pass = "Kryptonite";
        $server_user = "batman";
        $server_pass = "bruce";
//        $server_user = "test";
//        $server_pass = "haha";

        if ($username == $server_user && $password == $server_pass) {
            return true;
        }
        return false;
    }

    /**
     * Attempts to authenticate a user by checking if their credentials match that which are stored in the credentials array.
     * @param $user String username we are trying to use to authenticate.
     * @param $pass String password we are trying to use to authenticate.
     */
    function authenticate($user, $pass) {
        require_once "Credentials.php";
        $credentials1 = new Credentials("batman", "bruce");
        $credentials2 = new Credentials("spiderman", "peter_parker");
        $credentials3 = new Credentials("ethan-hunt", "impossible");
        $credentials4 = new Credentials("black.panther", "Wakanda");
        $credentialsArray = array($credentials1, $credentials2, $credentials3, $credentials4);

        for ($i = 0; $i < count($credentialsArray); $i++) {
            if ($credentialsArray[$i]->validate($user, $pass)) {
                setcookie("username", $user);
                return true;
            }
        }
        // 4c - Complete this function
        // 5 - Store the cookie



        return false;
    }
    ?>

    </body>
</html>
