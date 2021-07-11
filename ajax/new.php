<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../js/jquery.js"></script>
</head>

<body>
    <div id="head">
        <div class="container">
            <div class="row">
            <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F100007360361889%2Fvideos%2F947264512484616%2F&show_text=false&width=267&t=0" width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                
                <div class="col-md-12">
                    <h1 class="text-center bg-secondary my-0 text-light text-capitalize">php with ajax</h1>
                </div>
                <div class="col-md-12 px-0 bg-info">
                    <button class="btn my-2 btn-secondary d-flex mx-auto n">load data</button>
                </div>
                <div class="col-md-12 ">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class=" text-uppercase thead-dark">
                                <tr>
                                    <th>i love u h</th>
                                    <th>name</th>
                                </tr>
                            </thead>
                            <tbody id="m">
                                <tr>
                                    <td id="">Lorem.</td>
                                    <td id="">Nam?</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $(".n").click(function() {
            $.ajax({
                type: "POST",
                url: "./ujwal.php",
                // data: "data",
                // dataType: "dataType",
                success: function(data) {
                    $("#m").html(data);
                }
            });
        });
    });
    </script>
</body>

</html>