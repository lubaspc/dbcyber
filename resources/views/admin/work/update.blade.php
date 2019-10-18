<div class="row">
    <form action="{{route('work.update',['work' =>$work])}}">
        @method('PUT')
        @include('admin.work._form')
    </form>
</div>
