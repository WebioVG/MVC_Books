<?php require __DIR__.'/../partials/header.html.php'; ?>
    
    <main class="p-4">
        <h2 class="text-center font-bold text-3xl mb-10">Cart</h2>

        <?php if (! empty($books)) { ?>
            <section class="border rounded p-4 max-w-[800px] mx-auto">
                <?php foreach ($books as $book) { ?>
                    <article class="flex border-b pb-2">
                        <?php if ($book->image !== '') { ?>
                            <img class="h-[100px] mr-4" src="../<?= $book->image ?>" alt="book cover">
                        <?php } ?>
                        <div class="flex flex-col">
                            <h3 class="text-lg"><?= $book->title ?></h3>
                            <span class="font-bold"><?= $book->price ?>€</span>
                        </div>
                    </article>
                <?php } ?>
            </section>
        <?php } ?>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
