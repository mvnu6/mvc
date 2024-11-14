<?php
class ContactController {
    public function index() {
        include 'view/Contact.php';
    }

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupérer les données du formulaire
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            
            // Traitement du formulaire (envoi d'email, sauvegarde en base de données, etc.)
            // Exemple d'envoi d'email (à adapter en fonction de la méthode souhaitée)
            $subject = "Message de $prenom $nom";
            $body = "Nom: $nom\nPrénom: $prenom\nEmail: $email\n\nMessage:\n$message";
            $to = "contact@smartbike.com"; // L'adresse de destination de l'email
            mail($to, $subject, $body);

            // Redirection après envoi (ou message de confirmation)
            header('Location: ?page=contact&status=success');
        }
    }
}
?>
