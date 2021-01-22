
<?php 

//include "https://www.cxkes.me/xbox/xuid";
//require __DIR__.'https://www.cxkes.me/xbox/xuid';
?>

<!doctype html>
<html lang="en">
    <head><!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="e26wg6FLDWTJj9Zw9VOUFJupmyA5ZNf9CC4G28Ys">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<title>XUID Grabber</title>

<style type="text/css">
    body {
        margin-top: 65px;
        color: #FFF;
        background-color: #2e2e2e;
    }
    .card {
        color: #FFF;
        background-color: #575757;
    }
</style></head>
    <body>
               
            </ul>
        </div>
    </div>
</nav>        <div class="container">
                <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 style="text-align:center;">Xbox XUID Grabber</h1>
            <hr style="border-color: #575757;" />
                            <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i> Enter an Xbox Live Gamertag below in order to retrieve its XUID. We do not store any
                    Gamertags or XUIDs.
                </div>
                                <form action="/xbox/xuid" method="POST">
                    <input type="hidden" name="_token" value="e26wg6FLDWTJj9Zw9VOUFJupmyA5ZNf9CC4G28Ys" />
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="gamertag" name="gamertag" placeholder="Gamertag">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-block btn-primary">Resolve</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rtnType" id="typeHex" value="0" checked>
                                    <label class="form-check-label" for="typeHex">Hexidecimal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rtnType" id="typeDec" value="1">
                                    <label class="form-check-label" for="typeDec">Decimal</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    </div>
    </div>
        </div>

        <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<script data-ad-client="ca-pub-1916913821341205" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    </body>
</html>