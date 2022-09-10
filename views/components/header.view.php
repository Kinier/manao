<header>
    Hello <?= $_SESSION['user']['name']; ?>
    <button onclick="window.location.replace('/logout');" >Выйти</button>
</header>