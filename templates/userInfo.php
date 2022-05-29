<h2>User info:</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputFIO" class="form-label">FIO</label>
                <input type="text" name="fio" class="form-control" id="exampleInputFIO" aria-describedby="emailHelp" value="<?=$userData['fio'];?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="exampleInputPassword2">New password</label>
                <input type="password" name="newPassword" class="form-control" id="exampleInputPassword2">
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="exampleInputPassword3">Confirm password</label>
                <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword3">
            </div>
            <div><?=$_SESSION['error'] ?? "";?></div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" name="chengeUserInfo" class="btn btn-primary">Save</button>
            </div>
        </form>