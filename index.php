<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-size: 2rem;
    }
    .container {
        font-size: 1rem;
        background-color: gainsboro;
    }
    @media print {
        body * {
            display: none;
        }
        .container, .container {
            display: block;
        }
    }
</style>

<body>
    <h1>Don't print me!</h1>
    <div class="container">
        <button id="printPage" style="background-color: aqua; border: none; color: white; padding-top: .5em; padding-bottom: .5em; padding-left: 1em; padding-right: 1em; cursor: pointer; display: block;margin-top: 5rem;">Print</button>
        <p>Print this page!</p>
        <?php echo "Hello this is my first commit!"; ?>
        <?php echo "Let them know that you are capable of doing great things!"; ?>
        <?php echo "updating by new user!"; ?>

        <!-- NOTE: If the print button is inside the h1 tag it will not be printed!, cuz h1-h6 con't be printed -->
        
    </div>
    <h1>Don't print me!</h1>


    <script src="script.js"></script>
</body>
</html>