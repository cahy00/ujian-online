<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Kelas</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="medium text-white stretched-link"
                                    href="#"
                                    >{{ classrooms }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Siswa</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="medium text-white stretched-link"
                                    href="#"
                                    >{{ students }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Ujian</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="small text-white stretched-link"
                                    href="#"
                                    >{{ exams }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Sesi Ujian</div>
                            <div
                                class="card-footer d-flex align-items-center justify-content-between"
                            >
                                <a
                                    class="small text-white stretched-link"
                                    href="#"
                                    >{{ exam_sessions }}</a
                                >
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <Footer />
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
import Footer from "../../../Components/Footer.vue";
import { Head } from "@inertiajs/vue3";

export default {
    layout: Layout,
    components: {
        Head,
        Footer,
    },
    props: {
        classrooms: Number,
        students: Number,
        exams: Number,
        exam_sessions: Number,
    },
};
</script>
