<div>
    <form action="{{route('edit', $worker)}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" value="{{$worker->name}}">
        <input type="text" name="city" value="{{$worker->city}}">
        <input type="text" name="birthdate" value="{{$worker->birthdate}}">
        <input type="text" name="salary" value="{{$worker->salary}}">
        <button type="submit">mentés</button>
    </form>

</div>