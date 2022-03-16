<div>
    <ul>
    @foreach($workers as $worker)
    <li>
        {{$worker->name}}
    </li>
    @endforeach
    </ul>
</div>