<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/site.js" defer></script>
        <Title> Public</Title>
    </head>
    <body>
        <div class="Public_title">
            <h1> Public Page </h1>
        </div>
        <nav>
            <ul class="Public_page_nav">
                    <li><a class="active" href="home.php">Home</a></li>
                    <li><a href="public.php">Public</a></li>
                    <li><a href="private.php">Private</a></li>
                    <li><button onclick="discount_button()">Discount Button</button></li>   
            </ul>
        </nav>
        <h4>Fake Table Info</h4>
        <table class="public_table">
            <tr>
                <th>Dish Name</th>
                <th>Dish Price</th>
                <th>Dish Category</th>
                <th>Dish Description</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>Calamari</td>
                <td>20.00</td>
                <td>App</td>
                <td>Fried Squid</td>
                <td><img src="img/calamari.jpeg"></td>
            </tr>
            <tr>
                <td>Clam Chowder</td>
                <td>10.00</td>
                <td>App</td>
                <td> soup with Clam</td>
                <td><img src="img/chowder.jpeg"></td>
            </tr>
            <tr>
                <td>Ribeye</td>
                <td>100.00</td>
                <td>Entre</td>
                <td>Big honkin steak</td>
                <td><img src="img/ribeye.jpeg"></td>
            </tr>
            <tr>
                <td>Penne Parmgiana</td>
                <td>30.00</td>
                <td>Entre</td>
                <td> Pasta with red sauce</td>
                <td><img src="img/penne.jpeg"></td>
            </tr>
            <tr>
                <td>American Burger</td>
                <td>15.00</td>
                <td>Entre</td>
                <td> Best burger in town</td>
                <td><img src="img/burger.jpeg"></td>
            </tr>
        </table>
    </body>
</html>