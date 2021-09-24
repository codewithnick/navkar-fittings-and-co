<?php include("header.php"); ?>
<div class="background flex flex-col flex-center">
    <div class="flex flex-center widthfull search">
        <form action="search.php" class="flex searchbox sizefull" >
            <input type="search"  Placeholder="  Search for our Products" class="searchbar widthfull" name="s" id="s">
            <button type="submit" class="searchbutton ">
            <!-- <div style=" text-align:center; font-family: helvetica, arial, sans-serif;color:black;margin:5px;">
                <svg class="svg-icon search-icon" aria-labelledby="title desc" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.9 19.7"><title id="title">Search Icon</title><desc id="desc">A magnifying glass icon.</desc><g class="search-path" fill="none" stroke="#848F91"><path stroke-linecap="square" d="M18.5 18.3l-5.4-5.4"/><circle cx="8" cy="8" r="7"/></g></svg>
            </div>
             -->
            <img src="https://img.icons8.com/ios-glyphs/30/000000/search--v1.png"/>
            </button>   
        </form>
    </div>
</div>
<?php
if(isset($_GET["redirect"])){ 
    if($_GET["redirect"] == "login"){
    ?>
    <script>
        window.alert("login sucessfull");
    </script>
    <?php
    }
    if($_GET["redirect"] == "registered"){
    ?>
    <script>
        window.alert("registration sucessfull ,check your mail");
    </script>
    <?php
    }
}
?>
<?php include("footer.php"); ?>