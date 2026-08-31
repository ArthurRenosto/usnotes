<?php
    include_once("templates/header.php")
?>
    <main>

        <div class="create-notes">

            <textarea class="note-title" name="title" placeholder="Título" maxlength="40"></textarea> 

            <textarea placeholder="Digite Algo" oninput="this.style.height = ''; this.style.height = this.scrollHeight + 'px'"></textarea>

            <button type="submit"> Enviar </button> 

        </div>

        <section class="notes">

            <article class="note">

                <div class="note-top">
                    
                    <p>titulo</p>

                    <button class="pin-btn"> <i class="bi bi-pin-angle"></i> </button>

                </div>

                <div class="note-body">

                    <p>corpo da nota</p>

                </div>

                <div class="note-footer">

                    <button class="edit-btn"> <i class="bi bi-pencil"></i> </button>
                    
                    <button class="delete-btn"> <i class="bi bi-trash3"></i> </button>
                
                </div>

            </article>

        </section>

    </main>
<?php
    include_once("templates/footer.php")
?>