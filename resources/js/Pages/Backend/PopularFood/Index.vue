<script setup>
import { ref } from "vue";
import BackendLayout from '@/Layouts/BackendLayout.vue';
import BaseTable from '@/Components/BaseTable.vue';
import Pagination from '@/Components/Pagination.vue';
import { router } from '@inertiajs/vue3';

let props = defineProps({
    filters: Object,
});

 const filters = ref({

    numOfData: props.filters?.numOfData ?? 10,
});

const applyFilter = () => {
    router.get(route('backend.popularfood.index'), filters.value, { preserveState: true });
};

</script>

<template>
    <BackendLayout>

        <div
            class="w-full p-4 mt-3 duration-1000 ease-in-out bg-white rounded-md shadow-md shadow-gray-800/50 dark:bg-slate-900">

            <!-- <h1 class="py-2 text-xl font-bold dark:text-white">{{ $page.props.pageTitle }}</h1> -->

            <div class="flex justify-between">
        <h1 class="py-2 text-xl font-bold dark:text-white">
          {{ $page.props.pageTitle }}
        </h1>

        <div class="p-4 py-2">
          <h1 class="py-2 text-xl font-bold dark:text-white">
            <a
              href="/backend/popularfood/create"
              class="inline-flex items-center px-4 py-2 bg-[#000] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-4"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="14"
                height="14"
                class="main-grid-item-icon"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
              >
                <line x1="12" x2="12" y1="5" y2="19" />
                <line x1="5" x2="19" y1="12" y2="12" />
              </svg>
              Create
            </a>
          </h1>
        </div>
      </div>





            <div
                class="flex justify-between w-full p-2 py-3 space-x-2 text-gray-700 rounded-md shadow-md bg-slate-300 shadow-gray-800/50 dark:bg-gray-700 dark:text-gray-200">

                <div class="grid w-full grid-cols-1 gap-2 md:grid-cols-5">

                    <div class="flex space-x-2">
                        <div class="w-full">
                            <input id="name" v-model="filters.name"
                                   class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                                   type="text" placeholder="Food Name" @input="applyFilter" />
                        </div>

                        <div class="block min-w-24 md:hidden">
                            <select v-model="filters.numOfData" @change="applyFilter"
                                    class="w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600">
                                <option value="10">Show 10</option>
                                <option value="20">Show 20</option>
                                <option value="30">Show 30</option>
                                <option value="40">Show 40</option>
                                <option value="100">Show 100</option>
                                <option value="150">Show 150</option>
                                <option value="500">Show 500</option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="hidden min-w-24 md:block">
                    <select v-model="filters.numOfData" @change="applyFilter"
                            class="w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600">
                        <option value="10">show 10</option>
                        <option value="20">show 20</option>
                        <option value="30">show 30</option>
                        <option value="40">show 40</option>
                        <option value="100">show 100</option>
                        <option value="150">show 150</option>
                        <option value="500">show 500</option>
                    </select>
                </div>
            </div>

            <div class="w-full my-3 overflow-x-auto">
                <BaseTable />
            </div>
            <Pagination />
        </div>
    </BackendLayout>
</template>
