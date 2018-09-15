$(document).ready(function () {
    console.log("ready!");


    $('.lesson-button').click(() => {
        console.log("hello");
        $('.blogpost').hide();
        $('.lesson-choices').show();
        // $('.own-form').hide();

    });
    $('.own-button').click(() => {
        $('.blogpost').hide();
        // $('.own-form').show();
        $('.lesson-choices').hide();
    });

    $('.xclose').click(() => {
        console.log("hello");
        $('.blogpost').show();
        $('.lesson-choices').hide();
        // $('.own-form').hide();
    });

    $('.attach-btn').click(() => {
        $('.attach').toggle();
    });

    $('.paste-btn').click(() => {
        $('.submit-own').show();
    });






});