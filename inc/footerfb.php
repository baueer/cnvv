<footer class="footer fixed-bottom" id="footerfb">
    <div class="container">
        <a href="echipa.php"><span class="font-weight-bold">&copy;</span> Copyright <span class="font-weight-bold">Colegiul National Vlaicu Voda</span>, 2018</a>
    </div>
</footer>

<script>
    $(document).ready(function() {
        function removeFixedBottom() {
            $("#footerfb").removeClass('fixed-bottom');
        }
        if( ($(window).width() < 990) ) {
            removeFixedBottom();
        }
        $(window).resize(function() {
            if( ($(window).width() < 990) ) {
                removeFixedBottom();
            }
            if( ($(window).width() > 990) ) {
                $("#footerfb").addClass('fixed-bottom');
            }
        });
    });
</script>