<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF_8">
    <title> HTML </title>
</head>

<body>
    <p>Hada paragraphe.</p>
    <p>Kalima <strong>mohimma</strong> w kalima <em>m2akkada</em>.</p>
    <p>Ster 1<br>Ster 2 (retour à la ligne)</p>
    <hr>
    <span>Texte sghir f nafs ster</span>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
    </ul>
    <ol>
        <li>Nt3elm HTML</li>
        <li>Nt3elm CSS</li>
        <li>Ndouz l PHP</li>
    </ol>
    <table border="1">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ilham</td>
                <td>18</td>
            </tr>
            <tr>
                <td>Ahmed</td>
                <td>15</td>
            </tr>
        </tbody>
    </table>
    <form action="traitement.php" method="post"> <label for="nom">Nom :</label> <input type="text" id="nom" name="nom"
            required> <label for="email">Email :</label> <input type="email" id="email" name="email" required> <label
            for="mdp">Mot de passe :</label> <input type="password" id="mdp" name="mdp" required> <label for="age">Âge
            :</label> <input type="number" id="age" name="age" min="1" max="100"> <label for="ville">Ville :</label>
        <select id="ville" name="ville">
            <option value="oujda">Oujda</option>
            <option value="fes">Fès</option>
            <option value="rabat">Rabat</option>
        </select>
        <p>Sexe :</p> <input type="radio" id="f" name="sexe" value="F"> <label for="f">Femme</label> <input type="radio"
            id="h" name="sexe" value="H"> <label for="h">Homme</label>
        <p>Loisirs :</p> <input type="checkbox" name="loisirs[]" value="sport"> Sport <input type="checkbox"
            name="loisirs[]" value="lecture"> Lecture <label for="msg">Message :</label> <textarea id="msg"
            name="message" rows="4"></textarea> <button type="submit">Envoyer</button>
    </form>

</body>

</html>