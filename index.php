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
            padding: 0 20px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 16px;
        }

        th,
        td {
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

        label {
            display: block;
            margin-bottom: 8px;
        }

        select,
        input {
            width: 100%; /* Make input fields 100% width */
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 16px;
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

        @media (max-width: 600px) {
            form {
                padding: 0 10px;
            }
        }
    </style>
    <title>Pesan Disini untuk di PickUp</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Process the form data and construct the WhatsApp message
        $name = $_POST["name"];
        $phone = $_POST["phone"];

        // Steak Ayam
        $steak_ayam = $_POST["steak_ayam_bbq"];
        $steak_ayam_quantity = $_POST["steak_ayam_bbq_quantity"];
        $steak_ayam_price = $_POST["steak_ayam_bbq_price"];

        // Construct the WhatsApp message
        $whatsapp_message = "Order from $name ($phone),\n";
        $whatsapp_message .= "Steak Ayam + Barbeque Sauce: $steak_ayam_quantity pcs\n";
        $whatsapp_message .= "Harga: 13000 $steak_ayam_bbq_price\n";

        // Redirect to the WhatsApp link with the constructed message
        header("Location: https://api.whatsapp.com/send?phone=6285779720192&text=" . urlencode($whatsapp_message));
        exit();
    }
    ?>

    <h1>Pesan Disini Untuk di Pickup</h1>

    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">No WA:</label>
        <input type="text" id="phone" name="phone" required>

        <table>
            <tr>
                <td><img src="https://picsum.photos/100/100" alt="Steak Ayam"></td>
                <td>
                    <label for="steak_ayam_bbq">Steak Ayam + Barbeque Sauce</label>
                    <select id="steak_ayam_bbq_quantity" name="steak_ayam_bbq_quantity">
                        <?php for ($i = 0; $i <= 10; $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                    <span>Rp. 13000 </span><span id="steak_ayam_bbq_price" name="steak_ayam_bbq_price"></span>
                </td>
            </tr>
        </table>

        <button type="submit">Pesan Sekarang</button>
    </form>

</body>

</html>

