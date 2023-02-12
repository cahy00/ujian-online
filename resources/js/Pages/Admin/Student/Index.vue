<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Siswa</h1>
                <ol class="breadcrumb mb-4"></ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <Link
                                    href="/admin/student/create"
                                    class="btn btn-md btn-primary"
                                    ><i class="fas fa-plus"></i>
                                    Tambah
                                </Link>
                                <Link
                                    href="/admin/student/import"
                                    class="btn btn-md btn-warning ml-4"
                                    ><i class="fas fa-file-excel"></i>
                                    Export
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
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Password</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="students in student"
                                    :key="students.id"
                                >
                                    <td>1</td>
                                    <td>{{ students.name }}</td>
                                    <td>{{ students.nisn }}</td>
                                    <td>{{ students.password }}</td>
                                    <td v-if="students.gender == 'L'">
                                        Laki-laki
                                    </td>
                                    <td v-else>Perempuan</td>
                                    <td>{{ students.classroom.title }}</td>
                                    <td>
                                        <Link
                                            :href="`/admin/student/edit/${students.id}`"
                                            class="btn btn-success btn-sm"
                                            ><i class="fa fa-pencil-alt"></i
                                            >Edit</Link
                                        >
                                        |
                                        <button
                                            @click.prevent="
                                                destroy(students.id)
                                            "
                                            :href="`/admin/student/delete/${students.id}`"
                                            class="btn btn-danger btn-sm"
                                        >
                                            <i class="fa fa-trash"></i>Hapus
                                        </button>
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
import Layout from "../../../Layouts/Layout.vue";
import Footer from "../../../Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import Swal from "sweetalert2";

export default {
    layout: Layout,
    props: {
        student: Object,
    },
    components: {
        Footer,
        Link,
    },
    methods: {
        destroy(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    Inertia.delete(`/admin/student/delete/${id}`);
                    Swal.fire({
                        title: "Deleted!",
                        text: "Siswa Berhasil Dihapus!.",
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
