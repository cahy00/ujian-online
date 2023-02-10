<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Kelas</h1>
                <br />
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <Link
                                    href="/admin/classroom"
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
                        <h5><i class="fa fa-bookmark"></i> Tambah Kelas</h5>
                        <hr />
                        <form @submit.prevent="update">
                            <div class="mb-4">
                                <label for="mata-pelajaran">Kelas</label>
                                <input
                                    type="text"
                                    class="form-control errors"
                                    placeholder="Masukkan Kelas"
                                    v-model="form.title"
                                />
                                <div
                                    v-if="errors.title"
                                    class="alert alert-danger"
                                >
                                    {{ errors.title }}
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
    </div>
</template>
<script>
import Layout from "../../../Layouts/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import Swal from "sweetalert2";
export default {
    components: {
        Link,
    },
    layout: Layout,
    data() {
        return {
            form: {
                title: this.classroom.title,
            },
        };
    },
    props: {
        errors: Object,
        classroom: Object,
    },
    methods: {
        update() {
            Inertia.put(
                `/admin/classroom/update/${this.classroom.id}`,
                {
                    title: this.form.title,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Pelajaran Berhasil Diubah!.",
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
