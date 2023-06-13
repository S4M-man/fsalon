<!DOCTYPE php, name : index.php>
<html>
<head><title> FITRI SALON </title></head>
<body>
    <link rel="stylesheet" type="text/css" href="css/tampilan.css">
    
    <div class="loader">
    <div class="header">
        <?php include "page/header.html"?></div>
          
<div id="navbar">
            <?php include "page/menu.html"?></div> 
            <div class="new"> <h 3 style="text-align: left; padding-left: 160px;">FITRI SALON</h3>
        </div>
            <h2 style="text-align: center;"><strong>     
            <div class="leftcolumn">
            <div class="card">
            <?php include "page/paging.php"?></div>
        </div>
    <div class="rightcolumn">
        <div class="card">
            <?php include "page/about.html"?></div>
        <div class="card">
            <?php include "page/lokasi.html"?></div>
        <div class="card">
            <?php include "page/socialmedia.html"?></div>
 </div>
</div>
<div class="footer">
    <?php include "page/footer.html"?></div>
    <div>
    <script src="js/Aksi.js"></script>
</body>
</html>