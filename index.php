 <?php include('temp/header.php'); ?> 

    <?php
        $page ='';

        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        if($page == 'home') { ?>
        <section class="cover">
            <?php include('temp/main-con.php'); ?>
        </section>

   <?php } ?>

    <header id="header">
        <?php include('temp/navigate.php'); ?>
    </header>

    <!-- ================================= Start Section About Us ====================== -->
    <?php if($page == "about") { ?>
        <section class = "cover2">
            <?php include('temp/main-con.php'); ?>
        </section>
    <?php } ?>


<?php include('temp/footer.php'); ?>