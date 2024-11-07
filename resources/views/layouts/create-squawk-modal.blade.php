<!-- Button modal -->
<div class="d-grid gap-2 mt-3 mb-3">
    <button class="btn btn-dark rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#squawkModal">Squawk</button>
</div>

<!-- Modal -->
<div class="modal fade" id="squawkModal" tabindex="-1" aria-labelledby="squawkModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header card-header">
                <h1 class="modal-title fs-5" id="squawkModalLabel">Something to say ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mb-3">
                <label for="squawkContent" class="form-label"><span id="numberOfCharacter"></span>/280</label>
                <textarea id="squawkContent" class="form-control" rows="7" placeholder="Express yourself..."></textarea>

                <div class="container row mt-3">
                    <div class="col-1">
                        <i data-feather="image"></i>
                    </div>
                    <div class="col-1">
                        <i data-feather="gift"></i>
                    </div>
                    <div class="col-1">
                        <i data-feather="smile"></i>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-dark rounded-pill custom-w-create">Squawk</a>
                <a href="#" class="btn btn-outline-dark rounded-pill custom-w-close" data-bs-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
const $numberOfCharacter = $('#numberOfCharacter');
$('#squawkContent').on('input', event => {
    let length = event.target.value.length;
    $numberOfCharacter.text(280 - length);
}).trigger('input');
</script>
