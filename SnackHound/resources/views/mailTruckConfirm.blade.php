<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Reset</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            transition-duration: 0.3;
        }
        *:not(input) {
            margin: 0;
            padding: 0;
            border: 0;
        }
        /* ***** BODY STYLING ***** */
        section {
            margin: 50px;
            background-color: #f0f0f0;
        }
        article {
            padding: 25px;
        }
        #greeting {
            font-size: 24px;
            font-family: "Raleway";
            padding-bottom: 20px;
        }
        p {
            font-family: "Roboto Slab";
            line-height: 2;
        }
        #cheers {
            padding-top: 20px;
        }
        #closing {
            font-size: 18px;
            font-family: "Raleway";
        }
        /* ***** END BODY STYLING ***** */
        /* ***** FOOTER STYLING ***** */
        #copyrightContainer {
            text-align: center;
        }
        #footerContent1 {
            font-size: 14px;
            line-height: 1;
        }
        /* ***** END FOOTER STYLING ***** */
    </style>
</head>
<body>
    <header>
    </header>
    <main>
        <section>
            <article>
                <h1 id="greeting">Hi, {{ $name }}  </h1>
                <p>Your order at {{ $foodTruckName }} has been approved! Please allow them 5 - 10 minutes to prepare your meal(s) before making your way to the truck. (Wait times might be a little longer depending on business). Thank you for using SnackHound!</p>
                <p>If you have further questions, feel free to reach out to us at <a href="">info@snackhound.com</a>.</p>
                <p id="cheers">Cheers,</p>
                <p id="closing">The SnackHound Team</p>
            </article>
        </section>
    </main>
    <footer>
        <div id="copyrightContainer">
            <p id="footerContent">Made by <a href="">Original_Coder</a> | 2019 <br> 15 Rue Evrard Ketten Luxembourg, Luxembourg 1856</p>
        </div>
    </footer>
</body>
</html>
