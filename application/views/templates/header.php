<!DOCTYPE html>
<html lang="<?php if ($this->session->userdata('site_lang') == 'estonian') {echo 'et';} else {echo 'en';} ?>">
    <head>
        <meta charset="UTF-8">
        <title>filmcritic<?php if (!empty($title)) {echo " – $title";}?></title>
        <link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">filmcritic</a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('i_home') ?></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>lang_switch/switch_language/english">in English</a></li>
                        <li><a href="<?php echo base_url(); ?>lang_switch/switch_language/estonian">eesti keeles</a></li>
                        <?php
                        if ($this->session->userdata('isUserLoggedIn') == TRUE) {
                            echo '<li><a href="' . base_url() . 'users/logout">' . $this->lang->line('i_log_out') . ' (' . $this->session->userdata('username') . ')' . '</a></li>';
                        } else {
                            echo '<li><a href="' . base_url() . 'users/login">' . $this->lang->line('i_log_in') . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">