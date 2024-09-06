<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $strH1 ?></h1>
            <p><?= $strPar ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" placeholder="Entrez votre message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</div>