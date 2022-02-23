<?php
if ($_SESSION["id"] !== session_id() || isset($_GET["disconnect"])) {
<<<<<<< HEAD
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
=======
    disconnect();
>>>>>>> upstream/main
    header("Location: ./");
    exit();
}
/**
 * Routeur de l'admin
 */

/**
 * Ajout - Crud
 */
if (isset($_GET['add'])) {
    /* A remplir quand j'aurais les champs de la vue */
    if (isset($_POST[""]) && isset($_POST[""]) && isset($_POST[""]) && isset($_POST[""])) {
        $title = userEntryProtection($_POST[""]);
        $text = userEntryProtection($_POST[""]);
        $user = (int) ($_POST[""]);
        $sections = [];
        foreach ($_POST[""] as $section) {
            array_push($sections, (int) $section);
        }
        thearticleInsert($db, $title, $text, $user, $sections);
    }

<<<<<<< HEAD

=======
>>>>>>> upstream/main


    /**
     * Modification - crUd
     */
} elseif (isset($_GET['update'])) {


    /**
     * Suppression - cruD
     */
} elseif (isset($_GET['delete'])) {


    /**
     * Homepage - cRud
     */

    // pas de GET de routage    
} else {
    require_once "../view/adminView/adminHomepageView.php";
}
