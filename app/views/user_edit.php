<h2>Update User</h2>

<div class="container">
    <form action="/user_update" method="POST" role="form">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id" value="<?= $userEncontrado->id; ?>">
            <input type="text" name="name" class="form-control" value="<?= $userEncontrado->name; ?>" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value="<?= $userEncontrado->email; ?>" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control" value="<?= $userEncontrado->password; ?>" placeholder="" aria-describedby="helpId">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>