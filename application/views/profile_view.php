<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Môj profil | Prenájom prevádzok</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php">Prenájom prevádzok</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->session->userdata('login')){ ?>
                    <li><p class="navbar-text">Vitajte <?php echo $this->session->userdata('meno'); ?></p></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/logout">Odhlásiť sa</a></li>
                <?php } else { ?>
                    <li><a href="<?php echo base_url(); ?>index.php/login">Prihlásiť sa</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/signup">Odhlásiť sa</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>Profil</h4>
            <hr/>
            <p>Meno: <?php echo $meno; ?></p>
            <p>Email: <?php echo $email; ?></p>


            <p>
                <BR>
            <center>
                Navigácia:
            </center>
            <li><a href="<?php echo base_url(); ?>index.php">Vrátiť sa späť na domovskú stránku</a></li
            <li><a href="<?php echo base_url(); ?>index.php/databaza/pouzivatelia">Zoznam používateľov</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/databaza/prenajom">Pridať nový prenájom</a></li>







            </p>
        </div>


        <div class="col-md-8">
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>