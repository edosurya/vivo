jQuery(document).ready(function () {
    $(function () {
        $("#defaultCountdown").countdown({ until: new Date(2024, 7, 1, 9) }); // year, month, date, hour
    });
});
