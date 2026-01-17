<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <style>
        /* Page center alignment */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Main container */
    .main-div {
        width: 100%;
        max-width: 450px;
    }

/* Heading outside the form */
.main-div h1 {
    text-align: center;
    margin-bottom: 15px;
    color: #333;
}

/* Form box */
.form {
    border: 1px solid #ccc;
    padding: 25px;
    background: #ffffff;
    border-radius: 6px;
}

/* Labels */
.form-lebel,
.form-label {
    display: block;
    margin-bottom: 6px;
    font-size: 14px;
    font-weight: 600;
    color: #444;
}

/* Input fields */
.input-box {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 15px;
    border: 1px solid #bbb;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

/* Input focus effect */
.input-box:focus {
    outline: none;
    border-color: #1e3a8a; /* dark blue */
}

/* Submit button */
button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #064e3b; /* dark green */
    color: #ffffff;
    font-size: 15px;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Button hover */
button[type="submit"]:hover {
    background-color: #022c22;
}

    </style>

</head>
<body>
    <div class="main-div">
        <h1>Adding New Employee</h1>
        <div class="form">
            <?= form_open_multipart('employee',['id'=>'create_form'])?>
                <lable for="name" class="form-lebel">Full Name</lable>
                <input type="text" name="name" class="input-box" id="name">
                <lable for="address" class="form-lebel">Address</label>
                <input type="text" name="address" class="input-box" id="address" >
                <label for="designation" class="form-lebel">Designation</label>
                <input type="text" name="designation" class="input-box" id="designation">
                <label for="salary" class="form-lebel">Salary</label>
                <input type ="number" name="salary" class="input-box" id="salary">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" name="picture" class="input-box" id="picture">
                <button type="submit" name="send">Submit</button>
            <?=form_close()?>
        </div>
    </div>
</body>
</html>