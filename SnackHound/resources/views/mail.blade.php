<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Reset</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto+Slab&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="{{ URL::asset('css/email.css') }}" /> -->
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
        /* ? BUTTON STYLING ***** ? */
        #resetBtn {
            text-align: center;
        }
        button {
            height: 50px;
            width: 250px;
            border-radius: 2px;
            font-family: "Raleway";
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            background-color: #06b7f9;
            color: #fcfcfc;
        }
        button:hover {
            background-color: #fcfcfc;
            color: #06b7f9;
            border: 1px solid #06b7f9;
        }
        /* ? END BUTTON STYLING ? */
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
                <h1 id="greeting">Hi, {{ $name }} </h1>
                <p>Someone has requested for your password to be changed.</p>
                <p>If this wasn't you, no action needs to be taken. If this was you, please follow <a href="   {{ $url_reset }} ">this link</a> to reset your password, or click the button below.</p>
                <p>If you have further questions, feel free to reach out to us at <a href="">info@snackhound.com</a>.</p>
                <p id="cheers">Cheers,</p>
                <p id="closing">The SnackHound Team</p>
                <div id="resetBtn">
                    <a href=" {{ $url_reset }} "><button>Reset your password</button></a>
                </div>
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
