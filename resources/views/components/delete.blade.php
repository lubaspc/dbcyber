<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body text-center">
                <i class="fas fa-exclamation-triangle fa-10x"></i><br>
                <h3>{{$message}}</h3>
            </div>
            <div class="modal-footer">
                <a href="{{$route}}"
                   class="btn btn-danger">Cambiar</a>
            </div>
        </div>
    </div>
</div>
