<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Page</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #f4f6f8;
    padding: 30px;
}

/* Header section */
heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

heading h1 {
    font-size: 28px;
    color: #333;
}

/* Button styles */
.button a {
    text-decoration: none;
    padding: 9px 16px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
}

.add {
    background-color: #0d6efd;
    color: #fff;
}

.edit {
    background-color: #198754;
    color: #fff;
    margin-right: 6px;
}

.delete {
    background-color: #dc3545;
    color: #fff;
}

.button a:hover {
    opacity: 0.9;
}

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

thead {
    background-color: #343a40;
}

thead td {
    color: #fff;
    padding: 14px;
    font-weight: bold;
}

tbody td {
    padding: 12px 14px;
    border-bottom: 1px solid #e0e0e0;
    vertical-align: middle;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

/* Employee image */
tbody img {
    width: 55px;
    height: 55px;
    object-fit: cover;
    border-radius: 50%;
    border: 1px solid #ccc;
}

/* Action buttons */
td .button {
    display: flex;
    align-items: center;
}

    </style>
</head>
<body>
    <heading>
        <h1>Employee List</h1>
        <div class="button">
            <a href="<?= url_to('employee')?>" class="add">Add New Employee</a>
        </div>
    </heading>
    <table>
        <thead>
            <tr>
                <td>SI No</td>
                <td>Name</td>
                <td>Address</td>
                <td>Designation</td>
                <td>Salary</td>
                <td>Picture</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $count=0; ?>
            <?php if(empty($allEmployee)){
                ?>
                <tr>
                    <td colspan="6">No record Found</td>
                </tr>
            <?php    
            } 
            else { 
                ?>
            <?php foreach ($allEmployee as $employee): ?>
                
                <tr>
                    <td><?= ++$count ?></td>
                    <td><?= esc($employee['name']) ?></td>
                    <td><?= esc($employee['address'])?></td>
                    <td><?= esc($employee['designation'])?></td>
                    <td><?= esc($employee['salary'])?></td>
                    <td><img src="<?= base_url($employee['picture'])?>"></td>
                    <td>
                        <div class="button">
                            <a href="<?= url_to('employee/edit',$employee['id'])?>" class="edit">Edit</a>
                            <a href="<?= url_to('employee/delete',$employee['id'])?>" class="delete">Delete</a>
                        </div>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>