<x-layout>
  <x-slot:title>
    Home Feed
  </x-slot:title>

  <div class="max-w-2xl mx-auto">
    <div class="card bg-base-100 shadow mt-8">
      <div class="card-body">
        <form method="POST" action="/bulos">
          @csrf
          <div class="form-control w-full">
            <textarea name="texto" placeholder="Bulo" class="textarea textarea-bordered @error('texto') textarea-error @enderror w-full resize-none" rows="4"
              maxlength="255" required>{{ old('texto') }}</textarea>
            @error('texto')
              <div class="label">
                <span class="label-text-alt text-error">{{ $message }}</span>
              </div>

            @enderror
            <textarea name="texto_desmentido" placeholder="Bulo desmentido"
              class="textarea textarea-bordered @error('texto_desmentido') textarea-error @enderror w-full resize-none" rows="4" maxlength="255"
              required>{{ old('texto_desmentido') }}</textarea>
            @error('texto_desmentido')
              <div class="label">
                <span class="label-text-alt text-error">{{ $message }}</span>
              </div>

            @enderror
          </div>
          <div class="mt-4 flex items-center justify-end">
            <button type="submit" class="btn btn-primary btn-sm">
              Bulo
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class="space-y-4 mt-8">
      @forelse ($bulos as $bulo)
        <x-bulo :bulo="$bulo" />
      @empty
        <div class="hero py-12">
          <div class="hero-content text-center">
            <div>
              <svg class="mx-auto h-12 w-12 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                </path>
              </svg>
              <p class="mt-4 text-base-content/60">No bulos yet. Be the first to bulo!</p>
            </div>
          </div>
        </div>
      @endforelse
    </div>
  </div>
</x-layout>