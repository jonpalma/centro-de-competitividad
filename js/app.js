$(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
});


$(".video.modal").on('hide.bs.modal', function (e) {
    $(this).find('iframe').attr("src", $(this).find('iframe').attr("src"));
});
