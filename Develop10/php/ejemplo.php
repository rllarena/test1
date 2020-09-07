<?php
echo "<div>Welcome!</div>";
echo "<div align= \"center\" id=\"infos\">";
echo "<table border= \"1\">";
echo "</table>";
echo "</div>";
?>

<script type="text/javascript">

$(document).ready (function () {
    var updater = setTimeout (function () {
        $('div#infos').load ('index.php', 'update=true').scrollTop(lastScrollPos);
        }, 3000);
});
</script>
