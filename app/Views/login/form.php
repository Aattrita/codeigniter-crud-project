<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background: linear-gradient(135deg, #667eea, #764ba2);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-div {
    background-color: #ffffff;
    width: 360px;
    padding: 30px 25px;
    border-radius: 12px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}

.main-div h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    font-size: 14px;
    color: #555;
}

.input-box {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

.input-box:focus {
    outline: none;
    border-color: #667eea;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #667eea;
    border: none;
    border-radius: 6px;
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #5563d6;
}

    </style>
</head>
<body>
    <div class="main-div">
        <h2>Login Form</h2>
        <?= form_open('login',['id'=>'login_form'])?>
        <label for="email">Email</label>
        <input type="text" name="email_id" class="input-box">
        <label for="username">UserName</label>
        <input type="text" name="username" class="input-box">
        <label for="pasword">Password</label>
        <input type="password" name="password" class="input-box">
        <label for="name">Name</label>
        <input type="text" name="name" class="input-box">
        <button type="submit" name="send">Submit</button>
        <?= form_close() ?>
    </div>
</body>
</html>