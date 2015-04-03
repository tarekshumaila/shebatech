<html>
    <head>
        <?php include './php/head.php'; ?>
    </head>
        <body  class="flex direction-column">
            <ul class='flex justify-between' id="menucontainer"><?php include './php/menu.php'; ?></ul>
<!--slides -->
            <ul class='flex home' id="home"><?php include './php/slider.php'; ?></ul>  

<!--about us-->
            <ul class='flex justify-around wrap-wrap aboutus' id="aboutus"><?php include './php/aboutus.php'; ?></ul>
            
<!--srevices-->
            <ul class='flex justify-around wrap-wrap services' id="services"><?php include './php/services.php'; ?></ul>

<!--portfolio-->
            <ul class='flex justify-around wrap-wrap portfolio' id="portfolio"><?php include './php/portfolio.php'; ?></ul>

<!--contactus-->
            <ul class='flex justify-around wrap-wrap contactus' id="contactus"><?php include './php/contactus.php'; ?></ul>

<!--footer-->     
            <ul class='flex wrap-wrap' id="footer"><?php include './php/footer.php'; ?></ul>
        </body>
</html>




