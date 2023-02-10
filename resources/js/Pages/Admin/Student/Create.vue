<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tambah Siswa</h1>
                <br />
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <Link
                                    href="/admin/student"
                                    class="btn btn-primary"
                                    ><i
                                        class="fa fa-angle-left"
                                        aria-hidden="true"
                                    ></i>
                                    Kembali</Link
                                >
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5><i class="fa fa-bookmark"></i> Tambah Siswa</h5>
                        <hr />
                        <form @submit.prevent="submit">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nisn">NISN</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': errors.nisn,
                                            }"
                                            placeholder="Masukkan NISN"
                                            v-model="form.nisn"
                                        />
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.nisn"
                                        >
                                            {{ errors.nisn }}
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="classroom">Kelas</label>
                                        <select
                                            class="form-select"
                                            :class="{
                                                'is-invalid':
                                                    errors.classroom_id,
                                            }"
                                            v-model="form.classroom_id"
                                        >
                                            <option
                                                v-for="classrooms in classroom"
                                                :key="classrooms.id"
                                                :value="classrooms.id"
                                            >
                                                {{ classrooms.title }}
                                            </option>
                                        </select>
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.classroom_id"
                                        >
                                            {{ errors.classroom_id }}
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': errors.password,
                                            }"
                                            placeholder="Password"
                                            v-model="form.password"
                                        />
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.password"
                                        >
                                            {{ errors.password }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name">Nama Lengkap</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Masukkan Nama Lengkap"
                                            :class="{
                                                'is-invalid': errors.name,
                                            }"
                                            v-model="form.name"
                                        />
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.name"
                                        >
                                            {{ errors.name }}
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender"
                                            >Jenis Kelamin</label
                                        >
                                        <select
                                            class="form-select"
                                            v-model="form.gender"
                                            :class="{
                                                'is-invalid': errors.gender,
                                            }"
                                        >
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                        <div
                                            class="invalid-feedback"
                                            v-if="errors.gender"
                                        >
                                            {{ errors.gender }}
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirm_password"
                                            >Konfirmasi Password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            placeholder="Konfirmasi Password"
                                            v-model="form.password_confirmation"
                                        />
                                    </div>
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-md btn-primary border-0 shadow me-2"
                            >
                                Simpan
                            </button>
                            <button
                                type="reset"
                                class="btn btn-md btn-warning border-0 shadow"
                            >
                                Reset
                            </button>
                        </form>
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
    components: {
        Footer,
        Link,
    },
    layout: Layout,
    props: {
        classroom: Object,
        errors: Object,
    },
    data() {
        return {
            form: {
                nisn: "",
                name: "",
                gender: "",
                password: "",
                password_confirmation: "",
                classroom_id: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post(
                "/admin/student/create/",
                {
                    nisn: this.form.nisn,
                    name: this.form.name,
                    gender: this.form.gender,
                    password: this.form.password,
                    password_confirmation: this.form.password_confirmation,
                    classroom_id: this.form.classroom_id,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Siswa Berhasil Disimpan.",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    },
                }
            );
        },
    },
};
</script>
