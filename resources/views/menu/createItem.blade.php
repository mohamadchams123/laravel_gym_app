<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Add New Items To The Shop') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('item.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-center">
                        <table class="text-right mt-6">
                           <tr>
                                <td><x-input-label for="name" :value="__('Item Name')" /></td>
                                <td>
                                    <x-text-input type="text" id="name" name="name" class="m-1 block w-full" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </td>
                            </tr>
                            <tr>
                                <td><x-input-label for="description" :value="__('Item Description')" /></td>
                                <td>
                                    <x-text-area-input id="description" name="description" class="m-1 block w-full" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('description')" />
                                </td>
                            </tr>
                            <tr>
                                <td><x-input-label for="price" :value="__('Item Price (in USD)')" /></td>
                                <td>
                                    <x-text-input type="number" id="price" name="price" class="m-1 block w-full" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('price')" />
                                </td>
                            </tr>
                            <tr>
                                <td><x-input-label for="quantity" :value="__('Item Quantity')" /></td>
                                <td>
                                    <x-text-input type="number" id="quantity" name="quantity" class="m-1 block w-full" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                                </td>
                            </tr>
                            <tr>
                                <td><x-input-label for="image_path" :value="__('Item Image')" /></td>
                                <td>
                                    <x-text-input type="file" id="image_path" name="image_path" class="pl-1 m-1 block w-full" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('image_path')" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><x-primary-button class="m-1">Add</x-primary-button></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>