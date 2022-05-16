<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Menu</title>
</head>
<body>
    <br>
    <h1 id = "menutitle">Menu</h1>
    <section id = "sectionmenumeja">
        <h6 id = "labelmenumeja">Meja 1.12</h6>
        <button type="submit" id="buttonpilihmeja">Pilih Meja</button>
    </section>

    <hr class = "line">

    <section id="menukategori">
        <label>
            <input type="radio" name="radio" value="food" checked>
            <img src="./resource/food.png">
          </label>

          <label>
            <input type="radio" name="radio" value="drink">
            <img src="./resource/drink.png">
          </label>

          <label>
            <input type="radio" name="radio" value="snack">
            <img src="./resource/snack.png">
          </label>
    </section>
    <br>
    <center>
        <section id = "inputMeja">
            <input type="text" id="tboxMenuSearch" name="menuSearch" placeholder="Cari menu">
            <button type="submit" class="buttonsmall">Cari</button>
        </section>
    </center>
    <br>
    <section id="allMenu">
        <div class = "menuCard">
            <h6>
                <section id = "menuCardPosition">

                    <section id = "menuCardDetail">
                        Ayam Bakar
                        <p>Rp. 20.000</p>
                    </section>

                    <section id = "inputJumlah">
                        <input type="text" id="tboxJumlahMenu" name="jumlahMenu" placeholder="Jumlah">
                        <button type="submit" class="buttonok">OK</button>
                    </section>

                </section>
            </h6>
            <input type="text" id="tboxNote" name="Note" placeholder="Catatan">

            <h6>
                <section id = "menuCardPosition">

                    <section id = "menuCardDetail">
                        Ayam Goreng
                        <p>Rp. 22.000</p>
                    </section>

                    <section id = "inputJumlah">
                        <input type="text" id="tboxJumlahMenu" name="jumlahMenu" placeholder="Jumlah">
                        <button type="submit" class="buttonok">OK</button>
                    </section>

                </section>
            </h6>
            <input type="text" id="tboxNote" name="Note" placeholder="Catatan">


            <h6>
                <section id = "menuCardPosition">

                    <section id = "menuCardDetail">
                        Ayam Goreng
                        <p>Rp. 22.000</p>
                    </section>

                    <section id = "inputJumlah">
                        <input type="text" id="tboxJumlahMenu" name="jumlahMenu" placeholder="Jumlah">
                        <button type="submit" class="buttonok">OK</button>
                    </section>

                </section>
            </h6>
            <input type="text" id="tboxNote" name="Note" placeholder="Catatan">

            <h6>
                <section id = "menuCardPosition">

                    <section id = "menuCardDetail">
                        Ayam Goreng
                        <p>Rp. 22.000</p>
                    </section>

                    <section id = "inputJumlah">
                        <input type="text" id="tboxJumlahMenu" name="jumlahMenu" placeholder="Jumlah">
                        <button type="submit" class="buttonok">OK</button>
                    </section>

                </section>
            </h6>
            <input type="text" id="tboxNote" name="Note" placeholder="Catatan">

            <h6>
                <section id = "menuCardPosition">

                    <section id = "menuCardDetail">
                        Ayam Goreng
                        <p>Rp. 22.000</p>
                    </section>

                    <section id = "inputJumlah">
                        <input type="text" id="tboxJumlahMenu" name="jumlahMenu" placeholder="Jumlah">
                        <button type="submit" class="buttonok">OK</button>
                    </section>

                </section>
            </h6>
            <input type="text" id="tboxNote" name="Note" placeholder="Catatan">
        </div>
    </section>

    <br>
    <br>
    <br>
</body>
</html>