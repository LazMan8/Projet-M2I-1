<body>
    <header>
        <div class="container">
        <img src="logo.png" alt="Logo Quartier Lib">
        <h1>Quartier Lib</h1>
        </div>
    </header>

    <main>
        <div class="container">
        <h2>S'inscrire</h2>
        <form method="post" action="inscription.php">
            <div>
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required>
            </div>

            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="motDePasse">Mot de passe :</label>
                <input type="password" id="motDePasse" name="motDePasse" required>
            </div>
            <button type="submit">Confirmation de l'inscription</button>

        </form>

        </div>

    </main>

</body>