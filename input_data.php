<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
         body {
            background-color: #BDCDD6;
            font-size: 26px;
        }
        input {
            width: 50%;
            height: 30px;
            background-color: #DFD3C3;
            text-align: center;
            border-radius: 10px;
            font-size: 20px;
        }
        button {
            padding: 17px 35px;
            background-color: #4C6793;
            color: white;
        }
    </style>
</head>
<body>
    <center>
    <form method="post" action="data.php?action=add" >
        <h4>Input Data Diri</h4>
        <label>Nama Siswa : </label><br/>
        <input type="text" name="nama" ><br/>
        <label>Nis: </label><br/>
        <input type="number" name="nis" ><br/>

        <h4>Input Nilai Siswa</h4>
        <label>Matematika : </label><br/>
        <input type="number" name="mtk" ><br/>
        <label>Produktif : </label><br/>
        <input type="text" name="prod" ><br/>
        <label>PIPAS : </label><br/>
        <input type="text" name="pipas" ><br/>

        <br/>
        <button type="submit" name="submit">Submit</button>
    </form>
    </center>
</body>
</html>



