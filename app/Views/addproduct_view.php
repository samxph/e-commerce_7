<div class="col-6 bg-warning cart mt-2 mb-2">

    <form action="<?= site_url('addproduct/add') ?>" method="post">

        <h4>Add a new product</h4>

        <div class="form-group">
            <label>Title:</label>
            <input name="title" maxlength="50" class="form-control">
        </div>

        <div class="form-group">
            <label>Release date:</label>
            <input type="date" name="releasedate" maxlength="50" class="form-control">
        </div>

        <div class="form-group">
            <label>Price:</label>
            <input type="number" name="price" step="1" maxlength="5" class="form-control">
        </div>

        <div class="form-group">
            <label>Image:</label>
            <input type="file" name="picture" class="form-control">
        </div>

        <div class="form-group">
            <label>Description:</label>
            <input name="description" maxlength="500" class="form-control">
        </div>

        <div class="form-group">
            <label>Developer:</label>
            <select name="developer">
                <?php foreach ($developers as $developer) : ?>
                    <option value="<?= $developer['id'] ?>"> <?= $developer['name'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Publisher:</label>
            <select name="publisher">
                <?php foreach ($publishers as $publisher) : ?>
                    <option value="<?= $publisher['id'] ?>"> <?= $publisher['name'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="bg-dark btn btn-secondary mb-2">Add product</button>
    </form>
</div>