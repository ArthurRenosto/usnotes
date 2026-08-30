<?php
    include_once("templates/header.php")
?>
<body>


    <main>

        <div class="create-note">

            <input type="text" placeholder="Criar uma nota...">

        </div>


        <section class="notes">


            <article class="note">

                <div class="note-top">

                <?php foreach($notes as $note): ?>
                    <?= $note["name"] ?>
                <?php endforeach; ?>

                    <button> <i class="bi bi-pin-angle"></i> </button>

                </div>

                <?php foreach($notes as $note): ?>
                    <?= $note["note"] ?>
                <?php endforeach; ?>

                <div class="note-footer">

                  <button class="edit-btn">
                    <i class="bi bi-pencil"></i>
                </button>
                
                <button class="delete-btn">
                    <i class="bi bi-trash3"></i>
                </button>
                
                </div>

            </article>


 

        </section>

    </main>

</body>


<?php
    include_once("templates/footer.php")
?>