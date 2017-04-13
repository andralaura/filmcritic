<h2><?= $this->lang->line('i_home') ?></h2>
<?php
if ($username) {
    echo "<h3>";
    echo $this->lang->line('i_home_welcome');
    echo ", $username!</h3>";
}
?>