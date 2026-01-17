<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #f4f6f8;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.main-div {
    background-color: #ffffff;
    width: 420px;
    padding: 25px 30px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.main-div h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form {
    width: 100%;
}

.form-label,
.form-lebel {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
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
    border-color: #007bff;
}

img {
    display: block;
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    border: none;
    border-radius: 6px;
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="main-div">
        <h1>Edit Employee</h1>
        <div class="form">
            <?= form_open_multipart('employee/update',['id'=>'edit_form'])?>
                <input type="hidden" name="id" value="<?= esc($employee_details['id']) ?>">
                <label for="name" class="form-lebel">Full Name</label>
                <input type="text" name="name" class="input-box" id="name" value="<?= esc($employee_details['name'])?>">
                <label for="address" class="form-lebel">Address</label>
                <input type="text" name="address" class="input-box" id="address" value="<?= esc($employee_details['address']) ?>">
                <label for="designation" class="form-lebel">Designation</label>
                <input type="text" name="designation" class="input-box" id="designation" value="<?= esc($employee_details['designation']) ?>">
                <label for="salary" class="form-lebel">Salary</label>
                <input type ="number" name="salary" class="input-box" id="salary" value="<?= esc($employee_details['salary']) ?>">
                <label for="picture" class="form-label">Picture</label>
                <img src="<?= base_url($employee_details['picture'])?>">
                <input type="hidden" name="old_image" value="<?= esc($employee_details['picture'])?>">
                <input type="file" name="new_image" class="input-box" id="picture">
                <button type="submit" name="send">Edit</button>
            <?=form_close()?>
   
</body>
</html>