<?php require __DIR__.'/../partials/header.html.php'; ?>
    
    <main class="p-4">
        <h2 class="text-center font-bold text-2xl mb-10">Cart</h2>

        <?php if (! empty($books)) { ?>
            <section class="border rounded p-4">
                <?php foreach ($books as $book) { ?>
                    <article class="flex border-b mb-2">
                        <div class="flex flex-col">
                            <h3><?= $book->title ?></h3>
                            <span class="font-bold"><?= $book->price ?>€</span>
                        </div>
                    </article>
                <?php } ?>
            </section>
        <?php } ?>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
