<template>
    <Head>
        <title>Exam</title>
    </Head>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Ujian</h1>
                <ol class="breadcrumb mb-4"></ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <Link
                                    href="/admin/exam/create"
                                    class="btn btn-md btn-primary"
                                    ><i class="fas fa-plus"></i>
                                    Tambah
                                </Link>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ujian</th>
                                    <th>Pelajaran</th>
                                    <th>Kelas</th>
                                    <th>Jumlah Soal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="exams in exam" :key="exams.id">
                                    <td>1</td>
                                    <td>{{ exams.title }}</td>
                                    <td>{{ exams.lesson.title }}</td>
                                    <td>{{ exams.classroom.title }}</td>
                                    <td>{{ exams.question.length }}</td>
                                    <td>
                                        <Link
                                            :href="`/admin/exam/show/${exams.id}`"
                                            class="btn btn-default"
                                            ><i class="fa fa-plus-circle"></i
                                            >Show</Link
                                        >
                                    </td>
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
import { Head } from "@inertiajs/inertia-vue3";
import Layout from "../../../Layouts/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Head,
        Link,
    },
    layout: Layout,
    props: {
        exam: Object,
    },
};
</script>
