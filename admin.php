<?php include('helpers/header.php'); ?>
<div class="container">
    <div class="row">
        <h1>Logovanje admina</h1>
        <div class="col-sm-12">
            <div class="form-group col-sm-4">
                <label for="mijenjac">Korisnicko ime:</label>
                <input type="text" class="form-control" id="user" placeholder="Korisnicko ime">
            </div>
            <div class="form-group col-sm-4">
                <label for="mijenjac">Lozinka:</label>
                <input type="password" class="form-control" id="pass" placeholder="Lozinka">
            </div>
            <div class="col-sm-4 text-center">
                <button type="submit" class="btn btn-primary mt-3 w-100">Uloguj se</button>
            </div>
        </div>
    </div>
</div>
</body>
