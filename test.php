<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo" alt="" width="30" heightsvg="24"
                    class="d-inline-block align-text-top">
                Bootstrap
            </a>
        </div>
    </nav>
    <section>
        <form action="" method="POST">
            <label for="">Select Groups :</label>
            <select name="groupe" id="groupe">
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
        <table class="table caption-top text-white">
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
                while ($row = mysqli_fetch_assoc($result)) {
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
                            <button class="primary" onclick="window.dialog.showModal();">i</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <div class="container">
        <?php
        $groupes = range(1, 8);
        foreach ($groupes as $groupe) {
            ?>
            <table class="table caption-top text-white">
                <caption class="card-header bg-danger text-center text-white">Groupe
                    <?php echo $groupe; ?>
                </caption>
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
                    $sql = "SELECT * FROM equipes WHERE id_groupe = ?";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $groupe);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
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
                                <button class="primary" onclick="window.dialog.showModal();">i</button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?>
    </div>
    <dialog id="dialog">
        <h2>Hello.</h2>
        <?php
        $sql = "SELECT * FROM equipes WHERE id_groupe = $id";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <h3>
                <?php echo $row["nom"] ?>
            </h3>
            <button onclick="window.dialog.close();" aria-label="close" class="x">❌</button>
            <?php
        }
        ?>
    </dialog>
</body>

</html>