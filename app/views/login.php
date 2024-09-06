

<!--<h1><//?= $titreH1?? 'Login' ?></h1>
<p></p>-->


<div class="container">
 
        <div class="row justify-content-center">
 
            <div class="col-md-6">
 
                <h1>Login</h1>
 
                <p><?= $paragraphe?? '' ?></p>

 
                <form method="post">
 
                    <div class="form-group">
 
                        <label for="mel">Adresse e-mail :</label>
 
                        <input type="email" id="mel" name="mel" class="form-control" required>
 
                    </div>
 
                    <div class="form-group">
 
                        <label for="password">Mot de passe :</label>
 
                        <input type="password" id="password" name="password" class="form-control" required>
 
                    </div>
 
                    <div class="form-group">
 
                        <label for="app">Application :</label>
 
                        <select id="monselect" class="form-control">
 
                            <option value="valeur2">Animaux</option>
 
                            <option value="valeur3">Atelier</option>
 
                        </select>
 
                    </div>
 
                    <button type="submit" class="btn btn-primary">Se connecter</button>
 
                </form>
 
            </div>
 
        </div>
 
    </div>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
