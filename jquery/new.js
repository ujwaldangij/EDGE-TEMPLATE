$(document).ready(function () {
    $(".k").click(function (e) { 
        e.preventDefault();
        deleted();
    });
    function deleted() {
        var id = $("#id").val();
        if (id == "") {
            set();
        }else{
            perfect();
        }
    }
    function set() {
        $("#id").css({"border" :"3px solid red","box-shadow":"3px 3px 2px red"});
    }
    function perfect() {
        var id = $("#id").val();
        $.ajax({
            type: "POST",
            url: "../ajax/delete.php",
            data: {id:id},
            success: function (response) {
                function load() {
                    $.ajax({
                        type: "POST",
                        url: "ujwal.php",
                        success: function(response) {
                            $("#m").html(response);
                        }
                    });
                }
                load();
                $("#kkk").toggle("reset");
            }
        });
    }
});