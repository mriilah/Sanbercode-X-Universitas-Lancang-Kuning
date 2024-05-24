<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Acoount Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="">First Name :</label><br>
        <input type="text" name="namadepan" id=""><br>
        <label for="">Last Name :</label><br>
        <input type="text" name="namabelakang" id=""><br>
        <br>
        <label for="">Gender :</label><br><br>
        <input type="radio" name="gender" id="laki"><label for="laki">Laki Laki</label><br>
        <input type="radio" name="gender" id="perempuan"><label for="perempuan">Perempuan</label><br>
        <input type="radio" name="gender" id="lainya"><label for="lainya">Other</label><br>
        <br>
        <label for="">Nationality :</label><br><br>
        <select name="Kebangsaan" id="bangsa">
            <option value="indonesia" id="dariindo">indonesia</option>
            <option value="Belanda" id="daribelanda">Belanda</option>
            <option value="Malaysia" id="darimalay">Malaysia</option>
        </select><br>
        <br>
        <label for="">Language Spoken :</label><br><br>
        <input type="checkbox" name="b.indo" id="indo"><label for="indo">Bahasa Indonesia</label><br>
        <input type="checkbox" name="b.english" id="english"><label for="english">English</label><br>
        <input type="checkbox" name="b.other" id="other"><label for="other">Other</label><br>
        <br>
        <label for="">Bio :</label><br><br>
        <textarea name="Bio" id="" cols="30" rows="10"></textarea><br>
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>