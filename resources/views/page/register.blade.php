<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <a href="/">Kembali ke index</a>
    <h1>Form Sign Up</h1>

    <form action="/welcome" method="GET">
        @csrf
        <label>Nama Lengkap</label> <br>
        <input type="text" name="fullname" required> <br><br>

        <label>Umur</label> <br>
        <input type="number" name="umur"> <br><br>

        <label>Status</label> <br>
        <input type="radio" name="status" value="1"> Menikah <br>
        <input type="radio" name="status" value="2"> Belum Menikah <br><br>

        <label>Kota</label> <br>
        <select name="kota" id="">
            <option value="1">Bandung</option>
            <option value="2">Jakarta</option>
            <option value="3">Yogyakarta</option>
        </select> <br><br>

        <label>Skills</label> <br>
        <input type="checkbox" name="skill" id="" value="1"> Laravel <br>
        <input type="checkbox" name="skill" id="" value="2"> ReactJs <br>
        <input type="checkbox" name="skill" id="" value="3"> NextJs <br><br>

        <label>Alamat</label> <br>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br><br>

        <input  type="submit" value="Submit">
    </form>
</body>
</html>
