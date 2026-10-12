<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Le Fleur | Login</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url('<?= base_url("public/assests/img/login_bg.jpg"); ?>');
        background-size: cover;
        background-position: center;
    }

    .login-container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .login-container h2 {
        color: #3d3d3d;
        font-size: 24px;
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 20px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 20px;
        background-color: #6ab04c;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #4e8e33;
    }

    .error-message {
        color: #ff5555;
        margin-top: 10px;
    }

    .return {
        text-decoration: none;
        font-size: 18px;
        position: fixed;
        top: 20px;
        left: 20px;
        padding: 5px;
        color: #6ab04c;
        cursor: pointer;
    }

    .return:hover {
        color: #4e8e33;
    }
</style>
</head>
<body>
<a class="return" href="<?= base_url("order/index"); ?>">⇦ Return</a>
<div class="login-container">
    <h2>Welcome to Le FLeur</h2>
    <form id="login-form">
        <input type="text" id="username" placeholder="Username" required>
        <input type="password" id="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <p class="error-message" id="error-message" style="display: none;">Incorrect username or password.</p>
</div>

<script>
    document.getElementById("login-form").addEventListener("submit", function(event) {
        event.preventDefault();
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        
        // Check if username and password are correct
        if (username === "admin" && password === "admin") {
            // Redirect to the specified URL upon successful login
            window.location.href = "<?= base_url("Order/order"); ?>";
        } else {
            // Show error message
            document.getElementById("error-message").style.display = "block";
        }
    });
</script>
</body>
</html>
