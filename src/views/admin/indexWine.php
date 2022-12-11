<section>
    <div class="align-items-center">
        <?php if (!isset($wines) || ($wines == false)) : ?>
        <div class="mx-auto col-5 alert alert-success">
            <p class="mb-5 text-center">Nous n'avons rien à afficher.</p>
            <div class=" d-flex justify-content-center">
                <a class="my-2 btn btn-primary" href="<?= BASE_DIR ?>/admin/addwine">Ajouter un
                    vin</a>
            </div>
        </div>

        <?php else : ?>
        <table class="mx-auto table table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th class="chalk" scope="col-2">2Do</th>
                    <th class="chalk d-flex" scope="col-2">Date
                        <span>
                            <form method="GET" id="orderForm" class="ms-5">
                                <select name="order" id="order">
                                    <option value="">Trier par</option>
                                    <option value="asc">Le plus récent </option>
                                    <option value="desc">Le plus ancien</option>
                                </select>
                            </form>
                        </span>
                    </th>
                    <th class="chalk" scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <form action="" method="POST">

                    <?php
                        foreach ($tasks as $task) : ?>
                    <tr class=" table-success">
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type='checkbox' name='supp[]'
                                    value='<?= $task->id; ?>' />
                            </div>
                        </td>
                        <td><?= $task->name ?></td>
                        <td><?= $task->to_do_at ?></td>

                        <td>
                            <a href=" edit.php?id=<?= $task->id ?>" class="btn btnMod">Modifier</a>
                        </td>
                        <td>
                            <?php
                                    if ($task->is_done == 1) : ?>
                            <div class="text-success mb-3 mx-auto">DEJA FAIT</div>
                            <?php elseif ($task->to_do_at <= date('Y-m-d')) : ?>
                            <div class="text-danger mb-3 mx-auto">RETARD</div>
                            <?php else : ?>
                            <div class=" mb-3 mx-auto"></div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <div class="container d-flex justify-content-around my-5">
                        <input type='submit' value='Supprimer' name="delete" class="btn btn-danger mb-3 mx-auto">

                        <a name="task-add" id="task-add" class="btn btnPos mb-3" href="task.php">Ajouter
                            un 2Do</a>

                        <button type=" submit" class="btnPos btn  mb-3 mx-auto" name="done">Déjà fait</button>
                    </div>
                </form>
            </tbody>
            <?php endif; ?>
        </table>
    </div>
</section>