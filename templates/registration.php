<form action="" method="POST">  
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" name='fio' class="form-control" id="floatingFio" placeholder="FIO">
                        <label for="floatingFio">FIO</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name='email' class="form-control" id="floatingEmail" placeholder="name@example.com">
                        <label for="floatingEmail">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name='login' class="form-control" id="floatingLogin" placeholder="Login">
                        <label for="floatingLogin">Login</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name='password' class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="registration" class="btn btn-primary" >Registration</button>
                </div>
            </form>