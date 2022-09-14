@php
$categories = ['Beach', 'Restaurant', 'Cafe', 'Coffee Shop', 'Bar', 'Hotel', 'Park', 'Flower Shop'];
@endphp

<div id="categories"
    x-data="{
        categories: @js($categories),
        currentCategory: 0,
    }"
    x-init="setInterval(() => {
        currentCategory = currentCategory === categories.length - 1 ? 0 : currentCategory + 1
    }, 3000)">
    <h1 class="text-3xl text-indigo-600 font-semibold"
        x-text="categories[currentCategory]">
        Beach
    </h1>
</div>
