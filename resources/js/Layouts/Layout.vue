<template>
    <div class="sb-nav-fixed">
        <Navbar />

        <div id="layoutSidenav">
            <Sidebar />
            <slot />
        </div>
    </div>
</template>

<script>
import Navbar from "../Components/Navbar.vue";
import Sidebar from "../Components/Sidebar.vue";

export default {
    components: {
        Navbar,
        Sidebar,
    },
};
</script>
