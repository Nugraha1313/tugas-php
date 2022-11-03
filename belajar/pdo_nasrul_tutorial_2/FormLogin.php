<div class="card mt-5 p-4 bg-dark text-white" style="margin: 0 auto; width: 35rem;">
    <h1 class="text-center">Login</h1>
    <hr>
    <form method="POST" action="./controller/MemberController.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" maxlength="30">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" maxlength="40">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>