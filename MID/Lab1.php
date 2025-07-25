<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AIUB Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h1, h2 {
            text-align: center;
            color: #004080;
            margin: 5px 0;
        }
        .subtitle {
            color: #004080;
            font-size: 18px;
            margin: 15px 0 10px 0;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 6px;
            margin-top: 4px;
        }
        .gender-options, .language-options {
            display: flex;
            gap: 10px;
            margin-top: 5px;
        }
        .gender-options input, .language-options input {
            width: auto;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #004080;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #003060;
        }
    </style>
</head>
<body>

    <h1>AIUB</h1>
    <h2>Registration Form</h2>

    <form action="submit_form.php" method="post" enctype="multipart/form-data">

        <div class="subtitle">Complete the registration</div>

        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label>Gender:</label>
        <div class="gender-options">
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Other"> Other</label>
        </div>

        <label>Languages Known:</label>
        <div class="language-options">
            <label><input type="checkbox" name="languages[]" value="English"> English</label>
            <label><input type="checkbox" name="languages[]" value="Bangla"> Bangla</label>
            <label><input type="checkbox" name="languages[]" value="Hindi"> Hindi</label>
        </div>

        <label for="country">Country:</label>
        <select name="country" id="country" required>
            <option value="">--Select--</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="Other">Other</option>
        </select>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="photo">Upload Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" required>

        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4"></textarea>

        <button type="submit">Register</button>

    </form>

</body>
</html>
