<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body{
            background-color: #ffffff;
        }
        .brand {
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: black;
            color: white;
        }
        .footer {
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: black;
            color: white;
        }
        .main {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr;
            justify-content: flex-start;
            margin: 10px .1em;
            padding: .75em;
            min-height: 70vh;
        }
        .section {
            width: 100%;
            min-height: 200px;
            background-color: #f8f9fa;
            margin: 5px 0px;
            padding: 5px 2em;
            border: none;
            border-radius: 5px;
        }
        .section h2 {
            color: #7b98b5;
        }
        .section hr {
            border-bottom: 2px solid #ffffff;
        }
        .section pre {
            background-color: #3b3b3b;
            border: 1px solid #3b3b3b;
            color: white;
            margin: 0;
            padding: 2px;
        }
    </style>
    <title>@belal-bh</title>
  </head>
  <body>
    <div class='container'>
        <div class='brand'>
            <div class='p-2'><p><a href="/">@belal-bh</a></p></div>
            <div><h1>Welcome to <span class='text-info'>belal-bh</span> API</h1></div>
            <div class='p-2'><p>GitHub <a target="_blank"  href="https://github.com/belal-bh">@belal-bh</a></p></div>
        </div>
        <div class="main">
            <div class="section">
                <h2>PMT API Endpoint</h2>
                <hr/>
                <p>Endpoint [POST]: <span class="bg-gray text-info">https://belal-bh.000webhost.com/api/get_pmt.php</span></p>
                <?php
                    echo "";
                ?>
                <p>POST json object must have 'balance' and 'n' property which values are numeric. Example:</p>
                <pre>
                {
                    "balance": 420,
                    "n": 5
                }
                </pre>
                <p>Response will be json object with 'PMT' property which values is numeric. Example:</p>
                <pre>
                {
                    "PMT": 101.85000000000005
                }
                </pre>
            
                <h2>PMT API Fetch in PHP</h2>
                <hr/>
                <div>
                    <script src="https://gist.github.com/belal-bh/5a50947facde5c1d23d96610a3e3f14a.js"></script>
                </div>
                <hr/>
                <div>
                    <p>GitHub Repository: <span><a target="_blank" href="https://github.com/belal-bh/pmt-api">https://github.com/belal-bh/pmt-api</a></span></p>
                </div>
            </div>
        </div>
        <div class='footer'>
            <div class='p-2'><p>&copy; belal-bh</p></div>
            <div><p>Developed by <span class='text-info'>CSEAI</span></p></div>
            <div class='p-2'><p>Facebook<a target="_blank"  href="https://www.facebook.com/belal.cseai">@belal.cseai</a></p></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>