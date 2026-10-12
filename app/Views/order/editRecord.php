<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Flower Order | Edit Record</title>
    <style>
        :root {
            color-scheme: light;
            --ink: #171717;
            --muted: #555;
            --black: #292929;
            --pink: #ed9fb2;
            --line: #d5d5d5;
        }

        * { box-sizing: border-box; }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 48px 20px;
            color: var(--ink);
            font-family: Georgia, 'Times New Roman', serif;
            background: url('<?= base_url("public/assests/img/login_bg.jpg"); ?>') center / cover fixed;
        }

        .return {
            position: fixed;
            top: 20px;
            left: 22px;
            display: grid;
            width: 44px;
            height: 44px;
            place-items: center;
            color: var(--black);
            font: 26px Arial, sans-serif;
            text-decoration: none;
            background: #fff;
            border: 1px solid var(--black);
        }

        .return:hover { color: #fff; background: var(--black); }

        .container {
            width: min(100%, 700px);
            margin: 0 auto;
            padding: 0;
            background: #fff;
            border: 2px solid var(--black);
            border-radius: 0;
            box-shadow: 5px 5px 0 rgba(41, 41, 41, .22);
            animation: arrive .45s ease-out both;
        }

        .form-header {
            padding: 24px 30px 20px;
            color: #fff;
            background: var(--black);
        }

        .eyebrow {
            margin: 0 0 8px;
            color: #f3a9bb;
            font: 700 11px Arial, sans-serif;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        h1 { margin: 0; color: #fff; font-size: clamp(30px, 5vw, 42px); font-weight: 400; }

        .intro { margin: 9px 0 0; color: #e7e7e7; font: 15px/1.5 Arial, sans-serif; }

        form { padding: 0 30px 30px; }

        .section-title {
            margin: 27px 0 14px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--black);
            font-size: 19px;
            font-weight: 400;
        }

        .form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 4px 18px; }
        .form-group { min-width: 0; margin-bottom: 13px; }
        .form-group.wide { grid-column: 1 / -1; }

        label {
            display: block;
            margin-bottom: 7px;
            color: var(--black);
            font: 700 12px Arial, sans-serif;
        }

        input, select {
            width: 100%;
            min-height: 45px;
            padding: 11px 12px;
            color: var(--ink);
            font: 14px Arial, sans-serif;
            background: #fff;
            border: 1px solid #777;
            border-radius: 0;
            outline: none;
            transition: border-color .18s ease, box-shadow .18s ease;
        }

        input:focus, select:focus { border-color: var(--black); box-shadow: 0 0 0 2px rgba(237, 159, 178, .55); }
        input[readonly] { color: var(--black); font-weight: 700; background: #fff3f6; }

        .alert {
            padding: 12px 16px;
            margin: 22px 30px 0;
            color: var(--black);
            font: 14px/1.5 Arial, sans-serif;
            background: #fff0f4;
            border: 1px solid var(--black);
            border-radius: 0;
        }

        .alert ul { margin: 0; padding-left: 20px; }

        .actions { display: flex; justify-content: flex-end; gap: 12px; margin-top: 24px; }

        .cancel, button {
            min-height: 46px;
            padding: 0 22px;
            font: 700 13px Arial, sans-serif;
            text-decoration: none;
            border-radius: 0;
            cursor: pointer;
        }

        .cancel { display: inline-flex; align-items: center; color: var(--black); background: #fff; border: 1px solid var(--black); }
        button { color: #fff; background: var(--black); border: 1px solid var(--black); transition: background .18s ease; }
        button:hover { background: #4a4a4a; }

        @keyframes arrive { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        @media (max-width: 600px) {
            body { padding: 76px 14px 24px; }
            .return { top: 14px; left: 14px; }
            .form-header { padding: 22px 20px 18px; }
            form { padding: 0 20px 22px; }
            .alert { margin: 18px 20px 0; }
            .form-grid { grid-template-columns: 1fr; gap: 0; }
            .form-group.wide { grid-column: auto; }
            .actions { flex-direction: column-reverse; }
            .actions > * { justify-content: center; width: 100%; }
        }
    </style>
</head>

<body>
    
<a class="return" href="<?= base_url("order/order"); ?>" aria-label="Back to orders">&#8592;</a>

    <div class="container">
        <header class="form-header">
            <p class="eyebrow">Le Fleur · Order management</p>
            <h1>Edit flower order</h1>
            <p class="intro">Update the bouquet and delivery details for this order.</p>
        </header>

            <?php if (isset($validation)): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($validation as $error): ?>
                    <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?= form_open('order/editRecord/'.$order_info['id']); ?>

            <h2 class="section-title">Bouquet selection</h2>
            <div class="form-grid">
                <div class="form-group">
                    <label for="txtOrders">Flower arrangement</label>
                    <select id="txtOrders" name="txtOrders" onchange="updatePrice(this)" required>
                        <option value="">Choose a bouquet</option>
                        <option value="Eclectic Rose Ensemble" <?= $order_info['orders'] === 'Eclectic Rose Ensemble' ? 'selected' : '' ?>>Eclectic Rose Ensemble</option>
                        <option value="Quintessential Roses" <?= $order_info['orders'] === 'Quintessential Roses' ? 'selected' : '' ?>>Quintessential Roses</option>
                        <option value="Garden of Ivory Serenity" <?= $order_info['orders'] === 'Garden of Ivory Serenity' ? 'selected' : '' ?>>Garden of Ivory Serenity</option>
                        <option value="Purple Majesty Bloom" <?= $order_info['orders'] === 'Purple Majesty Bloom' ? 'selected' : '' ?>>Purple Majesty Bloom</option>
                        <option value="Golden Glow Bouquet" <?= $order_info['orders'] === 'Golden Glow Bouquet' ? 'selected' : '' ?>>Golden Glow Bouquet</option>
                        <option value="Rosy Crimson Delight" <?= $order_info['orders'] === 'Rosy Crimson Delight' ? 'selected' : '' ?>>Rosy Crimson Delight</option>
                        <option value="Frosty Meadow Bloom" <?= $order_info['orders'] === 'Frosty Meadow Bloom' ? 'selected' : '' ?>>Frosty Meadow Bloom</option>
                        <option value="Hydrangea Haven" <?= $order_info['orders'] === 'Hydrangea Haven' ? 'selected' : '' ?>>Hydrangea Haven</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtPrice">Bouquet price</label>
                    <input type="text" id="txtPrice" name="txtPrice" value="<?= esc($order_info['price']) ?>" readonly required>
                </div>
            </div>

            <h2 class="section-title">Customer details</h2>
            <div class="form-grid">
                <div class="form-group">
                    <label for="txtFullName">Full name</label>
                    <input type="text" id="txtFullName" name="txtFullName" value="<?= esc($order_info['full_name']) ?>" autocomplete="name" required>
                </div>
                <div class="form-group">
                    <label for="txtContactNumber">Contact number</label>
                    <input type="text" id="txtContactNumber" name="txtContactNumber" value="<?= esc($order_info['contact_number']) ?>" autocomplete="tel" required>
                </div>
                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="email" id="txtEmail" name="txtEmail" value="<?= esc($order_info['email']) ?>" autocomplete="email" required>
                </div>
                <div class="form-group">
                    <label for="txtAddress">Delivery address</label>
                    <input type="text" id="txtAddress" name="txtAddress" value="<?= esc($order_info['address']) ?>" autocomplete="street-address" required>
                </div>
            </div>

            <h2 class="section-title">Delivery schedule</h2>
            <div class="form-grid">
                <div class="form-group">
                    <label for="txtOrderDate">Delivery date</label>
                    <input type="date" id="txtOrderDate" name="txtOrderDate" value="<?= esc($order_info['order_date']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="txtOrderTime">Delivery time</label>
                    <input type="time" id="txtOrderTime" name="txtOrderTime" value="<?= esc($order_info['order_time']) ?>" required>
                </div>
            </div>

            <div class="actions">
                <a class="cancel" href="<?= base_url("order/order"); ?>">Cancel</a>
                <button type="submit">Save changes</button>
            </div>

            </form>
    </div>

    <script>
        function updatePrice(select) {
            const priceElement = document.getElementById('txtPrice');
            const prices = {
                'Eclectic Rose Ensemble': '₱1024',
                'Quintessential Roses': '₱800',
                'Garden of Ivory Serenity': '₱2851',
                'Purple Majesty Bloom': '₱3484',
                'Golden Glow Bouquet': '₱4058',
                'Rosy Crimson Delight': '₱1083',
                'Frosty Meadow Bloom': '₱1500',
                'Hydrangea Haven': '₱2836'
            };
            priceElement.value = prices[select.value] || '';
        }
    </script>
</body>

</html>
