<?php require __DIR__.'/../partials/header.html.php'; ?>
    
    <main class="p-4">
        <h2 class="text-center text-xl font-bold mb-10">Edit a book</h2>

        <?php if ($success) { ?>
            <p class="text-green-500 font-semibold text-center border rounded">
                The book information has been updated!
            </p>
        <?php } ?>

        <?php if (! empty($errors)) {
            foreach ($errors as $error) { ?>
                <p class="text-red-500 font-semibold">
                    <?= $error ?>
                </p>
            <?php }
        } ?>

        <form class="w-[500px] mx-auto" action="" method="post">
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="<?= $book->title ?>" value="<?= $book->title ?>">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="price">Price</label>
                <input type="text" name="price" id="price" placeholder="<?= $book->price ?>" value="<?= $book->price ?>">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="isbn">ISBN</label>
                <input type="text" name="isbn" id="isbn" placeholder="<?= $book->isbn ?>" value="<?= $book->isbn ?>">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="author">Author</label>
                <input type="text" name="author" id="author" placeholder="<?= $book->author ?>" value="<?= $book->author ?>">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="releasedAtYear">Released in</label>
                <input type="text" name="releasedAtYear" id="releasedAtYear" placeholder="<?= $book->releasedAtYear ?>" value="<?= $book->releasedAtYear ?>">
            </div>

            <button class="mx-auto mt-10 block rounded-lg border px-4 py-2 bg-slate-300 font-semibold">Edit</button>
        </form>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
