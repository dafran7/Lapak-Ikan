<?php include 'modules/navbar.php' ?>
<!-- Content -->
<div class="container" style="text-align: center">
    <h1 style="font-size: 72px">
        Hello
        <?php if($_SESSION['status'] == "Admin") echo 'Admin'; else echo 'World'; ?>
    </h1>

</div>

<!-- JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>