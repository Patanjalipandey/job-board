<div class="relative">
    @if ($formId)
        <button class="absolute top-0 right-0 flex h-full items-center pr-2" type="button"
            onclick="document.getElementById('{{ $name }}').value = ''; document.getElementById('{{ $formId }}').submit()"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-slate-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" id="{{ $name }}"
        class="w-full rounded-md border-0 py-1.5 px-2.5 texxt-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2 pr-8" />
</div>