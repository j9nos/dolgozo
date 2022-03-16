<div>
@include("search")
    <table>
        <tr>
            <th>Név</th>
            <th>Város</th>
            <th>Születés</th>
            <th>Fizetés</th>
        </tr>
        @foreach($workers as $worker)
        <tr>
                <form action="" method="put">
                @csrf
                    <td><input type="text" value="{{$worker->name}}"/></td>
                    <td><input type="text" value="{{$worker->city}}"/></td>
                    <td><input type="text" value="{{$worker->birthdate}}"/></td>
                    <td><input type="text" value="{{$worker->salary}}"/></td>
                    <td><input type="submit" value="mentés"/></td>
                </form>
                <form>
                    <td><input type="submit" value="törlés"/></td>
                </form>
        </tr>
        @endforeach
    </table>
    
</div>