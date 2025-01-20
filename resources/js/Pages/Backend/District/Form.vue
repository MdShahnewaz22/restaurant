<script setup>
import { ref, onMounted } from 'vue';
import BackendLayout from '@/Layouts/BackendLayout.vue';
import { router, useForm, usePage } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AlertMessage from '@/Components/AlertMessage.vue';
import { displayResponse, displayWarning } from '@/responseMessage.js';

const props = defineProps(['divisions', 'district', 'id']);

const form = useForm({
    division_id: props.district?.division_id ?? '',
    name: props.district?.name ?? '',
    bn_name: props.district?.bn_name ?? '',
    url: props.district?.url ?? '',
    sorting: props.district?.sorting ?? 1,
    lon: props.district?.lon ?? '',
    lat: props.district?.lat ?? '',
    _method: props.district?.id ? 'put' : 'post',
});


const submit = () => {
    const routeName = props.id ? route('backend.district.update', props.id) : route('backend.district.store');
    form.transform(data => ({
        ...data,
        remember: '',
        isDirty: false,
    })).post(routeName, {

        onSuccess: (response) => {
            if (!props.id)
                form.reset();
            displayResponse(response)
        },
        onError: (errorObject) => {

            displayWarning(errorObject);
        },
    });
};



</script>

<template>
    <BackendLayout>
        <div
            class="w-full mt-3 transition duration-1000 ease-in-out transform bg-white border border-gray-700 rounded-md shadow-lg shadow-gray-800/50 dark:bg-slate-900">

            <div
                class="flex items-center justify-between w-full text-gray-700 bg-gray-100 rounded-md shadow-md dark:bg-gray-800 dark:text-gray-200 shadow-gray-800/50">
                <div>
                    <h1 class="p-4 text-xl font-bold dark:text-white">{{ $page.props.pageTitle }}</h1>
                </div>
                <div class="p-4 py-2">
                    <!-- <button
                        class="px-4 py-1 font-bold duration-700 border border-gray-700 rounded-md hover:bg-slate-400 text-md dark:text-gray-300 hover:text-gray-50">Area
                        List</button> -->
                </div>
            </div>

            <form @submit.prevent="submit" class="p-4">
                <AlertMessage />
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">

                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="division" value="Division " />
                        <select id="division"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.division_id" placeholder="Select Division">
                            <option value="">--Select A Division--</option>
                            <template v-for="divisionInfo, Index in divisions" :key="Index">
                                <option :value="divisionInfo.division_id">{{ divisionInfo.division_name }}</option>
                            </template>
                        </select>
                        <InputError class="mt-2" :message="form.errors.division_id" />
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="name" value="District Name" />
                        <input id="name"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.name" type="text" placeholder="District Name" />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="bn_name" value="District Name Bangla" />
                        <input id="bn_name"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.bn_name" type="text" placeholder="District Name Bangla" />
                        <InputError class="mt-2" :message="form.errors.bn_name" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="url" value="District Url" />
                        <input id="url"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.url" type="text" placeholder="District Url" />
                        <InputError class="mt-2" :message="form.errors.url" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="url" value="District lat" />
                        <input id="url"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.lat" type="text" placeholder="District lat" />
                        <InputError class="mt-2" :message="form.errors.lat" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="lon" value="District lon" />
                        <input id="lon"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.lon" type="text" placeholder="District lon" />
                        <InputError class="mt-2" :message="form.errors.lon" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="sorting" value="District Sorting" />
                        <input id="sorting"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.sorting" type="number" placeholder="Division Sorting" />
                        <InputError class="mt-2" :message="form.errors.sorting" />
                    </div>

                </div>
                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton type="submit" class="ms-4" :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing">
                        {{ ((props.id ?? false) ? 'Update' : 'Create') }}
                    </PrimaryButton>
                </div>
            </form>

        </div>
    </BackendLayout>
</template>
