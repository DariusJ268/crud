<form class="pb-5" action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Knygos pavadinimas</label>
        <input type="text" class="form-control" name="title" value="<?= (isset($_GET['edit'])) ? $book->title : "" ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Knygos žanras</label>
        <input type="text" class="form-control" name="genre" value="<?= (isset($_GET['edit'])) ? $book->genre : "" ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Autoriaus Vardas/Pavarde</label>
        <select class="form-select" name="authorId">
            <?php foreach ($authors as $author) {
                $seleced = "";
                if (isset($book) && $book->authorId == $author->id) {
                    $seleced = "selected";
                }
                echo '   <option value="' . $author->id . '" ' . $seleced . '  >' . $author->name . ' ' . $author->surname . '</option>';
            }
            ?>
        </select>
        <!-- <?= (isset($_GET['edit'])) ? $book->authorId : "" ?>  -->
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <?php if (isset($_GET['edit'])) { ?>
        <input type="hidden" name="id" value="<?= $book->id ?>">
        <button class="btn btn-outline-success" type="submit" name="update">Upgrade it!</button>
    <?php } else { ?>
        <button class="btn btn-outline-primary" type="submit" name="save">Do it!</button>
    <?php } ?>
</form>