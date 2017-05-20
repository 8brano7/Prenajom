


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>





            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">


                    </div>
                    <div class="collapse navbar-collapse" id="navbar1">
                        <ul class="nav navbar-nav navbar-right">






                            <?php if ($this->session->userdata('login')){ ?>
                                <li><p class="navbar-text">Úspešne ste prihlásený <?php echo $this->session->userdata('meno'); ?></p></li>
                                <li><a href="<?php echo base_url(); ?>index.php/home/logout">Odhlásiť sa</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/profile/index">Profil</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo base_url(); ?>index.php/login">Prihlásiť sa</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/signup">Registrovať sa</a></li>
                            <?php } ?>


            </nav>

            <div class="container">








                </button>
                <a class="navbar-brand" href="">Prenájom prevádzok</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url(""); ?>">Domov</a></li>
                    <li><a href="<?php echo site_url("Home/about"); ?>">O nás</a></li>
                    <li><a href="<?php echo site_url("Home/contact"); ?>">Kontakt</a></li>
                    <li><a href="<?php echo site_url("databaza/pouzivatelia"); ?>">Zoznam používateľov</a></li>
                    <li><a href="<?php echo site_url("databaza/prenajom"); ?>">Prenájom</a></li>
                    <li><a href="<?php echo site_url("databaza/platby"); ?>">Platby</a></li>
                    <li><a href="<?php echo site_url("databaza/budova"); ?>">Budovy</a></li>






                </ul>
                </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">



                        <div id="navbar" class="navbar-collapse collapse">
                            <form class="navbar-form navbar-right">
                                <div class="form-group">









                            </form>
                        </div><!--/.navbar-collapse -->
                    </div>
            </div>
        </div>
</nav>

<BR>
<BR>
<BR>
<BR>
