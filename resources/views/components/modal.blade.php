<div class="modal fade" id="{{isset($update)?'ModalUpdate':'ModalCreate'}}" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content card">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal">{{isset($update)?'Moficicar':'Crear'}} {{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{$route}}" method="post">
                @isset($update) @method('PUT') @endisset
                <div class="modal-body text-center">
                    @isset($update)
                        @include($include,['up' => 'true'])
                    @else
                        @include($include)
                    @endisset


                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-primary form-control ">{{isset($update)?'Moficicar':'Crear'}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
