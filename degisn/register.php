<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="header">
    <img class="titel" src="css/img/titel.png">
    <nav>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="serie.php">Serie</a> </li>
            <li><a href="cast.php">Cast</a> </li>
            <li><a href="comics.php">Comics</a> </li>
            <li><a href="games.php">Games</a> </li>
            <li><a href="contact.php">Contact</a> </li>
            <li class="container">
                <section class="dropdown">
                    <button class="dropbtn" onclick="myFunction()">Login</button>
                    <section class="dropdown-content" id="myDropdown">
                        <a href="login.php">Login</a>
                        <a href="#">Profiel</a>
                        <a href="register.php">Registreer</a>
                    </section>
                </section>
            </li>
        </ul>
    </nav>
</section>
<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
<section class="bloklogin">
<form action="register.php" method="post">

</form>



</section>


<footer>
    <section class="footer">
        Copyright by Maik ©
    </section>
</footer>

</body>
</html>