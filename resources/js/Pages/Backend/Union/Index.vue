<script setup>
import { ref } from "vue";
import BackendLayout from '@/Layouts/BackendLayout.vue';
import BaseTable from '@/Components/BaseTable.vue';
import Pagination from '@/Components/Pagination.vue';
import { router } from '@inertiajs/vue3';
let props = defineProps({
    filters: Object,
    divisions: Array,
    districts: Array,
    upazilas: Array,
});
const filters = ref({
    name: props.filters.name ?? '',
    division: props.filters.division ?? '',
    district: props.filters.district ?? '',
    upazila: props.filters.upazila ?? '',
    numOfData: props.filters.numOfData ?? 10,
});

const applyFilter = () => {
    router.get(route('backend.union.index'), filters.value, { preserveState: true, only: ['datas'], });
};
const divisionFilters = () => {
    filters.value.district='';
    router.visit(
        route('backend.union.index', filters.value),
        {
            only: ['datas','districts'],
            preserveState: true,
        }
    );
};
const districtFilters = () => {
    filters.value.upazila='';
    router.visit(
        route('backend.union.index', filters.value),
        {
            only: ['datas','upazilas'],
            preserveState: true,
        }
    );
};
</script>

<template>
    <BackendLayout>

        <div
            class="w-full p-4 mt-3 duration-1000 ease-in-out bg-white rounded-md shadow-md shadow-gray-800/50 dark:bg-slate-900">

            <h1 class="py-2 text-xl font-bold dark:text-white">{{ $page.props.pageTitle }}</h1>

            <div
                class="flex justify-between w-full p-2 py-3 space-x-2 text-gray-700 rounded-md shadow-md bg-slate-300 shadow-gray-800/50 dark:bg-gray-700 dark:text-gray-200">

                <div class="grid w-full grid-cols-1 gap-2 md:grid-cols-5">
                    <link
                        rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
                    />
                    <!-- <pre>{{ divisions }}</pre> -->
                    <div class="flex space-x-2">
                        <div class="relative w-full">
                            <input id="name" v-model="filters.name"
                                class="block w-full p-2 pl-10 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                                type="text" placeholder="Upazila Name" @input="applyFilter" />

                                <span
                                class="absolute inset-y-0 left-0 flex items-center pl-3"
                            >
                                <i
                                    class="fas fa-search text-slate-400 dark:text-slate-300"
                                ></i>
                            </span>
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

                    <div class="">
                        <select id="division" v-model="filters.division"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            @change="divisionFilters" v-if="divisions?.length">
                            <option value="">-- Select A Division --</option>
                            <template v-for="divisionInfo, key in divisions" :key="key">
                                <option :value="divisionInfo.division_id">{{ divisionInfo.division_name }}</option>
                            </template>
                        </select>
                    </div>
                    <div class="">
                        <select id="division" v-model="filters.district"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            @change="districtFilters" v-if="districts?.length">
                            <option value="">-- Select A Disitrict --</option>
                            <template v-for="districtInfo, key in districts" :key="key">
                                <option :value="districtInfo.district_id">{{ districtInfo.district_name }}</option>
                            </template>
                        </select>
                    </div>
                    <div class="">
                        <select id="division" v-model="filters.upazila"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            @change="applyFilter" v-if="upazilas?.length">
                            <option value="">-- Select A Upazila --</option>
                            <template v-for="upazilaInfo, key in upazilas" :key="key">
                                <option :value="upazilaInfo.upazila_id">{{ upazilaInfo.upazila_name }}</option>
                            </template>
                        </select>
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
