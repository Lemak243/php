<h1>Message bien recu</h1>

<?php
    if(isset($_GET['email']) AND isset($_GET['message'])){
        if(filter_var($_GET['email']) AND !empty($_GET['message'])){
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"> <b>Email</b> : <?php echo $_GET['email'] ?></p>
                    <p class="card-text"> <b>Message</b> : <?php echo $_GET['message'] ?></p>
                </div>
            </div>
        <?php
        }else{
            echo "Vous avez oublié un champ";
        }
    }else{
        echo "Il faut un mail et un message pour soumettre le formulaire";
    }
?>
