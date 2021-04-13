<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            box-sizing: border-box
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            display: flex;
            justify-content: center;
        }

        .content {
            width: 500px;
            display: flex;
            flex-direction: column;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=date],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .submitbtn {
            background-color: rgb(154, 205, 50);
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .submitbtn:hover {
            opacity: 1;
        }
    </style>
    <title>User Record</title>
</head>

<body>
    <form action="/updateUser" method="POST">
        <input type="hidden" name="id" value="{{$userdata['id']}}">
        <div class="container">
            <div class="content">
                <h1>Update User Redord</h1>

                <label for="Firstname"><b>Firstname</b></label>
                <input type="text" name="Firstname" id="Firstname" value="{{$userdata['Firstname']}}" required>

                <label for="Surname"><b>Surname</b></label>
                <input type="text" name="Surname" id="Surname" value="{{$userdata['Surname']}}" required>

                <label for="DateOfBirth"><b>Date Of Birth</b></label>
                <input type="date" name="DateOfBirth" id="DateOfBirth" value="{{$userdata['DateOfBirth']}}" required>

                <label for="PhoneNumber"><b>Phone Number</b></label>
                <input type="text" name="PhoneNumber" id="PhoneNumber" value="{{$userdata['PhoneNumber']}}" required>

                <label for="Email"><b>Email</b></label>
                <input type="text" name="Email" id="Email" value="{{$userdata['Email']}}" required>

                <button type="submit" class="submitbtn">Update</button>
            </div>
        </div>
    </form>
</body>

</html>