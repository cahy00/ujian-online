<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Mata Pelajaran</h1>
                <ol class="breadcrumb mb-4"></ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <Link
                                    href="/admin/classroom/create"
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
                                    <th>Mata Pelajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="classrooms in classroom"
                                    :key="classrooms.id"
                                >
                                    <td>1</td>
                                    <td>{{ classrooms.title }}</td>
                                    <td>
                                        <Link
                                            :href="`/admin/classroom/edit/${classrooms.id}`"
                                            class="btn btn-success"
                                            >Edit</Link
                                        >
                                        |
                                        <Link
                                            @click.prevent="destroy"
                                            :href="`/admin/classroom/delete/${classrooms.id}`"
                                            class="btn btn-danger"
                                            >Hapus</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <Footer />
            </div>
        </main>
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
import Footer from "../../../Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Swal from "sweetalert2";

export default {
    components: {
        Footer,
        Link,
    },
    layout: Layout,
    props: {
        classroom: Object,
    },
    methods: {
        destroy() {
            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    Inertia.delete(`/admin/classroom/delete/${classroom.id}`);
                    Swal.fire({
                        title: "Deleted!",
                        text: "Pelajaran Berhasil Dihapus!.",
                        icon: "success",
                        timer: 2000,
                        showConfirmButton: false,
                    });
                }
            });
        },
    },
};
</script>
