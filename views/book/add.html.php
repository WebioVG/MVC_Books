<?php require __DIR__.'/../partials/header.html.php'; ?>
    
    <main class="p-4">
        <h2 class="text-center text-xl font-bold mb-10">Add a new book to the collection</h2>

        <form class="w-[500px] mx-auto" action="" method="post">
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="price">Price</label>
                <input type="text" name="price" id="price">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="isbn">ISBN</label>
                <input type="text" name="isbn" id="isbn">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="author">Author</label>
                <input type="text" name="author" id="author">
            </div>
            
            <div class="mb-2 flex justify-center items-center">
                <label class="inline-block w-[100px]" for="releasedAtYear">Released in</label>
                <input type="text" name="releasedAtYear" id="releasedAtYear">
            </div>

            <button class="mx-auto mt-10 block rounded-lg border px-4 py-2 bg-slate-300 font-semibold">Create</button>
        </form>
    </main>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
