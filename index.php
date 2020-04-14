<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gachon WebEx Router</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="footer-basic">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-11 col-md-11 col-xl-8 offset-sm-1 offset-md-1 offset-xl-2 text-left">
                    <h1>Gachon WebEx Router</h1>
                    <p>교수님 성함을 입력하시면, 해당 Webex 세션으로 접속됩니다.</p>
                    <form action="redirect.php" method="get">
                        <input class="border rounded mb-3" name="professor_name" type="text" autofocus style="width: 100%;font-size: 2em;" placeholder="교수님 성함" />
                        <button class="btn btn-primary mb-5" type="submit">접속</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include __DIR__."/common/footer.php"; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>