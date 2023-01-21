@props(['listing'])

    <form method="POST" action="/public/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')

        <button class="text-red-500">
            <i class="fa-solid fa-trash"></i> Delete 
        </button>
    </form>
