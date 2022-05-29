    <main class="form-signin">
        <?=$error ?? '';?>
        <?php componentLogin();?>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <?php componentRegistration();?>
        </div>
    </div>
    </div>