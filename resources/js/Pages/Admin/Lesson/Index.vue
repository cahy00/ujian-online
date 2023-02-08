<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Mata Pelajaran</h1>
                <ol class="breadcrumb mb-4"></ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Mata Pelajaran
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="lesson in lessons" :key="lesson.id">
                                    <td>
                                        {{
                                            ++id +
                                            (lesson.current_page - 1) *
                                                lesson.per_page
                                        }}
                                    </td>
                                    <td>
                                        {{ lesson.title }}
                                    </td>
                                    <td>Edit</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <Footer />
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
import { Head } from "@inertiajs/vue3";
import Footer from "../../../Components/Footer.vue";

export default {
    components: {
        Head,
        Footer,
    },
    layout: Layout,
    props: {
        lessons: Object,
    },
};
</script>
