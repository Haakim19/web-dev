<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="form.css" />
    <title>Form</title>
</head>

<body>
    <h3>Pleas enter your details</h3>
    <br />
    <form action="includes/formhandler.php" method="POST">
        <div class="centerd-element">
            <div>
                <input type="text" name="fname" id="fname" placeholder="First name" required />
            </div>

            <br />

            <div>
                <input type="text" name="lname" id="lname" placeholder="Last name" required />
            </div>

            <br />

            <!-- <div>
          <input
            type="date"
            name="bday"
            id="day"
            placeholder="dd/mm/yyyy"
            required
          />
        </div>

        <br /> -->

            <div>
                <input type="email" name="email" id="email" required placeholder="dummy@gmail.com" />
            </div>
            <br />
            <div>
                <input type="password" name="pwd" placeholder="Password" />
            </div>
            <br />

            <input type="submit" value="Submit" />
            <input type="reset" value="Reset" />
        </div>
    </form>
</body>

</html>