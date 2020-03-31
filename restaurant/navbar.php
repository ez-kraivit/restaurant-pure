<!-- U -->
<?php
if (!empty($_SESSION['members'])) {
?>
    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index">
                <img src="src/img/logo.png" width="112" height="28">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index">
                    HOME
                </a>

                <a class="navbar-item">
                    ABOUT US
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-dark" href="order">
                            <strong><?php echo $_SESSION['members']; ?></strong>
                        </a>
                        <a class="button is-light" href="logout.php">
                            Log out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End U -->

<?php
} else {
?>
 <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index">
                <img src="src/img/logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index">
                    HOME
                </a>

                <a class="navbar-item">
                    ABOUT US
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-dark" href="register">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="login">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End U -->
<?php
}
?>


<script>
    $(document).ready(function() {
        // Check for click events on the navbar burger icon
        $(".navbar-burger").click(function() {
            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");
            jQuery.post("")
        });
    });
</script>