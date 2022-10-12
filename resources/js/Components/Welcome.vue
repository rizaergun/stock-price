<script setup>
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";

let form = reactive({
    symbol: ""
})

let submit = () => {
    Inertia.post('stock-price', form)
}
</script>

<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

            <div class="mt-8 text-2xl">
                Welcome to your stock price application!
            </div>

            <div class="mt-6 text-gray-500">
                <form @submit.prevent="submit">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="stock-symbol" class="block text-sm font-medium text-gray-700">
                            Stock Symbol (i.e. AMZN)</label>
                        <input v-model="form.symbol" type="text" name="stock-symbol" id="stock-symbol"
                               autocomplete="given-name"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               required/>
                    </div>

                    <div v-if="$page.props.flash.error" class="rounded-md bg-red-50 p-4 mt-4">
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">{{ $page.props.flash.error }}</h3>
                        </div>
                    </div>

                    <div class="py-3">
                        <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Show Prices
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
