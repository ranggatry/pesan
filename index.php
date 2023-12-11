<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 16px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
            margin-right: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Pesan Disini untuk di PickUp</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the form data and construct the WhatsApp message
    $name = $_POST["name"];

    // Chicken Steak a la Carte
    $steak_ayam = $_POST["steak_ayam_bbq"];
    $steak_ayam_quantity = $_POST["steak_ayam_bbq_quantity"];

    // Construct the WhatsApp message
    $whatsapp_message = "Order from $name,\n";
    $whatsapp_message .= "Steak Ayam + Barbeque Sauce: $steak_ayam_quantity pcs\n";    

    // Redirect to the WhatsApp link with the constructed message
    header("Location: https://api.whatsapp.com/send?phone=6285779720192&text=" . urlencode($whatsapp_message));
    exit();
}
?>

<h1>Pesan Disini Untuk di Pickup</h1>
<h4>Steak Ayam</h4>

<form method="post">
    <table>
        <tr>
            <td><img src="https://picsum.photos/100/100" alt="Steak Ayam"></td>
            <td>
                <label for="steak_ayam_bbq">Steak Ayam + Barbeque Sauce</label><br>
                <select id="steak_ayam_bbq_quantity" name="steak_ayam_bbq_quantity">
                    <?php for ($i = 0; $i <= 10; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </td>
        </tr>
    </table>

    <!-- <h4>Steak Sapi</h4> -->
    <button type="submit">Pesan Sekarang</button>
</form>

</body>
</html>

