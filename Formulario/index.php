    <br><br>
    <?php session_start(); ?>
    
    <html lang ="es">
    
        <?php
        include("Views/inc/header.php");
        include("Views/inc/menu.php");
        ?>
        <body> 
    
            <div id="main-content">
    
            <?php
            
            include("Views/inc/page.php");
            ?>    
    
            </div>
        </body>
        
         <?php include("Views/inc/footer.php"); ?> 
    </html>