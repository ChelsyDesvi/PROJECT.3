<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman 1 ya</title>
    <style>
    * {
    text-decoration: none;
    margin:10px;
    padding:10px;
    background-color: pink;
}

body {
    margin: 0px;
    padding: 0px;
    font-family:'Open sans',sans-serif ;
}

.wrapper {
    width:1100px;
    margin: auto;
}

.logo {
    font-size: 100px;
    width: 70%;
    text-align:center;
    font-weight: 900;
    float: center;
    font-family: 'Courier New', Courier, monospace;
    color: #364f6b ;
}

.menu {
    float:right;
    width: 100%;
}

nav {
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background: #FFFFFF;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 20px 0px 20px;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

section {
    margin:auto;
    display: flex;
    margin-bottom: 50px;

}

.kolom {
    margin-top: 50px;
    margin-bottom: 50px;
}

.kolom .deskripsi {
    font-size: 20px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: #364f6b;
}

h2{
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 45px;
    margin-bottom:20px ;
    color:#364f6b ;
    width:100% ;
    line-height:50px ;

}

a.tbl-biru {
    background:#3f72af ;
    border-radius: 20px;
    margin: 20px;
    padding: 15px 20px 15px 20px;
    color: white;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-biru:hover {
    background: #fc5185;
    text-decoration: none;
}

a.tbl-pink {
    background: #fc5185;
    border-radius: 20px;
    margin: 20px;
    padding: 15px 20px 15px 20px;
    color: white;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-pink:hover {
    background: #3f72af;
    text-decoration: none;
}

p {
    margin: 10px 0px 10px 0px;
    padding: 10px 0px 10px 0px;
}

img {
    width:500px;
    height: 500px;
    border-radius: 50%;
    margin-bottom: 50px;
    display: flex;
}
</style>
</head>
<body>
    <nav>
        <div class="logo">SEKOLAH POS</div>
            <div class="menu">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li><a href="#home">Home</a></li>
                    <li><a href="halaman2">halaman2</a></li>
                    <li><a href="index.php">halaman3</a></li>
                    <li><a href=""class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section id="home">
            <img src="wle.png">
            <div class="kolom">
                <p class="deskripsi">Kumpulan artikel-artikel menarik</p>
                <h2>Ayo bergabung di sekolah Pos SKANDAKRA</h2>
                <p>a.a.a.a.a.a.a</p>
                <p><a href="kedua.php" class="tbl-pink">Pelajari lebih lanjut</a></p>
            </div>

        </section>
    </div>
</body>
</html>


