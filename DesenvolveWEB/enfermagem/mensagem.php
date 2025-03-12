<?php
    if (isset($_SESSION['mensagem'])) :
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $_SESSION['mensagem']; //a mesma coisa que escrever <?php echo (short echo tag) ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php 
    unset($_SESSION['mensagem']);
    endif;
?>