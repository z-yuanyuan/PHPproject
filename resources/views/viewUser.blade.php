<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            padding: 15px;
            display: flex;
            justify-content: center;
        }

        .content {
            width: 900px;
            display: flex;
            flex-direction: column;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        tr:nth-child(2) {
            counter-reset: rowNumber;
        }

        table tr {
            counter-increment: rowNumber;
        }

        table tr td:first-child::before {
            content: counter(rowNumber);
            min-width: 1em;
            margin-right: 0.5em;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 4.9px;
        }

        tr:nth-child(even) {
            background-color: rgb(154, 205, 50);
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: rgb(154, 205, 50);
            background-color: transparent;
        }

        .creratebtn {
            border-radius: 50px;
            padding: 12px 25px;
            font-size: medium;
            color: white;
            text-align: center;
            position: relative;
            background-color: rgb(154, 205, 50);
            cursor: pointer;
        }

        .createbtn {
            border: 2px solid black;
            background-color: white;
            padding: 8px 15px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 50px;
            float: right;
            position: relative;
            border-color: rgb(154, 205, 50);
            color: black;
            border-radius: 50px;
        }

        .updatebtn {
            border-radius: 50px;
            background-color: rgb(244, 208, 63);
            padding: 4px 7px;
            font-size: 14px;
            cursor: pointer;
        }

        .deletebtn {
            border-radius: 50px;
            background-color: rgb(236, 112, 99);
            padding: 4px 7px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h2>List of All Users<button type="button" class="btn createbtn"><a href="users">Create New User</a></button></h2>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Firstname</th>
                    <th>Surname</th>
                    <th>Date Of Birth</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                @foreach($userData as $u)
                <tr>
                    <td></td>
                    <td>{{$u->Firstname}}</td>
                    <td>{{$u->Surname}}</td>
                    <td>{{$u->DateOfBirth}}</td>
                    <td>{{$u->PhoneNumber}}</td>
                    <td>{{$u->Email}}</td>
                    <td>
                        <button type="button" class="updatebtn"><a href={{"updateUser/".$u['id']}}>Update</a></button>
                        <button type="button" class="deletebtn"><a href={{"delete/".$u['id']}} onclick="return confirm('Are you sure?')">Delete</a></button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>