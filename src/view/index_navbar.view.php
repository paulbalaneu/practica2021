<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light px-5">
    <a class="navbar-brand" href="index.php"><?php echo $xml->site_title;?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php
                foreach($res as $resu)
                    echo '
                <li class="nav-item">
                    <a class="nav-link" href="' . $resu['link'] . '">' . $resu['item_name'] . '</a>
                </li>';
            ?>     
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="pb_nav_add_properties" href="add.php">Add properties</a>
        </form>
    </div>
</nav>