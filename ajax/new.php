<?php
include './link.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>

    <style>
    .nn {
        border: 3px solid red;
        box-shadow: 3px 3px 2px red;
    }

    #head {
        position: relative;
    }

    #outer {
        width: 100vw;
        height: 100vh;
        background-color: rgb(209, 224, 224, 0.4);
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    #inner {
        width: 400px;
        height: 150px;
        background-color: white;
        border-radius: 5px;
        position: relative;
    }

    #close {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: red;
        color: white;
        text-align: center;
        position: absolute;
        top: -20px;
        right: -20px;
    }

    h2::after {
        content: "";
        display: block;
        width: 90%;
        height: 2px;
        background-color: black;
        margin: 5px auto;

    }
    </style>
</head>

<body>
    <div id="head">
        <div class="container  ">

            <div class="row ">
                <!-- <iframe
                    src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F100007360361889%2Fvideos%2F947264512484616%2F&show_text=false&width=267&t=0"
                    width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    allowFullScreen="true"></iframe> -->

                <div class="col-12 px-0">
                    <h1 class="text-center bg-secondary my-0 text-light text-capitalize">php with ajax</h1>
                </div>
                <div class="col-12 bg-primary  px-0">
                    <form action="" id="add">
                        <input type="text" id="name" class="form-control form-control-sm">
                        <input type="submit" class="btn my-2 btn-secondary d-flex mx-auto n" value="data">

                    </form>
                </div>
                <div class="col-12 px-0">
                    <form class="form-inline " id="kkk">
                        <div class="form-group">
                            <input type="number" name="id" id="id" class="form-control" placeholder="Enter an id"
                                aria-describedby="helpId">
                            <input type="submit" class=" btn btn-danger k" value="click">
                        </div>
                    </form>
                </div>
                <div class="col-12 px-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class=" text-uppercase thead-dark">
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody id="m">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="outer">
        <div id="inner">
            <div id="close">X</div>
            <h2>Edit Form</h2>
            <div class="form-group man">
                <!-- <label for="First name">First name</label>
          <input type="text" name="" id="sname"   aria-describedby="helpId">
          <button type="button" class="btn btn-sm btn-success">Save</button> -->
            </div>
        </div>
    </div>
</body>

<script>
$(document).ready(function() {
    $(".n").click(function(e) {
        e.preventDefault();

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
        // die();
        var name = $("#name").val();
        console.log(name);

        function data() {
            var name = $("#name").val();
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: {
                    first: name
                },
                success: function(response) {
                    load();
                    swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Aww yiss!",

                    });


                    $("#add").trigger("reset");
                }
            });
        }

        function setError() {
            $("#name").css("background-color", "red");
        }
        console.log(name);
        if (name == "") {
            setError();
        } else {
            data();
        }

    });
});
</script>
<script>
$(document).on("click", ".edit", function() {
    $("#outer").css("display", "flex");
    $("#close").on("click", function() {
        $("#outer").hide();
    });
    // var sendid = console.log($(this).data("id"));
    var sendid = $(this).data("id");

    function sendingid() {
        $.ajax({
            type: "POST",
            url: "update.php",
            data: {
                id: sendid
            },
            success: function(response) {
                $(".man").html(response);
            }
        });
    }
    sendingid();
    $(document).on("click", ".not", function() {
        var nameq = $("#sname").val();
        var idq = $("#sid").val();
        console.log(id, name);
        // function sendingname() {
        $.ajax({
            type: "POST",
            url: "updateval.php",
            data: {
                name: nameq,
                id: idq
            },
            success: function(response) {
                $("#outer").hide();
                // console.log(response);
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
            }
        });
        // }
        // sendingname();
    });
});
</script>
<script src="../jquery/new.js"></script>

</html>