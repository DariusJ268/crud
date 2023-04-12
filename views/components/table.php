<table class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Author ID</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($books as $book) { ?>
                    <tr>
                        <td> <?= $book->id ?></td>
                        <td> <?= $book->title ?></td>
                        <td> <?= $book->genre ?></td>
                        <td> <?= $book->authorId ?></td>
                        <td> <button class="btn btn-outline-secondary">Show</button></td>
                        <td>
                            <form action="" method="get">
                                <input type="hidden" name="id" value="<?= $book->id ?>">
                                <button class="btn btn-outline-success" name="edit">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $book->id ?>">
                                <button class="btn btn-outline-danger" name="destroy">delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>