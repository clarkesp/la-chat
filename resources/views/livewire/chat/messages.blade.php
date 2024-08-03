<div class="h-64 overflow-y-scroll border-grey-200 rounded-r-lg px-4 py-3">
    <div class="space-y-4 pb-4">
        @foreach($messages as $message)
            {{ $message->body }}
        @endforeach

    </div>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
