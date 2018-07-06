<html>

<head>
    <title>Input | CFC</title>
</head>

<style>
    .ButtonStyle {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #ffffff;
        padding: 10px 20px;
        cursor: hand;
        background: -moz-linear-gradient( top,
        #42aaff 0%,
        #003366);
        background: -webkit-gradient( linear, left top, left bottom,
        from(#42aaff),
        to(#003366));
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        border: 0px solid #003366;
        -moz-box-shadow: 1px 1px 3px rgba(092, 016, 092, 0.4),
        inset 0px 0px 1px rgba(255, 255, 255, 0.5);
        -webkit-box-shadow: 1px 1px 3px rgba(092, 016, 092, 0.4),
        inset 0px 0px 1px rgba(255, 255, 255, 0.5);
        box-shadow: 1px 1px 3px rgba(092, 016, 092, 0.4),
        inset 0px 0px 1px rgba(255, 255, 255, 0.5);
        text-shadow: 0px -1px 0px rgba(000, 000, 000, 0.7),
        0px 1px 0px rgba(255, 255, 255, 0.3);
    }
</style>

<body align="center" style="font-family: Operator Mono;">
    <form action="Back.php" method="POST">
        <br>
        <h1>CHARACTER FREQUENCY COUNTER</h1>
        Insert your string into the following text area to get the count per character
        <br>
        <br>
        <textarea type="text" name="input" rows="7" cols="70" maxlength="1000" required></textarea>
        <br>
        <br>
        <input type="submit" class="ButtonStyle" value="Count" name="ASubmit" /> &nbsp;
        <input type="reset" class="ButtonStyle" value="Clear" />
    </form>
</body>

</html>