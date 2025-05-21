<div>
    <label for="{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value="" id="" @checked(!request($name)) />
        <span class="ml-2">All</span>
    </label>

    @foreach ($optionsWithLabels as $label => $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" id="" @checked($option === request($name)) />
            <span class="ml-2">{{ $option }}</span>
        </label>

    @endforeach


    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>