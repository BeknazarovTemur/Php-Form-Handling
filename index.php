<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>

<main>
    <div class="login-box">
        <h2>Select Box</h2>
        <form action="includes/formhandler.php" method="post">
            <label class="h1" for="firstname">Firstname?</label>
            <div class="user-box">
                <input id="firstname" type="text" name="firstname" placeholder="Firstname..." required>
            </div>
            <label for="lastname">Lastname?</label>
            <div class="user-box">
                <input id="lastname" type="text" name="lastname" placeholder="Lastname.." required>
            </div>
            <label for="favourite_pet">Favourite Pet?</label>
            <div class="">
                <select id="favourite_pet" name="favourite_pet" required>
                    <option value="none">None</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                </select>
            <div>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

</body>
</html>
