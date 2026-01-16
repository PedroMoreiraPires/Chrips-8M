
<x-layout>
    <x-slot:title>
        Editar Bulo
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Editar Bulo</h1>
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/bulos/{{ $bulo->id }}">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full">
                        <textarea
                            name="texto"
                            class="textarea textarea-bordered w-full resize-none @error('texto') textarea-error @enderror"
                            rows="4"
                            maxlength="255"
                            required
                        >{{ old('texto', $bulo->texto) }}</textarea>

                        @error('texto')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <textarea
                            name="texto_desmentido"
                            class="textarea textarea-bordered w-full resize-none @error('texto_desmentido') textarea-error @enderror"
                            rows="4"
                            maxlength="255"
                            required
                        >{{ old('texto_desmentido', $bulo->texto_desmentido) }}</textarea>

                        @error('texto_desmentido')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="card-actions justify-between mt-4">
                        <a href="/" class="btn btn-ghost btn-sm">
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                          Actualizar bulo 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>