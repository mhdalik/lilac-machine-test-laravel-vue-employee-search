<script setup>
import { computed, ref } from "vue";
import EmployeeCard from "@/Components/EmployeeCard.vue";

const props = defineProps({
    users: {},
});

const search = ref("");

const filteredUsers = computed(() => {
    return props.users.filter((user) => {
        let name = user.name.toLowerCase();
        let designation = user.designation?.name.toLowerCase();
        let department = user.department?.name.toLowerCase();
        let searched = search.value.toLowerCase();

        let nameMatching = name.includes(searched);
        let designationMatching = designation.includes(searched);
        let departmentMatching = department.includes(searched);

        return nameMatching || designationMatching || departmentMatching;
    });
});
</script>

<template>
    <main class="p-40">
        <input
            v-model.trim="search"
            class="rounded-lg w-full my-4"
            label="Search"
            placeholder="Search Name/Designation/Department"
        />

        <div class="grid grid-cols-2 gap-4">
            <EmployeeCard
                v-for="employee in filteredUsers"
                :key="employee.id"
                :name="employee.name"
                :designation="employee.designation.name"
                :department="employee.department.name"
            />
        </div>
    </main>
</template>
