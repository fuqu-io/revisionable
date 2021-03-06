@foreach($model->revisionHistory as $history)
    @if($history->key == 'created_at' and !$history->old_value)
        <div>{{ (!empty($history->userResponsible()))? $history->userResponsible()->first_name : 'system' }} created this resource at {{ $history->newValue() }}</div>
    @else
        <div>{{ $history->userResponsible()->first_name }} changed {{ $history->fieldName() }} from
            {{ $history->oldValue() }}
            @if(is_null($history->oldValue()))
                null
            @endif

            to {{ $history->newValue() }}
        </div>
    @endif
@endforeach
