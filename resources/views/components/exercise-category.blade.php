@props(['value'])

<div class="exercise-category">
    <h2 class="category-header dark:text-gray-200 text-xl font-semibold mx-12 my-3 p-2 text-center cursor-pointer border rounded-md"  >
        {{ $value }}
    </h2>
    <div class="category-content mx-12 my-3 p-2 dark:bg-gray-900 border rounded-md hidden">
        {{ $slot }}
    </div>
</div>



{{-- style="display: none;" --}}


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryHeaders = document.querySelectorAll('.category-header');
        const categoryContents = document.querySelectorAll('.category-content');

        categoryHeaders.forEach((header, index) => {
            let isHidden = true;

            header.addEventListener('click', () => {
                if (isHidden) {
                    categoryContents[index].classList.remove('hidden');
                } else {
                    categoryContents[index].classList.add('hidden');
                }
                isHidden = !isHidden;
            });
        });
    });
</script>