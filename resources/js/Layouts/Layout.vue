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
import Navbar from "../Components/Navbar1.vue";
import Sidebar from "../Components/Sidebar1.vue";
import Footer from "../Components/Sidebar1.vue";

export default {
    components: {
        Navbar,
        Sidebar,
        Footer,
    },
};
</script>
