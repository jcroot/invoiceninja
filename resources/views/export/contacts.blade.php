<tr>
    <td>{{ trans('texts.client') }}</td>
    @if ($multiUser)
        <td>{{ trans('texts.user') }}</td>
    @endif
    <td>{{ trans('texts.first_name') }}</td>
    <td>{{ trans('texts.last_name') }}</td>
    <td>{{ trans('texts.email') }}</td>
    <td>{{ trans('texts.phone') }}</td>
</tr>

@foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->client->getDisplayName() }}</td>
        @if ($multiUser)
            <td>{{ $contact->user->getDisplayName() }}</td>
        @endif
        <td>{{ $contact->first_name }}</td>
        <td>{{ $contact->last_name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->phone }}</td>
    </tr>
@endforeach

<tr><td></td></tr>