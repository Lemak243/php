<?php
if(isset($_FILES['fileYves']) && $_FILES['fileYves']['error'] == 0){
    if($_FILES['fileYves']['size'] <= 1000000){
        $fileInfo = pathinfo($_FILES['fileYves']['name']);
        $date = date("F:j:Y:g:i:a");
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg','jpeg', 'gif','png'];
        if(in_array($extension, $allowedExtensions)){
            //move_uploaded_file($_FILES['fileYves']['tmp_name'], 'uploads/'.$date.'.'.$extension);
            move_uploaded_file($_FILES['fileYves']['tmp_name'], 'uploads/'.$date.'___'.($_FILES['fileYves']['name']));
            echo "l'envoi a bien été effectué";
        }else{
            echo "l'extension n'existe pas";
        }
    }else{
        echo "la taille du fichier est volumineux";
    }
}else{
    echo "la variable n'est pas...";
}
?>