<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="img/default.png" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>En ligne</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Tableau de bord</a></li>

            <li><a href="add-expense.php"><em class="fa fa-navicon">&nbsp;</em> Ajouter une dépense</a></li>
            <li><a href="manage-expense.php"><em class="fa fa-navicon">&nbsp;</em> Liste des dépenses</a></li>
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> Profil d'utilisateur</a></li>
             <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Changer de mot de passe</a></li>
<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Déconnexion</a></li>

        </ul>
    </div>