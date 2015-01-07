<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Êtes-vous sûr de vouloir continuer ?</h4>
</div>
<div class="modal-body">
    <p>Les éléments seront définitivement supprimés</p>
    <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Annuler</button>
    <button type="button" id="post-delete" class="btn btn-default btn-red btn-rounded">
        Oui, supprimer les {{ $model->getSingularName() }}
    </button>
</div>

<script>
    $('#post-delete').click(function () {
        $('#delete-multi-form').submit();
    });
</script>