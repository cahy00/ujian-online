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
                                    href="/admin/lesson/create"
                                    class="btn btn-md btn-primary"
                                    ><i class="fas fa-plus"></i>
                                    Tambah
                                </Link>
                            </div>
                            <div class="col-4">
                                <!-- <form>
                                    <div class="input-group">
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="Search for..."
                                            aria-label="Search for..."
                                            aria-describedby="btnNavbarSearch"
                                        />
                                        <button
                                            class="btn btn-primary"
                                            id="btnNavbarSearch"
                                            type="button"
                                        >
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form> -->
                            </div>
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
                    <Pagination :links="lessons.links" align="end" />
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
import { Link } from "@inertiajs/inertia-vue3";
import Pagination from "../../../Components/Pagination.vue";

export default {
    components: {
        Head,
        Footer,
        Link,
        Pagination,
    },
    layout: Layout,
    props: {
        lessons: Object,
    },
};
</script>
