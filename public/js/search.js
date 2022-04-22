$(document).ready(function() {
    $('#search').on('keyup', function() {

        var search = $(this).val();
        $.ajax({
            url: "/user/search",
            method: "GET",

            data: {
                search: search
            },

            success: function(data) {
                $('#search_blog').html(data);

                $('#blog').empty().hide();


            }

        });
    });
});
