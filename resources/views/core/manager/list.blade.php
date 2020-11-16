@foreach($items as $item)
    <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->subject }}</td>
        <td>{{ $item->message }}</td>
        <td>{{ $item->user_name }}</td>
        <td>{{ $item->user_email }}</td>
        <td><a href="{{ $item->link }}" target="_blank">просмотр</a></td>
        <td>{{ $item->created_at }}</td>
        <td>
            @if($item->status == 'new')
                <button type="button" class="btn btn-success btn-item-{{ $item->id }}" onclick="setStatus({{ $item->id }})">Ответил</button>
            @else
                <button type="button" class="btn btn-success" disabled>Отвечено</button>
            @endif
        </td>
    </tr>
@endforeach
