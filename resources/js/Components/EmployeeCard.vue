<script setup>
const props = defineProps({
    name: {
        type: String,
        required: true,
    },
    department: { type: String },
    designation: { type: String },
});
</script>

<template>
    <a
        class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100"
    >
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            {{ name }}
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">
            {{ designation }}<br />
        </p>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            {{ department }}
        </p>
    </a>
</template>
