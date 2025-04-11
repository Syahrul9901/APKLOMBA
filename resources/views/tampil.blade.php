<div>
    <h1>list</h1>
    @if(Auth::check())
    <b>halo {{ Auth::user()->name }}</b>
    @endif
</div>