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
                    <a class="button is-dark">
                        <strong>G</strong>
                    </a>
                    <a class="button is-light" href="<?php $Show->Logout(); ?>">
                        Log out
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

