<template>
    <div id="layoutAuthentication" class="bg">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div
                                class="card shadow-lg border-0 rounded-lg mt-5"
                            >
                                <slot />
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<style>
.bg {
    background-image: url("https://source.unsplash.com/random/1920x1080/?city,night");
}
</style>

<script>
import Footer from "../Components/Footer.vue";

export default {
    components: {
        Footer,
    },
};
</script>
