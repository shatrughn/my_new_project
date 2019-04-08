<!-- ============================ -->
<!-- ========= Footer =========== -->
<!-- ============================ -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-footer">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Product 1</a>
                    <a class="dropdown-item" href="#">Product 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Product 3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            Ivoter © 2013 | Developed byWeCraft Solutions
        </ul>
    </div>
</nav>
<!-- ============================ -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/propper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script>new WOW().init();</script>
<script>
    $('.dropdown').hover(function () {
        $(this).children('.dropdown-toggle').addClass('active');
    }, function () {
        $(this).children('.dropdown-toggle').removeClass('active');
    })
</script>
<script>
    $('[data-toggle="tooltip"]').tooltip();

    $('[data-toggle="tooltip"]').click(function(){
        $("[data-toggle='tooltip']").tooltip('hide');
    });
</script>

</body>
</html>