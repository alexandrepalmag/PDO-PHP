<h2>Register New User</h2>

<div class="container">
    <form action="/user_store" method="POST" role="form">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="/" class="btn btn-danger">Cancel</a>
    </form>
</div>