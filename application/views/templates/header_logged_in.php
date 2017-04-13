<html>
<head>
    <title>filmcritic</title>
    <link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">filmcritic</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>"><?= $this->lang->line('i_home') ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>lang_switch/switch_language/english">in English</a></li>
                <li><a href="<?php echo base_url(); ?>lang_switch/switch_language/estonian">eesti keeles</a></li>
                <li><a href="<?php echo base_url(); ?>users/logout"><?= $this->lang->line('i_log_out') ?> (<?php echo $username; ?>)</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">