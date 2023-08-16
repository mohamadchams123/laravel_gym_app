@props(['value','image'])

<div>
    <h2 class="category-header dark:text-gray-100 text-2xl font-semibold mx-12 my-3 py-16 text-center cursor-pointer border border-indigo-500 rounded-md" id="{{$image}}">
        {{ $value }}
    </h2>
    <div class="category-content mx-12 my-3 p-2 dark:bg-gray-900 border border-gray-400 rounded-md hidden">
        {{ $slot }}
    </div>
</div>

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

<style>
    #{{$image}} {
        /* position: fixed; */
        top: 0;
        left: 0;
        z-index: -1; /* Place behind other content */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/{{$image}}.jpeg');
        background-repeat: no-repeat;
        /* background-attachment: fixed; Stay fixed while scrolling */
        background-position: center;
        background-size: 100%;
    }
</style>