<script setup>

</script>

<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

            <div class="mt-8 text-2xl">
                Stock Quote: {{ $page.props.stock_quote.symbol }}
            </div>

            <div class="mt-6 text-gray-500">
                stock quote information will be here..

                <div class="py-3">
                    <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Back
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
