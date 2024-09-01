<main class="main-entry">
    <h2 id="enterNumber">Enter a Number</h2>
    <form class="main-entry__form" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
    <input
        id="num"
        name="num"
        class="main-entry__input"
        aria-labelledby="enterNumber"
        type="text"
        maxlength="2"
        autofocus
        require>
    <button class="main-entry__button">Go!</button>
    </form>

</main>