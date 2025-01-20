<script setup>
import { ref, onMounted } from "vue";
import BackendLayout from "@/Layouts/BackendLayout.vue";
import { router, useForm, usePage } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import AlertMessage from "@/Components/AlertMessage.vue";
import { displayResponse, displayWarning } from "@/responseMessage.js";

const props = defineProps(["division", "id"]);

const form = useForm({
    name: props.division?.name ?? "",
    bn_name: props.division?.bn_name ?? "",
    url: props.division?.url ?? "",
    sorting: props.division?.sorting ?? 1,
    _method: props.division?.id ? "put" : "post",
});

const submit = () => {
    const routeName = props.id
        ? route("backend.division.update", props.id)
        : route("backend.division.store");
    form.transform((data) => ({
        ...data,
        remember: "",
        isDirty: false,
    })).post(routeName, {
        onSuccess: (response) => {
            if (!props.id) form.reset();
            displayResponse(response);
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
            class="w-full mt-3 transition duration-1000 ease-in-out transform bg-white border border-gray-700 rounded-md shadow-lg shadow-gray-800/50 dark:bg-slate-900"
        >
            <div
                class="flex items-center justify-between w-full text-gray-700 bg-gray-100 rounded-md shadow-md dark:bg-gray-800 dark:text-gray-200 shadow-gray-800/50"
            >
                <div>
                    <h1 class="p-4 text-xl font-bold dark:text-white">
                        {{ $page.props.pageTitle }}
                    </h1>
                </div>
                <div class="p-4 py-2">
                    <!-- <button
                        class="px-4 py-1 font-bold duration-700 border border-gray-700 rounded-md hover:bg-slate-400 text-md dark:text-gray-300 hover:text-gray-50">Area
                        List</button> -->
                </div>
            </div>

            <form @submit.prevent="submit" class="p-4">
                <AlertMessage />
                <div
                    class="grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4"
                >
                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="name" value="Division Name" />
                        <input
                            id="name"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.name"
                            type="text"
                            placeholder="Division Name"
                        />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <InputLabel
                            for="bn_name"
                            value="Division Name Bangla"
                        />
                        <input
                            id="bn_name"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.bn_name"
                            type="text"
                            placeholder="Division Name Bangla"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.bn_name"
                        />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="url" value="Division Url" />
                        <input
                            id="url"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.url"
                            type="text"
                            placeholder="Division Url"
                        />
                        <InputError class="mt-2" :message="form.errors.url" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <InputLabel for="sorting" value="Division Sorting" />
                        <input
                            id="sorting"
                            class="block w-full p-2 text-sm rounded-md shadow-sm border-slate-300 dark:border-slate-500 dark:bg-slate-700 dark:text-slate-200 focus:border-indigo-300 dark:focus:border-slate-600"
                            v-model="form.sorting"
                            type="number"
                            placeholder="Division Sorting"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.sorting"
                        />
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton
                        type="submit"
                        class="ms-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        {{ props.id ?? false ? "Update" : "Create" }}
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </BackendLayout>
</template>
