$(document).on("keydown", ".onlyNumber", function (event) {
    if (event.keyCode == 190 || event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
            (event.keyCode == 65 && event.ctrlKey === true) ||
            (event.keyCode == 67 && event.ctrlKey === true) ||
            (event.keyCode == 86 && event.ctrlKey === true) ||
            (event.keyCode >= 35 && event.keyCode <= 39)) {
        return;
    } else {
        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
            event.preventDefault();
        }
    }
});