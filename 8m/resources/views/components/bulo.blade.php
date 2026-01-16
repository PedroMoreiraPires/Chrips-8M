
@props(['bulo'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3">
            @if ($bulo->user)
                <div class="avatar">
                    <div class="size-10 rounded-full">
                        <img src="https://avatars.laravel.cloud/{{ urlencode($bulo->user->email) }}"
                            alt="{{ $bulo->user->name }}'s avatar" class="rounded-full" />
                    </div>
                </div>
            @else
                <div class="avatar placeholder">
                    <div class="size-10 rounded-full">
                        <img src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth"
                            alt="Anonymous User" class="rounded-full" />
                    </div>
                </div>
            @endif

            <div class="min-w-0 flex-1">
                <div class="flex justify-between w-full">
                    <div class="flex items-center gap-1">
                        <span class="text-sm font-semibold">{{ $bulo->user ? $bulo->user->name : 'Anonymous' }}</span>
                        <span class="text-base-content/60">·</span>
                        <span class="text-sm text-base-content/60">{{ $bulo->created_at->diffForHumans() }}</span>
                        @if ($bulo->updated_at->gt($bulo->created_at->addSeconds(5)))
                            <span class="text-base-content/60">·</span>
                            <span class="text-sm text-base-content/60 italic">editado</span>
                        @endif
                    </div>

                    @can('update', $bulo)
                        <div class="flex gap-1">
                            <a href="/bulos/{{ $bulo->id }}/edit" class="btn btn-ghost btn-xs">
                                Editar
                            </a>
                            <form method="POST" action="/bulos/{{ $bulo->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('¿Quieres borrar este bulo?')"
                                    class="btn btn-ghost btn-xs text-error">
                                    Borrar
                                </button>
                            </form>
                        </div>
                    @endcan
                </div>
                <p class="mt-1">{{ $bulo->texto }}</p>
                <p class="mt-1">{{ $bulo->texto_desmentido }}</p>
            </div>
        </div>
    </div>
</div>