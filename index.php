<?php
include './connexion_db.php';
if ($conn) {
    // echo "connection";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light bg-transparent ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="" width="80" heightsvg="24" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>
    <!-- ?php echo  -->
    <section>
        <form action="" class="form" method="POST">
            <label for="">Select Groups :</label>
            <select name="groupe" id="groupe">
                <selected></selected>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
                <option value="5">E</option>
                <option value="6">F</option>
                <option value="7">G</option>
                <option value="8">H</option>
            </select>
            <input type="submit" value="Filtrer" name="submit">
        </form>

        <?php
        if (@$_POST['submit']) {
            $id = $_POST['groupe'];
            if ($id == 1) {
                $equipe = "A";
            }
            $id = $_POST['groupe'];
            if ($id == 2) {
                $equipe = "B";
            }
            $id = $_POST['groupe'];
            if ($id == 3) {
                $equipe = "C";
            }
            $id = $_POST['groupe'];
            if ($id == 4) {
                $equipe = "D";
            }
            $id = $_POST['groupe'];
            if ($id == 5) {
                $equipe = "E";
            }
            $id = $_POST['groupe'];
            if ($id == 6) {
                $equipe = "F";
            }
            $id = $_POST['groupe'];
            if ($id == 7) {
                $equipe = "G";
            }
            $id = $_POST['groupe'];
            if ($id == 8) {
                $equipe = "H";
            }
            $sql = "SELECT * FROM equipes WHERE id_groupe = $id";
            $result = mysqli_query($conn, $sql);
            ?>
            <table class="table caption-top text-white">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-center">Equipe
                            <?= $equipe ?>
                        </th>
                        <th scope="col"></th>
                        <th scope="col">M</th>
                        <th scope="col">V</th>
                        <th scope="col">N</th>
                        <th scope="col">D</th>
                        <th scope="col">P</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {

                        // echo echo $row['joueur'] . "<br>";
                        ?>
                        <tr>
                            <th class="">1</th>
                            <td>
                                <img src="<?php echo $row["flag"] ?>" alt="">
                            </td>
                            <td>
                                <?php echo $row["nom"] ?>
                            </td>
                            <td>
                                <?php echo $row["MatchsJoues"] ?>
                            </td>
                            <td>
                                <?php echo $row["Victoires"] ?>
                            </td>
                            <td>
                                <?php echo $row["Nuls"] ?>
                            </td>
                            <td>
                                <?php echo $row["Defaites"] ?>
                            </td>
                            <td>
                                <?php echo $row["Points"] ?>
                            </td>
                            <td>
                                <button class="primary" onclick="showModal();">i</button>
                            </td>
                        </tr>
                        <dialog id="dialog">
                            <P>
                            
                                Pays :
                                <?= $row["nom"]  ?>
                                Capital :
                                <?= $row["capitale"] . "<br>" ?>
                                Continent :
                                <?php echo $row["continent"] . "<br>" ?>
                                Population :
                                <?php echo $row["pplation"] . "<br>" ?>
                                Joueur Star :
                                <?php echo $row["joueur"] . "<br>" ?>
                            </P>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?>


    </section>
    <div class="container">
        <table class="table caption-top text-white">
            <caption class="card-header bg-danger text-center text-white">Groupe A</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM equipes WHERE id_groupe = 1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <P>
                                Pays :
                                <?php echo $row["nom"] . "<br>" ?>
                                Capital :
                                <?php echo $row["capital"] . "<br>" ?>
                                Continent :
                                <?php echo $row["continent"] . "<br>" ?>
                                Population :
                                <?php echo $row["pplation"] . "<br>" ?>
                                Joueur Star :
                                <?php echo $row["joueur"] . "<br>" ?>
                            </P>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
        <table class="table caption-top text-white">
            <caption class="card-header bg-danger text-center text-white">Groupe B</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM equipes WHERE id_groupe = 2";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <h2>
                                <?php echo $row["joueur"] ?>
                            </h2>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <table class="table caption-top text-white">
            <caption class="card-header bg-danger text-center text-white">Groupe C</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM equipes WHERE id_groupe = 3";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <h2>
                                <?php echo $row["joueur"] ?>
                            </h2>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <table class="table caption-top text-white">
            <caption class="card-header bg-danger text-center text-white">Groupe D</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM equipes WHERE id_groupe = 4";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <h2>
                                <?php echo $row["joueur"] ?>
                            </h2>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <table class="table caption-top text-white">
            <caption class="card-header bg-danger text-center text-white">Groupe E</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM equipes WHERE id_groupe = 5";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    // echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1 </th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <h2>
                                <?php echo $row["joueur"] ?>
                            </h2>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        // $query = "SELECT Max() FROM groupe"
        // for(ids = 0 ,  , ids++){}
        ?>
        <table class="table caption-top text-white">
            <caption class="card-header bg-danger text-center text-white">Groupe F</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM equipes WHERE id_groupe = 6";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <h2>
                                <?php echo $row["joueur"] ?>
                            </h2>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <!-- end for  -->
        <table class="table caption-top text-white">
            <caption class="card-header bg-danger text-center text-white">Groupe G</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM equipes WHERE id_groupe = 7";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <h2>
                                <?php echo $row["joueur"] ?>
                            </h2>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <table class="table caption-top text-white" id>
            <caption class="card-header bg-danger text-center text-white">Groupe H</caption>
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-center">Equipe</th>
                    <th scope="col"></th>
                    <th scope="col">M</th>
                    <th scope="col">V</th>
                    <th scope="col">N</th>
                    <th scope="col">D</th>
                    <th scope="col">P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM equipes WHERE id_groupe = 8";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo echo $row['joueur'] . "<br>";
                    ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?php echo $row["flag"] ?>" alt="">
                        </td>
                        <td>
                            <?php echo $row["nom"] ?>
                        </td>
                        <td>
                            <?php echo $row["MatchsJoues"] ?>
                        </td>
                        <td>
                            <?php echo $row["Victoires"] ?>
                        </td>
                        <td>
                            <?php echo $row["Nuls"] ?>
                        </td>
                        <td>
                            <?php echo $row["Defaites"] ?>
                        </td>
                        <td>
                            <?php echo $row["Points"] ?>
                        </td>
                        <td>
                            <button class="primary" onclick="showModal();">i</button>
                        </td>
                        <dialog id="dialog">
                            <h2>
                                <?php echo $row["joueur"] ?>
                            </h2>
                            <button onclick="closeModal();" aria-label="close" class="x">❌</button>
                        </dialog>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function showModal() {
            var dialog = document.getElementById('dialog');
            dialog.showModal();
        }
        function closeModal() {
            var dialog = document.getElementById('dialog');
            dialog.close();
        }
    </script>
</body>

</html>