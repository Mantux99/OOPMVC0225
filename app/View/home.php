<main>
    <h1>Home page</h1>
    <?php
    $user = $this->model('Users');
    $user->getUserByID(1);
    $kintamasis='';
    print $kintamasis;
    ?>
    
</main>
