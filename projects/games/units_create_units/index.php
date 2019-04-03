<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../../../header.php" ?>
    <link rel="stylesheet" href="main.css">
    <script src="main.js" async></script>
    <title>Units creating units</title>
</head>
<body>
    <div id="wrapper">
        <div class="box" id="coins">
            <div class="box-header">Coins: <span id="coin">0</span></div>
            <div id="get-coin" class="coin button" onclick="root.getCoin()">GET COINS</div>
        </div>
        <div class="box" id="create-units">
            <div class="box-header">Create a unit</div>
            <div class="box error" id="error-create"></div>
            <input id="name" type="text" placeholder="'Bokoblin'">
            <div id="unit" class="create-unit button" onclick="root.newUnit(true)">CREATE NEW UNIT</div>
        </div>
        <div class="box" id="units">
            <div class="box-header">Units</div>
            <div class="box error" id="error-unit"></div>
            <table>
                <tbody id="table">
                    <tr>
                        <td>Unit</td>
                        <td>Creating</td>
                        <td>Owned</td>
                        <td>Purchase</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>