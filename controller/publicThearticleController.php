<?php

/**
 * Public's Menu 
 */
$sections = theSectionSelectAllNav($db);

/**
 * Public Connexion
 */


if (isset($_GET['connect'])) {
<<<<<<< HEAD
    if (isset($_POST["theuserLogin"]) && isset($_POST["theuserPwd"]) && $_POST["theuserLogin"] === ADMIN_LOG && $_POST["theuserPwd"] === ADMIN_PWD) {
        $_SESSION["id"] = session_id();
        header("Location: ./");
=======
    if (isset($_POST["theuserLogin"]) && isset($_POST["theuserPwd"])) {
        if (connectionVerify($_POST["theuserLogin"], $_POST["theuserPwd"], ADMIN_LOG, ADMIN_PWD)) {
            header("Location: ./");
        } else {
            $error = "Mot de passe ou login invalid!";
            require_once "../view/publicView/publicConnectView.php";
        }
>>>>>>> upstream/main
    } else {
        require_once "../view/publicView/publicConnectView.php";
    }

    /**
     * Public Homepage
     */
} else {
    $articles = thearticleSelectAll($db);
    require_once "../view/publicView/publicHomepageView.php";
}
