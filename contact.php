            <form action="transfert.php" method="POST">
                <div id="con_line">
                    <div class="con_form">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom">
                    </div>
                    <div class="con_form">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom"id="nom">
                    </div>
                </div>
                <div class="con_form">
                    <label for="email">Adresse mail</label>
                    <input type="mail" name="email" id="email">
                </div>
                <div class="con_form">
                    <label for="text">Message</label>
                    <textarea name="text" id="text" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" id="submit">
            </form>