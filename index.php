<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <style>
        * {
            margin: 0;
        }

        .body {
            background-image: url(night.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 10px;
            height: 90%;
            width: 30%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6);
        }


        /* DATA DIRI */
        .data-diri {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 150px;
            position: relative;
            bottom: 150px;
            text-align: center;


        }

        .font-data {
            font-weight: bold;
            font-size: 1.6vmax;
            padding-top: 10px;
        }

        input[type="text"] {
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.3);
            border: none;
            width: 90%;
            height: 30%;
            transition: 0.5s;
        }

        input[type="text"]:focus {
            box-shadow: 0 0 15px rgb(255, 0, 0);
            transition: all 0.5s ease-in-out;
            outline: none;
            border: 1px solid black;
            width: 100%;
            height: 40%;
            transition: 0.5s;
        }

        /*END DATA DIRI  */

        /* GENDER */
        .jenis-kelamin {
            margin: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            bottom: 90px;
            font-weight: bold;
        }

        .kelamin {
            display: flex;

        }

        .gender {
            display: flex;
            align-items: center;
        }

        .p-kelamin {
            font-size: 1vmax;
            font-weight: bold;
            flex-direction: row-reverse;

        }

        .p-gender {
            text-shadow: 2px 2px 5px rgba(235, 56, 56, 0.4);
            width: 50px;
            height: 50px;
            padding-left: 50px;
            padding-right: 50px;
        }


        input[type="radio"] {
            appearance: none;
            width: 30px;
            width: 10px;
            height: 10px;
            border-radius: 45%;
            background-color: rgba(0, 0, 0, 0.3);
            border: 1px solid black;
            outline: none;
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        input[type="radio"]:focus {
            box-shadow: 0 0 15px rgb(251, 36, 36);
            border: 1px solid white;
            background-color: red;
            width: 20px;
            height: 20px;
            transition: 0.5s;
        }

        /* END GENDER */

        /* TANGGAL LAHIR */
        .tanggal-lahir {
            margin: 20px;
            padding-left: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            font-weight: bold;
            bottom: 90px;
        }

        .p-lahir {
            font-size: 1vmax;
            padding-left: 4px;
        }

        select {
            border: none;
            background-color: rgba(0, 0, 0, 0.3);
            outline: none;
            height: 10%;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 0.8rem;
            padding: 3px;
            transition: 0.5s;
        }

        select:focus {
            box-shadow: 0 0 15px rgb(251, 36, 36);
            border: 1px solid black;
            transition: 0.8s;
        }

        /*END TANGGAL LAHIR  */


        /* HOBI */
        .hobi {
            margin: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            bottom: 50px;
        }

        .h4p {
            text-align: center;
            font-size: 1vmax;
            font-weight: bold;
        }

        .p-tidak {
            padding-top: 50px;
        }

        input[type="checkbox"] {
            appearance: none;
            width: 15px;
            height: 15px;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            border: 1px solid black;
            margin-left: 10px;
            align-items: center;
            transition: 0.5s;
        }

        input[type="checkbox"]:focus {
            box-shadow: 0 0 15px rgb(251, 36, 36);
            border: 1px solid white;
            outline: black;
            cursor: pointer;
            transition: 0.8s;
            background-color: rgb(251, 36, 36);
            width: 20px;
            height: 20px;
        }

        textarea {
            width: 90%;
            height: 80px;
            padding: 10px;
            padding-bottom: 10px;
            border-radius: 5px;
            border: 1px solid black;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            background-color: rgba(0, 0, 0, 0.2);
            color: white;
            resize: none;
            transition: 0.5s;
        }


        textarea:focus {
            box-shadow: 0 0 15px rgb(251, 36, 36);
            outline: none;
            border: 1px solid black;
            transition: 0.8s;
            height: 100px;
        }

        /* END HOBI */

        /* SUBMIT */
        .submit {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            bottom: 25px;
        }

        input[type="submit"] {
            height: 50px;
            width: 130px;
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            font-weight: bold;
            font-size: 1.2vmax;
            cursor: pointer;
            outline: none;
            border: 1px solid black;
            color: white;
        }

        input[type="submit"]:hover {
            border: 1px solid white;
            outline: ;
            box-shadow: 0 0 15px rgb(251, 36, 36);
            transition: 1.0s;
            cursor: pointer;
        }

        /* END SUBMIT */

        /* Responsive */

        @media screen and (min-width: 100px) and (max-width: 667px) {

            /* BODY */
            .container {
                width: 90%;
                transition: 1.5s;
            }

            /* DATA DIRI */
            .font-data {
                font-size: 3vmax;
            }

            .data-diri {
                margin-top: 200px;
            }

            input[type="text"] {
                font-size: 3vmax;
                height: 40%;
                transition: 0.5s;
                width: 50%;
            }

            input[type="text"]:focus {
                box-shadow: 0 0 15px rgb(255, 0, 0);
                transition: all 0.5s ease-in-out;
                outline: none;
                border: 1px solid black;
                width: 55%;
                height: 40%;
                transition: 0.5s;
            }

            /* GENDER */
            .p-gender {
                padding: 10px;
                transition: 1.5s;
                width: 30px;
                height: 30px;
                padding-left: 5px;
                padding-right: 5px;
            }

            .p-kelamin {
                font-size: 2vmax;
                transition: 1.5s;
            }

            /* Tanggal Lahir */
            .p-lahir {
                /* padding-left: 3px; */
                font-size: 2vmax;
                transition: 1.5;
            }

            select {
                display: flex;
                flex-direction: row-reverse;
                margin: 5px;
                transition: 1.5;
            }

            /* End Tanggal Lahir */

            /* HOBI */
            .hobi {
                margin-top: 0;
            }

            .h4p {
                font-size: 2vmax;
            }

            textarea {
                width: 70%;
                height: 70px;
                position: relative;
                left: 30px;
            }

            textarea:focus {
                height: 70px;
            }

            /* END HOBI */
        }

        @media screen and (min-width: 600px) and (max-width: 1400px) {

            /* BODY */
            .container {
                width: 90%;
                transition: 1.5s;
            }

            /* DATA DIRI */
            .data-diri {
                margin-top: 200px;
                margin-bottom: 0;
            }

            input[type="text"] {
                font-size: 5vmax;
                height: 40%;
                transition: 0.5s;
                width: 50%;
                font-size: 3vmax;
                padding: 3px;
            }

            input[type="text"]:focus {
                box-shadow: 0 0 15px rgb(255, 0, 0);
                transition: all 0.5s ease-in-out;
                outline: none;
                border: 1px solid black;
                width: 55%;
                height: 40%;
                transition: 0.5s;
            }

            /* GENDER */
            .jenis-kelamin {
                margin-top: 0px;
            }

            .p-gender {
                text-shadow: 2px 2px 5px rgba(235, 56, 56, 0.4);
                width: 50px;
                height: 50px;
                padding-left: 50px;
                padding-right: 50px;
            }

            .p-kelamin {
                font-size: 2vmax;
                transition: 1.5s;
            }

            /* Tanggal Lahir */
            .tanggal-lahir {
                margin-top: 0;
            }

            .p-lahir {
                font-size: 2vmax;
                transition: 1.5;
            }

            select {
                border: none;
                background-color: rgba(0, 0, 0, 0.3);
                outline: none;
                height: 10%;
                border-radius: 5px;
                color: white;
                font-weight: bold;
                cursor: pointer;
                font-size: 0.8rem;
                padding: 3px;
                transition: 0.5s;
            }

            /* End Tanggal Lahir */

            /* HOBI */
            .hobi {
                margin-top: 0px;
            }

            .h4p {
                font-size: 2vmax;
            }

            textarea {
                width: 100%;
                height: 70px;
                position: relative;
                right: 60px;
                padding: 3px;
            }

            textarea:focus {
                height: 70px;
            }
        }

        /* END Responsive */
    </style>
</head>

<body class="body" style="font-family:sans-serif;">
    <form class="container" id="form_data" name="form_data" action="proses_data.php" method="POST">
        <div class="data-diri" id="data-diri">
            <p class="font-data" style="font-family: 'Poppins', sans-serif;">Nama Lengkap <br> <input type="text"
                    id="nama" name="nama"></p>
            <p class="font-data">Email <br> <input type="text" id="kelas" name="kelas"></p>
        </div>
        <div class="jenis-kelamin">
            <div class="label-container">
                <p class="p-kelamin">Jenis Kelamin :</p>
            </div>

            <div class="gender">
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" class="radio">
                <svg class="p-gender" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304l0 128c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-223.1L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6l29.7 0c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9 232 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-128-16 0z" />
                </svg>

                <svg class="p-gender" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM88 384l-17.8 0c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2c20.3-33.7 56.7-54.3 96-54.3l11.6 0c39.3 0 75.7 20.6 96 54.3l53.6 89.2c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9l-33.9-56.3L265 362.9c3.5 10.4-4.3 21.1-15.2 21.1L232 384l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-16 0 0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96z" />
                </svg><input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" class="radio">

            </div>
        </div>
        <div class="tanggal-lahir" id="tanggal-lahir">
            <div>
                <p class="p-lahir">Tanggal Lahir :</p>
            </div>
            <div classs="select">
                <select id="day" name="day">
                    <?php for ($i = 1; $i <= 33; $i++) { ?>
                        <option><?php echo "TANGGAL $i"; ?></option>
                    <?php } ?>
                </select>
                <select id="month" name="month">
                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                        <option><?php echo "BULAN $i"; ?></option>
                    <?php } ?>
                </select>
                <select id="years" name="years">
                    <?php for ($i = 1980; $i <= 2025; $i++) { ?>
                        <option><?php echo "TAHUN $i"; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="hobi" id="div-hobi">
            <div class="h4p">
                <p>Hobi Yang Dimiliki</p>
                <p class="p-tidak">Tidak Ada<input class="checkbox" type="checkbox" name="tidak-ada" value="tidak-ada"
                        id="hobi"></p>
            </div>
            <div class="textarea">
                <textarea name="hobi" value="hobi"></textarea>
            </div>
        </div>
        <div class="submit">
            <input type="submit" name="submit" id="button_submit" value="Submit">
        </div>
    </form>
</body>

</html>